<?php
	include("funcao.php");
	conecta();
	$arquivo = $_FILES['arquivo'];
	$dados   = getimagesize($arquivo['tmp_name']);
	if($dados[2] == 1 || $dados[2] == 2 || $dados[2] == 3){
		$tamanhoPermitido = 1024 * 1024;
		$arqName  = $_FILES['arquivo']['name'];
		$arqSize  = $_FILES['arquivo']['size'];
		$arqTmp   = $_FILES['arquivo']['tmp_name'];
		$arqError = $_FILES['arquivo']['error'];
		if($arqError == 0){
			if($arqSize > $tamanhoPermitido){
				echo"tamanho é maior que o permitido ";
			}else{				
				$parceiros  = 'parceiro';			
				$original    = 'original/';
				
				require("funcao_redimensionar.php");
				
				$extensao     = strtolower(end(explode('.',$arqName)));
				$nome_arquivo = md5(uniqid(time())).'.'.$extensao;			
				redimensionar($arquivo,$nome_arquivo,220,50,$parceiros);				
				$upload = move_uploaded_file($arqTmp,$original . $nome_arquivo);
				
				if($upload == true){
						//$datac = converteData('data');
						$cadastro = mysql_query("INSERT INTO parceiros(foto)VALUES('$nome_arquivo')");			
						if($cadastro == true){
							echo "<h2>Notícia Publicado com sucesso, <a href='logado.php'>voltar</a></h2>";
							//header("Location:logado2.php");
						}else{
							echo"Não foi possível Publicar a Notícia, <a href='logado.php'>TENTE NOVAMENTE!</a>";
						}				
				}
			
			}
		
		}
	
	}

?>
