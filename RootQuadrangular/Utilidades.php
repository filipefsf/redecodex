<?php

    namespace RootQuadrangular;

    class Utilidades{

        public static function redirect($url){                  //redireciona para outra pagina
            echo '<script>window.location.href="'.$url.'"</script>';
            die();
        }

        public static function alerta($mensagem){
            echo '<script>alert("'.$mensagem.'")</script>';
        }
    }

?>