<?php



//require_once "Pessoas.php";


//$Pessoa = new Pessoas();


//$Pessoa -> setNome("allan");
//$Pessoa -> setidade(21);


//var_dump($Pessoa);


$controller = key($_GET);
$controller.= "Controller";


require_once "controller/$controller.php";

$obj = new $controller();
$obj->view($_SERVER['REQUEST_METHOD']);







?>