<?php

	class sesionMdl{
		public $idUsuario;

	function valida($user,$password){

		require_once('config.inc');
		$conexion = new mysqli($servidor,$usuario,$pass,$bd);
		if($conexion -> connect_errno){
			echo "Hubo un error";
			echo "<br>$conexion->connect_errno";
		}
		
		$consulta = "SELECT idUsuario
				 FROM usuario 
				 WHERE user = '".$user."' and contrasena = '".$password."' ";
				
		
		//Ejecuto el QUERY para datos de usuario
		$resultado = $conexion->query($consulta);
		$resultado = $resultado->fetch_row();
		
		
		
		if($resultado!= NULL){
			$this->idUsuario=$resultado[0];
			return true;
		}
		else
			return false;
	}




}


?>