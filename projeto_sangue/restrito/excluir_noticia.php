<title>ADM - Solu&ccedil;&atilde;o Integrada - Excluir Not&iacute;cias</title>
<?php
//ob_start();
	session_start();
	include("funcao.php");	
conecta();

$id_noticia = $_GET['id_noticia'];
	//deletar imagem da pasta
		$sql = mysql_query("SELECT * from noticia WHERE id_noticia='$id_noticia' ");
		$linha = mysql_fetch_array($sql);
		$foto = $linha['foto'];
		 $sql = mysql_query("DELETE FROM noticia WHERE id_noticia='$id_noticia' ");
			if($sql){
				unlink("noticia/$foto");
		unlink("original/$foto");
		echo "<h2>Noticia Excluída com sucesso, <a href='index.php'>voltar</a></h2>";
	}else{
		echo"erro ao excluir, <a href='index.php'>TENTE NOVAMENTE!</a>";
	}		
		
?>