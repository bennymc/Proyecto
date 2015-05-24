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
	
}
?>