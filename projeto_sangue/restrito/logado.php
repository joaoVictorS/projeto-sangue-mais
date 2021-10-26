<?php
session_start();
include("funcao.php");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="http://malsup.github.com/jquery.cycle2.js"></script></script>
<link rel="stylesheet" type="text/css" href="../style_adm.css" />
<title>Sangue +</title>
</head>


<body>
	<section id="geral">
        <header id="topo"><!-- início topo -->
        	<div id="topo-esquerda">
            <img src="../images/logo.png" class="logo" />
            
			</div>
 
            <div id="topo-direita">
            	          <?php
$logado = capSession('logado');
if($logado != "ok"){
	header("Location:index.php");
}else{
	echo"<p>Seja bem-vindo," . capSession('nome') . "</p>
	<p>" . capSession('email') . "</p>
	<a href='sair.php' > Sair do sistema</a>";
}

?>
               
			</div>
        </header><!-- fim topo -->
        
        <section id="conteudo">
        
        <div id="caixa">
    
        <div id="caixa_d">
               <h2> Gerenciar</h2>
       <menu id="menu">
        	<ul>
            	<li class="atual"><a href="index.php">HOME</a></li>
                <li><a href="quemsomos.php">QUEM SOMOS</a></li>
                <li><a href="Depoimentos.php">DEPOIMENTOS</a></li>
                <li><a href="contatos.php">CONTATO</a></li>
            </ul>
        </menu>
        </div>
        
        <div id="caixa_e">
        c
        </div>
        
        </div>
        
    </section>

  
</body>
</html>