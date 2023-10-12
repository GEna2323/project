<?php

    require_once('header.php');

    $setting_page = 'profile';
    $smarty_profile = new Smarty();


    if (isset($_COOKIE['client_id'], $_COOKIE['client_FIO'], $_COOKIE['client_email'], $_COOKIE['client_adress'], $_COOKIE['client_phone'])){

        $_SESSION['client_id'] = $_COOKIE['client_id'];
        $_SESSION['client_FIO'] = $_COOKIE['client_FIO'];
        $_SESSION['client_email'] = $_COOKIE['client_email'];
        $_SESSION['client_adress'] = $_COOKIE['client_adress'];
        $_SESSION['client_phone'] = $_COOKIE['client_phone'];

        $smarty_profile -> assign('tmp', 1);
        $smarty_profile -> assign('client_id', $_SESSION['client_id']);
        $smarty_profile -> assign('client_FIO', $_SESSION['client_FIO']);
        $smarty_profile -> assign('client_email', $_SESSION['client_email']);
        $smarty_profile -> assign('client_adress', $_SESSION['client_adress']);
        $smarty_profile -> assign('client_phone', $_SESSION['client_phone']);

        if (isset($_GET['update'])){
            $smarty_profile -> assign('tmp', 2);
        }
        else{
            $smarty_profile -> assign('tmp', 1);
        }

        if (isset($_POST['send'], $_POST['id'], $_POST['FIO'], $_POST['email'], $_POST['adress'], $_POST['phone']) && !empty($_POST['FIO']) && !empty($_POST['email']) && !empty($_POST['adress']) && !empty($_POST['phone'])){

            $query_up = "update client set FIO='{$_POST['FIO']}', adress='{$_POST['adress']}', phone='{$_POST['phone']}' where id = {$_POST['id']}";
            mysqli_query($dbc, $query_up) or die("Query_UP Error");

            $query_email_check = "select email from client where id = {$_POST['id']}";
            $result = mysqli_query($dbc, $query_email_check) or die("Query Email Check Error");
            $row = mysqli_fetch_array($result);

            if(!empty($row['email']) && $row['email'] == $_POST['email']){
                $smarty_profile -> assign('tmp',4);
            }
            elseif (mysqli_num_rows($result) > 0){
                $smarty_profile -> assign('tmp', 3);
            }
            else{
                $query_email = "update client set email = '{$_POST['email']}' where id = {$_POST['id']}";
                mysqli_query($dbc, $query_email) or die("Query Email Error");

                setcookie('client_email', $_POST['email'], time()+60*60*24*30*3);
                $_SESSION['client_email'] = $_POST['email'];

                $smarty_profile -> assign('tmp', 4);
            }

            setcookie('client_id', $_POST['id'], time()+60*60*24*30*3);
            setcookie('client_FIO', $_POST['FIO'], time()+60*60*24*30*3);
            setcookie('client_adress', $_POST['adress'], time()+60*60*24*30*3);
            setcookie('client_phone', $_POST['phone'], time()+60*60*24*30*3);

            $_SESSION['client_id'] = $_POST['id'];
            $_SESSION['client_FIO'] = $_POST['FIO'];
            $_SESSION['client_adress'] = $_POST['adress'];
            $_SESSION['client_phone'] = $_POST['phone'];


            header('refresh:3;url=profile.php');

        }



    }
    else{
        header('location:login.php');
    }

    $fullContent = $smarty_profile -> fetch('profile.tpl');




require_once('main.php');