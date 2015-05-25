<?php

class diccionarioM{

	public $headerfinal;

	function CargarHeader(){
		$header = file_get_contents("Vista/navbar.html");
		//session_start();
			if(isset($_SESSION['usuario'])){

				$i = strpos($header,'{MODALLOGIN}');
				$f = strpos($header, '}',$i);
				$ff = strpos($header, '{ENDMODALLOGIN}',$f);					
				$linkmsj = substr($header, $f+2,$ff-($f+2));
				$header = str_replace($linkmsj,"",$header);

				$diccionario = array(
									'{USER}' => $_SESSION['usuario'],
									'{LINKPERFIL}' => "?ctl=perfil",
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
				

				if(isset($_SESSION['usuario'])){

					$i = strpos($vista,'{FRMLOGIN');
					$f = strpos($vista, '}',$i);
					$ff = strpos($vista, '{ENDFRMLOGIN}',$f);					
					$frm = substr($vista, $f+2,$ff-($f+2));
					$vista  = str_replace($frm,"",$vista );

					

					$diccionario = array(
								'{FRMLOGIN}'=> "",
								'{ENDFRMLOGIN}'=> "",
								'{LOGO}'=> "",
								'{ENDLOGO}'=> ""
								);
					$vista = strtr($vista,$diccionario);
				}else{

					$i = strpos($vista,'{LOGO');
					$f = strpos($vista, '}',$i);
					$ff = strpos($vista, '{ENDLOGO}',$f);					
					$frm = substr($vista, $f+2,$ff-($f+2));
					$vista  = str_replace($frm,"",$vista );

					$diccionario = array(
								'{FRMLOGIN}'=> "",
								'{ENDFRMLOGIN}'=> "",
								'{LOGO}'=> "",
								'{ENDLOGO}'=> ""
								);
					$vista = strtr($vista,$diccionario);
				}
				
				require_once("Modelo/InicioMdl.php");
				$this->mdl=new popularesMdl();
				$this->mdl->show();


				$i = strpos($vista,'{POPUS');
				$f = strpos($vista, '}',$i);
				$ff = strpos($vista, '{ENDPOPUS}',$f);					
				$frm = substr($vista, $f+2,$ff-($f+2));
				
				
				$popus="";
				for($x=0; $x < count($this->mdl->ids); $x++) {
								$diccionariolibrero= array(
													'{IDLIBRO}' => $this->mdl->ids[$x],
													'{IMGLIBRO}' => $this->mdl->urlLibros[$x]
														);
								$aux = $frm;
								$aux = strtr($aux,$diccionariolibrero);
								$popus= $popus.$aux;
							}

							$vista  = str_replace($frm,$popus,$vista );	

				$diccionario = array(
								'{POPUS}'=> "",
								'{ENDPOPUS}'=> ""
								);
					$vista = strtr($vista,$diccionario);

					//RESEÑAS
				$this->mdl->Cargaresenas();
				$i = strpos($vista,'{RESENAS');
				$f = strpos($vista, '}',$i);
				$ff = strpos($vista, '{ENDRESENAS}',$f);					
				$frm = substr($vista, $f+2,$ff-($f+2));
				
				
				$popus="";
				for($x=0; $x < count($this->mdl->resena); $x++) {
								$diccionariolibrero= array(
													'{LIBRONAME}' => $this->mdl->libroname[$x],
													'{USERNAME}' => $this->mdl->username[$x],
													'{LIBROID}' => $this->mdl->idLibros[$x],
													'{USERID}' => $this->mdl->idUsuarios[$x],
													'{RESENA}' => $this->mdl->resena[$x]
														);
								$aux = $frm;
								$aux = strtr($aux,$diccionariolibrero);
								$popus= $popus.$aux;
							}

							$vista  = str_replace($frm,$popus,$vista );	

				$diccionario = array(
								'{RESENAS}'=> "",
								'{ENDRESENAS}'=> ""
								);
					$vista = strtr($vista,$diccionario);



				$vista = $this->headerfinal  . $vista . $footer;
				echo $vista;
	}
	
	function CargarRegistro(){

				$this->CargarHeader();
				$vista = file_get_contents("Vista/registro.html");
				$footer = file_get_contents("Vista/footer.html");
				$vista = $this->headerfinal  . $vista . $footer;


				echo $vista;
	}




}

?>
