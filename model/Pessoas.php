<?php



class Pessoas {

   private $nome;
   private $idade;
   private $cpf;

   function __construct($nome,$idade,$cpf){

    
    $this->nome =$nome;
    $this->idade =$idade;
    $this->cpf =$cpf;

   }


public function getnome(){

return $this->nome;


}


public function setnome($novoNome){

   $this->nome = $novoNome;
    
    
    }


    public function getidade(){

        return $this->idade;
        
        
        }



        public function setidade($novoidade){

            $this->idade = $novoidade;
             
             
             }


             public function getcpf(){

                return $this->cpf;
                
                
                }

                public function setcpf($novoidade){

                    $this->cpf = $cpf;
                     
                     
                     }



public function cadastrarPessoas($con,$pessoa){

try{

$query = $con->prepare("inset into usuarios(nome,idade,cpf) VALUES(?,?,?)");
$query->execute([
 
    $pessoa->getNome(),
    $pessoa->getIdade(),
    $pessoa->getCpf()
]);


return $query;
} catch(PDOException $e){

return false;

}

    



}


    



}




?>