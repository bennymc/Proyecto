<?php

class registroMdl{
		public $id;

	function alta($nombre, $apellidos, $sexo, $correo, $intereses, $username, $password, $bday, $imgperfil){

			require_once('config.inc');
			$conexion = new mysqli($servidor,$usuario,$pass,$bd);
			if($conexion -> connect_errno){
				echo "Hubo un error";
				echo "<br>$conexion->connect_errno";
			}

			$consulta = "SELECT MAX(idUsuario) AS id FROM Usuario";	
			//Ejecuto el QUERY para datos de usuario
			$resultado = $conexion->query($consulta);
			
			if($resultado!=NULL){
				$resultado = $resultado->fetch_row();
				$this->id=$resultado[0]+1;				
			}				
			else
				$this->id=0;

<<<<<<< HEAD
			$L = 32;
=======
			$L = 0;
>>>>>>> origin/master


			
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