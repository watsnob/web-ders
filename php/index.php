<?php
require_once __DIR__ . '/config.php';
require_once APP_ROOT . '/router.php';

require_once APP_ROOT . '/model/BaseModel.php';
require_once APP_ROOT . '/model/ProductModel.php';

require_once APP_ROOT . '/controller/HomeController.php';
require_once APP_ROOT . '/controller/ProductController.php';


//print $_SERVER['REQUEST_METHOD']; //GET, POST, PUT, PATCH, DELETE, OPTIONS
//print $_SERVER['REQUEST_URI']; // urlimize gelen bütün istekler
$request_uri = str_replace([basename($_SERVER['SCRIPT_NAME']), dirname($_SERVER['SCRIPT_NAME'])], '', $_SERVER['REQUEST_URI']);
$data = explode('/', $request_uri);
$params = empty($data[2]) ? 0 : $data[2];
$params = is_numeric($params) ? $params : 0;

Router::get('ürünler', 'products', 'ProductController', 'products');

//if ($request_uri == '/') {
//    call_user_func_array([new HomeController, 'index'], []);
//} else if ($request_uri == '/products') {
//    call_user_func_array([new ProductController, 'products'], []);
//} else if ($params != 0) {
//    call_user_func_array([new ProductController, 'product'], ['id' => $params]);
//} else {
//    require_once APP_ROOT . '/view/404.php';
//}
