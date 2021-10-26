<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
            	<li><a href="index.php">HOME</a></li>
                <li><a href="quemsomos.php">QUEM SOMOS</a></li>
                <li class="atual"><a href="Depoimentos.php">DEPOIMENTOS</a></li>
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
         <!--<div id="depoimentos">
            <h2 class="titu">Depoimentos</h2>
            <p class="nome">Gean Santana</p>
            <a href="#" class="ver">Ver depoimento</a>
            <p class="nome">Gean Santana</p>
            <a href="#" class="ver">Ver depoimento</a>
            <p class="nome">Gean Santana</p>
            <a href="#" class="ver">Ver depoimento</a> -->
        </div>
        </aside>
        
        <article id="centro">
  
 	<div id="dep">
     <?php
 			include("funcao.php");
			conecta();
			$selecao = "SELECT * FROM depoimentos";
			$dados = mysql_query($selecao);

			while($linha = mysql_fetch_array($dados)){
				echo "<h2 class='titu3'>Autor:".strtoupper($linha['nome'])."</h2>
		  			  <p class='nome'>".$linha['titulo']."</p>
					  <p class='#'>".$linha['texto']."</p>";
	
	
}

?>
            
	</div>    
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
