<?php

    require_once('header.php');

    $setting_page = 'catalog_info';

    $smarty_cat = new Smarty();

    if (isset($_GET['id']) && !empty($_GET['id'])){

        // Main Query //

        $query = "select catalog.id as catalog_id, model, price, count, ram, storage, oc, batery,discription, color, Firms.name as firma, photo.name as main_photo from Firms inner join catalog on Firms.id = catalog.id_firms inner join photo on catalog.id = photo.product_id where photo.status = 1 and catalog.id = {$_GET['id']};";
        $result = mysqli_query($dbc, $query) or die("Queyr Error");
        $row = mysqli_fetch_array($result);

        $phone = ['id'=>$row['catalog_id'],'model'=>$row['model'],'price'=>$row['price'],'count'=>$row['count'],'ram'=>$row['ram'],'storage'=>$row['storage'],'oc'=>$row['oc'],'batery'=>$row['batery'],'desc'=>$row['discription'],'color'=>$row['color'],'firma'=>$row['firma'],'main_photo'=>$row['main_photo']];

        //  Photos //

        $query_photo = "select id, name from photo where product_id = {$row['catalog_id']} and status = 0";
        $result_photo = mysqli_query($dbc, $query_photo) or die("Query Photo Error");

        $photos = [];
        while($row_photo = mysqli_fetch_array($result_photo)){
            $photos[] = ['id'=>$row_photo['id'],'name'=>$row_photo['name']];
        }


        $smarty_cat -> assign('photos', $photos);
        $smarty_cat -> assign('phone', $phone);
        if (isset($_GET['photo_id']) && !empty($_GET['photo_id'])){
            $smarty_cat -> assign('photo_id', $_GET['photo_id']);
        }
        if (isset($_GET['tmp']) && $_GET['tmp'] = 'added'){
            $smarty_cat -> assign('tmp',$_GET['tmp']);
        }

        $fullContent = $smarty_cat -> fetch('catalog_info.tpl');
    }
    elseif(!isset($_GET['id']) || empty($_GET['id'])){
        header('location:list.php');
    }






    require_once('main.php');

