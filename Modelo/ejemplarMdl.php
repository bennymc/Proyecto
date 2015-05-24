<?php

class ejemplarMdl{
	public $Titulo;
	public $idAutor;
	public $Autor;
	public $Editorial;
	public $idEditorial;
	public $AñoEdicion;
	public $ISBN;
	public $Genero;
	public $idGenero;
	public $TituloOriginal;
	public $Portada;

	function show($id){
		require('config.inc');
		$conexion = new mysqli($servidor,$usuario,$pass,$bd);
		if($conexion -> connect_errno){
			echo "Hubo un error";
			echo "<br>$conexion->connect_errno";
		}

		$consulta = "SELECT *
				 FROM libros 
				 WHERE idLibros = '".$id."'";
		$resultado = $conexion->query($consulta);
		$this->Datos = $resultado->fetch_row();
		$this->Titulo = $this->Datos[1];
		$this->TituloOriginal = $this->Datos[2];
		$this->AñoEdicion = $this->Datos[4];
		$this->ISBN = $this->Datos[5];
		$this->Portada = $this->Datos[6];

		$consulta = "SELECT idAutores
				 FROM autores_has_libros 
				 WHERE idLibros = '".$id."'";
		$resultado = $conexion->query($consulta);
		$this->Datos = $resultado->fetch_row();
		$this->idAutor = $this->Datos[0];

		$consulta = "SELECT nombre
				 FROM autores 
				 WHERE idAutores = '".$this->idAutor."'";
		$resultado = $conexion->query($consulta);
		$this->Datos = $resultado->fetch_row();
		$this->Autor = $this->Datos[0];

		$consulta = "SELECT idEditoriales
				 FROM editoriales_has_libros 
				 WHERE idLibros = '".$id."'";
		$resultado = $conexion->query($consulta);
		$this->Datos = $resultado->fetch_row();
		$this->idEditorial = $this->Datos[0];

		$consulta = "SELECT nombre
				 FROM editoriales 
				 WHERE idEditoriales = '".$this->idEditorial."'";
		$resultado = $conexion->query($consulta);
		$this->Datos = $resultado->fetch_row();
		$this->Editorial = $this->Datos[0];

		$consulta = "SELECT idGeneros
				 FROM generos_has_libros 
				 WHERE idLibros = '".$id."'";
		$resultado = $conexion->query($consulta);
		$this->Datos = $resultado->fetch_row();
		$this->idGenero = $this->Datos[0];

		$consulta = "SELECT nombre
				 FROM generos 
				 WHERE idGeneros = '".$this->idGenero."'";
		$resultado = $conexion->query($consulta);
		$this->Datos = $resultado->fetch_row();
		$this->Genero = $this->Datos[0];

		$conexion->close();
	}


	function verificarLibrero($id){

		require('config.inc');
		$conexion = new mysqli($servidor,$usuario,$pass,$bd);
		if($conexion -> connect_errno){
			echo "Hubo un error";
			echo "<br>$conexion->connect_errno";
		}

		$idUser= $_SESSION['idUsuario'];
		$consulta = "SELECT *
				 FROM usuario_has_libros
				 WHERE idLibros = '".$id."'
				 AND  idUsuario = '".$idUser."'   ";
		$resultado = $conexion->query($consulta);
		$resultado = $resultado->fetch_row();
		if($resultado!=NULL){
			return true;
		}else return false;

		$conexion->close();

	}


	function addLibro($id){
		require('config.inc');
		$conexion = new mysqli($servidor,$usuario,$pass,$bd);
		if($conexion -> connect_errno){
			echo "Hubo un error";
			echo "<br>$conexion->connect_errno";
		}
		$idUser= $_SESSION['idUsuario'];
		$status="LEIDO";
		$consulta = "INSERT INTO usuario_has_libros (idUsuario , idLibros ,status)
				 VALUES (
				 	\"$idUser\",
					\"$id\",
					\"$status\"
					)";
		$resultado = $conexion->query($consulta);
		//var_dump($resultado);
		$conexion->close();
	}

	function addReview($id, $review){
		require('config.inc');
		$conexion = new mysqli($servidor,$usuario,$pass,$bd);
		if($conexion -> connect_errno){
			echo "Hubo un error";
			echo "<br>$conexion->connect_errno";
		}
		$idUser= $_SESSION['idUsuario'];
		$calificacion="3";
		$fecha=date("d/m/Y");
		$consulta = "INSERT INTO resena (idUsuario , idLibros , resena, calificacion, fecha)
				 VALUES (
				 	\"$idUser\",
					\"$id\",
					\"$review\",
					\"$calificacion\",
					\"$fecha\"
					)";
		$resultado = $conexion->query($consulta);
		//var_dump($resultado);
		$conexion->close();
	}


}

?>