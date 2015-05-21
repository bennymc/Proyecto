<?php

class perfilMdl{
	public $nombre;
	public $librodestacado;
	public $imgLdestacado;
	public $imgPerfil;
	public $descripcion;
	public $titulos;
	public $portadas;
	public $estado;

	/**
	*Obtiene los datos de un item en  especifico
	*y lo asigna a un modelo
	* @param int $id
	* @return
	*/

	

function show($id){

		require_once('config.inc');
		$conexion = new mysqli($servidor,$usuario,$pass,$bd);
		if($conexion -> connect_errno){
			echo "Hubo un error";
			echo "<br>$conexion->connect_errno";
		}

		$consulta = "SELECT *
				 FROM usuario 
				 WHERE idUsuario = '".$id."'";
		//Ejecuto el QUERY para datos de usuario
		$resultado = $conexion->query($consulta);
		$resultado = $resultado->fetch_row();
		

		if($resultado!= NULL){
			
			$this->nombre = $resultado[3]." ".$resultado[4];
			$this->imgPerfil = $resultado[9];		
			$this->descripcion = $resultado[7];
			

			//Ejecuto el QUERY para libro destacado de usuario
			$consultadestacado = "SELECT titulo , imagen_portada
					 FROM libros 
					 WHERE idLibros = '".$resultado[10]."'";
					
			$resultadoD = $conexion->query($consultadestacado);
			$resultadoD = $resultadoD->fetch_row();

			if($resultadoD!=NULL){
				//var_dump($resultadoD);
					$this->librodestacado = $resultadoD[0];
					$this->imgLdestacado = $resultadoD[1];

					//Ejecuto el QUERY para Librero
					$consultalibrero = "SELECT L.titulo , L.imagen_portada , UHL.status 
										FROM usuario_has_libros UHL 
										JOIN libros L on L.idLibros = UHL.idLibros
										WHERE UHL.idUsuario = \"$id\" ";

					$resultadoL = $conexion->query($consultalibrero);
					
							
					while($fila=$resultadoL->fetch_assoc()){
						//var_dump($fila);
						$this->titulos[] = $fila["titulo"];
						$this->portadas[] = $fila["imagenPortada"];
						$this->estado[] = $fila["status"];
					}			
			}

			
		}
		

		$conexion->close();
		
	}



 
		
}

?>