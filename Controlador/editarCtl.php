<?php

class editarCtl{
	private $mdl;
	private $dicc;
	function __construct(){
		 require_once("Modelo/editarMdl.php");
		 $this->mdl= new editarMdl();
		 require_once("Controlador/diccionariomaestro.php");
		$this->dicc = new diccionarioM();
	}
	
	public function ejecutar(){

		if(isset($_SESSION['usuario'])){

			$this->mdl->CargarDatos();
			
			$vista = file_get_contents("Vista/editar.php");
			$this->dicc->CargarHeader();
			$footer = file_get_contents("Vista/footer.html");
			$vista = $this->dicc->headerfinal . $vista . $footer;
			echo $vista;
		}else
		{
			$this->dicc->CargarInicio();
		}

		

		
	}
	
}
?>