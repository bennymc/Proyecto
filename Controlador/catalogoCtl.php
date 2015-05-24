<?php

class catalogoCtl{
	private $mdl;
	/**
	* Contruye el modelo a utilizar
	*/
	function __construct(){
		require_once("Modelo/CatalogoMdl.php");
		$this->mdl = new CatalogoMdl();
		require_once("Controlador/diccionariomaestro.php");
			$this->dicc = new diccionarioM(); 	
	}

	function ejecutar(){
				
			$this->mdl->show();
			$vista = file_get_contents("Vista/libros.html");
			$this->dicc->CargarHeader();	
			$footer = file_get_contents("Vista/footer.html");

			$i = strpos($vista,'{{repite');
			$f = strpos($vista, '}}', $i);
			$ff = strpos($vista, '{{termina repite}}', $f);
			$bloque = substr($vista, $i,$f-($ff-4));
			//echo $bloque;
			$repetir_cad = substr($vista, $f+2, ($ff-16)-$f);
			//echo $repetir_cad;
			$vista = str_replace($bloque,"",$vista);
			
			$generos="";

			for($x=0; $x < count($this->mdl->Generos); $x++) {
				$diccionarioGeneros= array(
									'{{genero}}' => $this->mdl->Generos[$x],
									'{{numero}}' => $x+1
										);
				$aux = $repetir_cad;
				$aux = strtr($aux,$diccionarioGeneros);
				$generos = $generos.$aux."</br>";
			}
			
		    $vista = str_replace("{{GENEROS}}",$generos,$vista);


		    $this->mdl->GenerosRandom();

		    	$i = strpos($vista,'{CONTGENERO');
				$f = strpos($vista, '}',$i);
				$ff = strpos($vista, '{ENDCONTGENERO}',$f);					
				$frm = substr($vista, $f+2,$ff-($f+2));
				
				
				$contenedor="";
				for($x=0; $x < 5; $x++) {
								$diccionariog= array(
													'{{NOMBREGENERO}}' => $this->mdl->nombresR[$x],
													'{{IDGENERO}}' =>  $this->mdl->idGenero[$x]
														);
								$aux = $frm;
								$aux = strtr($aux,$diccionariog);
								$contenedor= $contenedor.$aux;
							}

							$vista  = str_replace($frm,$contenedor,$vista );	

				$diccionario = array(
								'{CONTGENERO}'=> "",
								'{ENDCONTGENERO}'=> ""
								);
					$vista = strtr($vista,$diccionario);




			$vista = $this->dicc->headerfinal . $vista. $footer;
			//Mostrar la vista
			echo $vista;
		

	}


}


?>