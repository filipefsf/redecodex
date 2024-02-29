<?php
    //ini_set('error_reporting', E_ALL);
    //ini_set('display_errors', 1);

    //constantes de rotas que serão usadas pelas outras classes
    define('INCLUDE_PATH_STATIC','http://localhost/ProjetoRedeSocial/RootQuadrangular/Views/Pages/');
    define('INCLUDE_PATH','http://localhost/ProjetoRedeSocial/');

    //inicia uma sessão no navegador do usuário
    session_start();       
        
    //realiza o carregamento dinâmico de classes
    require('vendor/autoload.php');

    //inicia a aplicação web
    $app = new RootQuadrangular\Application();
    $app->run();
?>