<?php
    // use $router->method();
    $router->set404(function () {
        header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
        echo '404, route not found!';
    });

    $router->get('/',function(){
        echo "hello";
    }); 
    $router->get('/test','Blog\Controllers\About@index');
?>