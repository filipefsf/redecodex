<?php

    namespace RootQuadrangular\Controllers;

    class HomeController{
        //executa as ações do controlador: renderizar, p.e.
        public function index(){

            if(isset($_GET['loggout'])){
                session_unset();
                session_destroy();
                \RootQuadrangular\Utilidades::redirect(INCLUDE_PATH);
            }
            
            //Dependendo se é a tela de registrar ou não, carrega-se uma ou outra página
            if(isset($_SESSION['login'])){
                //renderiza a home do usuário
                \RootQuadrangular\Views\MainView::render('home');
            } else {
                if(isset($_POST['login'])){         //usuário tentando logar
                    $email = $_POST['email'];
                    $senha = $_POST['senha'];

                    //Verificação no Banco de Dados
                    $verifica = \RootQuadrangular\MySQL::connect()->prepare("SELECT * FROM usuarios WHERE email = ?");
                    $verifica->execute(array($email));

                    if($verifica->rowCount() == 0){
                        //Usuário não existe!
                        \RootQuadrangular\Utilidades::alerta('Usuário não cadastrado!');
                        \RootQuadrangular\Utilidades::redirect(INCLUDE_PATH);
                    } else {
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
                \RootQuadrangular\Views\MainView::render('login');
            }
        }
    }

?>