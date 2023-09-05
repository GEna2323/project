<?php

require_once('header.php');

if (isset($_SESSION['user_id'], $_SESSION['user_email'], $_SESSION['user_name'], $_SESSION['user_phone'], $_SESSION['user_role'], $_SESSION['user_photo']) && !empty($_SESSION['user_id']) && !empty($_SESSION['user_email']) && !empty($_SESSION['user_name']) && !empty($_SESSION['user_phone']) && !empty($_SESSION['user_role']) && !empty($_SESSION['user_photo'])) {

    require_once('admin_info.php');

    if (isset($_GET['id']) && !empty($_GET['id'])){

        $smarty_up = new Smarty();

        $smarty_up -> assign('id', $_GET['id']);
        $smarty_up -> assign('photo', $_SESSION['user_photo']);

        $content = $smarty_up -> fetch('admin_photo_dell.tpl');

    }
    elseif(isset($_POST['send'], $_POST['dell']) && $_POST['dell'] == 'Yes'){

        $query_up = "update user set photo=NULL where id = {$_SESSION['user_id']}";
        mysqli_query($dbc, $query_up) or die("Query Error");

        unlink("img/{$_SESSION['user_photo']}");

        setcookie('user_photo', 'no_admin_photo.png', time()+60*60*24*30*3);
        $_SESSION['user_photo'] = 'no_admin_photo.png';

        $content = 'Ваше фото успішно видалене';

        header('refresh:2;url=user_update.php');
    }
    else{
        $content = "Error!!!";
    }




    $smarty_main -> assign('title','Видалення фото');
    $smarty_main -> assign('content', $content);
    mysqli_close($dbc);
    $smarty_main -> display('main.tpl');


}
else{
    header("location:404/404page.html");
}


