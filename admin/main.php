<?php

    require_once('header.php');











    mysqli_close($dbc);
    $smarty_main -> display('main.tpl');