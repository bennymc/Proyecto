<?php

class buscarMdl{
	public $idEncontrado;
	public $bandera = 0;
	function Buscar($key){
		require('Modelo/BD.php');
		$conexion = BD::obtenerInstancia();
		$consulta = "SELECT idUsuario FROM usuario WHERE user = '".$key."'";
		$resultado = $conexion->ejecutar($consulta)->obtenerResultado();
		if($resultado!= NULL){
			$this->idEncontrado = $resultado['idUsuario'];
			$this->bandera = 1;
		}
		else{
			$consulta = "SELECT idLibros FROM libros WHERE (titulo = '".$key."' OR titulo_original = '".$key."')";
			$resultado = $conexion->ejecutar($consulta)->obtenerResultado();
			if($resultado!= NULL){
				$this->idEncontrado = $resultado['idLibros'];
				$this->bandera = 2;
			}
			else{
				$consulta = "SELECT idLibros FROM libros WHERE isbn = '".$key."'";
				$resultado = $conexion->ejecutar($consulta)->obtenerResultado();
				if($resultado!= NULL){
					$this->idEncontrado = $resultado['idLibros'];
					$this->bandera = 3;
				}else{
					$key = explode(" ", $key);
					$consulta = "SELECT idUsuario FROM usuario WHERE nombre = '".$key[0]." ".$key[1]."' AND apellidos = '".$key[2]." ".$key[3]."'";
					$resultado = $conexion->ejecutar($consulta)->obtenerResultado();
					if($resultado!= NULL){
						$this->idEncontrado = $resultado['idUsuario'];
						$this->bandera = 4;
					}
				}
			}
		}


	}
	
}

?>