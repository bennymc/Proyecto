<?php

class autorMdl{
	public $Nombre;
	public $nombreGenero;
	public $Descripcion;
	public $Generos;
	public $idLibros;
	public $nombreLibros;
	public $urlLibros;
	public $Datos;

	function show($id){
		require('config.inc');
		$conexion = new mysqli($servidor,$usuario,$pass,$bd);
		if($conexion -> connect_errno){
			echo "Hubo un error";
			echo "<br>$conexion->connect_errno";
		}

		$consulta = "SELECT descripcion, nombre, imagen_perfil
				 FROM autores 
				 WHERE idAutores = '".$id."'";
		$resultado = $conexion->query($consulta);
		$this->Datos = $resultado->fetch_row();
		$this->Descripcion = $this->Datos[0];
		$this->Nombre = $this->Datos[1];
		$this->Foto = $this->Datos[2];

		$consulta = "SELECT nombre
				 FROM generos";
		$resultado = $conexion->query($consulta);
		if($conexion->errno){
			die("Tu query tiene un error
				<br>$conexion->error");
		}
		while($fila=$resultado->fetch_assoc()){
			$this->Generos[]=$fila["nombre"];
		}

		$consulta = "SELECT idLibros
				 FROM autores_has_libros
				 WHERE idAutores = '".$id."'";
		$resultado = $conexion->query($consulta);
		if($conexion->errno){
			die("Tu query tiene un error
				<br>$conexion->error");
		}
		while($fila=$resultado->fetch_assoc()){
			$this->idLibros[]=$fila["idLibros"];
		}

		foreach ($this->idLibros as $id) {
			$consulta = "SELECT titulo, imagen_portada
			 FROM libros
			 WHERE idLibros = '".$id."'";
			$resultado = $conexion->query($consulta);
			if($conexion->errno){
				die("Tu query tiene un error
					<br>$conexion->error");
			}
			while($fila=$resultado->fetch_assoc()){
				$this->nombreLibros[]=$fila["titulo"];
				$this->urlLibros[]=$fila["imagen_portada"];
			}	
		}
		$conexion->close();	
	}

	function show2($idAutor, $idGenero){
		require('config.inc');
		$conexion = new mysqli($servidor,$usuario,$pass,$bd);
		if($conexion -> connect_errno){
			echo "Hubo un error";
			echo "<br>$conexion->connect_errno";
		}

		$consulta = "SELECT descripcion, nombre, imagen_perfil
				 FROM autores 
				 WHERE idAutores = '".$idAutor."'";
		$resultado = $conexion->query($consulta);
		$this->Datos = $resultado->fetch_row();
		$this->Descripcion = $this->Datos[0];
		$this->Nombre = $this->Datos[1];
		$this->Foto = $this->Datos[2];

		if($conexion->errno){
			die("Tu query tiene un error
				<br>$conexion->error");
		}

		$consulta = "SELECT nombre
				 FROM generos
				 WHERE idGeneros = $idGenero";
		$resultado = $conexion->query($consulta);
		$this->Datos = $resultado->fetch_row();
		$this->nombreGenero = $this->Datos[0];

		if($conexion->errno){
			die("Tu query tiene un error
				<br>$conexion->error");
		}

		$consulta = "SELECT nombre
				 FROM generos";
		$resultado = $conexion->query($consulta);
		if($conexion->errno){
			die("Tu query tiene un error
				<br>$conexion->error");
		}
		while($fila=$resultado->fetch_assoc()){
			$this->Generos[]=$fila["nombre"];
		}

		$consulta = "SELECT AHL.idLibros 
				 FROM autores_has_libros AHL
				 JOIN generos_has_libros GHL on AHL.idLibros = GHL.idLibros 
				 WHERE idAutores = '".$idAutor."' AND idGeneros = '".$idGenero."'";
		$resultado = $conexion->query($consulta);
		if($conexion->errno){
			die("Tu query tiene un error
				<br>$conexion->error");
		}
		while($fila=$resultado->fetch_assoc()){
			$this->idLibros[]=$fila["idLibros"];
		}
		if(count($this->idLibros) > 0){
			foreach ($this->idLibros as $id) {
				$consulta = "SELECT titulo, imagen_portada
				 FROM libros
				 WHERE idLibros = '".$id."'";
				$resultado = $conexion->query($consulta);
				if($conexion->errno){
					die("Tu query tiene un error
						<br>$conexion->error");
				}
				while($fila=$resultado->fetch_assoc()){
					$this->nombreLibros[]=$fila["titulo"];
					$this->urlLibros[]=$fila["imagen_portada"];
				}	
			}
		}
		$conexion->close();	
	}

}