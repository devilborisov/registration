<?
//вывод ошибок
if(!isset($_SESSION)){
        session_start();
        echo $_SESSION['error'];
        $_SESSION['error']='';
    }