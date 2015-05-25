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
		if(isset($_GET['action'])){
			require("Modelo/resetMdl.php");
			require("config.inc");
			$this->modelo = new resetMdl();
			$key = uniqid(mt_rand(), true);
			$token = md5($_POST['email'].$key);

			$email 	= $_POST["email"];
			
			$resultado = $this->modelo->valida($email);
			
			if($resultado!==FALSE){

				require("www/includes/PHPMailerAutoload.php");

				//instanciamos un objeto de la clase phpmailer al que llamamos 
				//por ejemplo mail
				$mail = new PHPMailer();

				//Con la propiedad Mailer le indicamos que vamos a usar un 
				//servidor smtp
				$mail->IsSMTP();

				//Asignamos a Host el nombre de nuestro servidor smtp
				$mail->Host = $emailhost;

				//Le indicamos que el servidor smtp requiere autenticación
				$mail->SMTPAuth = true;

				//Le decimos cual es nuestro nombre de usuario y password
				$mail->Username = $emailusername;
				$mail->Password = $emailpassword;

				//Indicamos cual es nuestra dirección de correo y el nombre que 
				  //queremos que vea el usuario que lee nuestro correo
				  $mail->From = "support@book2book.tk";
				  $mail->FromName = "Support de Book2";

				  //el valor por defecto 10 de Timeout es un poco escaso dado que voy a usar 
				  //una cuenta gratuita, por tanto lo pongo a 30  
				  $mail->Timeout=30;

				  //Indicamos cual es la dirección de destino del correo
				  $mail->AddAddress($email);

				  //Asignamos asunto y cuerpo del mensaje
				  //El cuerpo del mensaje lo ponemos en formato html, haciendo 
				  //que se vea en negrita
				  $mail->Subject = "Recuperar contraseña";
				  $mail->Body = 'Hola, <br><br>Tu nueva contraseña es: '.$token.' <br><br> Una vez autentificad@ podrás cambiarla por una nueva. <br><br> Enlace al sitio http://www.book2book.tk/?ctl=inicio<br/><br/>';

				  //se envia el mensaje, si no ha habido problemas 
				  //la variable $exito tendra el valor true
				  $exito = $mail->Send();
						
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
				   	$resultado = $this->modelo->cambia($token);
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
				echo $vista;
	}
}

?>