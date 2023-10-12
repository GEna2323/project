<?php

    require_once('header.php');
    $setting_page = 'list';
    $smarty_order = new Smarty();

    $params = [];

    if (isset($_GET['page'])){
        $params[] .= "page={$_GET['page']}";
    }
    if (isset($_GET['sort'])){
        $params[] .= "sort={$_GET['sort']}";
    }
    if (isset($_GET['id_firm'])){
        $params[] .= "id_firm={$_GET['id_firm']}";
    }
    if (isset($_GET['search'])){
        $params[] .= "search={$_GET['search']}";
    }
    if (isset($_GET['max_price'], $_GET['min_price'])){
        $params[] .= "max_price={$_GET['max_price']}&min_price={$_GET['min_price']}";
    }
    if (isset($_GET['note'])){
        $params[] .= "note={$_GET['note']}";
    }

    $ready_params = implode('&', $params);


    if (isset($_SESSION['basket']) && !empty($_SESSION['basket'])){

        $total_price = 0;
        $basket = [];
        $num = 1;
        for($i = 0; $i < count($_SESSION['basket']); $i++){
            $catalog_price = $_SESSION['basket'][$i]['count'] * $_SESSION['basket'][$i]['price'];
            $total_price +=$catalog_price;
            $basket[] = ['id'=>$_SESSION['basket'][$i]['id'],'num'=>$num,'model'=>$_SESSION['basket'][$i]['model'],'price'=>$_SESSION['basket'][$i]['price'],'photo'=>$_SESSION['basket'][$i]['photo'],'count'=>$_SESSION['basket'][$i]['count'], 'full_price'=>$catalog_price];
            $num++;
        }

        $smarty_order -> assign('basket', $basket);
        $smarty_order -> assign('total_price', $total_price);

        if(!empty($ready_params)){
            $smarty_order -> assign('ready_params', $ready_params);
        }

        $fullContent = $smarty_order -> fetch('order.tpl');

    }
    else{
        if (!empty($ready_params)){
            header("location:list.php?{$ready_params}");
        }
        else{
            header('location:list.php');
        }
    }





    require_once('main.php');