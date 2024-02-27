<?php
    //ini_set('error_reporting', E_ALL); // mesmo resultado de: error_reporting(E_ALL);
    //ini_set('display_errors', 1);

    session_start();
    require('vendor/autoload.php');

    define('INCLUDE_PATH_STATIC','http://localhost/ProjetoRedeSocial/RootQuadrangular/Views/Pages/');
    define('INCLUDE_PATH','http://localhost/ProjetoRedeSocial/');

    $app = new RootQuadrangular\Application();
    $app->run();
?>