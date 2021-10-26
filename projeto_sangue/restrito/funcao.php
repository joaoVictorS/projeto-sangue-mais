<?php
function conecta()   {
	$local = mysql_connect('localhost','root','');
	$db = mysql_select_db('sanguemais');
		
}
function capPost($infor){
	return isset($_POST[$infor]) ? $_POST[$infor] : NULL;
	
}
function capSession($infor){
	return isset($_SESSION[$infor]) ? $_SESSION[$infor] : NULL;
	
}
function capGet($infor){
	return isset($_GET[$infor]) ? $_GET[$infor] : NULL;
	
}

?>