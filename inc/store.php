<?php
class Store{
    public $base;
     public function __construct(){
         $db=new Data_Base();
         $this->base=$db->dbconnect;
    }

    public function checkPas($login)
    {
        $sql="SELECT pass FROM users WHERE login='$login'";
        $res=mysqli_query($this->base,$sql);
        $res=mysqli_fetch_array($res);
        return $res['pass'];
    }
    public function checkLogin($login)
    {
        $sql = "SELECT login FROM users WHERE login='$login'";
        $res =mysqli_query($this->base,$sql);
        if (mysqli_num_rows($res) == 1) {
            return false;
        }else{
            return true;
        }
    }
    public function getData($login)
    {
        $sql="SELECT * FROM users WHERE login='$login'";
        $res=mysqli_query($this->base,$sql);
        $res=mysqli_fetch_assoc($res);
        $row=array('data'=>$res);
        $_SESSION['data']=$row;
    }
        public function postData($data)
    {
        //экранируем данные
        $first = mysqli_real_escape_string($this->base, $data['first_name']);
        $last = mysqli_real_escape_string($this->base, $data['last_name']);
        $login = mysqli_real_escape_string($this->base, $data['login']);
        $email = mysqli_real_escape_string($this->base, $data['email']);
        $pass = mysqli_real_escape_string($this->base, $data['password']);
        //готовим данные для записи в базу
        $sql = "INSERT INTO users (first_name,last_name,login,email,pass)
                        VALUES ('$first','$last','$login','$email','$pass')";
        //проверяем логин на существование
        if($this->checkLogin($login)==true){
            //если нету ошибок и логина не существует,то пишем в базу
            if (!mysqli_query($this->base, $sql)) {
                echo("ERROR " . mysqli_error($this->base));
            } else {
                //ерем id
                $last_id=mysqli_insert_id($this->base);
                //проверяем папку на существование
                if (!is_dir("avatar/$last_id")) {
                    //проверяем файл на правильность расширения,через регулярные выражения
                    if (preg_match('/[.](JPG)|(jpg)|(jpeg)|(JPEG)|(gif)|(GIF)|(png)|(PNG)$/',$_FILES['file_load']['name'])) {
                        //создаем папку с названием id пользователя
                        mkdir("avatar/$last_id", 0777, true);
                        $filename = $_FILES['file_load']['name'];
                        //загружаем в папку фото пользовантеля
                        move_uploaded_file($_FILES['file_load']['tmp_name'], "avatar/$last_id/$filename");
                        //добавляем в базу ссылку на фото пользователя
                        $links = "/avatar/$last_id/$filename";
                        $sql = "UPDATE users SET link='$links' WHERE id='$last_id'";
                        mysqli_query($this->base, $sql);
                        //получаем по id ссылку на фото
                        $sql = "SELECT link FROM users WHERE id='$last_id'";
                        $result = mysqli_query($this->base, $sql);
                        $row = mysqli_fetch_array($result);
                        //добавляем ссылку в массив с данными
                        $data['link'] = $row['link'];
                        $arr = array('data' => $data);
                        //записываем данные пользователя в Сессию
                        $_SESSION['data'] = $arr;
                        //загружаем профиль
                        header("Location: ../profile.php/$login");
                    }
                }
            }
        } else {
            $_SESSION['error']="<a href='../index.php'>Login has already been taken</a>";
            header("Location: ../error.php");
        }
    }
}