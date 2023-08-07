<?php

    require_once('header.php');

    $queryCat = "select id, id_firms, model, price, count, photo from catalog";

    $resultCat = mysqli_query($dbc, $queryCat) or die("Query Error");

    $catalog = [];

    while($row = mysqli_fetch_array($resultCat)){

        $catalog[] = ['model'=>$row['model'], 'photo'=>$row['photo'], 'price'=>$row['price']];

    }





    $smarty_main -> assign('catalog', $catalog);

    mysqli_close($dbc);
    $smarty_main -> display('main.tpl');