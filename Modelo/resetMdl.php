<?php

class resetMdl{
		public $idUsuario;

	function valida($email){

			require('config.inc');
			$conexion = new mysqli($servidor,$usuario,$pass,$bd);
			if($conexion -> connect_errno){
				echo "Hubo un error";
				echo "<br>$conexion->connect_errno";
			}

			$consulta = "SELECT idUsuario FROM usuario WHERE email = '".$email."'";	
			//Ejecuto el QUERY para datos de usuario
			$resultado = $conexion->query($consulta);
			$resultado = $resultado->fetch_row();

			if($resultado!= NULL){
				$this->idUsuario=$resultado[0];
				return true;
			}
			else
				return false;
			$conexion->close();		
			
	}	

	function cambia($password){
		require('config.inc');
		$conexion = new mysqli($servidor,$usuario,$pass,$bd);
		if($conexion -> connect_errno){
			echo "Hubo un error";
			echo "<br>$conexion->connect_errno";
		}
		var_dump($password);
		$query = 
			"UPDATE usuario
			SET contrasena = '".$password."'
			WHERE idUsuario = '".$this->idUsuario."'";

			
		$resultado = $conexion->query($query);

		$conexion->close();		
			
	}
}
?>