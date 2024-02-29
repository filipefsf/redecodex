<?php

    namespace RootQuadrangular\Models;

    class UsuariosModel{
        public static function emailExists($email){                 //checa se um email existe no banco
            $pdo = \RootQuadrangular\MySQL::connect();
            $verificacao = $pdo->prepare("SELECT email FROM usuarios WHERE email = ?");
            $verificacao->execute(array($email));

            if($verificacao->rowCount() == 1){
                return true;
            } else{
                return false;
            }
        }
    
        public static function listarComunidade(){
            $pdo = \RootQuadrangular\MySQL::connect();  
            $comunidade = $pdo->prepare("SELECT * FROM usuarios");
            $comunidade->execute();

            return $comunidade->fetchAll();

        }

        public static function solicitarAmizade($idAlvo){
            $pdo = \RootQuadrangular\MySQL::connect(); 

            $verificaAmizade = $pdo->prepare("SELECT * FROM amizades WHERE (enviou = ? AND recebeu = ?) OR (enviou = ? AND recebeu = ?)");
            $verificaAmizade->execute(array($_SESSION['id'],$idAlvo,$idAlvo,$_SESSION['id']));

            if($verificaAmizade->rowCount() == 1){            //já existe uma solicitação de amizade
                return false;
            }else{
                //insere no banco a solicitação
                $insertAmizade = $pdo->prepare("INSERT INTO amizades VALUES (null,?,?,0)");
                if($insertAmizade->execute(array($_SESSION['id'],$idAlvo))) return true;
            } 
        }

    }

        
    

?>