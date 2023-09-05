<?php

require_once('header.php');

if (isset($_SESSION['user_id'], $_SESSION['user_email'], $_SESSION['user_name'], $_SESSION['user_phone'], $_SESSION['user_role'], $_SESSION['user_photo']) && !empty($_SESSION['user_id']) && !empty($_SESSION['user_email']) && !empty($_SESSION['user_name']) && !empty($_SESSION['user_phone']) && !empty($_SESSION['user_role']) && !empty($_SESSION['user_photo'])) {

    require_once('admin_info.php');

    if (!isset($_POST['send'])){

        $smarty_up = new Smarty();

        $smarty_up -> assign('id', $_SESSION['user_id']);
        $smarty_up -> assign('email', $_SESSION['user_email']);
        $smarty_up -> assign('name', $_SESSION['user_name']);
        $smarty_up -> assign('phone', $_SESSION['user_phone']);
        $smarty_up -> assign('role', $_SESSION['user_role']);
        $smarty_up -> assign('photo', $_SESSION['user_photo']);


        $content = $smarty_up -> fetch('user_update.tpl');

    }
    elseif(isset($_POST['send'], $_POST['id'], $_POST['email'], $_POST['name'], $_POST['phone'], $_POST['role']) && !empty($_POST['id']) && !empty($_POST['email']) && !empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['role'])){

        if ($_FILES['photo']['error'] == 0){
            $tmpFileName = $_FILES['photo']['tmp_name'];
            $realFileName = time().$_FILES['photo']['name'];

            move_uploaded_file($tmpFileName, "img/$realFileName");

            $query_change = "update user set name='".Protection($dbc, $_POST['name'])."', phone='".Protection($dbc, $_POST['phone'])."', photo='$realFileName' where id = {$_POST['id']} ";

            if ($_SESSION['user_photo'] != 'no_admin_photo.png'){
                unlink("img/{$_SESSION['user_photo']}");
            }

            setcookie('user_photo', $realFileName, time()+60*60*24*30*3);
            $_SESSION['user_photo'] = $realFileName;

        }
        else{
            $query_change = "update user set name='{$_POST['name']}', phone='{$_POST['phone']}' where id = {$_POST['id']} ";
        }

        mysqli_query($dbc, $query_change) or die("Query Error");

        setcookie('user_name', $_POST['name'], time()+60*60*24*30*3);
        setcookie('user_phone', $_POST['phone'], time()+60*60*24*30*3);

        $_SESSION['user_name'] = $_POST['name'];
        $_SESSION['user_phone'] = $_POST['phone'];



        $query_email_check = "select email from user where email = '{$_POST['email']}'";
        $result_email_check = mysqli_query($dbc, $query_email_check) or die("Query Email Check Error");
        $row_email = mysqli_fetch_array($result_email_check);

        $query_old_email = "select email from user where id = {$_POST['id']}";
        $result_old_email = mysqli_query($dbc, $query_old_email) or die("Query Error Old Email");
        $row_old_email = mysqli_fetch_array($result_old_email);

        if (mysqli_num_rows($result_email_check) > 0){

            if ($row_email['email'] == $row_old_email['email']){
                $content = "Всі параметри успішно оновлені";
            }
            else{
                $content = "Всі параметри крім email було змінено, Цей email вже використовується";
            }
        }
        else{

            $query_email = "update user set email='".Protection($dbc, $_POST['email'])."' where id = {$_POST['id']}";
            mysqli_query($dbc, $query_email) or die("Query Email Error");

            setcookie('user_email', $_POST['email'], time()+60*60*24*30*3);
            $_SESSION['user_email'] = $_POST['email'];

            $content = "Всі параметри були успішно оновлені";


        }
        header('refresh:2;url=user_update.php');
    }
    else{
        $content = "Error, Try Again";

        header('refresh:3;url=user_update.php');
    }



    $smarty_main -> assign('title', 'Редагування Профілю');
    $smarty_main -> assign('content', $content);
    mysqli_close($dbc);
    $smarty_main -> display('main.tpl');


}
else{
    header('404/404page.html');
}




