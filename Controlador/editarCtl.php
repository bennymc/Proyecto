<?php

class editarCtl{
	private $modelo;
	function __construct(){
		// require_once("Modelo/editarMdl.php");
		// $this->mdl=new editarMdl();
	}
	public function ejecutar(){
		//if(isset($_GET['id']) && $this->validateInteger($_GET['id'])){
		//	$this->mdl->show($_GET['id']);
			require_once("Vista/editar.php");
		//}else
		//{
		//	http_response_code(404);
		//}
	}
	function validateInteger($valor){
		return is_int((int)$valor);
	}
}
?>