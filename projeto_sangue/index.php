<?php 
session_start();
include("restrito/funcao.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="http://malsup.github.com/jquery.cycle2.js"></script></script>
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Sangue +</title>
</head>

<body>
	<section id="geral">
        <header id="topo"><!-- início topo -->
        	<div id="topo-esquerda">
            <img src="images/logo.png" class="logo" />
            <p class="txt">Hoje você é doador, mas amanhã....
tudo depende de você!</p>
			</div>
            <div id="topo-direita">
            	<form action="#" id="frm">
                	<input type="text" placeholder="Pesquise Aqui" class="inp" />
                    <input type="button" value="IR" class="btn" />                
                </form>
               
			</div>
        </header><!-- fim topo -->
        <menu id="menu">
        	<ul>
            	<li class="atual"><a href="index.php">HOME</a></li>
                <li><a href="quemsomos.php">QUEM SOMOS</a></li>
                <li><a href="Depoimentos.php">DEPOIMENTOS</a></li>
                <li><a href="contatos.php">CONTATO</a></li>
            </ul>
        </menu>
        <section id="conteudo">
        <aside id="esquerda">
        <h2 class="titu">Acesso Restrito</h2>
        <form action="restrito/logar.php" method="post" id="frm1">
        
        	<input type="text" name="email" placeholder="Digite seu E-mail" class="ipt" />
            <input type="password" name="senha" placeholder="Digite sua senha" class="ipt" />
            <input type="submit" value="" class="bnt_sub" />
            
        </form>
         <div id="depoimentos">
         <h2 class="titu">Ultimos depoimentos</h2>
         <?php 
		conecta();
		$selecao="SELECT * FROM depoimentos ORDER BY id_depoimento DESC";
		$dados = mysql_query($selecao);
	
		while($linha=mysql_fetch_array($dados)){
			echo"<p class='nome'>".strtoupper($linha ['nome']). "</p>
				 <a href='ler.php?id_depoimento=".$linha['id_depoimento']."'>Ler depoimento</a>";	
		}
		?>
        </div>
              </aside>
        
        <article id="centro">
       
 <div class='cycle-slideshow' data-cycle-fx='fade' data-cycle-timeout='2000'>
        <?php
		conecta();
		$selecao="SELECT * FROM banner ORDER BY id_banner DESC";
		$dados = mysql_query($selecao);
		while($linha=mysql_fetch_array($dados)){
			echo"
					<img src='restrito/banner/".$linha ['foto']."'/> 
					";	
		}

?></div>

 <section id="informacao">
 
 <?php
 
 conecta();
		$selecao="SELECT * FROM noticia ORDER BY id_noticia DESC";
		$dados = mysql_query($selecao);
		while($linha=mysql_fetch_array($dados)){
			echo"<img src='restrito/noticia/".$linha ['foto']."' class='mini' />
				 <p class='texto'><a href='ler.php?id_noticia=".$linha['id_noticia']."'>".$linha['texto']." </a></p>";	
		}
 ?>

  
 </section> 
       
        </article>
        
        <aside id="direita">
        
      
       
        	<h2 class="titu">Parceiros</h2>
            <center>
            <?php
		conecta();
		$selecao="SELECT * FROM parceiros ORDER BY id_parceiros DESC";
		$dados = mysql_query($selecao);
		while($linha=mysql_fetch_array($dados)){
			echo"<img class='ima' src='restrito/parceiro/".$linha ['foto']."'/> ";	
		}

?>
          
        </center>
        
        </aside>
       <section id="rodape">
       
		<p class="roda">Copyright © 2014 Sangue Mais. Todos os direitos reservados.</p>
                           	<a href="https://www.facebook.com/Sanguemais" target="_blank" title="Sangue +" class="linq"><img src="images/fc.png" /></a>
                             <a href="index.php"><img src="restrito/fotos/logo.png" id="logoroda" /></a>
 <div id="rds">
                    
                    
                </div>
       </section>
        
        </section>
    </section>

  
</body>
</html>
