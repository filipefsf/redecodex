<?php

    namespace RootQuadrangular\Views;

    //classe que renderiza dinamicamente uma página para o usuário
    class MainView{
        public static function render($filename){
            include('pages/'.$filename.'.php');
        }
    }

?>