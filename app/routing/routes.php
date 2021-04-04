<?php

$router = new AltoRouter;

$router->map('GET', '/', 'App\Controllers\IndexController@show', 'home');

$match = $router -> match();

if($match){
    var_dump($match);
}else{
    header($_SERVER['SERVER_PROTOCOL']. '404 Not Found');
    echo "Page almost Found";
}