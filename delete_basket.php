<?php

require_once('header.php');

unset($_SESSION['basket']);

$_SESSION['basket'] = [];

require_once('main.php');