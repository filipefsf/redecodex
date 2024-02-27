<?php
    namespace RootQuadrangular;

    define('HOST','localhost');
    define('DB', 'rede_codex');
    define('USER','root');
    define('PASS','');

    class MySQL{

        private static $pdo;

        public static function connect(){
            if(self::$pdo == null){
                try{
                    self::$pdo = new \PDO('mysql:host='.HOST.';dbname='.DB,USER,PASS,array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                    self::$pdo->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
                } catch(Exception $e){
                    echo 'Erro ao conectar com banco de dados!';
                    error_log($e->getMessage());
                }
            }

            return self::$pdo;
        }
    }

?>