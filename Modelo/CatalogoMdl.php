<?php

class CatalogoMdl{
	public $Generos;
	public $nombresR;
	public $random;

	function show(){
		require('config.inc');
		$conexion = new mysqli($servidor,$usuario,$pass,$bd);
		if($conexion -> connect_errno){
			echo "Hubo un error";
			echo "<br>$conexion->connect_errno";
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
		$conexion->close();	
	}

	function GenerosRandom(){
		require('config.inc');
		$conexion = new mysqli($servidor,$usuario,$pass,$bd);
		if($conexion -> connect_errno){
			echo "Hubo un error";
			echo "<br>$conexion->connect_errno";
		}


		$random[0]=rand(1,24);
		$x=1;
		while($x<5){
			$y = rand(1,24);
			if(!in_array($y, $random)){
				$random[$x]=$y;
				$x++;
			}
		}

		$consulta = "SELECT nombre
				 FROM generos
				 WHERE idGeneros 
				 IN (
				 	\"$random[0]\",
				 	\"$random[1]\",
				 	\"$random[2]\",
				 	\"$random[3]\",
				 	\"$random[4]\"
				 	)";
		$resultado = $conexion->query($consulta);

		if($conexion->errno){
			die("Tu query tiene un error
				<br>$conexion->error");
		}
		while($fila=$resultado->fetch_assoc()){
			$this->nombresR[]=$fila["nombre"];
		}
		
		$conexion->close();	
	}



}

?>