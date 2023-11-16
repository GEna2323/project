<?php

    session_start();

    if (isset($_GET['leng']) && !empty($_GET['leng'])){
        $leng = $_GET['leng'];

        setcookie('leng',$leng, time()+60*60*30*24*3);
    }
    elseif(!isset($_GET['leng']) && isset($_COOKIE['leng'])){
        $leng = $_COOKIE['leng'];
    }
    else{
        $leng = 'ua';
    }


    define('SMARTY_LIB', 'libs/');

    require_once(SMARTY_LIB.'Smarty.class.php');

    $smarty_main = new Smarty();

    require_once("admin/param.php");




?>