<?php

    namespace RootQuadrangular;
    // Classe será chamada quando usuário entrar para definir para onde ele deve ir
    class Application{
        private $controller;

        private function setApp(){
            $loadName = 'RootQuadrangular\Controllers\\'; 
            $url = explode('/',$_GET['url']);               //sabemos a URL que estamos e pegamos a página exata
        
            if($url[0] == ''){                              //O que fazer com base na URL. O @ não deixa dar erro se estiver vazio
                $loadName.='Home';                          //Caso não seja definido, vá para Home
            } else {
                $loadName.=ucfirst(strtolower($url[0]));   //Coloca tudo em minúsculo e depois a primeira letra em maiúsculo
            }

            $loadName.='Controller';                        //no fim, concatena com Controller
            $load = str_replace('\\','/',$loadName);

            if(file_exists($load.'.php')){
                $this->controller = new $loadName();            //instanciação dinâmica de classe
            }else{
                include('Views/pages/404.php');
                die();
            }
            
        }

        public function run(){
            $this->setApp();
            $this->controller->index();
        }
    }

?>