<?php

require_once('param.php');

if (isset($_SESSION['user_id'], $_SESSION['user_email'], $_SESSION['user_name'], $_SESSION['user_phone'], $_SESSION['user_role'], $_SESSION['user_photo']) && !empty($_SESSION['user_id']) && !empty($_SESSION['user_email']) && !empty($_SESSION['user_name']) && !empty($_SESSION['user_phone']) && !empty($_SESSION['user_role']) && !empty($_SESSION['user_photo'])) {

    if (isset($_COOKIE['user_id'])){
        setcookie('user_id', '', time()-7200);
    }
    if (isset($_COOKIE['user_name'])){
        setcookie('user_name', '', time()-7200);
    }
    if (isset($_COOKIE['user_email'])){
        setcookie('user_email', '', time()-7200);
    }
    if (isset($_COOKIE['user_phone'])){
        setcookie('user_phone', '', time()-7200);
    }
    if (isset($_COOKIE['user_role'])){
        setcookie('user_role', '', time()-7200);
    }
    if (isset($_COOKIE['user_photo'])){
        setcookie('user_photo', '', time()-7200);
    }
    if (isset($_COOKIE[session_name()])){
        setcookie(session_name(), '', time()-7200);
    }

    $_SESSION = [];

    session_destroy();

    header("location:login.php");


}
else{
    header("location:404/404page.html");
}



