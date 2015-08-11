<?php
session_start();
error_reporting(E_ALL);
include_once('inc/validation.php');
include_once('inc/database.php');
include_once('inc/store.php');
//экземпляры классов
$validation=new Valid();
$post=new Store();
//если логин и пароль записаны в КУКИ,то переходим сразу ф ПРОФИЛЬ пользователя
if(!empty($_COOKIE['login'])&&($_COOKIE['password'])){
    //запрос данных пользователя
    $post->getData($_COOKIE['login']);
    $login=$_COOKIE['login'];
    header("Location: ../profile.php/$login");
}
//если форма входа отправлена то проверяем поля
if (!empty($_POST['submit_log'])) {
    $validation->login_valid();
    //проверка на существование логина
    if ($post->checkLogin($_SESSION['valid']['login_user']) == false) {
        //проверка на существование пароля
        $res = $post->checkPas($_SESSION['valid']['login_user']);
        //проверка на совпадение пароля из базы и в сессии
        if ($res == $_SESSION['valid']['pas_user']) {
            //получаем данные пользователя
            $post->getData($_SESSION['valid']['login_user']);
            //пишем пароль и логин в переменные и записываем в КУКИ
            $login=$_SESSION['valid']['login_user'];
            $password=$_SESSION['valid']['pas_user'];
            $validation->setCookie($login,$password);
            header("Location: ../profile.php/$login");
        } else {
            //если логина или пароля не существует выкидываем Ошибку
            $_SESSION['error']="<a href='index.php'>Check Password</a>";
            header("Location: ../error.php");
        }
    } else {
        $_SESSION['error']="<a href='index.php'>Check Login</a>";
        header("Location: ../error.php");
    }
}
//если форма регистрации отправлена,то проверяем поля и пишем в массив
if(!empty($_POST['submit_reg'])){
    $validation->getFields();
    //проверяем и записываем все в базу данных
    $post->postData($validation->res);
}
//если сессия пуста,то включаем русский язык
if(!isset($_SESSION['language'])||!isset($_SESSION['language_login'])||!isset($_SESSION['language_profile'])){
    $_GET['lan']='ru';
    header('Location: inc/language.php');
}
    include('layout.php');








