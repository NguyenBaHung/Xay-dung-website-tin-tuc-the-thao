<?php  
	$nametenmay = "localhost";
	$nametk ="root";
	$pass ="";
	$csdl ="tintuctt";

	$connect = mysqli_connect($nametenmay, $nametk, $pass, $csdl);
	mysqli_set_charset($connect, 'UTF8');
	mysqli_select_db($connect,"SET NAMES 'utf8'");

?>