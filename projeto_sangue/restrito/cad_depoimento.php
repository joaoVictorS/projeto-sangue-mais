<?php
session_start();
include("funcao.php");
conecta();

$nome = capPost('nome');
$titulo = capPost('titulo');
$texto = capPost('texto');
$status = capPost('status');
conecta();
$insert ="INSERT INTO depoimentos(nome,titulo,texto,status)
		VALUES('$nome','$titulo','$texto','$status')" ;
$dados = mysql_query($insert);
if($dados){
	echo "<script type='text/javascript'>alert('Dados cadastrados com sucesso.');window.location.href='logado.php'</script>";
	
}else{
	echo "<script type='text/javascript'>alert('Dados nao cadastrados tente novamente.');window.location.href='logado.php'</script>";
	
}

?>