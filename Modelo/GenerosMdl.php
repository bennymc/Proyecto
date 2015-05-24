<?php

class GenerosMdl{
	public $TituloLibrero;
	public $CabeceraLibrero;
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

		$consulta = "SELECT descripcion, nombre
				 FROM generos 
				 WHERE idGeneros = '".$id."'";
		$resultado = $conexion->query($consulta);
		$this->Datos = $resultado->fetch_row();
		$this->Descripcion = $this->Datos[0];
		$this->TituloLibrero = $this->Datos[1];
		$this->CabeceraLibrero = $this->Datos[1];

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
				 FROM generos_has_libros
				 WHERE idGeneros = '".$id."'";
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
}

?>