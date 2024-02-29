<?php

    namespace RootQuadrangular;

    class Utilidades{

        //Redireciona para outra pagina
        public static function redirect($url){                  
            echo '<script>window.location.href="'.$url.'"</script>';
            die();
        }

        //Emite alerta para o usuário.
        public static function alerta($mensagem){
            echo '<script>alert("'.$mensagem.'")</script>';
        }

        //Função JavaScript ativada depois de uma conta ser criada com sucesso!
        public static function sucesso(){
            echo '<script>mostrarMensagemSucesso();</script>';
        }
    }

?>