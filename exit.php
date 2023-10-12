<?php

require_once('header.php');


if (isset($_SESSION['client_id'], $_SESSION['client_FIO'], $_SESSION['client_email'], $_SESSION['client_adress'], $_SESSION['client_phone']) && !empty($_SESSION['client_id']) && !empty($_SESSION['client_FIO']) && !empty($_SESSION['client_email']) && !empty($_SESSION['client_adress']) && !empty($_SESSION['client_phone'])){


    if (isset($_COOKIE['client_id'])){
        setcookie('client_id', '', time()-7200);
    }
    if(isset($_COOKIE['client_FIO'])){
        setcookie('client_FIO', '', time()-7200);
    }
    if (isset($_COOKIE['client_email'])){
        setcookie('client_email', '', time()-7200);
    }
    if(isset($_COOKIE['client_adress'])){
        setcookie('client_adress', '', time()-7200);
    }
    if(isset($_COOKIE['client_phone'])){
        setcookie('client_phone', '', time()-7200);
    }
    if (isset($_COOKIE[session_name()])){
        setcookie(session_name(), '', time()-7200);
    }

    $_SESSION = [];

    session_destroy();

    header('location:list.php');


}
else{
    header("location:404/404page.html");
}