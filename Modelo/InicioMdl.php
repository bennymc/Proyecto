<?php

class popularesMdl{
	
	public $ids;
	public $urlLibros;
	public $resena;
	public $idUsuario;
	public $calificacion;
	public $idLibros;
	public $username;
	public $libroname;





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

	function Cargaresenas(){
		require('config.inc');
		$conexion = new mysqli($servidor,$usuario,$pass,$bd);
		if($conexion -> connect_errno){
			echo "Hubo un error";
			echo "<br>$conexion->connect_errno";
		}
		
			$consulta = "SELECT resena, calificacion, idUsuario	, idLibros
			 FROM resena ORDER BY idResena DESC Limit 3
			 ";
			$resultado = $conexion->query($consulta);
			$i=0;
			while($fila=$resultado->fetch_assoc()){
				$this->resena[$i]=$fila["resena"];
				$this->calificacion[$i]=$fila["calificacion"];
				$this->idUsuarios[$i]=$fila["idUsuario"];
				$this->idLibros[$i]=$fila["idLibros"];
				$i++;
			}

			$i=0;
			foreach ($this->idUsuarios as $id) {
				$consulta = "SELECT user
				 FROM usuario
				 WHERE idUsuario = '".$id."'";
				$resultado = $conexion->query($consulta);
				if($conexion->errno){
					die("Tu query tiene un error
						<br>$conexion->error");
				}
				while($fila=$resultado->fetch_assoc()){
					
					$this->username[$i]=$fila["user"];
				}	
				$i++;
			}

			$i=0;
			foreach ($this->idLibros as $id) {
			$consulta = "SELECT titulo
			 FROM libros
			 WHERE idLibros = '".$id."'";
			$resultado = $conexion->query($consulta);
			if($conexion->errno){
				die("Tu query tiene un error
					<br>$conexion->error");
			}
			while($fila=$resultado->fetch_assoc()){
				
				$this->libroname[$i]=$fila["titulo"];
			}	
			$i++;
		}

		

		$conexion->close();	
	}

}

?>