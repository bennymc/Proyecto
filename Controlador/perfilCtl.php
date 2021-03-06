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
		if (isset($_POST['bookId']) && isset($_POST['status'])) {
			$this->mdl->cambiastatus($_POST['bookId'],$_POST['status']);
		}



		if(isset($_GET['edit'])){
			if($_GET['edit']=="truepass"){
				echo '
				<div class="alert alert-dismissible alert-success" id="modalContent">
				  <button type="button" class="close" data-dismiss="alert">×</button>
				  <strong>Correcto!</strong><p>Tu Contraseña se actualizo correctamente</p> 
				</div>
			';
				
			}
			else{
				echo '
				<div class="alert alert-dismissible alert-success" id="modalContent">
				  <button type="button" class="close" data-dismiss="alert">×</button>
				  <strong>Correcto!</strong><p>Tu Datos se actualizaron correctamente</p> 
				</div>
			';
			}
		}

		
		if(isset($_SESSION['usuario'])){
			$this->mdl->show($_SESSION['idUsuario']);
			
			//Cargar  la vista
			//require_once("Vista/perfil.php");

			if($this->mdl->nombre != NULL){

					$vista = file_get_contents("Vista/perfil.php");
					$this->dicc->CargarHeader();
					$footer = file_get_contents("Vista/footer.html");
					$modalstatus=file_get_contents("Vista/LibrosenPerfil.html");
					
					$vista= $this->dicc->headerfinal .$vista;
					//Reemplazo con un diccionario
					$diccionario = array(
										'{nombre}' => $this->mdl->nombre,
										'{libroD}' => $this->mdl->librodestacado ,
										'{descripcion}' => $this->mdl->descripcion,
										'{foto}' => $this->mdl->imgPerfil,
										'{imglibroD}'=> $this->mdl->imgLdestacado,
										'{USER}' => $_SESSION['usuario'],
										'{{idDestacado}}' => $this->mdl->idDestacado,
										'{LINKPERFIL}' => "?ctl=perfil"
										);
					$vista= strtr($vista,$diccionario);


					$i = strpos($vista,'{repite');
					$f = strpos($vista, '}',$i);
					$ff = strpos($vista, '{end repite}',$f);					
					$bloque = substr($vista, $f+2,$ff-($f+2));
				
					$repetir_cad = substr($vista, $f+2,$ff-($f+2));
					$vista = str_replace($bloque,"",$vista);
					
					$librero="";

					if($this->mdl->titulos!=NULL){
							for($x=0; $x < count($this->mdl->titulos); $x++) {
								
								//acortar nombres de libros largos
								$auxTitulo=$this->mdl->titulos[$x];	
								if(strlen($auxTitulo)> 15 )
								{
									$auxTitulo= substr($auxTitulo, 0,10);
									$auxTitulo=$auxTitulo."...";
								}



								$diccionariolibrero= array(
													'{IDLIBRO}' => $this->mdl->idsLibros[$x],
													'{titulo}' => $auxTitulo,
													'{imglibro}' => $this->mdl->portadas[$x],
													'{status}'=> $this->mdl->estado[$x],
													'{{id}}' => $this->mdl->id[$x],

														);
								$aux = $repetir_cad;
								$aux = strtr($aux,$diccionariolibrero);
								$librero= $librero.$aux;
							}
					}
					
					$diccionario = array(
										'{end repite}'=>"",
										'{repite libro}'=>""
										);
					$vista= strtr($vista,$diccionario);
				    $vista = str_replace("{LIBRERO}",$librero,$vista);
					$vista =  $vista. $modalstatus . $footer;
					//Mostrar la vista
					echo $vista;

			}else
				$this->dicc->CargarInicio();

			}
			else{
					//cuando aun no hace login
					$this->dicc->CargarInicio();				
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