<?php

require_once "model/Pessoas.php";
class PessoasController{


public function view($server){



switch ($server) {
    case 'GET':
       require_once"view/cadastro.php";
        break;
    
        case 'POST':
        
    $novaPessoa = new Pessoas();
    $novaPessoa->setNome($_POST['nome']);
    $novaPessoa->setNome($_POST['idade']);
    $novaPessoa->setNome($_POST['cpf']);
        
  $_REQUEST['pessoa'] = $novaPessoa;
 
 require_once "view/sucesso.php";
  break;
}













}




}





?>