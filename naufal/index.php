<?php
$filename = __DIR__ . preg_replace('#(\?.*)$#', '', $_SERVER['REQUEST_URI']);
if (php_sapi_name() === 'cli-server' && is_file($filename)) {
    return false;
}
require __DIR__.'/config.php';    
require __DIR__ . '/vendor/autoload.php';
$router = new \Bramus\Router\Router();
$router->setNamespace($config['app_namespace']);
require __DIR__.$config['route'].'.php';
$router->run();
?>