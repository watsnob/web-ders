<?php
//ternary
$site_url = (isset($_SERVER['HTTP_HOST'])) ? 'http://'. $_SERVER['HTTP_HOST'] : 'https://'. $_SERVER['HTTP_HOST'];

define('APP_URL', $site_url);
define('APP_ROOT', dirname(__FILE__));