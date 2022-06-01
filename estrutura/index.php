<?php

$url = $_SERVER['REQUEST_URI'];
include 'head.php';
include 'menu.php';
include 'acoes.php';

match($url){
    '/' => home(),
    '/login' => login(),
    '/cadastro' => cadastro(),
    '/listar' => listar(),
    '/relatorio' => relatorio(),
    default => erro404(),
};

include 'footer.php';
