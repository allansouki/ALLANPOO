<?php


if($_REQUEST){

$pessoa = $_REQUEST['pessoa'];


} else{

header("location:index.php?pessoas");


}
?>


<h1> olá  <?php  echo $pessoa ->getNome();?> seu cadastro foi concluido </h1>