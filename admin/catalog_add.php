<?php

    require_once('header.php');

    $smarty_catalog = new Smarty();

    if (!isset($_POST['send'])){

        $query = "select id, name from Firms";
        $result = mysqli_query($dbc, $query) or die("Query Error");
        $categories = [];
        while ($row = mysqli_fetch_array($result)){

            $categories[] = ['id'=>$row['id'], 'name'=>$row['name']];

        }

        $smarty_catalog -> assign('categories', $categories);

        $content = $smarty_catalog -> fetch('catalog_add.tpl');

    }
    elseif(isset($_POST['model'], $_POST['price'], $_POST['id_firms'], $_POST['count'], $_POST['ram'], $_POST['storage'], $_POST['oc'], $_POST['batery'], $_POST['discription'], $_POST['color']) && !empty($_POST['id_firms']) && !empty($_POST['model']) && !empty($_POST['price']) && !empty($_POST['count']) && !empty($_POST['ram']) && !empty($_POST['storage']) && !empty($_POST['oc']) && !empty($_POST['batery'])){

        $query_add = "insert into catalog (id_firms, model, price, count, ram, storage, oc, batery, discription, color) values ('".Protection($dbc, $_POST['id_firms'])."', '".Protection($dbc, $_POST['model'])."', '".Protection($dbc, $_POST['price'])."', '".Protection($dbc, $_POST['count'])."', '".Protection($dbc, $_POST['ram'])."', '".Protection($dbc, $_POST['storage'])."', '".Protection($dbc, $_POST['oc'])."', '".Protection($dbc, $_POST['batery'])."', '".Protection($dbc, $_POST['discription'])."', '".Protection($dbc, $_POST['color'])."')";

        mysqli_query($dbc, $query_add) or die("Query_add Error");

        $content = "Товар успішно додано";


    }
    else{
        $content = 'Виникла помилка з додаванням товару';
    }






    $smarty_main -> assign('title', 'Додавання товару');
    $smarty_main -> assign('content', $content);

    mysqli_close($dbc);
    $smarty_main -> display('main.tpl');


?>