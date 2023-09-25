<?php

    require_once("header.php");

if (isset($_SESSION['user_id'], $_SESSION['user_email'], $_SESSION['user_name'], $_SESSION['user_phone'], $_SESSION['user_role'], $_SESSION['user_photo']) && !empty($_SESSION['user_id']) && !empty($_SESSION['user_email']) && !empty($_SESSION['user_name']) && !empty($_SESSION['user_phone']) && !empty($_SESSION['user_role']) && !empty($_SESSION['user_photo'])) {

    require_once('admin_info.php');


    $smarty_main -> assign("title", 'Головна Сторінка Адмін Частини');

    $smarty_main -> assign("content", 'Виберіть пункт меню для управління сайтом');





    $smarty_main -> display("main.tpl");

}
else{
    header("location:login.php");
}





