<?php

class GenerosCtl{
	private $modelo;
	function __construct(){
		require_once("Modelo/GenerosMdl.php");
		$this->mdl=new GenerosMdl();
	}
	public function ejecutar(){
		if(isset($_GET['id']) && $this->validateInteger($_GET['id'])){
			$this->mdl->show($_GET['id']);
			require_once("Vista/genero.php");
		}else
		{
			http_response_code(404);
		}
	}
	function validateInteger($valor){
		return is_int((int)$valor);
	}
}
?>