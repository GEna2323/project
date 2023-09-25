<?php

    require_once('header.php');

    $page = 'catalog';

    $smarty_cat = new Smarty();

    /* Price Filter */

    if (isset($_GET['min_price']) && !empty($_GET['min_price'])){
        $min_price = $_GET['min_price'];
    }
    else{
        $min_price = 0;
    }

    if (isset($_GET['max_price']) && !empty($_GET['max_price'])){
        $max_price['max_price'] = $_GET['max_price'];
    }
    else{
        $query_max_price = "select max(price) as max_price from catalog";
        $result_max_price = mysqli_query($dbc, $query_max_price) or die("Query Max Price Error");
        $max_price = mysqli_fetch_array($result_max_price);
    }

    /* //////////// */



    /* Search */

    if (isset($_GET['search']) && !empty($_GET['search'])){

        $search = str_replace(',', ' ', $_GET['search']);

        $words = explode(' ', $search);

        $no_words = [];
        if (isset($words) && !empty($words)){
            foreach($words as $tmp){
                if (!empty($tmp)){
                    $no_words[] = " model like '%$tmp%'";
                }
            }
        }

        $final_search = implode(' or ', $no_words);

        $smarty_cat -> assign('search', $_GET['search']);
        $smarty_main -> assign('search', $_GET['search']);

    }


    /* //////////// */



    /* Page */

    $note  = 4;

    if (isset($_GET['id_firm']) && !empty($_GET['id_firm'])){
        $query_page = "select id from catalog where id_firms = {$_GET['id_firm']} and price >= $min_price and price <= {$max_price['max_price']}";
    }
    else{
        $query_page = "select id from catalog where price >= $min_price and price <= {$max_price['max_price']}";
    }

    if (isset($final_search) && !empty($final_search)){
        $query_page .= " and $final_search";
    }

    $result_page = mysqli_query($dbc, $query_page) or die("Query Error");
    $row_page = mysqli_fetch_array($result_page);
    $count_page = ceil((mysqli_num_rows($result_page))/$note);

    if (isset($_GET['page']) && !empty($_GET['page'])){
        $active_page = $_GET['page'];
    }
    else{
        $active_page = 1;
    }

    $skip = ($active_page - 1) * $note;



    /* ///////// */

    /* Основний запит */

    if (isset($_GET['id_firm']) && !empty($_GET['id_firm'])){
        $query = "select catalog.id as catalog_id, model, price, photo.name as photo from photo inner join catalog on catalog.id = photo.product_id where status = 1 and photo.product_id = catalog.id and catalog.id_firms = {$_GET['id_firm']}";
    }
    else{
        $query = "select catalog.id as catalog_id, model, price, photo.name as photo from photo inner join catalog on catalog.id = photo.product_id where status = 1 and photo.product_id = catalog.id";
    }

    /* Sort */

    if (isset($_GET['sort']) && !empty($_GET['sort'])){

        $sort = $_GET['sort'];

        $smarty_cat -> assign('sort', $sort);
        $smarty_main -> assign('sort', $sort);

        switch ($sort){
            case 'asc':
                $sort = 'desc';
                break;
            case 'desc':
                $sort = 'asc';
                break;
            default:
                $sort = 'asc';
        }


    }


    /* ///////// */

    /* Query Add */

    $query .= " and price >= $min_price and price <= {$max_price['max_price']}";

    if (isset($final_search) && !empty($final_search)){
        $query .= " and $final_search";
    }

    if(isset($sort) && !empty($sort)){
        $query .= " order by price $sort";
    }

    $query .= " limit $skip, $note";

    /* ///////// */

    $result = mysqli_query($dbc, $query) or die("Query Error");

    if (mysqli_num_rows($result) < 1){
        $fullContent = "Нажаль в даній категорії ще не має товарів";
    }
    else {


        $catalog = [];
        while ($row = mysqli_fetch_array($result)) {
            $catalog[] = ['id' => $row['catalog_id'], 'model' => $row['model'], 'price' => $row['price'], 'photo' => $row['photo']];
        }

        /* ///////// */


        /* Assign */
        $smarty_cat -> assign('catalog', $catalog);
        $smarty_cat -> assign('active_page', $active_page);
        $smarty_cat -> assign('count_page', $count_page);

        $smarty_cat -> assign('min_price', $min_price);
        $smarty_main -> assign('min_price', $min_price);

        $smarty_cat -> assign('max_price', $max_price['max_price']);
        $smarty_main -> assign('max_price', $max_price['max_price']);

        if (isset($_GET['id_firm']) && !empty($_GET['id_firm'])){
            $smarty_cat -> assign('id_firm', $_GET['id_firm']);
            $smarty_main -> assign('id_firm', $_GET['id_firm']);
        }

        /* ///////// */


        $fullContent = $smarty_cat->fetch('catalog.tpl');

    }

    require_once('main.php');