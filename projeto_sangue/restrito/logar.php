<?php
session_start();
include("funcao.php");

conecta();
$email = capPost('email');
$senha = capPost('senha');
$sql = "SELECT * FROM usuario WHERE email='$email' AND senha='$senha'";

$dados = mysql_query($sql);
if(mysql_num_rows($dados) == 1){
	$_SESSION['logado'] = "ok";
	$linha = mysql_fetch_array($dados);
	$_SESSION['id_usuario'] = $linha['id_usuario'];
	$_SESSION['nome'] = $linha['nome'];
	$_SESSION['email'] = $linha['email'];
	header("Location:logado.php");
}else{
	echo "<script type='text/javascript'>alert('Login ou senha Incorretos, Favor corrija-os e Tente Novamente');window.location.href='../index.php'</script>";
	
}
?>