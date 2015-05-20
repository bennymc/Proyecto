<?php

class InicioCtl{
	private $dicc;

	public function ejecutar(){
		require_once("Controlador/diccionariomaestro.php");
		$this->dicc = new diccionarioM(); 	
		
		

		if(isset($_SESSION['usuario'] )){
			$this->dicc->CargarInicioWSesion();
		}
		else $this->dicc->CargarInicio();
	}
}

class aboutusCtl{
	private $modelo;

	public function ejecutar(){
		$vista = file_get_contents("Vista/aboutus.php");
		$header = file_get_contents("Vista/navbar.html");
		$footer = file_get_contents("Vista/footer.html");
		$vista = $header . $vista . $footer;
		echo $vista;
	}
}

class inboxCtl{
	private $modelo;

	public function ejecutar(){
		$vista = file_get_contents("Vista/inbox.php");
		$header = file_get_contents("Vista/navbar.html");
		$footer = file_get_contents("Vista/footer.html");
		$vista = $header . $vista . $footer;
		echo $vista;
	}
}

class busquedaCtl{
	private $modelo;

	public function ejecutar(){
		$vista = file_get_contents("Vista/busqueda.php");
		$header = file_get_contents("Vista/navbar.html");
		$footer = file_get_contents("Vista/footer.html");
		$vista = $header . $vista . $footer;
		echo $vista;
	}
}

class registroCtl{
	private $modelo;

	public function ejecutar(){
		$vista = file_get_contents("Vista/registro.php");
		$header = file_get_contents("Vista/navbar.html");
		$footer = file_get_contents("Vista/footer.html");
		$vista = $header . $vista . $footer;
		echo $vista;
	}
}
class recuperaCtl{
	private $modelo;

	public function ejecutar(){
		$vista = file_get_contents("Vista/recupera.php");
		$header = file_get_contents("Vista/navbar.html");
		$footer = file_get_contents("Vista/footer.html");
		$vista = $header . $vista . $footer;
		echo $vista;
	}
}
?>