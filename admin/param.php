<?php

//$dbc = mysqli_connect('fdb1028.awardspace.net','4345972_gvshop','v%_xKRvG9;0VEtku','4345972_gvshop','3306') or die("Server Error");

if (isset($_COOKIE['user_id'],$_COOKIE['user_email'], $_COOKIE['user_name'], $_COOKIE['user_phone'], $_COOKIE['user_role'], $_COOKIE['user_photo']) && !empty($_COOKIE['user_phone'])  && !empty($_COOKIE['user_email']) && !empty($_COOKIE['user_name']) && !empty($_COOKIE['user_phone']) && !empty($_COOKIE['user_role']) && !empty($_COOKIE['user_photo'])){

    $_SESSION['user_id'] = $_COOKIE['user_id'];
    $_SESSION['user_email'] = $_COOKIE['user_email'];
    $_SESSION['user_name'] = $_COOKIE['user_name'];
    $_SESSION['user_phone'] = $_COOKIE['user_phone'];
    $_SESSION['user_role'] = $_COOKIE['user_role'];
    $_SESSION['user_photo'] = $_COOKIE['user_photo'];



}


$dbc = mysqli_connect('localhost','root','','GVShop') or die("Server Error");


function Protection ($link, $data){
    return mysqli_real_escape_string($link, trim($data));
}

?>