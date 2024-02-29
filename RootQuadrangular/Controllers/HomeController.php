<?php

    namespace RootQuadrangular\Controllers;

    //Classe que executará as ações do controlador como renderizar páginas e chamar métodos do banco de dados
    class HomeController{

        public function index(){

            //Caso exista uma solicitação URL de loggout, encerra-se a sessão e renderiza-se a página de login
            if(isset($_GET['loggout'])){                               
                session_unset();
                session_destroy();
                \RootQuadrangular\Utilidades::redirect(INCLUDE_PATH);
            }

            //Caso exista um usuário logado, efetua as demais ações do controlador dentro da página home
            if(isset($_SESSION['login'])){
                
                //Controla as solicitações de amizade na aba 'Feed' checando se existe algum target.
                if(isset($_GET['targetAccepted'])){
                    $targetAmizade = (int)$_GET['targetAccepted'];                  //coleta apenas a parte inteira da solicitação GET na URL que contém a informação do usuário que pediu amizade
                    \RootQuadrangular\Models\AmizadesModel::aceitaSolicitacaoAmizade($targetAmizade);
                } else if(isset($_GET['targetRejected'])){
                    $targetAmizade = (int)$_GET['targetRejected'];
                    \RootQuadrangular\Models\AmizadesModel::deletaSolicitacaoAmizade($targetAmizade);
                }

                //renderiza a home do usuário logado
                \RootQuadrangular\Views\MainView::render('home'); 
            } 

            //Caso não exista uma sessão ativa, renderiza a página de login.
            else {
                \RootQuadrangular\Views\MainView::render('login');

                //Caso exista um POST, usuário está tentando logar. Opção de POST para proteger dados do usuário.
                if(isset($_POST['login'])){         
                    $email = $_POST['email'];
                    $senha = $_POST['senha'];

                    //Verificação de email no Banco de Dados. Uso de prepare + execute para proteção contra SQL Injection.
                    $verifica = \RootQuadrangular\MySQL::connect()->prepare("SELECT * FROM usuarios WHERE email = ?");
                    $verifica->execute(array($email));

                    if($verifica->rowCount() == 0){
                        \RootQuadrangular\Utilidades::alerta('Usuário não cadastrado!');
                        \RootQuadrangular\Utilidades::redirect(INCLUDE_PATH);
                    }

                    //Verificação de senha no Banco de Dados com uso do método check da dependência Bcrypt
                    else {
                        $dados = $verifica->fetch();
                        $senhaBanco = $dados['senha'];
                        if(\RootQuadrangular\Bcrypt::check($senha,$senhaBanco)){
                            //Usuário logado com sucesso!
                            $nomeArray = explode(' ',$dados['nome']);
                            $_SESSION['login'] = $dados['email'];
                            $_SESSION['id'] = $dados['id'];
                            $_SESSION['nome'] = $nomeArray[0];
                            \RootQuadrangular\Utilidades::redirect(INCLUDE_PATH);  
                        } else {
                            \RootQuadrangular\Utilidades::alerta('Senha incorreta!');
                            \RootQuadrangular\Utilidades::redirect(INCLUDE_PATH);          
                        }
                    }
                }
            }
        }
    }

?>