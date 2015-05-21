<?php

class diccionarioM{

	public $headerfinal;

	function CargarHeader(){
		$header = file_get_contents("Vista/navbar.html");
		session_start();
			if(isset($_SESSION['usuario'])){

				$i = strpos($header,'{MODALLOGIN}');
				$f = strpos($header, '}',$i);
				$ff = strpos($header, '{ENDMODALLOGIN}',$f);					
				$linkmsj = substr($header, $f+2,$ff-($f+2));
				$header = str_replace($linkmsj,"",$header);




				$link =     "?ctl=perfil&id=".$_SESSION['idUsuario'];
				//var_dump($link);
				$diccionario = array(
									'{USER}' => $_SESSION['usuario'],
									'{LINKPERFIL}' => $link,
									'{MENSAJE}'=> "",
									'{ENDMENSAJE}' => "",
									'{MODALLOGIN}' => "",
									'{ENDMODALLOGIN}' => "",
									'{DROPDOWNES}'=> "",
									'{ENDDROPDOWNES}'=> ""
									);
				$header = strtr($header,$diccionario);

			}
			else
				{

					$i = strpos($header,'{MENSAJE');
					$f = strpos($header, '}',$i);
					$ff = strpos($header, '{ENDMENSAJE}',$f);					
					$linkmsj = substr($header, $f+2,$ff-($f+2));
					$header = str_replace($linkmsj,"",$header);

					$i = strpos($header,'{DROPDOWNES}');
					$f = strpos($header, '}',$i);
					$ff = strpos($header, '{ENDDROPDOWNES}',$f);					
					$linkmsj = substr($header, $f+2,$ff-($f+2));
					$header = str_replace($linkmsj,"",$header);


					$diccionario = array(
								'{USER}' => "Inicia Sesion",
								'{LINKPERFIL}' => "?ctl=inicio",
								'{MENSAJE}'=> "",
								'{ENDMENSAJE}' => "",
								'{MODALLOGIN}' => "",
								'{ENDMODALLOGIN}' => "",
								'{DROPDOWNES}'=> "",
								'{ENDDROPDOWNES}'=> ""
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

				$this->CargarHeader();
				$vista = file_get_contents("Vista/registro.php");
				$footer = file_get_contents("Vista/footer.html");
				$vista = $this->headerfinal  . $vista . $footer;


				echo $vista;
	}

	function CargarInicioWSesion(){
		
					$this->CargarHeader();

					$vista  = file_get_contents("Vista/inicio.html");					
					$footer = file_get_contents("Vista/footer.html");
					$vista = $this->headerfinal  . $vista . $footer;
					echo $vista;
	}



}

?>
