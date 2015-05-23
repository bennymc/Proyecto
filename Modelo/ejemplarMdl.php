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
		require_once('config.inc');
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
				 FROM Autores_has_libros 
				 WHERE idLibros = '".$id."'";
		$resultado = $conexion->query($consulta);
		$this->Datos = $resultado->fetch_row();
		$this->idAutor = $this->Datos[0];

		$consulta = "SELECT nombre
				 FROM Autores 
				 WHERE idAutores = '".$this->idAutor."'";
		$resultado = $conexion->query($consulta);
		$this->Datos = $resultado->fetch_row();
		$this->Autor = $this->Datos[0];

		$consulta = "SELECT idEditoriales
				 FROM Editoriales_has_libros 
				 WHERE idLibros = '".$id."'";
		$resultado = $conexion->query($consulta);
		$this->Datos = $resultado->fetch_row();
		$this->idEditorial = $this->Datos[0];

		$consulta = "SELECT nombre
				 FROM Editoriales 
				 WHERE idEditoriales = '".$this->idEditorial."'";
		$resultado = $conexion->query($consulta);
		$this->Datos = $resultado->fetch_row();
		$this->Editorial = $this->Datos[0];

		$consulta = "SELECT idGeneros
				 FROM Generos_has_libros 
				 WHERE idLibros = '".$id."'";
		$resultado = $conexion->query($consulta);
		$this->Datos = $resultado->fetch_row();
		$this->idGenero = $this->Datos[0];

		$consulta = "SELECT nombre
				 FROM Generos 
				 WHERE idGeneros = '".$this->idGenero."'";
		$resultado = $conexion->query($consulta);
		$this->Datos = $resultado->fetch_row();
		$this->Genero = $this->Datos[0];
	}

}