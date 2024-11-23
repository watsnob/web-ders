<?php
require_once __DIR__ . '/config.php';
require_once APP_ROOT . '/controller/HomeController.php';
require_once APP_ROOT . '/controller/ProductController.php';

//print $_SERVER['REQUEST_METHOD']; //GET, POST, PUT, PATCH, DELETE, OPTIONS
//print $_SERVER['REQUEST_URI']; // urlimize gelen bütün istekler
if ($_SERVER['REQUEST_URI'] == '/') {
    call_user_func_array([new HomeController, 'index'], []);
    //$HomeController = new HomeController;
    //$HomeController->index();

    //require_once APP_ROOT.'/view/home.php';
} else if ($_SERVER['REQUEST_URI'] == '/products') {
    $ProductController = new ProductController;
    $ProductController->product();
    //require_once APP_ROOT . '/view/products.php';
} else {
    require_once APP_ROOT . '/view/404.php';
}
