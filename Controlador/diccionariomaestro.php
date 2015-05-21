<?php

class diccionarioM{


	function CargarInicio(){

				$vista = file_get_contents("Vista/inicio.html");
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
