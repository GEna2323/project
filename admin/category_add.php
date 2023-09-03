<?php

    require_once('header.php');

if (isset($_SESSION['user_id'], $_SESSION['user_email'], $_SESSION['user_name'], $_SESSION['user_phone'], $_SESSION['user_role'], $_SESSION['user_photo']) && !empty($_SESSION['user_id']) && !empty($_SESSION['user_email']) && !empty($_SESSION['user_name']) && !empty($_SESSION['user_phone']) && !empty($_SESSION['user_role']) && !empty($_SESSION['user_photo'])) {

    require_once('admin_info.php');


    if(!isset($_POST['send'])){

        $smarty_cat = new Smarty();

        $content = $smarty_cat -> fetch('category_add.tpl');

    }
    elseif(isset($_POST['category'], $_POST['send']) && !empty($_POST['category'])){

        $query_check = "select name from Firms where name = '{$_POST['category']}'";
        $result_check = mysqli_query($dbc, $query_check) or die("Query_Check Error");

        if (mysqli_num_rows($result_check) > 0){

            $content = 'Категорія "'.$_POST['category'].'" вже додана';

        }
        else{

            $query = "insert into Firms (name) value ('{$_POST['category']}')";

            mysqli_query ($dbc, $query) or dei("Query Error");

            $content = ("Категорія Успішно Додана");
        }


    }
    else{

        $content = 'Виникла помилка';

    }



    $smarty_main -> assign('title', 'Додання категорії');
    $smarty_main -> assign('content', $content);

    mysqli_close($dbc);
    $smarty_main -> display('main.tpl');


}
else{
    header("location:404/404page.html");
}

?>