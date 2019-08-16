<?php

require_once __DIR__.'/vendor/autoload.php';

use App\controller\CurlController;

$url = $_SERVER['REQUEST_URI'];
$controller = new CurlController();


if($url == "/") {       
    $controller->index();
}else{
    $aUrl = explode("/", $url);
    $action = ucfirst($aUrl[1]);
    $controller->$action();
 }  
