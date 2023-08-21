<?php

    require_once('header.php');

    $smarty_dell = new Smarty();

    if (isset($_GET['name'], $_GET['id']) && !empty($_GET['id']) && !empty($_GET['name'])){

        $smarty_dell -> assign('name', $_GET['name']);
        $smarty_dell -> assign('id', $_GET['id']);

        $content = $smarty_dell -> fetch('category_dell.tpl');

    }
    elseif(isset($_POST['dell'], $_POST['id'], $_POST['send']) && !empty($_POST['id']) && $_POST['dell'] == 'Yes'){

        $query_check = "select id from catalog where id_firms = {$_POST['id']}";
        $result_check = mysqli_query($dbc, $query_check) or die("Query Check Error");

        if (mysqli_num_rows($result_check) > 0){

            $smarty_dell -> assign('count', mysqli_num_rows($result_check));
            $smarty_dell -> assign('id_cat', $_POST['id']);

            $content = $smarty_dell -> fetch('category_dell.tpl');

        }
        else{

            $query_dell = "delete from Firms where id = {$_POST['id']}";
            $result_dell = mysqli_query($dbc, $query_dell) or die("Query Dell Error");

            $content = 'Категорія Успішно Видалена';

        }


    }
    elseif(isset($_POST['dell'], $_POST['id'], $_POST['send']) && !empty($_POST['id']) && $_POST['dell'] == 'No'){

    $content = 'Видалення Відмінено';


    }




    $smarty_main -> assign('title', 'Видалення Категорії');
    $smarty_main -> assign('content', $content);

    mysqli_close($dbc);
    $smarty_main -> display('main.tpl');
?>