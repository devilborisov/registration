<?php
class Valid {
    public  $res=array();
    public  $valid_login=array();
    function __construct(){
    }
    //проверка полей при регистрации
    public function getFields(){
        if(!empty($_POST['submit_reg'])) {
            $data['first_name'] = $_POST['first_name'];
            $data['last_name'] = $_POST['last_name'];
            $data['login'] = $_POST['login'];
            $data['email'] = $_POST['email'];
            $data['password'] = $_POST['password'];
            //чистим от пробелов и лишних символов
                foreach ($data as $item => $key) {
                $this->res[$item]= $this->clean($key);
            }
        }
    }
    //убираем пробелы,слеши
    function clean($value) {
        $value = stripslashes($value);
        $value = strip_tags($value);
        $value = trim($value);
        $value = htmlspecialchars($value,NULL,'');
        $value = str_replace(" ","",$value);
        return $value;
    }
    //записываем проверенные логин и пароль в массив и в сессию
    function login_valid()
    {
        $this->valid_login['login_user']=$this->clean($_POST['login_user']);
        $this->valid_login['pas_user']=$this->clean($_POST['pas_user']);
        $_SESSION['valid']=$this->valid_login;
    }
    //записываем логин и пароль в КУКИ
    function setCookie($login,$password)
    {
        setcookie("login",$login);
        setcookie("password",$password);
    }
}