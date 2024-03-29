<?php 

    class Controller {

        public static function callUseCase(string $useCase = null){
            
            if(function_exists($useCase)){
                call_user_func($useCase);

            } else {
                throw new Exception("O caso de uso chamado não existe");
            }
            

        }

        public static function loadView(string $path, array $data = null){

            extract($data); //pesquisar sobre!

            
            
            //O extract transforma em variáveis os elementos presentes em um array associativo;
            $lista_de_variaveis = ["variavel" => "valor da variável"];

            extract($lista_de_variaveis);

            print $variavel; 
            
            //variável era uma posição da lista e virou uma variável com o extract. Vai imprimir "valor da variavel"

            
            
            $caminho = __DIR__ . "/../views/" . $path;
       
            if(file_exists($caminho)){
                 require $caminho;
            } else {
                print "errro";
            }
        }


        
    }



    if(isset($_GET['acao'])){
        $acao = $_GET['acao'];
    } else{
        $acao = "preventDefault";
    }

   
    Controller::callUseCase($acao);

        /*public static function calluseCase(string $funtionName = null){
        
            if (function_exists($funtionName)) {
            
                call_user_func($funtionName);
            
            } else if(function_exists("preventDefault")) {
            
                call_user_func("preventDefault");
            
            } else {
                throw new BadFunctionCallException("Usecase not exists");
            }
        }

        public static function loadView(string $path, array $data = null){

            extract($data); //pesquisar sobre!

            
            
            //O extract transforma em variáveis os elementos presentes em um array associativo;
            $lista_de_variaveis = ["variavel" => "valor da variável"];

            extract($lista_de_variaveis);

            print $variavel; 
            
            //variável era uma posição da lista e virou uma variável com o extract. Vai imprimir "valor da variavel"

            
            
            $caminho = __DIR__ . "/../views/" . $path;
       
            if(file_exists($caminho)){
                 require $caminho;
            } else {
                print "errro";
            }
        }
    }

    @Controller::calluseCase($_GET['action']);
    */
    