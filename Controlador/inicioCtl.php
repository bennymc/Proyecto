<?php

class InicioCtl{
	private $dicc;

	public function ejecutar(){
		require_once("Controlador/diccionariomaestro.php");
		$this->dicc = new diccionarioM(); 	
		
		
		session_start();
		if(isset($_SESSION['usuario'] )){
			$this->dicc->CargarInicioWSesion();
		}
		else $this->dicc->CargarInicio();
	}
}

class aboutusCtl{
	private $modelo;

	public function ejecutar(){
		$vista = file_get_contents("Vista/aboutus.php");
		$header = file_get_contents("Vista/navbar.html");
		$footer = file_get_contents("Vista/footer.html");
		$vista = $header . $vista . $footer;
		echo $vista;
	}
}

class inboxCtl{
	private $modelo;

	public function ejecutar(){
		$vista = file_get_contents("Vista/inbox.php");
		$header = file_get_contents("Vista/navbar.html");
		$footer = file_get_contents("Vista/footer.html");
		$vista = $header . $vista . $footer;
		echo $vista;
	}
}

class busquedaCtl{
	private $modelo;

	public function ejecutar(){
		$vista = file_get_contents("Vista/busqueda.php");
		$header = file_get_contents("Vista/navbar.html");
		$footer = file_get_contents("Vista/footer.html");
		$vista = $header . $vista . $footer;
		echo $vista;
	}
}

class registroCtl{
	private $modelo;



	public function ejecutar(){
		

		require_once("Controlador/diccionariomaestro.php");
		$this->dicc = new diccionarioM(); 	
		
		
		session_start();
		if(isset($_SESSION['usuario'] )){
			$this->dicc->CargarInicioWSesion();
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
					$imgperfil 	= $_POST["imgperfil"];


					$resultado = $this->modelo->alta($nombre, $apellidos, $sexo, $correo, $intereses, $username, $password, $bday, $imgperfil);

							
							//echo "<br>debug: Va a cargar la vista en base a lo devuelto por el modelo";
							if($resultado!==FALSE){
								//Procesar la vista

								//Obtener la vista
								session_start();
								$_SESSION['usuario']   = $username;
								$_SESSION['idUsuario'] = $this->modelo->id;
								
								$this->dicc->CargarInicioWSesion();

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
		$vista = file_get_contents("Vista/recupera.php");
		$header = file_get_contents("Vista/navbar.html");
		$footer = file_get_contents("Vista/footer.html");
		$vista = $header . $vista . $footer;
		echo $vista;
	}
}
?>