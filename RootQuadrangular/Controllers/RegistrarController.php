<?php

    namespace RootQuadrangular\Controllers;

    //Classe que executará as ações do controlador de registro como renderizar páginas e comunicar com banco de dados
    class RegistrarController{

        public function index(){

            //renderiza a página de Criar Conta de usuário
            \RootQuadrangular\Views\MainView::render('registrar'); 

            //através de uma solicitação POST, será realizada a validação dos dados inseridos
            if(isset($_POST['registrar'])){
                $nome = $_POST['nome'];
                $email =$_POST['email'];
                $senha = $_POST['senha'];
                $senhaVal = $_POST['senhaVal'];
            }

            //método filter_var é um método externo de validação de emails. Caso não seja válido e o email não for vazio, invalida cadastro.
            if(!filter_var($email,FILTER_VALIDATE_EMAIL) && ($email != '')){
                \RootQuadrangular\Utilidades::alerta('Email inválido. Por favor, verifique novamente!');
                \RootQuadrangular\Utilidades::redirect(INCLUDE_PATH.'registrar');

            //checagem para saber se o email já existe no banco de dados.
            } else if(\RootQuadrangular\Models\UsuariosModel::emailExists($email)){
                \RootQuadrangular\Utilidades::alerta('Email já cadastrado!');
                \RootQuadrangular\Utilidades::redirect(INCLUDE_PATH.'registrar');

            //checagem para verificar se a senha tem menos do que 6 dígitos, caso contrário, invalida-se o cadastro. OBS.: Aqui cabem mais
            //verificações para tornar a senha mais segura, mas ainda não foi implementado.
            } else if(strlen($senha) < 6 && ($senha != '')) { 
                \RootQuadrangular\Utilidades::alerta('A senha deve conter, pelo menos, 6 dígitos. Tente novamente');
                \RootQuadrangular\Utilidades::redirect(INCLUDE_PATH.'registrar');   
                
            //Como o campo de senha é oculto, o usuário digita a senha 2 vezes para validar em caso de erro de digitação.
            } else if(!($senha == $senhaVal)){
                \RootQuadrangular\Utilidades::alerta('As senhas não coincidem. Por favor, tente novamente!');
                \RootQuadrangular\Utilidades::redirect(INCLUDE_PATH.'registrar'); 
                
            //Caso ele passe em todas as verificações, o usuário é registrado!
            } else{
                //encriptografa a senha com a biblioteca Bcrypt e utiliza-se prepare+execute para proteção contra SQL Injection;
                $senha = \RootQuadrangular\Bcrypt::hash($senha);
                $registro = \RootQuadrangular\MySQL::connect()->prepare("INSERT INTO usuarios VALUES (null,?,?,?)");
                $registro->execute(array($nome,$email,$senha));
                \RootQuadrangular\Utilidades::sucesso();  

                // Adiciona um pequeno atraso antes de redirecionar
                echo '<script>
                        setTimeout(function() {
                            window.location.href = "'.INCLUDE_PATH.'";
                        }, 3000); // Redireciona após 3 segundos
                    </script>';
            }
        }
    }

