<?php

    require_once("header.php");

    $smarty_cat = new Smarty();

    $query_cat = "select catalog.id as catalog_id, model, id_firms, name from catalog left join photo on catalog.id = photo.product_id where status = 1 or photo.status is null";
    $result_cat = mysqli_query($dbc, $query_cat) or die("Query_cat Error");



    $catalog = [];

    $num = 1;
    while ($row_cat = mysqli_fetch_array($result_cat)){

        if(empty($row_cat['name'])){
            $row_cat['name'] = 'noFoto.png';
        }

        $catalog[] = ['id'=>$row_cat['catalog_id'], 'model'=>$row_cat['model'],'id_firms'=>$row_cat['id_firms'], 'num'=>$num,'photo'=>$row_cat['name']];
        $num++;

    }


    $smarty_cat -> assign('catalog', $catalog);

    $content = $smarty_cat -> fetch('catalog_index.tpl');








    $smarty_main -> assign('title', 'Управління товарами');
    $smarty_main -> assign('content', $content);

    mysqli_close($dbc);
    $smarty_main -> display('main.tpl');

?>