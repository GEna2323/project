<?php

    require_once('header.php');

if (isset($_SESSION['user_id'], $_SESSION['user_email'], $_SESSION['user_name'], $_SESSION['user_phone'], $_SESSION['user_role'], $_SESSION['user_photo']) && !empty($_SESSION['user_id']) && !empty($_SESSION['user_email']) && !empty($_SESSION['user_name']) && !empty($_SESSION['user_phone']) && !empty($_SESSION['user_role']) && !empty($_SESSION['user_photo'])) {

    require_once('admin_info.php');


    $smarty_update = new Smarty();

    if (isset($_GET['id'], $_GET['name']) && !empty($_GET['id']) && !empty($_GET['name'])){

        $smarty_main -> assign('name', $_GET['name']);
        $smarty_main -> assign('id', $_GET['id']);

        $content = $smarty_main -> fetch('category_update.tpl');

    }
    elseif(isset($_POST['id'], $_POST['category']) && !empty($_POST['id']) && !empty($_POST['category'])){

        $query = "update Firms set name='{$_POST['category']}' where id = {$_POST['id']}";
        mysqli_query($dbc, $query) or die("Query Error");

        $content = 'Категорія успішно відредагована';

    }
    else{

        $content = 'Виникла помилка, спробуйте ще раз';

    }



    $smarty_main -> assign('title', 'Видалення Категорії');
    $smarty_main -> assign('content', $content);

    mysqli_close($dbc);
    $smarty_main -> display('main.tpl');

}
else{
    header("location:404/404page.html");
}

?>