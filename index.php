<?php
	//http://localhost/producto1/index.php?ancho=900&alto=300&um=15
	header("Content-type: image/png");
	require_once("Punto.php");
	require_once("Vista.php");
	require_once("Controlador.php");
	$v = new Vista($_GET['ancho'], $_GET['alto'], $_GET['um']);
	$c = new Controlador();
	$c->exhibir($v); 
?>