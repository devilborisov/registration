<?php
session_start();
//передаем из GET язык регистрационной формы
$language=$_GET['lan'];
if ($language=='en') {
    //устанавливаем в КУКИ язык для JavaScript
    setcookie('lan','en',time()+300,"/");
    //записываем в сессию язык для регистрационной формы
    //и всех страниц
    $_SESSION['lan']='en';
    $_SESSION['language']=array(
        "title"=>"Registration",
        "account"=>"Account",
        "first_name"=>"First name",
        "last_name"=>"Last name",
        "login"=>"Login",
        "email"=>"Email",
        "password"=>"Password",
        "confirm"=>"Confirm",
        "image"=>"Foto",
        "reg_btn"=>"registration",
        "first_name_place"=>"Enter first name",
        "last_name_place"=>"Enter last name",
        "login_place"=>"Enter login",
        "email_place"=>"Enter email",
        "password_place"=>"Enter password",
        "repeat_place"=>"Repeat password",
    );
    $_SESSION['language_login']=array(
        "title"=>"Enter",
        "login"=>"Login",
        "password"=>"Password",
        "sub_btn"=>"submit",
        "login_place"=>"Enter your login",
        "password_place"=>"Enter your password"
    );
    $_SESSION['language_profile']=array(
        "profile"=>"Your Profile",
        "first_name"=>"First Name",
        "last_name"=>"Last Name",
        "login"=>"Login",
        "email"=>"Email",
        "main_page"=>"Get out and go to the Main Page"
    );
} else {
    setcookie('lan','ru',time()+300,"/");
    $_SESSION['lan']='ru';
    $_SESSION['language']=array(
        "title"=>"Регистрация",
        "account"=>"Профиль",
        "first_name"=>"Имя",
        "last_name"=>"Фамилия",
        "login"=>"ник",
        "email"=>"почта",
        "password"=>"пароль",
        "confirm"=>"повторить",
        "image"=>"Ваше фото",
        "reg_btn"=>"регистрация",
        "first_name_place"=>"Введите имя",
        "last_name_place"=>"Введите фамилию",
        "login_place"=>"Ваш НИК",
        "email_place"=>"Введите почту",
        "password_place"=>"Введите пароль",
        "repeat_place"=>"Повторите",
    );
    $_SESSION['language_login']=array(
        "title"=>"Вход",
        "login"=>"Ник",
        "password"=>"Пароль",
        "sub_btn"=>"вход",
        "login_place"=>"Введите ваш Ник",
        "password_place"=>"Введите ваш пароль"
    );
    $_SESSION['language_profile']=array(
        "profile"=>"Ваш Профиль",
        "first_name"=>"Имя",
        "last_name"=>"Фамилия",
        "login"=>"Ник",
        "email"=>"Почта",
        "main_page"=>"Выйти из профиля и перейти на Главную страницу"
    );
}
header('Location: ../index.php');