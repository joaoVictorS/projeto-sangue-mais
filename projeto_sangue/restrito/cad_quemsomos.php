<?php
session_start();
include("funcao.php");
conecta();

$titulo = capPost('titulo');
$texto = capPost('texto');
conecta();
$insert ="INSERT INTO quemsomos(titulo,texto)
	   	  VALUE('$titulo','$texto')" ;
$dados = mysql_query($insert);
if($dados){
	echo "<script type='text/javascript'>alert('Dados cadastrados com sucesso.');window.location.href='logado.php'</script>";
	
}else{
	echo "<script type='text/javascript'>alert('Dados nao cadastrados tente novamente.');window.location.href='logado.php'</script>";
	
}

?>