<?php

    namespace RootQuadrangular\Controllers;

    class ComunidadeController{
        public function index(){

            if(isset($_GET['loggout'])){
                session_unset();
                session_destroy();
                \RootQuadrangular\Utilidades::redirect(INCLUDE_PATH);
            }

            if(isset($_SESSION['login'])){
                if(isset($_GET['solicitarAmizade'])){
                    $idAlvo = (int)$_GET['solicitarAmizade'];
                    \RootQuadrangular\Models\UsuariosModel::solicitarAmizade($idAlvo);
                }else if(isset($_GET['targetAccepted'])){
                    $targetAmizade = (int)$_GET['targetAccepted'];
                    \RootQuadrangular\Models\AmizadesModel::aceitaSolicitacaoAmizade($targetAmizade);
                    \RootQuadrangular\Utilidades::alerta('Solicitacao aceita');
                }else if(isset($_GET['targetRejected'])){
                    $targetAmizade = (int)$_GET['targetRejected'];
                    \RootQuadrangular\Models\AmizadesModel::deletaSolicitacaoAmizade($targetAmizade);
                    \RootQuadrangular\Utilidades::alerta('Solicitacao recusada');
                }

                \RootQuadrangular\Views\MainView::render('comunidade');

            } else{ 
                \RootQuadrangular\Utilidades::redirect(INCLUDE_PATH);}
            
        }
    }

?>