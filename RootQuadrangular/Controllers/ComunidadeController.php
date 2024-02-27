<?php

    namespace RootQuadrangular\Controllers;

    class ComunidadeController{
        public function index(){

            if(isset($_GET['loggout'])){
                session_unset();
                session_destroy();
                \RootQuadrangular\Utilidades::redirect(INCLUDE_PATH);
            }

            if(isset($_SESSION['login']))\RootQuadrangular\Views\MainView::render('comunidade'); 
            else \RootQuadrangular\Utilidades::redirect(INCLUDE_PATH);
            
        }
    }

?>