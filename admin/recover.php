<?php

require_once('header.php');

if (isset($_SESSION['user_id'], $_SESSION['user_email'], $_SESSION['user_name'], $_SESSION['user_phone'], $_SESSION['user_role'], $_SESSION['user_photo']) && !empty($_SESSION['user_id']) && !empty($_SESSION['user_email']) && !empty($_SESSION['user_name']) && !empty($_SESSION['user_phone']) && !empty($_SESSION['user_role']) && !empty($_SESSION['user_photo'])) {

    require_once('admin_info.php');

    if (isset($_GET['id'], $_GET['tmp'], $_GET['data']) && !empty($_GET['id']) && !empty($_GET['data']) && $_GET['tmp'] == 'client'){

        $query_cat = "select idCat, countCat from relationOrder where idClient = {$_GET['id']} and orderData = '{$_GET['data']}'";
        $result_cat = mysqli_query($dbc, $query_cat) or die("Query Cat Error");

        while($row = mysqli_fetch_array($result_cat)){
            $query_change_cat = "update catalog set count=count-".$row['countCat']." where id = {$row['idCat']}";
            mysqli_query($dbc, $query_change_cat) or die("Query Change Error");

        }

        $query_change_order = "update relationOrder set status = 1 where idClient = {$_GET['id']} and orderData = '{$_GET['data']}'";
        mysqli_query($dbc, $query_change_order) or die("Query Change Error");

        $content = "Замовлення успішно відновлено";
    }
    elseif (isset($_GET['id'], $_GET['tmp'], $_GET['data']) && !empty($_GET['id']) && !empty($_GET['data']) && $_GET['tmp'] == 'visitor') {

        $query_cat = "select idCat, countCat from visitorRelationOrder where idVisitor = {$_GET['id']} and orderData = '{$_GET['data']}'";

        $result_cat = mysqli_query($dbc, $query_cat) or die("Query Cat error");

        while($row = mysqli_fetch_array($result_cat)){
            $query_change_cat = "update catalog set count=count-".$row['countCat']." where id = {$row['idCat']}";
            mysqli_query($dbc, $query_change_cat) or die("Query Change Cat Error");
        }

        $query_change_order = "update visitorRelationOrder set status = 1 where idVisitor = {$_GET['id']} and orderData = '{$_GET['data']}'";
        mysqli_query($dbc, $query_change_order) or die("Query Change Order Error");

        $content = "Замовлення успішно відновлено";

    }
    else{
        $content = "Error";
    }

    header("refresh:2;url=order_archiv.php");


    $smarty_main -> assign('title', "Архівування");
    $smarty_main -> assign('content', $content);
    mysqli_close($dbc);
    $smarty_main -> display('main.tpl');
}
else{
    header("location:404/404page.html");
}
