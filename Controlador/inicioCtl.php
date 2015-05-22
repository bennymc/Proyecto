<?php

class InicioCtl{
	private $dicc;

	public function ejecutar(){
		require_once("Controlador/diccionariomaestro.php");
		$this->dicc = new diccionarioM(); 	
		
		
		//session_start();
		if(isset($_SESSION['usuario'] )){
			$this->dicc->CargarInicio();
		}
		else $this->dicc->CargarInicio();
	}
}

class aboutusCtl{
	private $modelo;

	public function ejecutar(){
		require_once("Controlador/diccionariomaestro.php");
			$this->dicc = new diccionarioM(); 	
		$vista = file_get_contents("Vista/aboutus.php");
		$this->dicc->CargarHeader();
		$footer = file_get_contents("Vista/footer.html");
		$vista = $this->dicc->headerfinal . $vista . $footer;
		echo $vista;
	}
}

class inboxCtl{
	private $modelo;

	public function ejecutar(){
		require_once("Controlador/diccionariomaestro.php");
			$this->dicc = new diccionarioM(); 	
		$vista = file_get_contents("Vista/inbox.php");
		$this->dicc->CargarHeader();
		$footer = file_get_contents("Vista/footer.html");
		$vista = $this->dicc->headerfinal . $vista . $footer;
		echo $vista;
	}
}

class busquedaCtl{
	private $modelo;

	public function ejecutar(){
		require_once("Controlador/diccionariomaestro.php");
			$this->dicc = new diccionarioM(); 	
		$vista = file_get_contents("Vista/busqueda.php");
		$this->dicc->CargarHeader();
		$footer = file_get_contents("Vista/footer.html");
		$vista = $this->dicc->headerfinal . $vista . $footer;
		echo $vista;
	}
}

class registroCtl{
	private $modelo;



	public function ejecutar(){
		

		require_once("Controlador/diccionariomaestro.php");
		$this->dicc = new diccionarioM(); 	
		
		
		//session_start();
		if(isset($_SESSION['usuario'] )){
			$this->dicc->CargarInicio();
		}
		else{
				require_once("Modelo/registroMdl.php");
				$this->modelo = new registroMdl();

				//echo "<br>debug: entro al caso alta del controlador alumno";
				if(empty($_POST)){
					$this->dicc->CargarRegistro();
				}
				else{
					//Obtener las variables para la alta
					//y limpiarlas
					$nombre 	= $_POST["nombre"];
					$apellidos 	= $_POST["apellidos"];
					$sexo		= $_POST["sexo"];
					$correo 	= $_POST["email"];
					$intereses 	= $_POST["intereses"];
					$username 	= $_POST["username"];
					$password	= $_POST["password"];
					$bday 		= $_POST["bday"];
					

					//procesarimagen
			//Tenemos una lista con las extensiones que aceptaremos
				$extensionesPermitidas = array("jpg", "jpeg", "gif", "png");
				 
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
				                    //Si el archivo ya existe se muestra el mensaje de error
				                    if (file_exists("www/images/" . $_FILES["imgperfil"]["name"])){
				                          // echo $_FILES["imgperfil"]["name"] . " already exists. ";
				                    }
				                    else{
				                           //Se mueve el archivo de su ruta temporal a una ruta establecida
				                           move_uploaded_file($_FILES["imgperfil"]["tmp_name"],
				                                   "www/images/" . $_FILES["imgperfil"]["name"]);
				                           
				                           //echo "Archivo almacenado en: " . "www/images/" . $_FILES["imgperfil"]["name"];
				                    }
				              }
				}
				else{
				     echo "Archivo inválido";
				}

					$imgperfil 	=  $_FILES["imgperfil"]["name"];
					$resultado = $this->modelo->alta($nombre, $apellidos, $sexo, $correo, $intereses, $username, $password, $bday, $imgperfil);

							
							//echo "<br>debug: Va a cargar la vista en base a lo devuelto por el modelo";
							if($resultado!==FALSE){
								//Procesar la vista

								//Obtener la vista
								//session_start();
								$_SESSION['usuario']   = $username;
								$_SESSION['idUsuario'] = $this->modelo->id;
								
								$this->dicc->CargarInicio();

							}
							else echo "algo salio mal";
								//require_once("Vista/Error.html");
			}

		} 	
			
	}
}

class recuperaCtl{
	private $modelo;

	public function ejecutar(){
		require_once("Controlador/diccionariomaestro.php");
			$this->dicc = new diccionarioM(); 
		$vista = file_get_contents("Vista/recupera.html");
		$this->dicc->CargarHeader();
		$footer = file_get_contents("Vista/footer.html");
		$vista = $this->dicc->headerfinal . $vista . $footer;
		echo $vista;
	}
}

class resetCtl{
	private $modelo;

	public function ejecutar(){
		if(!isset($_GET['id'])){
			require_once("Modelo/resetMdl.php");
		$this->modelo = new resetMdl();
		$key = uniqid(mt_rand(), true);
		$token = md5($_POST['email'].$key);

		$email 	= $_POST["email"];
		
		$resultado = $this->modelo->valida($email);

		if($resultado!==FALSE){
			$resultado = $this->modelo->alta($token);

			$message = "El link para restablecer tu contraseña fue enviada a tu e-mail.";
            $to=$email;
            $subject="Recuperar contraseña";
            $from = 'support@book2book.tk';
            $body='Hola, <br><br>Click aquí para restablecer tu contraseña http://www.book2book.tk/?ctl=reset&token='.$token.'<br/><br/>';
            $headers = "From: " . strip_tags($from) . "\r\n";
            $headers .= "Reply-To: ". strip_tags($from) . "\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
 
            mail($to,$subject,$body,$headers);
			echo "Se te ha enviado un correo con el enlace para restablecer tu contraseña.";
		}else echo "Algo salio mal";
			//require_once("Vista/Error.html");
		}

	}
}
?>