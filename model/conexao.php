<?php





$host ="mysql:host=localhost;dbname=sistemapoo;charset=utf8mb4;port=3307";

$dbUser ="root";
$dbpass ="";


try{


$con = new PDO($host,$dbUser,$dbpass);
$con ->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);

}catch(PDOEexception $e){

echo"Estamos em manutenção volte novamente mais tarde";

echo $e->getMessage();
}



?>