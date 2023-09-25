<?php

    if (isset($page)) {

        $query = "select metaTitle, metaDiscription, metaKeyWords, title, fullContent from settingPage where page = '$page'";

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

        //////////////////
            /* Меню */

        $query_menu = "select name, page from settingPage order by prior asc";

        $result_menu = mysqli_query($dbc, $query_menu) or die("Query_Menu Error");

        $menu = [];

        while($row_menu = mysqli_fetch_array($result_menu)){

            $menu[] = ['name'=>$row_menu['name'], 'page'=>$row_menu['page']];

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

        //////////////////


        mysqli_close($dbc);
        $smarty_main -> display('main.tpl');

    }
    else{
        header('location:admin/404/404page.html');
    }