<?php

    namespace RootQuadrangular\Models;

    class UsuariosModel{
        public static function emailExists($email){
            $pdo = \RootQuadrangular\MySQL::connect();
            $verificacao = $pdo->prepare("SELECT email FROM usuarios WHERE email = ?");
            $verificacao->execute(array($email));

            if($verificacao->rowCount() == 1){
                return true;
            } else{
                return false;
            }
        }
    }

?>