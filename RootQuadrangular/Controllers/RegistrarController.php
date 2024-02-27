<?php

    namespace RootQuadrangular\Controllers;

    class RegistrarController{

        public function index(){
            \RootQuadrangular\Views\MainView::render('registrar'); 

            if(isset($_POST['registrar'])){
                $nome = $_POST['nome'];
                $email =$_POST['email'];
                $senha = $_POST['senha'];
                $senhaVal = $_POST['senhaVal'];
            }

            if(!filter_var($email,FILTER_VALIDATE_EMAIL) && ($email != '')){
                \RootQuadrangular\Utilidades::alerta('Email inválido. Por favor, verifique novamente!');
                \RootQuadrangular\Utilidades::redirect(INCLUDE_PATH.'registrar');
            } else if(\RootQuadrangular\Models\UsuariosModel::emailExists($email)){
                \RootQuadrangular\Utilidades::alerta('Email já cadastrado!');
                \RootQuadrangular\Utilidades::redirect(INCLUDE_PATH.'registrar');
            } else if(strlen($senha) < 6 && ($senha != '')) { 
                \RootQuadrangular\Utilidades::alerta('A senha deve conter, pelo menos, 6 dígitos. Tente novamente');
                \RootQuadrangular\Utilidades::redirect(INCLUDE_PATH.'registrar');           
            } else if(!($senha == $senhaVal)){
                \RootQuadrangular\Utilidades::alerta('As senhas não coincidem. Por favor, tente novamente!');
                \RootQuadrangular\Utilidades::redirect(INCLUDE_PATH.'registrar');         
            } else{
                //Registrar usuário
                $senha = \RootQuadrangular\Bcrypt::hash($senha);
                $registro = \RootQuadrangular\MySQL::connect()->prepare("INSERT INTO usuarios VALUES (null,?,?,?)");
                $registro->execute(array($nome,$email,$senha));
                \RootQuadrangular\Utilidades::alerta('Registrado com sucesso!');
                \RootQuadrangular\Utilidades::redirect(INCLUDE_PATH);   
            }
        }
    }

