<?php

class autorCtl{
	private $modelo;
	function __construct(){
		// require_once("Modelo/autorMdl.php");
		// $this->mdl=new autorMdl();
	}
	public function ejecutar(){
		//if(isset($_GET['id']) && $this->validateInteger($_GET['id'])){
		//	$this->mdl->show($_GET['id']);
			require_once("Vista/autor.php");
		//}else
		//{
			//http_response_code(404);
		//}
	}
	function validateInteger($valor){
		return is_int((int)$valor);
	}
}


class autorgeneroCtl{
	private $modelo;
	function __construct(){
		// require_once("Modelo/autorMdl.php");
		// $this->mdl=new autorMdl();
	}
	public function ejecutar(){
		//if(isset($_GET['id']) && $this->validateInteger($_GET['id'])){
		//	$this->mdl->show($_GET['id']);
			require_once("Vista/autorGenero.php");
		//}else
		//{
			//http_response_code(404);
		//}
	}
	function validateInteger($valor){
		return is_int((int)$valor);
	}
}
?>