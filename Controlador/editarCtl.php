<?php

class editarCtl{
	private $mdl;
	private $dicc;
	function __construct(){
		 require_once("Modelo/editarMdl.php");
		 $this->mdl= new editarMdl();
		 require_once("Controlador/diccionariomaestro.php");
		$this->dicc = new diccionarioM();
	}
	
	public function ejecutar(){

		if(isset($_GET['edit'])){
			echo '
				<div class="alert alert-dismissible alert-danger" id="modalContent">
				  <button type="button" class="close" data-dismiss="alert">×</button>
				  <strong>ERROR!</strong><p>Contraseña incorrecta</p> 
				</div>
			';
		}


		if(empty($_POST)){


				if(isset($_SESSION['usuario'])){

				$this->mdl->CargarDatos();
				
				$vista = file_get_contents("Vista/editar.php");
				$this->dicc->CargarHeader();
				$footer = file_get_contents("Vista/footer.html");
				//selected=
				if($this->mdl->sexo=="Femenino"){
					$Fem= "selected=selected";
					$Mas="";
				}else{
					$Mas= "selected=selected";
					$Fem="";
				}

				$opciones="";
				if($this->mdl->idsLibros == NULL){
					$opciones= "<option value=\"0\">No tienes Libros</option>";
				}else
				{
					for($x=0; $x < count($this->mdl->idsLibros); $x++){
						if($this->mdl->idDestacado==$this->mdl->idsLibros[$x])
							$opciones = $opciones . " <option selected=selected value=". $this->mdl->idsLibros[$x] . ">".$this->mdl->titulos[$x]."</option>";
						else
							$opciones = $opciones . " <option value=". $this->mdl->idsLibros[$x] . ">".$this->mdl->titulos[$x]."</option>";
					}
				}



				$diccionario = array(
											'{NOMBRE}' => $this->mdl->nombre,
											'{APELLIDOS}' => $this->mdl->apellidos,
											'{SELECTF}' => $Fem,
											'{SELECTM}' => $Mas,
											'{INTERESES}' => $this->mdl->descripcion,
											'{NACIMIENTO}' => $this->mdl->nacimiento,											
											'{USER}' => $_SESSION['usuario'],
											'{LINKPERFIL}' => "?ctl=perfil",
											'{OPCIONES}' => $opciones
										);
						$vista= strtr($vista,$diccionario);

				$vista = $this->dicc->headerfinal . $vista . $footer;
				echo $vista;
			}else
			{
				$this->dicc->CargarInicio();
			}
					
		}
		else{

					if( $_POST["passwordold"]==NULL){
						//Obtener las variables para la alta
						//y limpiarlas
						$nombre 	= $_POST["nombre"];
						$apellidos 	= $_POST["apellidos"];
						$sexo		= $_POST["sexo"];
						$intereses 	= $_POST["intereses"];
						$destacado 	= $_POST["fav"];
						$bday 		= $_POST["bday"];
						$destacado  =  $_POST["fav"];

						$resultado = $this->mdl->actualiza($nombre, $apellidos, $sexo,  $intereses,   $bday, $destacado);
						
								
								//echo "<br>debug: Va a cargar la vista en base a lo devuelto por el modelo";
								if($resultado!==FALSE){
									header('Location: ?ctl=perfil&edit=true');							
									
								}
								else echo "algo salio mal";
									//require_once("Vista/Error.html");
					}else{

						$old	= $_POST["passwordold"];
						$new 	= $_POST["passwordnew"];

						$resultado= $this->mdl->cambiar($old,$new);
						//echo "<br>debug: Va a cargar la vista en base a lo devuelto por el modelo";
								if($resultado!==FALSE){
									header('Location: ?ctl=perfil&edit=truepass');							
									
								}
								else {
									$_POST = array();
									header('Location: ?ctl=editar&edit=false');	
									
								}

					}

					

		}

		

		

		
	}
	
}
?>