<?php

    require_once('header.php');

if (isset($_SESSION['user_id'], $_SESSION['user_email'], $_SESSION['user_name'], $_SESSION['user_phone'], $_SESSION['user_role'], $_SESSION['user_photo']) && !empty($_SESSION['user_id']) && !empty($_SESSION['user_email']) && !empty($_SESSION['user_name']) && !empty($_SESSION['user_phone']) && !empty($_SESSION['user_role']) && !empty($_SESSION['user_photo'])) {

    require_once('admin_info.php');

    if (isset($_GET['id']) && !empty($_GET['id'])){

        $smarty_up = new Smarty();

        $query_pass = "select password from user where id = {$_GET['id']}";
        $result_pass = mysqli_query($dbc, $query_pass) or die("Query_Pass Error");
        $row_pass = mysqli_fetch_array($result_pass);

        $smarty_up -> assign('password', $row_pass['password']);
        $smarty_up -> assign('id', $_GET['id']);

        $content = $smarty_up -> fetch('pass_update.tpl');

    }
    elseif(isset($_POST['send'], $_POST['id'], $_POST['pass'], $_POST['new_pass'], $_POST['re_new_pass']) && !empty($_POST['id']) && !empty($_POST['pass']) && !empty($_POST['new_pass']) && $_POST['new_pass'] == $_POST['re_new_pass']){

        $query = "select id from user where password = sha1({$_POST['pass']})";
        $result = mysqli_query($dbc, $query) or die("Query Error");


        if (mysqli_num_rows($result) > 0){

            $query_up = "update user set password=sha1(".Protection($dbc, $_POST['new_pass']).") where id = {$_POST['id']}";
            mysqli_query($dbc, $query_up) or die("Query Up Error");

            $content = "Пароль успішно змінено";

            header("refresh:3;url=exit.php?tmp=1");

        }
        else{
            $content = "Пароль від аккаунту введено не правильно";
        }
    }
    elseif(isset($_POST['send'], $_POST['id'], $_POST['pass'], $_POST['new_pass'], $_POST['re_new_pass']) && !empty($_POST['id']) && !empty($_POST['pass']) && !empty($_POST['new_pass']) && $_POST['new_pass'] != $_POST['re_new_pass']) {
        $content = "Паролі не співпадають";
    }


    $smarty_main -> assign('title', 'Заміна пароля');
    $smarty_main -> assign('content', $content);
    mysqli_close($dbc);
    $smarty_main -> display('main.tpl');


}
else{
    header("location:404/404page.html");
}


