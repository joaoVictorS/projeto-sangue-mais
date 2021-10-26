<?php 
	//ob_start();
	session_start();
	include("funcao.php");
	
	conecta();

	$arquivo = $_FILES['arquivo'];
		$dados   = getimagesize($arquivo['tmp_name']);
					//print_r($dados);
			if($dados[2] == 1 || $dados[2] == 2 || $dados[2] == 3){
				$tamanhoPermitido = 1024 * 1024;
				$arqName  = $_FILES['arquivo']['name'];
				$arqSize  = $_FILES['arquivo']['size'];
				$arqTmp   = $_FILES['arquivo']['tmp_name'];
				$arqError = $_FILES['arquivo']['error'];
		
					if($arqError == 0){
						if($arqSize > $tamanhoPermitido){
							echo"tamanho é maior que o permitido";
					}else{
						$noticias  = 'noticia/';
						$original     = 'original/';
				
						require("funcao_redimensionar.php");
				
						$extensao     = strtolower(end(explode('.',$arqName)));
						$nome_arquivo = md5(uniqid(time())).'.'.$extensao;
				//atualiza a foto permanecendo com o mesmo nome
				$id_noticia =$_POST['id_noticia'];		
				$sqlf = mysql_query("SELECT * FROM noticia WHERE id_noticia='$id_noticia'");
				$linhaf = mysql_fetch_array($sqlf);
				$nome_arquivo = $linhaf['foto'];
				
						redimensionar($arquivo,$nome_arquivo,145,96,$noticias);
						
						$upload = move_uploaded_file($arqTmp,$original . $nome_arquivo);
				
				if($upload == true){
					
					$id_noticia = $_POST[('id_noticia')];
					//$titulo = $_POST[('titulo')];
					$texto = $_POST[('texto')];
					//$descricao = $_POST[('descricao')];
					
					//$id_noticia =$_POST['id_noticia'];
	//deletar imagem da pasta
		$sql = mysql_query("SELECT * from noticia WHERE id_noticia='$id_noticia' ");
		$linha = mysql_fetch_array($sql);
		$foto = $linha['foto'];
						
					$editar = mysql_query("UPDATE noticia SET  texto='$texto', foto='$nome_arquivo' WHERE id_noticia='$id_noticia'");
					
					if($editar == true){
						echo "<h2>Noticia Atualizada com sucesso, <a href='index.php'>voltar</a></h2>";
						}else{
							echo"erro, <a href='index.php'>TENTE NOVAMENTE!</a>";
						}					
					}
				}
			
			}
		
		}	
		 	
?>
</body>
</html>