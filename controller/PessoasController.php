<?php

require_once "model/Pessoas.php";

require_once "model/Usuarios.php";
require_once "model/conexao.php";
class PessoasController{


public function view($server){


 global $conn;
switch ($server) {
    
    case 'GET':
       require_once "view/cadastro.php";
        break;
    
        case 'POST':
        $tipoPessoa = $_POST['tipoPessoa'];
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $cpf = $_POST['cpf'];
        $usuario = $_POST['usuario'];
        $senha = password_hash($_POST['senha'],PASSWORD_DEFAULT);  

        if($tipoPessoa =="usuario"){

   $novoUsuario =new Usuarios("$nome","$idade","$cpf","$usuario","$senha");
   

        };

        if($novoUsuario->cadastroPessoa($con,$novoUsuario)){


          $_REQUEST['pessoa'] =$novoUsuario;
          require_once "view/sucesso.php";

        }
        else{

echo" deu ruim";


        }
        
   // $novaPessoa = new Pessoas();
   // $novaPessoa->setNome($_POST['nome']);
   // $novaPessoa->setNome($_POST['idade']);
   // $novaPessoa->setNome($_POST['cpf']);
        
  $_REQUEST['pessoa'] = $novoUsuario;
 
 require_once "view/sucesso.php";
  break;
}













}




}





?>