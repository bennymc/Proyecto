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
		require('config.inc');
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


	function actualiza($nombre, $apellidos, $sexo,  $intereses,  $bday, $destacado){
			require('config.inc');
			$conexion = new mysqli($servidor,$usuario,$pass,$bd);
			if($conexion -> connect_errno){
				echo "Hubo un error";
				echo "<br>$conexion->connect_errno";
			}
			$id = $_SESSION['idUsuario'];

		if($_FILES["imgperfil"]["name"] != NULL){
				//procesarimagen
				//Tenemos una lista con las extensiones que aceptaremos
				$extensionesPermitidas = array("jpg", "jpeg", "gif", "png" , "JPG" ,"JPEG" ,"PNG");
				 
				//Obtenemos la extensión del archivo
				$extension = end(explode(".", $_FILES["imgperfil"]["name"]));
				 //var_dump($_FILES["imgperfil"]);
				//Validamos el tipo de archivo, el tamaño en bytes y que la extensión sea válida
				if ((($_FILES["imgperfil"]["type"] == "image/gif")
				      || ($_FILES["imgperfil"]["type"] == "image/jpeg")
				      || ($_FILES["imgperfil"]["type"] == "image/png")
				      || ($_FILES["imgperfil"]["type"] == "image/pjpeg"))
				      && in_array($extension, $extensionesPermitidas)){
				              //Si no hubo un error al subir el archivo temporalmente
				              if ($_FILES["imgperfil"]["error"] > 0){
				                     //echo "Return Code: " . $_FILES["imgperfil"]["error"] . "<br />";
				              }
				              else{
				              		$ext = substr( $_FILES["imgperfil"]["type"] ,6);
				              		$rename="imgPerfilUsuario". $id . "." . $ext ;
				                   move_uploaded_file($_FILES["imgperfil"]["tmp_name"],
				                                   "www/images/Usuarios/" . $rename  );
				              }
				}
				else{
				     echo "Archivo inválido";
				}

					$imgperfil 	=  $rename ;




			$query = "	UPDATE 	 usuario  
					 	SET 	
								 nombre = \"$nombre\",
								 apellidos = \"$apellidos\", 
								 sexo = \"$sexo\",
								 intereses = \"$intereses\", 
								 fechaNacimiento = \"$bday\", 
								 imagenPerfil = \"$imgperfil\",
								 destacadoidLibro = \"$destacado\"
					 	WHERE 	idUsuario = '".$id."'";
			//Ejecuto el QUERY para datos de usuario
			$resultado = $conexion->query($query);

		}
		else{
			$query = "	UPDATE 	 usuario  
					 	SET 	
								  nombre = \"$nombre\",
								 apellidos = \"$apellidos\", 
								 sexo = \"$sexo\",
								 intereses = \"$intereses\", 
								 fechaNacimiento = \"$bday\", 
								 destacadoidLibro = \"$destacado\"
					 	WHERE 	idUsuario = '".$id."'";
			//Ejecuto el QUERY para datos de usuario
			$resultado = $conexion->query($query);
		}
		$conexion->close();
		return true;
	}


	function cambiar($old,$new){
		require('config.inc');
			$conexion = new mysqli($servidor,$usuario,$pass,$bd);
			if($conexion -> connect_errno){
				echo "Hubo un error";
				echo "<br>$conexion->connect_errno";
			}
			$id = $_SESSION['idUsuario'];

			$consulta = "SELECT *
				 FROM usuario 
				 WHERE idUsuario = \"$id\"
				 AND contrasena =  \"$old\"  ";
			$resultado = $conexion->query($consulta);
			$resultado = $resultado->fetch_row();
			
			if($resultado!=NULL){
				$query = "	UPDATE 	 usuario  
					 	SET 	
								  contrasena = \"$new\"
					 	WHERE 	idUsuario = '".$id."'";
					//Ejecuto el QUERY para datos de usuario
					$resultado = $conexion->query($query);
					return true;
			}
			else return false;

			$conexion->close();

	}
}

?>