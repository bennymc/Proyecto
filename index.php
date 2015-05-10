<?php
	if(isset($_GET['ctl'])){

		switch($_GET["ctl"]){

		case "generos":
			require_once("Controlador/generosCtl.php");
			$ctl = new GenerosCtl();
			break;
		case "ejemplar":
			require_once("Controlador/ejemplarCtl.php");
			$ctl = new ejemplarCtl();
			break;
		case "inicio":
			require_once("Controlador/inicioCtl.php");
			$ctl = new InicioCtl();
			break;
		case "perfil":
			require_once("Controlador/perfilCtl.php");
			$ctl = new perfilCtl();		
			break;
		case "about":
			require_once("Controlador/inicioCtl.php");
			$ctl = new aboutusCtl();
			break;
		case "registro":
			require_once("Controlador/inicioCtl.php");
			$ctl = new registroCtl();
			break;
		case "recupera":
			require_once("Controlador/inicioCtl.php");
			$ctl = new recuperaCtl();
			break;
		case "busqueda":
			require_once("Controlador/inicioCtl.php");
			$ctl = new busquedaCtl();
			break;
		case "inbox":
			require_once("Controlador/inicioCtl.php");
			$ctl = new inboxCtl();
			break;
		case "catalogo":
			require_once("Controlador/catalogoCtl.php");
			$ctl = new catalogoCtl();
			break;
		case "editar":
			require_once("Controlador/editarCtl.php");
			$ctl = new editarCtl();
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