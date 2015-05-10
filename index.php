<?php
	if(isset($_GET['ctl'])){

		switch($_GET["ctl"]){

		case "generos":
			require_once("Controlador/Ctl.php");
			$ctl = new GenerosCtl();
			break;
		case "inicio":
			require_once("Controlador/Ctl.php");
			$ctl = new InicioCtl();
			break;
		case "perfil":
			require_once("Controlador/perfilCtl.php");
			$ctl = new perfilCtl();		
			break;
		case "about":
			require_once("Controlador/Ctl.php");
			$ctl = new aboutusCtl();
			break;
		case "catalogo":
			require_once("Controlador/catalogoCtl.php");
			$ctl = new catalogoCtl();
			break;
		default: 
			http_response_code(404);
			//header('HTTP/1.0 404 Not Found');
			break;
		}
	}else
	{
		require_once("Controlador/Ctl.php");
		$ctl = new InicioCtl();

	}	


$ctl -> ejecutar();
?>