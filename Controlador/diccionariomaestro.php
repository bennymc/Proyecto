<?php

class diccionarioM{

	public $headerfinal;

	function CargarHeader(){
		$header = file_get_contents("Vista/navbar.html");
		session_start();
			if(isset($_SESSION['usuario'])){

				$link =     "?ctl=perfil&id=".$_SESSION['idUsuario'];
				//var_dump($link);
				$diccionario = array(
									'{USER}' => $_SESSION['usuario'],
									'{LINKPERFIL}' => $link
									//'{MJS}'=> "",
									//'{END MJS}' => ""
									);
				$header = strtr($header,$diccionario);

			}
			else
				{
					$diccionario = array(
					'{USER}' => "Inicia Sesion",
					'{LINKPERFIL}' => "?ctl=inicio"
					);
					$header = strtr($header,$diccionario);
				}
		
		

		$this->headerfinal = $header;
	}


	function CargarInicio(){
				$this->CargarHeader();
				$vista = file_get_contents("Vista/inicio.html");				
				$footer = file_get_contents("Vista/footer.html");
				$vista = $this->headerfinal  . $vista . $footer;
				//Reemplazo con un diccionario
				


				echo $vista;
	}
	
	function CargarRegistro(){

				$vista = file_get_contents("Vista/registro.php");
				$header = file_get_contents("Vista/navbar.html");
				$footer = file_get_contents("Vista/footer.html");
				$vista = $header . $vista . $footer;
				//Reemplazo con un diccionario
				$diccionario = array(
									'{USER}' => "Inicia Sesion",
									'{LINKPERFIL}' => "?ctl=inicio"
									);
				$vista= strtr($vista,$diccionario);


				echo $vista;
	}
	function CargarInicioWSesion(){
		
					
					$vista  = file_get_contents("Vista/inicio.html");
					$header = file_get_contents("Vista/navbar.html");
					$footer = file_get_contents("Vista/footer.html");
					$vista  = $header . $vista . $footer;
					//Reemplazo con un diccionario	
					$link =     "?ctl=perfil&id=".$_SESSION['idUsuario'];
					//var_dump($link);
					$diccionario = array(
										'{USER}' => $_SESSION['usuario'],
										'{LINKPERFIL}' => $link
										);
					$vista= strtr($vista,$diccionario);	


					echo $vista;
	}



}

?>
