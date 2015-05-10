<?php

class ejemplarCtl{
	private $modelo;
	function __construct(){
		require_once("Modelo/ejemplarMdl.php");
		$this->mdl=new ejemplarMdl();
	}
	public function ejecutar(){
		//if(isset($_GET['id']) && $this->validateInteger($_GET['id'])){
		//	$this->mdl->show($_GET['id']);
			require_once("Vista/ejemplar.php");
		/*}else
		{
			http_response_code(404);
		}*/
	}
	function validateInteger($valor){
		return is_int((int)$valor);
	}
}
?>