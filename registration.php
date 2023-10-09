<?php

    require_once('header.php');
    $setting_page = 'registration';

    $smarty_reg = new Smarty();

    if (isset($_POST['send'], $_POST['FIO'], $_POST['email'], $_POST['password'], $_POST['re_password']) && !empty($_POST['FIO']) && !empty($_POST['email']) && !empty($_POST['password']) && $_POST['password'] == $_POST['re_password'] && $_POST['send'] == 'Sing Up'){

        $query_email = "select id from client where email = '{$_POST['email']}'";
        $result_email = mysqli_query($dbc, $query_email) or die("Query Email Error");

        if (mysqli_num_rows($result_email) > 0){
            $content = 'Нажаль, дана електронна адреса вже використовується, спробуйте іншу.';
            $smarty_reg -> assign('content', $content);
        }
        else{
            $query_reg = "insert into client (FIO, email, password, LastLogin) values('".Protection($dbc, $_POST['FIO'])."', '".Protection($dbc, $_POST['email'])."', sha1('".Protection($dbc, $_POST['password'])."'), now())";
            mysqli_query($dbc, $query_reg) or die("Query Reg Error");
        }


        $fullContent = $smarty_reg -> fetch('registration.tpl');

        header("refresh:3;url=login.php");
    }

    require_once('main.php');
