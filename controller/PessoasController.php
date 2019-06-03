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
    $novaPessoa->setNome($_post['nome']);
    $novaPessoa->setNome($_post['idade']);
    $novaPessoa->setNome($_post['cpf']);
        
  $_REQUEST['pessoa'] = $novaPessoa;
 
 require_once "view/sucesso.php";
  break;
}






require_once "view/cadastro.php";







}




}





?>