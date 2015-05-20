<?php

	class sesionMdl{
		public $idUsuario;

	function valida($user,$pass){

		$conexion = new mysqli('localhost', 'root', '', 'book2');
		if($conexion -> connect_errno){
			echo "Hubo un error";
			echo "<br>$conexion->connect_errno";
		}

		$consulta = "SELECT idUsuario
				 FROM usuario 
				 WHERE user = '".$user."' and contrasena = '".$pass."' ";
		
		//Ejecuto el QUERY para datos de usuario
		$resultado = $conexion->query($consulta);
		$resultado = $resultado->fetch_row();

		$this->idUsuario=$resultado[0];
		
		if($resultado!= NULL){
			return true;
		}
		else
			return false;
	}




}


?>