<?php

    namespace RootQuadrangular\Models;

    //Classe que realiza as consultas, atualizações, inserçoes e remoções do banco de dados para a tabela usuários
    class UsuariosModel{

        //checa se um email existe no banco de dados
        public static function emailExists($email){        
            
            //consulta se o email existe prevenindo contra SQL Injection
            $pdo = \RootQuadrangular\MySQL::connect();
            $verificacao = $pdo->prepare("SELECT email FROM usuarios WHERE email = ?");
            $verificacao->execute(array($email));

            //resultado = 1, email já existe. resultado = 0, email não existe no banco
            if($verificacao->rowCount() == 1){
                return true;
            } else{
                return false;
            }
        }
    
        //método que lista todos os usuários existentes na Rede Codex
        public static function listarComunidade(){
            $pdo = \RootQuadrangular\MySQL::connect();  
            $comunidade = $pdo->prepare("SELECT * FROM usuarios");
            $comunidade->execute();
            return $comunidade->fetchAll();
        }
    }
?>