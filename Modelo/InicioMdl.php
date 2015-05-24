<?php

class popularesMdl{
	
	public $ids;
	public $urlLibros;
	function show(){
		require('config.inc');
		$conexion = new mysqli($servidor,$usuario,$pass,$bd);
		if($conexion -> connect_errno){
			echo "Hubo un error";
			echo "<br>$conexion->connect_errno";
		}

		$consulta = "SELECT idLibros, count(*) as Total FROM usuario_has_libros group by idLibros ORDER BY Total DESC LIMIT 5";
		$resultado = $conexion->query($consulta);
		
		if($conexion->errno){
			die("Tu query tiene un error
				<br>$conexion->error");
		}else{
			while($fila=$resultado->fetch_assoc()){
				$this->ids[]=$fila["idLibros"];
			}
		}
		$this->CargaPopulares();
		$conexion->close();	
	}


	function CargaPopulares(){
		require('config.inc');
		$conexion = new mysqli($servidor,$usuario,$pass,$bd);
		if($conexion -> connect_errno){
			echo "Hubo un error";
			echo "<br>$conexion->connect_errno";
		}
		foreach ($this->ids as $id) {
			$consulta = "SELECT titulo, imagen_portada
			 FROM libros
			 WHERE idLibros = '".$id."'";
			$resultado = $conexion->query($consulta);
			if($conexion->errno){
				die("Tu query tiene un error
					<br>$conexion->error");
			}
			while($fila=$resultado->fetch_assoc()){
				
				$this->urlLibros[]=$fila["imagen_portada"];
			}	
		}

		$conexion->close();	
	}

}

?>