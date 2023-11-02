<?php

    require_once('header.php');

if (isset($_SESSION['user_id'], $_SESSION['user_email'], $_SESSION['user_name'], $_SESSION['user_phone'], $_SESSION['user_role'], $_SESSION['user_photo']) && !empty($_SESSION['user_id']) && !empty($_SESSION['user_email']) && !empty($_SESSION['user_name']) && !empty($_SESSION['user_phone']) && !empty($_SESSION['user_role']) && !empty($_SESSION['user_photo'])) {

    require_once('admin_info.php');

    $smarty_order = new Smarty();

    if (isset($_GET['id'], $_GET['tmp'], $_GET['data']) && !empty($_GET['data']) && !empty($_GET['id']) && $_GET['tmp'] == 'client'){

        $query = "select FIO, orderData, client.id as client_id from relationOrder inner join client on relationOrder.idClient = client.id where relationOrder.idClient = {$_GET['id']} and orderData = '{$_GET['data']}' limit 1";
        $result = mysqli_query($dbc, $query) or die("Query Client Error");
        $row = mysqli_fetch_array($result);

        $smarty_order -> assign('FIO', $row['FIO']);
        $smarty_order -> assign('orderData', $row['orderData']);
        $smarty_order -> assign('id', $row['client_id']);
        $smarty_order -> assign('tmp', $_GET['tmp']);

        $content = $smarty_order -> fetch('order_dell.tpl');

    }
    elseif(isset($_GET['id'],$_GET['data'], $_GET['tmp']) && !empty($_GET['data']) && !empty($_GET['id']) && $_GET['tmp'] == 'visitor'){

        $query = "select FIO, orderData, visitor.id as visitor_id from visitorRelationOrder inner join visitor on visitorRelationOrder.idVisitor = visitor.id where visitorRelationOrder.idVisitor = {$_GET['id']} and orderData = '{$_GET['data']}' limit 1";
        $result = mysqli_query($dbc, $query) or die("Query Visitor Error");
        $row = mysqli_fetch_array($result);

        $smarty_order -> assign('FIO', $row['FIO']);
        $smarty_order -> assign('orderData', $row['orderData']);
        $smarty_order -> assign('id', $row['visitor_id']);
        $smarty_order -> assign('tmp', $_GET['tmp']);

        $content = $smarty_order -> fetch('order_dell.tpl');
    }
    elseif(isset($_POST['send'], $_POST['id'], $_POST['data'], $_POST['tmp'], $_POST['dell']) && !empty($_POST['id']) && !empty($_POST['data']) && $_POST['dell'] == 'Yes'){

        if ($_POST['tmp'] == 'client'){

            $query_client_dell = "delete from relationOrder where idClient = {$_POST['id']} and orderData = '{$_POST['data']}'";
            mysqli_query($dbc, $query_client_dell) or die("Query CLient Dell  Error");

            $content = "Замовлення Клієнта успішно видалено";
        }
        elseif($_POST['tmp'] == 'visitor'){

            $query_visitor_order_dell = "delete from visitorRelationOrder where idVisitor = {$_POST['id']} and orderData = '{$_POST['data']}'";
            mysqli_query($dbc, $query_visitor_order_dell) or die("Query Visitor Dell");

            $query_visitor_dell = "delete from visitor where id = {$_POST['id']}";
            mysqli_query($dbc, $query_visitor_dell);

            $content = "Замовлення Відвідувача успішно видалено";

            header('refresh:2;url=order_status.php');

        }


    }
    elseif(isset($_POST['send'], $_POST['id'], $_POST['data'], $_POST['tmp'], $_POST['dell']) && !empty($_POST['id']) && !empty($_POST['data']) && $_POST['dell'] == 'No') {

        $content = "Видалення відмінено";

        header('refresh:2;url=order_status.php');
    }



    $smarty_main -> assign('title', 'Видалення Замовлення');
    $smarty_main -> assign('content', $content);
    mysqli_close($dbc);
    $smarty_main -> display('main.tpl');

}
else{
    header("location:404/404page.html");
}

