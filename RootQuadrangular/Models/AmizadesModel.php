<?php

    namespace RootQuadrangular\Models;

    class AmizadesModel{
        public static function verificaSolicitacaoAmizade($idAlvo){
            $pdo = \RootQuadrangular\MySQL::connect();
            //query que verifica se já existe um pedido de amizade entre dois id's que ainda não foi recebido
            $pedidoAmizadeEnviado = $pdo->prepare("SELECT * FROM amizades WHERE (enviou = ? AND recebeu = ?) AND status = 0");
            $pedidoAmizadeEnviado->execute(array($_SESSION['id'],$idAlvo));
            $pedidoAmizadeRecebido = $pdo->prepare("SELECT * FROM amizades WHERE (enviou = ? AND recebeu = ?) AND status = 0");
            $pedidoAmizadeRecebido->execute(array($idAlvo,$_SESSION['id']));
            $verificaSeSaoAmigos = $pdo->prepare("SELECT * FROM amizades WHERE ((enviou = ? AND recebeu = ?) OR (enviou = ? AND recebeu = ?)) AND status = 1");
            $verificaSeSaoAmigos->execute(array($idAlvo,$_SESSION['id'],$_SESSION['id'],$idAlvo));

            if($pedidoAmizadeEnviado->rowCount() == 1){            //solicitação enviada e aguardando aprovação
                return "enviado";   
            } else if($pedidoAmizadeRecebido->rowCount() == 1){
                return "recebido";
            } else if($verificaSeSaoAmigos->rowCount()==1) {
                return "amigos";
            } else {
                return;
            }

        }

        public static function deletaSolicitacaoAmizade($idAlvo){
            $pdo = \RootQuadrangular\MySQL::connect();
            
            $amizadeRecusada = $pdo->prepare("DELETE FROM amizades WHERE enviou = ?");
            $amizadeRecusada->execute(array($idAlvo));
        }

        public static function aceitaSolicitacaoAmizade($idAlvo){
            $pdo = \RootQuadrangular\MySQL::connect();
            
            $amizadeAceita = $pdo->prepare("UPDATE `amizades` SET `status`=1 WHERE enviou = ?");
            $amizadeAceita->execute(array($idAlvo));
        }
    }

?>