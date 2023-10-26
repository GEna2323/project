<?php
    require_once('header.php');

    $setting_page = 'login';

    $smarty_log = new Smarty();

    if(!isset($_POST['send'])){
        $smarty_log -> assign('tmp', 1);
    }
    elseif(isset($_POST['send'], $_POST['email'], $_POST['password']) && !empty($_POST['email']) && !empty($_POST['password']) && $_POST['send'] == 'Log In'){

        $query = "select id, FIO, email, adress, phone from client where email = '{$_POST['email']}' and password = sha1('{$_POST['password']}')";

        $result = mysqli_query($dbc, $query) or die("Query Error");
        $row = mysqli_fetch_array($result);


        if (mysqli_num_rows($result) > 0){

            $query_time = "update client set LastLogin=now() where email = '{$_POST['email']}'";
            mysqli_query($dbc, $query_time) or die("Query Time Error");

            setcookie('client_id', $row['id'], time()+60*60*24*30*3);
            setcookie('client_FIO', $row['FIO'], time()+60*60*24*30*3);
            setcookie('client_email', $row['email'], time()+60*60*24*30*3);
            setcookie('client_adress', $row['adress'], time()+60*60*24*30*3);
            setcookie('client_phone', $row['phone'], time()+60*60*24*30*3);

            $_SESSION['client_id'] = $row['id'];
            $_SESSION['client_FIO'] = $row['FIO'];
            $_SESSION['client_email'] = $row['email'];
            $_SESSION['client_adress'] = $row['adress'];
            $_SESSION['client_phone'] = $row['phone'];

            $smarty_log -> assign('tmp', 2);
            header('refresh:3;url=list.php');
        }
        else{
            $smarty_log -> assign('tmp', 3);
            header("refresh:3;url=login.php");
        }
    }
    elseif(isset($_POST['send'], $_POST['email'], $_POST['password']) && !empty($_POST['email']) && !empty($_POST['password']) && $_POST['send'] == 'Log In') {
        $smarty_log -> assign('tmp',4);
    }
    else{
        $smarty_log -> assign('tmp', 5);
    }

    $fullContent = $smarty_log -> fetch('login.tpl');



        require_once('main.php');