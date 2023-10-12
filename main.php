<?php

    if (isset($setting_page)) {

        $query = "select metaTitle, metaDiscription, metaKeyWords, title, fullContent from settingPage where setting_page = '$setting_page'";

        $result = mysqli_query($dbc, $query) or die("Query Error");

        $row = mysqli_fetch_array($result);

        if(isset($metaTitle) && !empty($metaTitle)){
            $row['metaTitle'] = $metaTitle;
        }
        if(isset($metaDiscription) && !empty($metaDiscription)){
            $row['metaDiscription'] = $metaDiscription;
        }
        if(isset($metaKeyWords) && !empty($metaKeyWords)){
            $row['metaKeyWords'] = $metaKeyWords;
        }
        if(isset($title) && !empty($title)){
            $row['title'] = $title;
        }
        if(isset($fullContent) && !empty($fullContent)){
            $row['fullContent'] = $fullContent;
        }
        $smarty_main -> assign('metaTitle', $row['metaTitle']);
        $smarty_main -> assign('metaDiscription', $row['metaDiscription']);
        $smarty_main -> assign('metaKeyWords', $row['metaKeyWords']);
        $smarty_main -> assign('title', $row['title']);
        $smarty_main -> assign('fullContent', $row['fullContent']);

        /* Basket */

        $count_basket = 0;

        if (isset($_SESSION['basket']) && !empty($_SESSION['basket'])){
            if (count($_SESSION['basket']) > 0){
                for($i = 0; $i < count($_SESSION['basket']); $i++){
                    $count_basket += $_SESSION['basket'][$i]['count'];
                }
            }
        }

        $smarty_main -> assign('count_basket', $count_basket);



        //////////////////
            /* Меню */

        $query_menu = "select name, setting_page from settingPage where prior < 4 order by prior asc";

        $result_menu = mysqli_query($dbc, $query_menu) or die("Query_Menu Error");

        $menu = [];

        while($row_menu = mysqli_fetch_array($result_menu)){

            $menu[] = ['name'=>$row_menu['name'], 'setting_page'=>$row_menu['setting_page']];

        }

        $smarty_main -> assign('menu', $menu);

        ///////////////////
            /* Firms */

        $query_firms = "select id, name from Firms";
        $result_firms = mysqli_query($dbc, $query_firms);

        $firms = [];
        while($row_firms = mysqli_fetch_array($result_firms)){
            $firms[] = ['id'=>$row_firms['id'],'name'=>$row_firms['name']];
        }

        $smarty_main -> assign('firms', $firms);

        ////////////////////
        /*   Clients  */

        if (isset($_COOKIE['client_id'], $_COOKIE['client_FIO'], $_COOKIE['client_email'], $_COOKIE['client_adress'], $_COOKIE['client_phone'])){

            $_SESSION['client_id'] = $_COOKIE['client_id'];
            $_SESSION['client_FIO'] = $_COOKIE['client_FIO'];
            $_SESSION['client_email'] = $_COOKIE['client_email'];
            $_SESSION['client_adress'] = $_COOKIE['client_adress'];
            $_SESSION['client_phone'] = $_COOKIE['client_phone'];

            $smarty_main -> assign('client_id', $_SESSION['client_id']);
            $smarty_main -> assign('client_FIO', $_SESSION['client_FIO']);
            $smarty_main -> assign('client_email', $_SESSION['client_email']);
            $smarty_main -> assign('client_adress', $_SESSION['client_adress']);
            $smarty_main -> assign('client_phone', $_SESSION['client_phone']);

        }



        //////////////////


        mysqli_close($dbc);
        $smarty_main -> display('main.tpl');

    }
    else{
        header('location:admin/404/404page.html');
    }