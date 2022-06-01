<?php

$url = $_SERVER['REQUEST_URI'];
include 'head.php';
include 'menu.php';
if ($url==='/') {
    include 'home.php'; 
}elseif ($url==='/login') {
    include 'login.php';
}elseif ($url==='/cadastro') {
    include 'cadastro.php';
}else {
    include '404.php';
}

include 'footer.php';
