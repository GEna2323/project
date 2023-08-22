<?php

    require_once('header.php');

    if (isset($_GET['id'], $_GET['model']) && !empty($_GET['id']) && !empty($_GET['model'])){

        $smarty_update = new Smarty();

        $smarty_update -> assign('id', $_GET['id']);
        $smarty_update -> assign('model', $_GET['model']);

        $content = $smarty_update -> fetch('catalog_dell.tpl');

    }
    elseif(isset($_POST['id'], $_POST['dell'], $_POST['send']) && !empty($_POST['id']) && $_POST['dell'] == 'Yes'){

        $query_photo = "select id, name from photo where product_id = {$_POST['id']}";
        $result_photo = mysqli_query($dbc, $query_photo) or die("Query_Photo Error");

        while($row_photo = mysqli_fetch_array($result_photo)){

            if (!empty($row_photo['name'])){
                unlink("../img/{$row_photo['name']}");
            }

        }

        $photo_dell = "delete from photo where product_id = {$_POST['id']}";
        mysqli_query($dbc, $photo_dell) or die("Query_Photo Error");

        $query_dell = "delete from catalog where id = {$_POST['id']}";
        mysqli_query($dbc, $query_dell) or die("Query_dell Error");

        $content = "Товр успішно видалений";

    }

    elseif(isset($_POST['id'], $_POST['dell'], $_POST['send']) && !empty($_POST['id']) && $_POST['dell'] == 'No'){

        $content = 'Видалення відмінено';

    }





    $smarty_main -> assign('title', 'Видалення товару');
    $smarty_main -> assign('content', $content);

    mysqli_close($dbc);
    $smarty_main -> display('main.tpl');

?>