<?php

class editorialMdl{
	public $Descripcion;
	public $Generos;
	public $nombreGenero;
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

		$consulta = "SELECT descripcion, nombre
				 FROM editoriales 
				 WHERE idEditoriales = '".$id."'";
		$resultado = $conexion->query($consulta);
		$this->Datos = $resultado->fetch_row();
		$this->Descripcion = $this->Datos[0];
		$this->Titulo = $this->Datos[1];

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
				 FROM editoriales_has_libros
				 WHERE idEditoriales = '".$id."'";
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

	function show2($idEditorial, $idGenero){
		require('config.inc');
		$conexion = new mysqli($servidor,$usuario,$pass,$bd);
		if($conexion -> connect_errno){
			echo "Hubo un error";
			echo "<br>$conexion->connect_errno";
		}

		$consulta = "SELECT descripcion, nombre
				 FROM editoriales 
				 WHERE idEditoriales = '".$idEditorial."'";
		$resultado = $conexion->query($consulta);
		$this->Datos = $resultado->fetch_row();
		$this->Descripcion = $this->Datos[0];
		$this->Nombre = $this->Datos[1];

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

		$consulta = "SELECT EHL.idLibros 
				 FROM editoriales_has_libros EHL
				 JOIN generos_has_libros GHL on EHL.idLibros = GHL.idLibros 
				 WHERE idEditoriales = '".$idEditorial."' AND idGeneros = '".$idGenero."'";
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