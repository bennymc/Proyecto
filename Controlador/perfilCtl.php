<?php

/**
*Clase para llevar el manejo de los items con sus propios
*metodos y atributos en referencia a un item
**/
class perfilCtl{
	private $mdl;
	
	/**
	* Contruye el modelo a utilizar
	*/
	function __construct(){

		require_once("Modelo/perfilMdl.php");
		$this->mdl=new perfilMdl();
		require_once("Controlador/diccionariomaestro.php");
			$this->dicc = new diccionarioM(); 
	}

	function ejecutar(){
		// Validar accesos y permisos

		// Validar entradas

		// En base a accion ejecutar un metodo
		if(isset($_GET['id'])){
			
			$this->Cargar();
			
		}else
		{
			http_response_code(404);
		}

	}

	function Cargar(){

		//valido variables y ejecuta el modelo para obtener la informacion
		if(isset($_GET['id']) && $this->validateInteger($_GET['id'])){
		//	session_start();
			if(isset($_SESSION['usuario'])){
				$this->mdl->show($_GET['id']);
			
			//Cargar  la vista
			//require_once("Vista/perfil.php");

			if($this->mdl->nombre != NULL){

					$vista = file_get_contents("Vista/perfil.php");
					$this->dicc->CargarHeader();
					$footer = file_get_contents("Vista/footer.html");
					$modalstatus=file_get_contents("Vista/LibrosenPerfil.html");
					
					$vista= $this->dicc->headerfinal .$vista;
		//			session_start();
					$link =     "?ctl=perfil&id=".$_SESSION['idUsuario'];
					//Reemplazo con un diccionario
					$diccionario = array(
										'{nombre}' => $this->mdl->nombre,
										'{libroD}' => $this->mdl->librodestacado ,
										'{descripcion}' => $this->mdl->descripcion,
										'{foto}' => $this->mdl->imgPerfil,
										'{imglibroD}'=> $this->mdl->imgLdestacado,
										'{USER}' => $_SESSION['usuario'],
										'{LINKPERFIL}' => $link
									);
					$vista= strtr($vista,$diccionario);



					//Librero		
					$i = strpos($vista,'{repite');
					$f = strpos($vista, '}',$i);
					$ff = strpos($vista, '{end repite}',$f);
					$bloque = substr($vista, $i,$f-($ff+7));
					//echo $bloque;
					$repetir_cad = substr($vista, $f+2,$ff-($f+2));
					$vista = str_replace($bloque,"",$vista);
					
					$librero="";

					if($this->mdl->titulos!=NULL){
							for($x=0; $x < count($this->mdl->titulos); $x++) {
								
								//acortar nombres de libros largos
								$auxTitulo=$this->mdl->titulos[$x];	
								if(strlen($auxTitulo)> 15 )
								{
									$auxTitulo= substr($auxTitulo, 0,13);
									$auxTitulo=$auxTitulo."...";
								}



								$diccionariolibrero= array(
													'{titulo}' => $auxTitulo,
													'{imglibro}' => $this->mdl->portadas[$x],
													'{status}'=> $this->mdl->estado[$x]
														);
								$aux = $repetir_cad;
								$aux = strtr($aux,$diccionariolibrero);
								$librero= $librero.$aux;
							}
					}
					
					
				    $vista = str_replace("{LIBRERO}",$librero,$vista);
					$vista =  $vista. $modalstatus . $footer;
					//Mostrar la vista
					echo $vista;

			}else
				header('HTTP/1.0 404 Not Found');

			}
			else{
					//cuando aun no hace login

					$vista = file_get_contents("Vista/inicio.html");
					$header = file_get_contents("Vista/navbar.html");
					$footer = file_get_contents("Vista/footer.html");
					$vista = $header . $vista . $footer;
					//Reemplazo con un diccionario
					$diccionario = array(
										'{USER}' => "Inicia Sesion"
										);
					$vista= strtr($vista,$diccionario);


					echo $vista;
				}
			
				
			}
		else
		{
			//Llamar vista de error
			echo "no hay id";
		}

	}

	/**
	*Valida que un valor dado sea un entero
	*@param mixed $valor
	*@return boolean
	*/

	function validateInteger($valor){

		return is_int((int)$valor);
	}

}


?>