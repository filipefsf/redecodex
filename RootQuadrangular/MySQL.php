<?php
    namespace RootQuadrangular;

    define('HOST','localhost');
    define('DB', 'rede_codex');
    define('USER','root');
    define('PASS','');

    //classe responsável por criar uma conexão com o banco de dados
    class MySQL{

        private static $pdo;

        //método que faz a conexão com o banco de dados para inserir, remover, atualizar ou consultar informações
        public static function connect(){
            if(self::$pdo == null){
                try{
                    //instanciação da classe PDO para conexão com o banco de dados
                    self::$pdo = new \PDO('mysql:host='.HOST.';dbname='.DB,USER,PASS,array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

                    //habilita mensagens de erro em caso de insucesso
                    self::$pdo->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
                } catch(\Exception $e){
                    echo 'Erro ao conectar com banco de dados!<br><br>';
                    echo $e->getMessage();
                    error_log($e->getMessage());
                }
            }
            return self::$pdo;
        }
    }

?>