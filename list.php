<?php
require_once("admin/param.php");

$queryCat = "select id, id_firms, model, price, count, photo from catalog";

$resultCat = mysqli_query($dbc, $queryCat) or die("Query Error");

$countCat = mysqli_num_rows($resultCat);






?>