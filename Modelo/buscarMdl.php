<?php

class buscarMdl{
	public $idEncontrado;
	public $bandera = 0;
	function Buscar($key){
		require('config.inc');
		$conexion = new mysqli($servidor,$usuario,$pass,$bd);
		if($conexion -> connect_errno){
			echo "Hubo un error";
			echo "<br>$conexion->connect_errno";
		}
		$consulta = "SELECT idUsuario FROM usuario WHERE user = '".$key."'";
		$resultado = $conexion->query($consulta);
		$resultado = $resultado->fetch_row();
		if($resultado!= NULL){
			$this->idEncontrado = $resultado[0];
			$this->bandera = 1;
		}
		else{
			$consulta = "SELECT idLibros FROM libros WHERE (titulo = '".$key."' OR titulo_original = '".$key."')";
			$resultado = $conexion->query($consulta);
			$resultado = $resultado->fetch_row();
			if($resultado!= NULL){
				$this->idEncontrado = $resultado[0];
				$this->bandera = 2;
			}
			else{
				$consulta = "SELECT idLibros FROM libros WHERE isbn = '".$key."'";
				$resultado = $conexion->query($consulta);
				$resultado = $resultado->fetch_row();
				if($resultado!= NULL){
					$this->idEncontrado = $resultado[0];
					$this->bandera = 3;
				}else{
					$key = explode(" ", $key);
					$consulta = "SELECT idUsuario FROM usuario WHERE nombre = '".$key[0]." ".$key[1]."' AND apellidos = '".$key[2]." ".$key[3]."'";
					$resultado = $conexion->query($consulta);
					$resultado = $resultado->fetch_row();
					if($resultado!= NULL){
						$this->idEncontrado = $resultado[0];
						$this->bandera = 4;
					}
				}
			}
		}


	}
	
}

?>