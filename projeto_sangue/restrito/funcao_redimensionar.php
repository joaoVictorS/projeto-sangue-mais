<?php
	function redimensionar($arquivo,$name,$largura,$altura,$pasta){
	
	if($arquivo['type']=="image/jpeg"){
		 
		 $img = imagecreatefromjpeg($arquivo['tmp_name']);
	
	} else if ($arquivo['type']=="image/gif"){
		
		$img = imagecreatefromgif($arquivo['tmp_name']);
	
	} else if ($arquivo['type']=="image/png"){
		
		$img = imagecreatefrompng($arquivo['tmp_name']);
	
	}
	$largura_real = imagesx($img);
	$altura_real = imagesy($img);
	
	$proporcao1 = $altura/$largura;
	$altura_ideal = $largura_real*$proporcao1;
	
	$proporcao2 = $largura/$altura;
	$largura_ideal = $altura_real*$proporcao2;
	
	if($altura_ideal<$altura_real){
		
		$px = ($altura_real-$altura_ideal)/2;
		
		$nova = imagecreatetruecolor ($largura,$altura); 

		imagecopyresampled($nova,$img,0,0,0,$px,$largura,$altura,$largura_real,$altura_ideal);
		
		
	
	} else { 
		
		$px = ($largura_real-$largura_ideal)/2;
		
		$nova = imagecreatetruecolor($largura,$altura); 

		imagecopyresampled($nova,$img,0,0,$px,0,$largura,$altura,$largura_ideal,$altura_real);
		
		
		
	}
			
	imagejpeg($nova,"$pasta/$name");
	
	imagedestroy($img);
	imagedestroy($nova); 
	
	return $name;
	
}
	?>