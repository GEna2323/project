<?php

    require_once('header.php');

    if (isset($_GET['id']) && !empty($_GET['id'])){

        $smarty_up = new Smarty();

        /* Catalog */

        $query = "select id, id_firms, model, price, count, ram, storage, oc, batery, discription, color from catalog where id = {$_GET['id']}";
        $result = mysqli_query($dbc, $query) or die("Query Error");
        $row = mysqli_fetch_array($result);

        /* Firm */

        $query_firm = "select id, name from Firms";
        $result_firm = mysqli_query($dbc, $query_firm) or die("Query_Firm Error");
        $firms = [];

        while($row_firm = mysqli_fetch_array($result_firm)){
            $firms[] = ['id_firma'=>$row_firm['id'], 'firma'=>$row_firm['name']];
        }

        /* Photo */

        $query_photo = "select name, status, id from photo where product_id = {$row['id']}";
        $result_photo = mysqli_query($dbc, $query_photo);

        $photo = [];

        while($row_photo = mysqli_fetch_array($result_photo)){
            $photo[] = ['photo'=>$row_photo['name'], 'status'=>$row_photo['status'],'id'=>$row_photo['id']];
        }

        /* Assign */

        $smarty_up -> assign('id', $row['id']);
        $smarty_up -> assign('id_firms', $row['id_firms']);
        $smarty_up -> assign('model', $row['model']);
        $smarty_up -> assign('price', $row['price']);
        $smarty_up -> assign('count', $row['count']);
        $smarty_up -> assign('ram', $row['ram']);
        $smarty_up -> assign('storage', $row['storage']);
        $smarty_up -> assign('oc', $row['oc']);
        $smarty_up -> assign('batery', $row['batery']);
        $smarty_up -> assign('discription', $row['discription']);
        $smarty_up -> assign('color', $row['color']);

        $smarty_up -> assign('firms', $firms);

        $smarty_up -> assign('photo', $photo);



        $content = $smarty_up -> fetch('catalog_update.tpl');


    }

    elseif (isset($_POST['old_photo'] ,$_POST['id'], $_POST['model'], $_POST['price'], $_POST['id_firms'], $_POST['count'], $_POST['ram'], $_POST['storage'], $_POST['oc'], $_POST['batery'], $_POST['discription'], $_POST['color'], $_POST['main_photo']) && !empty($_POST['old_photo']) && !empty($_POST['main_photo']) && !empty($_POST['id']) && !empty($_POST['id_firms']) && !empty($_POST['model']) && !empty($_POST['price']) && !empty($_POST['count']) && !empty($_POST['ram']) && !empty($_POST['storage']) && !empty($_POST['oc']) && !empty($_POST['batery'])) {

        $query_photo_up = "update photo set status = 1 where product_id = {$_POST['id']} and status = 0 limit 1";
        mysqli_query($dbc, $query_photo_up) or die("Query Error Photoo up");

        $query_photo = "update photo set status = 0 where id = {$_POST['old_photo']}";
        mysqli_query($dbc, $query_photo) or die("Query Error Photo");

        $query_check = "select id from photo where product_id = {$_POST['id']}";
        $result_check = mysqli_query($dbc, $query_check) or die("Query Check Error");
        $count_photo = mysqli_num_rows($result_check);


        if (isset($_FILES['photo']['error'][0], $_FILES['photo']['name'][0]) && $_FILES['photo']['error'][0] == 0){
            for($i = 0; $i < count($_FILES['photo']['name']); $i++){
                if (isset($_FILES['photo']['name'][$i]) && $_FILES['photo']['size'][$i] > 0){
                    $TMPFileName = $_FILES['photo']['tmp_name'][$i];
                    $realFileName = time().$_FILES['photo']['name'][$i];

                    move_uploaded_file($TMPFileName, "../img/$realFileName");

                    if ($count_photo > 0) {
                        $query_photo_add = "insert into photo (name, product_id, status) values('$realFileName', '{$_POST['id']}', 0)";
                    } else {
                        if ($i == 0) {
                            $query_photo_add = "insert into photo (name, product_id, status) values('$realFileName', '{$_POST['id']}', 1)";
                        } else {
                            $query_photo_add = "insert into photo (name, product_id, status) values('$realFileName', '{$_POST['id']}', 0)";
                        }
                    }
                    mysqli_query($dbc, $query_photo_add) or die("Query Photo add Error");

                }
            }
        }




        $query_up = "update catalog set id_firms = '".Protection($dbc, $_POST['id_firms'])."', model='".Protection($dbc, $_POST['model'])."', price='".Protection($dbc, $_POST['price'])."', count='".Protection($dbc, $_POST['ram'])."', storage='".Protection($dbc, $_POST['storage'])."', oc='".Protection($dbc, $_POST['oc'])."', batery='".Protection($dbc, $_POST['batery'])."', discription='".Protection($dbc, $_POST['discription'])."', color='".Protection($dbc, $_POST['color'])."' where id = {$_POST['id']}";
        mysqli_query($dbc, $query_up) or die("Query_UP Error");

        $content = 'Товар Успішно Оновлено';


    }






        $smarty_main -> assign('title', 'Редагування Товару');
    $smarty_main -> assign('content', $content);

    mysqli_close($dbc);
    $smarty_main -> display('main.tpl');


?>