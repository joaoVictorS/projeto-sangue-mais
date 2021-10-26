<?php
session_start();
include("funcao.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Visualizar Notícias</title>
</head>

<body>
<a href="index.php">Voltar</a><br />
	<?php
	//noticia
		conecta();
		$sql = "SELECT * FROM noticia ORDER BY id_noticia DESC";
		$tudo = mysql_query($sql);
		while($linha=mysql_fetch_array($tudo)){
	?>
	<?php
        //mostrar_noticia 
echo"<img src='noticia/".$linha['foto']."'>";
echo"<p>".$linha['texto']."</p>";
}
    ?>
               
</body>
</html>