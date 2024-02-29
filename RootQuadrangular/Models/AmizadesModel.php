<?php

    namespace RootQuadrangular\Models;

    //Classe que realiza as consultas, atualizações, inserçoes e remoções do banco de dados para a tabela amizades
    class AmizadesModel{

        //método que mostra as solicitações pendentes de um terminado usuário $idAlvo
        public static function listarSolicitacoes($idAlvo){

            //conecta com banco de dados
            $pdo = \RootQuadrangular\MySQL::connect();

            //realiza uma junção de tabelas e retorna os usuários que fizeram solicitações de amizade para o $idAlvo. Realiza através de prevenção de SQL Injection
            $solicitacoes = $pdo->prepare("SELECT * FROM usuarios INNER JOIN amizades ON usuarios.id=amizades.enviou WHERE (amizades.recebeu = ? AND amizades.status = 0)");
            $solicitacoes->execute(array($idAlvo));

            //retorna a busca realiza no banco de dados
            return $solicitacoes->fetchAll();
        }

        //método que avalia a relação do usuário com o restante da comunidade para saber se são amigos, se existe uma solicitação pendente ou se ele recebeu uma solicitação
        public static function verificaSolicitacaoAmizade($idAlvo){
            $pdo = \RootQuadrangular\MySQL::connect();
            
            //query que verifica se o usuário logado enviou uma solicitação de amizade para outro
            $pedidoAmizadeEnviado = $pdo->prepare("SELECT * FROM amizades WHERE (enviou = ? AND recebeu = ?) AND status = 0");
            $pedidoAmizadeEnviado->execute(array($_SESSION['id'],$idAlvo));

            //query que verifica se o usuário logado recebeu uma solicitação de amizade de outro
            $pedidoAmizadeRecebido = $pdo->prepare("SELECT * FROM amizades WHERE (enviou = ? AND recebeu = ?) AND status = 0");
            $pedidoAmizadeRecebido->execute(array($idAlvo,$_SESSION['id']));

            //query que verifica se o usuário logado já é amigo dos outros da comunidade
            $verificaSeSaoAmigos = $pdo->prepare("SELECT * FROM amizades WHERE ((enviou = ? AND recebeu = ?) OR (enviou = ? AND recebeu = ?)) AND status = 1");
            $verificaSeSaoAmigos->execute(array($idAlvo,$_SESSION['id'],$_SESSION['id'],$idAlvo));

            //solicitação enviada e aguardando aprovação
            if($pedidoAmizadeEnviado->rowCount() == 1){            
                return "enviado"; 
                
            //solicitação recebida e aguardando aprovação   
            } else if($pedidoAmizadeRecebido->rowCount() == 1){
                return "recebido";

            //já são amigos
            } else if($verificaSeSaoAmigos->rowCount()==1) {
                return "amigos";

            //Não existe nenhuma solicitação de amizade
            } else {
                return;
            }
        }

        //método que remove uma determinada solicitação do banco de dados por ter sido declinada pelo usuário
        public static function deletaSolicitacaoAmizade($idAlvo){
            $pdo = \RootQuadrangular\MySQL::connect();
            
            //deleta as relações de amizades existentes entre o id do solicitante e o id do usuário
            $amizadeRecusada = $pdo->prepare("DELETE FROM amizades WHERE (enviou = ? AND recebeu = ?)");
            $amizadeRecusada->execute(array($idAlvo,$_SESSION['id']));
        }

        //método que atualiza o status=1 da relação entre dois usuários na tabela amizade
        public static function aceitaSolicitacaoAmizade($idAlvo){
            $pdo = \RootQuadrangular\MySQL::connect();
            
            //muda a relação de amizade existente através da coluna status. Agora aquela solicitação foi respondida
            $amizadeAceita = $pdo->prepare("UPDATE `amizades` SET `status`=1 WHERE (enviou = ? AND recebeu = ?)");
            $amizadeAceita->execute(array($idAlvo,$_SESSION['id']));
        }

        //método que cria uma nova solicitação de amizade entre dois usuários distintos
        public static function solicitarAmizade($idAlvo){
            $pdo = \RootQuadrangular\MySQL::connect(); 

            //esta query verifica se já existe um pedido de amizade entre esse dois usuários existente
            $verificaAmizade = $pdo->prepare("SELECT * FROM amizades WHERE (enviou = ? AND recebeu = ?) OR (enviou = ? AND recebeu = ?)");
            $verificaAmizade->execute(array($_SESSION['id'],$idAlvo,$idAlvo,$_SESSION['id']));

            //caso o pedido já exista, retorna false
            if($verificaAmizade->rowCount() == 1){           
                return false;

             //Caso não exista, insere uma nova amizade no banco de dados na tabela 'amizades'
            }else{
                $insertAmizade = $pdo->prepare("INSERT INTO amizades VALUES (null,?,?,0)");
                if($insertAmizade->execute(array($_SESSION['id'],$idAlvo))) return true;
            } 
        }
    }

?>