<?php
	switch($_GET["ctl"]){
	case "generos":
		require_once("Controlador/Ctl.php");
		$ctl = new GenerosCtl();
		break;
	case "inicio":
		require_once("Controlador/Ctl.php");
		$ctl = new InicioCtl();
		break;
	default: 
		http_response_code(404);
		//header('HTTP/1.0 404 Not Found');
		break;
}
$ctl -> ejecutar();
?>