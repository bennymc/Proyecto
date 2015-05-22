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

			$consulta = "SELECT idUsuario FROM Usuario WHERE email = '$email'";	
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

	function alta($token){

			require('config.inc');
			$conexion = new mysqli($servidor,$usuario,$pass,$bd);
			if($conexion -> connect_errno){
				echo "Hubo un error";
				echo "<br>$conexion->connect_errno";
			}
			
			$query = 
				"INSERT INTO reset_password ( idUsuario, token) 
				VALUES (
					\"$this->idUsuario\",
					\"$token\")";

				
			$resultado = $conexion->query($query);

			$conexion->close();		
			
	}
}
?>