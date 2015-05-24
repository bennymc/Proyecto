<?php

class InicioCtl{
	private $dicc;
	private $mdl;
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
					

					
					$resultado = $this->modelo->alta($nombre, $apellidos, $sexo, $correo, $intereses, $username, $password, $bday);

							
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
		if(isset($_GET['action'])){
			require("Modelo/resetMdl.php");

			$this->modelo = new resetMdl();
			$key = uniqid(mt_rand(), true);
			$token = md5($_POST['email'].$key);

			$email 	= $_POST["email"];
			
			$resultado = $this->modelo->valida($email);
			
			if($resultado!==FALSE){
				$resultado = $this->modelo->cambia($token);

				
				 
						
				   if(!$exito)
				   {
					echo '
						<div class="alert alert-dismissible alert-success" id="modalContent">
						  <button type="button" class="close" data-dismiss="alert">×</button>
						  <strong>Error!</strong><p>Error enviando el correo.</p> 
						</div>
					';
					echo "<br/>".$mail->ErrorInfo;	
				   }
				   else
				   {
					echo '
						<div class="alert alert-dismissible alert-success" id="modalContent">
						  <button type="button" class="close" data-dismiss="alert">×</button>
						  <strong>Correcto!</strong><p>Se te ha enviado un email con tu nueva contraseña.</p> 
						</div>
					';
				   } 
			}else{
				echo '
				<div class="alert alert-dismissible alert-success" id="modalContent">
				  <button type="button" class="close" data-dismiss="alert">×</button>
				  <strong>Incorrecto!</strong><p>No hay cuentas con ese email registrado.</p> 
				</div>
			';
			} 
		}
	}
}

?>