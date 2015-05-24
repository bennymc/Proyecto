<?php 

class editarMdl{

	public $nombre;
	public $apellidos;
	public $librodestacado;
	public $descripcion;
	public $titulos;
	public $nacimiento;
	public $sexo;	
	public $idsLibros;
	public $idDestacado;


	function CargarDatos(){
		require_once('config.inc');
		$conexion = new mysqli($servidor,$usuario,$pass,$bd);
		if($conexion -> connect_errno){
			echo "Hubo un error";
			echo "<br>$conexion->connect_errno";
		}
		$id = $_SESSION['idUsuario'];

		$consulta = "SELECT *
				 FROM usuario 
				 WHERE idUsuario = '".$id."'";
		//Ejecuto el QUERY para datos de usuario
		$resultado = $conexion->query($consulta);
		$resultado = $resultado->fetch_row();
		

		if($resultado!= NULL){
			
			$this->nombre = $resultado[3];
			$this->apellidos = $resultado[4];
			$this->sexo = $resultado[6];
			$this->descripcion = $resultado[7];
			$this->nacimiento = $resultado[8];
			

			//Ejecuto el QUERY para libro destacado de usuario
			$consultadestacado = "SELECT titulo , idLibros
					 FROM libros 
					 WHERE idLibros = '".$resultado[10]."'";
					
			$resultadoD = $conexion->query($consultadestacado);
			$resultadoD = $resultadoD->fetch_row();

			if($resultadoD!=NULL){
				//var_dump($resultadoD);
					$this->librodestacado = $resultadoD[0];
					$this->idDestacado = $resultadoD[1];

					//Ejecuto el QUERY para Librero
					$consultalibrero = "SELECT L.titulo  , L.idLibros
										FROM usuario_has_libros UHL 
										JOIN libros L on L.idLibros = UHL.idLibros
										WHERE UHL.idUsuario = \"$id\" ";

					$resultadoL = $conexion->query($consultalibrero);
					
							
					while($fila=$resultadoL->fetch_assoc()){
						//var_dump($fila);
						$this->titulos[] = $fila["titulo"];
						$this->idsLibros[]= $fila["idLibros"];
					}			
			}

			
		}
		

		$conexion->close();



	}
}

?>