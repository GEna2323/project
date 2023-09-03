<?php

    require_once('header.php');

if (isset($_SESSION['user_id'], $_SESSION['user_email'], $_SESSION['user_name'], $_SESSION['user_phone'], $_SESSION['user_role'], $_SESSION['user_photo']) && !empty($_SESSION['user_id']) && !empty($_SESSION['user_email']) && !empty($_SESSION['user_name']) && !empty($_SESSION['user_phone']) && !empty($_SESSION['user_role']) && !empty($_SESSION['user_photo'])) {


    if (isset($_GET['id']) && !empty($_GET['id'])){

        $query = "select name, status from photo where id = {$_GET['id']}";
        $result = mysqli_query($dbc, $query) or die("Query Error");
        $row = mysqli_fetch_array($result);

        $smarty_dell = new Smarty();

        $smarty_dell -> assign('id', $_GET['id']);
        $smarty_dell -> assign('photo', $row['name']);
        $smarty_dell -> assign('status', $row['status']);

        $content = $smarty_dell -> fetch('photo_dell.tpl');

    }
    elseif(isset($_POST['id'], $_POST['dell'], $_POST['send']) && !empty($_POST['id']) && $_POST['dell'] == 'Yes'){

        $query = "select name, status, product_id from photo where id = {$_POST['id']}";
        $result = mysqli_query($dbc, $query) or die("Query Error");
        $row = mysqli_fetch_array($result);

        if ($row['status'] == 1 && mysqli_num_rows($result) > 1){

            $query_change = "update photo set status='1' where status = 0 and product_id = {$row['product_id']} limit 1";
            mysqli_query($dbc, $query_change) or die("Query_Change Error");


        }

        @unlink("../img/{$row['name']}");

        $query_dell = "delete from photo where id = {$_POST['id']}";
        mysqli_query($dbc, $query_dell) or die("Query Error Dell");

        $content = "Фото Успішно видалене";

    }


    $smarty_main -> assign('title', 'Видалення Фото');
    $smarty_main -> assign('content', $content);
    mysqli_close($dbc);
    $smarty_main -> display('main.tpl');

}
else{
    header("location:404/404page.html");
}


