<?php

    require_once("header.php");

if (isset($_SESSION['user_id'], $_SESSION['user_email'], $_SESSION['user_name'], $_SESSION['user_phone'], $_SESSION['user_role'], $_SESSION['user_photo']) && !empty($_SESSION['user_id']) && !empty($_SESSION['user_email']) && !empty($_SESSION['user_name']) && !empty($_SESSION['user_phone']) && !empty($_SESSION['user_role']) && !empty($_SESSION['user_photo'])) {

    require_once('admin_info.php');


    $smarty_cat = new Smarty();

    if (isset($_GET['firms']) && !empty($_GET['firms'])){
        $query_cat = "select catalog.id as catalog_id, model, photo.name as name from Firms left join catalog on Firms.id = catalog.id_firms left join photo on catalog.id = photo.product_id where catalog.id_firms = '{$_GET['firms']}' and (status = 1 or status is null)";
        $smarty_cat -> assign('newFirma', $_GET['firms']);
    }
    else{
        $query_cat = "select catalog.id as catalog_id, model, name from catalog left join photo on catalog.id = photo.product_id where status = 1 or photo.status is null";
    }
    $result_cat = mysqli_query($dbc, $query_cat) or die("Query_cat Error");


    $count_cat = mysqli_num_rows($result_cat);


    $catalog = [];

    $num = 1;
    while ($row_cat = mysqli_fetch_array($result_cat)){

        if(empty($row_cat['name'])){
            $row_cat['name'] = 'noFoto.png';
        }

        $catalog[] = ['id'=>$row_cat['catalog_id'], 'model'=>$row_cat['model'],'num'=>$num,'photo'=>$row_cat['name']];
        $num++;

    }

    $smarty_cat -> assign('catalog', $catalog);

    $query_firms = "select id, name from Firms";
    $result_firms = mysqli_query($dbc, $query_firms) or die("Query_Firms Error");

    $firms = [];
    while ($row_firms = mysqli_fetch_array($result_firms)){

        $firms[] = ['id_firm'=>$row_firms['id'], 'firma'=>$row_firms['name']];

    }


    $smarty_cat -> assign('firms', $firms);
    $smarty_cat -> assign('count', $count_cat);








    $content = $smarty_cat -> fetch('catalog_index.tpl');


    $smarty_main -> assign('title', 'Управління товарами');
    $smarty_main -> assign('content', $content);

    mysqli_close($dbc);
    $smarty_main -> display('main.tpl');

}
else{
    header("location:404/404page.html");
}

?>