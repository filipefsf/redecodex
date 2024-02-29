<?php

    namespace RootQuadrangular\Controllers;

    //Classe que executará as ações do controlador como renderizar páginas e chamar métodos do banco de dados
    class ComunidadeController{
        public function index(){

            //Caso exista uma solicitação URL de loggout, encerra-se a sessão e renderiza-se a página de login
            if(isset($_GET['loggout'])){
                session_unset();
                session_destroy();
                \RootQuadrangular\Utilidades::redirect(INCLUDE_PATH);
            }

            //Caso exista um usuário logado, efetua as demais ações do controlador dentro da página comunidade
            if(isset($_SESSION['login'])){

                //Verifica se existe uma requisição de solicitação de amizade na aba comunidade
                if(isset($_GET['solicitarAmizade'])){
                    $idAlvo = (int)$_GET['solicitarAmizade'];
                    \RootQuadrangular\Models\AmizadesModel::solicitarAmizade($idAlvo);

                //verifica se existe uma requisição de aceite ou de recusa de uma determinada amizade
                }else if(isset($_GET['targetAccepted'])){
                    $targetAmizade = (int)$_GET['targetAccepted'];
                    \RootQuadrangular\Models\AmizadesModel::aceitaSolicitacaoAmizade($targetAmizade);
                }else if(isset($_GET['targetRejected'])){
                    $targetAmizade = (int)$_GET['targetRejected'];
                    \RootQuadrangular\Models\AmizadesModel::deletaSolicitacaoAmizade($targetAmizade);
                }

                \RootQuadrangular\Views\MainView::render('comunidade');
            } else{ 
                \RootQuadrangular\Utilidades::redirect(INCLUDE_PATH);}
        }
    }

?>