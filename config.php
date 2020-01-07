<?php
    $config = array(
        'app_namespace'  => 'App\Modules',
        'cache_view'     => 'App/cache',
        'route'          => '/App/Route/web',
    );

    $DB_CONNECTION['development'] = array(
       "driver"   => "mysql",
       "host"     => "localhost",
       "database" => "e-idp",
       "username" => "root",
       "password" => ""
    );

    $DB_CONNECTION['production'] = array(
       "driver"   => "mysql",
       "host"     => "localhost",
       "database" => "e-idp",
       "username" => "root",
       "password" => ""
    );

    $DB_CONNECTION['test'] = array(
       "driver"   => "mysql",
       "host"     => "localhost",
       "database" => "e-idp",
       "username" => "root",
       "password" => ""
    );

    $CONNECTION_DEFAULT = $DB_CONNECTION['development'];

?>