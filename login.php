<?php
    require_once('header.php');

    $setting_page = 'login';

    $smarty_log = new Smarty();

    if(!isset($_POST['send'])){
        $fullContent = $smarty_log -> fetch('login.tpl');
    }
    elseif(isset($_POST['send'], $_POST['email'], $_POST['password'])){



    }




    require_once('main.php');