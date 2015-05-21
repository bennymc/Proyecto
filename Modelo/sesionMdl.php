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
		var_dump($password);
		$consulta = "SELECT idUsuario
				 FROM usuario 
				 WHERE user = '".$user."' and contrasena = '".$password."' ";
				 var_dump($consulta);
		
		//Ejecuto el QUERY para datos de usuario
		$resultado = $conexion->query($consulta);
		$resultado = $resultado->fetch_row();
		var_dump($resultado);
		
		
		if($resultado!= NULL){
			$this->idUsuario=$resultado[0];
			return true;
		}
		else
			return false;
	}




}


?>