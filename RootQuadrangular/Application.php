<?php

    namespace RootQuadrangular;

    // Classe será chamada quando usuário entrar para definir para onde ele deve ir
    class Application{

        private $controller;

        //método que habilita os controladores de páginas
        private function setApp(){
            $loadName = 'RootQuadrangular\Controllers\\'; 

            //divisão da URL em um array para coletar a primeira informação após a barra
            $url = explode('/',$_GET['url']);               
        
            //Se a URL estiver vazia, por definição ativará o HomeController
            if($url[0] == ''){                              
                $loadName.='Home';                         
            } else {
                //Coloca a informação em minúsculo e depois a primeira letra em maiúsculo
                $loadName.=ucfirst(strtolower($url[0]));    
            }

            $loadName.='Controller';  
            
            //aplicação irá para ambiente linux em que ocorrem erros em caso de barras invertidas
            $load = str_replace('\\','/',$loadName);        

            //checa se o arquivo Controller existe
            if(file_exists($load.'.php')){     
                //realiza uma instanciação dinâmica de classe com base na string             
                $this->controller = new $loadName();   

            //se o arquivo não existe, renderiza-se uma página de erro.     
            }else{                                          
                include('Views/pages/404.php');
                die();
            }       
        }

        //método que dá início a aplicação
        public function run(){
            $this->setApp();
            $this->controller->index();
        }
    }

?>