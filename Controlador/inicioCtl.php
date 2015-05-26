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
	private $mdl;

	public function ejecutar(){
		require_once("Controlador/diccionariomaestro.php");
			$this->dicc = new diccionarioM(); 	
		require_once("Modelo/inboxMdl.php");
			$this->mdl = new inboxMdl();
		
		$this->mdl->Cargar();


		if(isset($_SESSION['usuario'])){
			$this->mdl->CargarMensajes();
			$vista = file_get_contents("Vista/inbox.html");
			$this->dicc->CargarHeader();
			$footer = file_get_contents("Vista/footer.html");
			
			$i = strpos($vista,'{LISTAMENSAJES');
			$f = strpos($vista, '}', $i);
			$ff = strpos($vista, '{ENDLISTAMENSAJES}', $f);
			$bloque = substr($vista, $i,$ff-$i+18);
			//var_dump($bloque);

			$repetir_cad = substr($vista, $f+2, $ff-$f-2);
			//echo $repetir_cad;
			
			$vista = str_replace($bloque,"",$vista);
			
			$mensajes="";

			for($x=0; $x < count($this->mdl->idMensajes); $x++) {
				$diccionarioMensajes= array(
									'{ID}' => $x,
									'{USERNAME}' => $this->mdl->nombre[$x],
									'{FECHA}' => $this->mdl->fecha[$x]
										);
				$aux = $repetir_cad;
				$aux = strtr($aux,$diccionarioMensajes);
				$mensajes = $mensajes.$aux;
			}

			if(isset($_GET['show'])){
					$idMsg = $_GET['show'];
				}else 
					$idMsg = 0;
			$vista = str_replace("{CUERPOMENSAJES}", $this->mdl->cuerpo[$idMsg], $vista);
		    $vista = str_replace("{MENSAJES}",$mensajes,$vista);
			$vista = $this->dicc->headerfinal . $vista. $footer;

			

			echo $vista;
		}
	}
}

class busquedaCtl{
	private $modelo;

	public function ejecutar(){
		require_once("Controlador/diccionariomaestro.php");
			$this->dicc = new diccionarioM();
		require_once("Modelo/buscarMdl.php");
			$this->modelo = new buscarMdl();
		$this->modelo->Buscar($_POST['buscar']);
		$id = $this->modelo->idEncontrado;
		var_dump($id);
		var_dump($this->modelo->bandera);
		if($this->modelo->bandera == 0){
			$vista = file_get_contents("Vista/busqueda.html");
			$this->dicc->CargarHeader();
			$footer = file_get_contents("Vista/footer.html");
			$vista = $this->dicc->headerfinal . $vista . $footer;
			echo $vista;
		}else if($this->modelo->bandera == 1){
			header('Location: ?ctl=usuario&id='.$id);
		}else if($this->modelo->bandera == 2){
			header('Location: ?ctl=ejemplar&id='.$id);
		}else if($this->modelo->bandera == 3){
			header('Location: ?ctl=ejemplar&id='.$id);
		}else if($this->modelo->bandera == 4){
			header('Location: ?ctl=usuario&id='.$id);
		}
	}
}

class registroCtl{
	private $modelo;



	public function ejecutar(){
		

		require_once("Controlador/diccionariomaestro.php");
		$this->dicc = new diccionarioM(); 	
		
		if(isset($_GET['newUser']) && $_GET['newUser']=="false" ){
			
			echo '
				<div class="alert alert-dismissible alert-danger" id="modalContent">
				  <button type="button" class="close" data-dismiss="alert">×</button>
				  <strong>ERROR!</strong><p>Usuario o Correo ya registrado</p> 
				</div>
			';

		}else if(isset($_GET['newUser']) && $_GET['newUser']=="true" ){
			
			header('Location: ?ctl=inicio');

		}
		
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
							if($resultado==false){
								header('Location: ?ctl=registro&newUser=false');		
								

							}
							else{
								$_SESSION['usuario']   = $username;
								$_SESSION['idUsuario'] = $this->modelo->id;
								header('Location: ?ctl=registro&newUser=true');
								
								
							}
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
				$mail->IsSendmail();
				$mail->Mailer = "smtp";
				$mail->IsSMTP();
				$mail->SMTPDebug = 3;
				$mail->Timeout=30;
				$mail->Host = $emailhost;
				$mail->SMTPAuth = true;
				$mail->Username = $emailusername;
				$mail->Password = $emailpassword;
				$mail->Port = $emailpuerto;
				$mail->SMTPSecure = '';
				  $mail->From = "support@book2book.tk";
				  $mail->FromName = "Support de Book2";
				  $mail->AddAddress($email);
				  $mail->Subject = "Recuperar contraseña";
				  $mail->Body = 'Hola, <br><br>Tu nueva contraseña es: '.$token.' <br><br> Una vez autentificad@ podrás cambiarla por una nueva. <br><br> Enlace al sitio http://www.book2book.tk/?ctl=inicio<br/><br/>';
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