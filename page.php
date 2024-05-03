<?php

if(!isset($_GET['page'])){
    include "page/home.php";
    return;
}

$page = $_GET['page'];
if($page == "home"){
    include "page/home.php";
}