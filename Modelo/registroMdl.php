<?php

class registroMdl{
		public $id;

	function alta($nombre, $apellidos, $sexo, $correo, $intereses, $username, $password, $bday){

			require_once('config.inc');
			$conexion = new mysqli($servidor,$usuario,$pass,$bd);
			if($conexion -> connect_errno){
				echo "Hubo un error";
				echo "<br>$conexion->connect_errno";
			}

			$consulta = "SELECT MAX(idUsuario) AS id FROM usuario";	
			//Ejecuto el QUERY para datos de usuario
			$resultado = $conexion->query($consulta);
			
			if($resultado!=NULL){
				$resultado = $resultado->fetch_row();
				$this->id=$resultado[0]+1;				
			}				
			else
				$this->id=0;

			$L = 0;

			//procesarimagen
			//Tenemos una lista con las extensiones que aceptaremos
				$extensionesPermitidas = array("jpg", "jpeg", "gif", "png" , "JPG" ,"JPEG" ,"PNG");
				 
				//Obtenemos la extensión del archivo
				$extension =  substr( $_FILES["imgperfil"]["type"] ,6);
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
				              		$rename="imgPerfilUsuario". $this->id . "." . $ext ;
				                   move_uploaded_file($_FILES["imgperfil"]["tmp_name"],
				                                   "www/images/Usuarios/" . $rename  );
				              }
				}
				else{
				     echo "Archivo inválido";
				}

					$imgperfil 	=  $rename ;

			
			$query = 
				"INSERT INTO usuario ( idUsuario, user, contrasena, nombre, apellidos, email, sexo, intereses, fechaNacimiento, imagenPerfil, destacadoidLibro) 
				VALUES (
					\"$this->id\",
					\"$username\",
					\"$password\",
					\"$nombre\",
					\"$apellidos\",
					\"$correo\",
					\"$sexo\",
					\"$intereses\",
					\"$bday\",
					\"$imgperfil\",
					\"$L\"	)";

				
				$resultado = $conexion->query($query);

				//Reviso si se realizó la inserción
				//var_dump($resultado);

				//Obtengo el último id autoincrementable
				//var_dump($conexion->insert_id);

				//Cierro la conexión a la base de datos
				$conexion->close();


			
			

			
			
		}



	 
			
	}

?>