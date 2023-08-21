<?php

    require_once("header.php");

    $smarty_main -> assign("title", 'Головна Сторінка Адмін Частини');

    $smarty_main -> assign("content", 'Виберіть пункт меню для управління сайтом');





    $smarty_main -> display("main.tpl");





