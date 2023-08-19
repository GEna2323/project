<?php

    require_once('header.php');

    $smarty_cat = new Smarty();

    $query = 'select id, name from Firms';
    $result = mysqli_query($dbc, $query) or die("Query Error");

    $category = [];
    $num = 1;
    while($row = mysqli_fetch_array($result)){

        $category[] = ['id'=>$row['id'],'name'=>$row['name'], 'num'=>$num];
        $num++;

    }

    $smarty_cat -> assign('category', $category);

    $content = $smarty_cat -> fetch('category_index.tpl');

    $smarty_main -> assign('title', 'Управління Категоріями');
    $smarty_main -> assign('content', $content);

    mysqli_close($dbc);
    $smarty_main -> display('main.tpl');

?>