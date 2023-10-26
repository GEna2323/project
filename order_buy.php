<?php

    require_once('header.php');

    $setting_page = 'order_buy';
    $smarty_order = new Smarty();

    if (isset($_SESSION['basket']) && !empty($_SESSION['basket']) && !isset($_POST['send'])){



        $full_price = 0;
        $total_price = 0;
        $basket = [];
        $num = 1;
        for($i = 0; $i < count($_SESSION['basket']); $i++){
            $full_price = $_SESSION['basket'][$i]['price'] * $_SESSION['basket'][$i]['count'];
            $total_price += $full_price;
            $basket[] = ['full_price'=>$full_price,'id'=>$_SESSION['basket'][$i]['id'], 'model'=>$_SESSION['basket'][$i]['model'],'price'=>$_SESSION['basket'][$i]['price'],'photo'=>$_SESSION['basket'][$i]['photo'],'count'=>$_SESSION['basket'][$i]['count'],'num'=>$num];
            $num++;
        }

        $smarty_order -> assign('basket', $basket);
        $smarty_order -> assign('total_price', $total_price);
        $smarty_order -> assign('tmp', 1);


        if (isset($_SESSION['client_id'], $_SESSION['client_FIO'], $_SESSION['client_email'], $_SESSION['client_adress'], $_SESSION['client_phone'])){

            $client = ['id'=>$_SESSION['client_id'],'FIO'=>$_SESSION['client_FIO'],'email'=>$_SESSION['client_email'],'adress'=>$_SESSION['client_adress'],'phone'=>$_SESSION['client_phone']];
            $smarty_order -> assign('client', $client);
        }

    }
    elseif(isset($_POST['send'], $_POST['number'], $_POST['FIO'], $_POST['adress'], $_POST['description'], $_POST['user'], $_POST['id']) && !empty($_POST['number']) && !empty($_POST['FIO']) && !empty($_POST['adress']) && !empty($_POST['id']) && $_POST['user'] == 'client'){

        $query_client_change = "update client set FIO='".Protection($dbc, $_POST['FIO'])."', adress='".Protection($dbc, $_POST['adress'])."', phone='".Protection($dbc, $_POST['number'])."' where id = {$_POST['id']}";
        mysqli_query($dbc, $query_client_change) or die("Query Client Change Error");

        for ($i = 0; $i < count($_SESSION['basket']); $i++){
            $query_order = "insert into relationOrder (idClient, idCat, countCat, orderData, description) values ('{$_POST['id']}', '{$_SESSION['basket'][$i]['id']}', '{$_SESSION['basket'][$i]['count']}',now(),'".Protection($dbc, $_POST['description'])."')";
            echo $query_order;
            mysqli_query($dbc, $query_order) or die("Query Order Error");
        }

        unset($_SESSION['basket']);

        $smarty_order -> assign('tmp', 2);


    }
    elseif(isset($_POST['send'], $_POST['number'], $_POST['FIO'], $_POST['adress'], $_POST['description'], $_POST['user'], $_POST['email']) && !empty($_POST['number']) && !empty($_POST['FIO']) && !empty($_POST['adress']) && !empty($_POST['email']) && $_POST['user'] == 'visitor') {

        $query_visitor = "insert into visitor (FIO, email, phone, adress, dataVisitor) values ('".Protection($dbc, $_POST['FIO'])."','".Protection($dbc, $_POST['email'])."','".Protection($dbc, $_POST['number'])."','".Protection($dbc, $_POST['adress'])."', now())";
        mysqli_query($dbc, $query_visitor) or die("Query Visitor Error");

        $visitor_id = mysqli_insert_id($dbc);

        for ($i = 0; $i < count($_SESSION['basket']) ; $i++){
            $query_visitor_order = "insert into visitorRelationOrder (idVisitor, idCat, countCat, orderData, description) values ('$visitor_id','{$_SESSION['basket'][$i]['id']}','{$_SESSION['basket'][$i]['count']}',now(),'".Protection($dbc, $_POST['description'])."')";
            mysqli_query($dbc, $query_visitor_order);
        }

        unset($_SESSION['basket']);

        $smarty_order -> assign('tmp', 2);

    }


    $fullContent = $smarty_order -> fetch('order_buy.tpl');




    require_once('main.php');

