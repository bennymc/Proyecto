<?php

class GenerosCtl{
	private $modelo;
	function __construct(){
		require_once("Modelo/GenerosMdl.php");
		$this->mdl=new GenerosMdl();
	}
	public function ejecutar(){
		if(isset($_GET['id']) && $this->validateInteger($_GET['id'])){
			$this->mdl->show($_GET['id']);
			$diccionario = array(
				'{{Descripcion}}' => $this->mdl->Descripcion,
				'{{TituloLibrero}}' => $this->mdl->TituloLibrero,
				'{{CabeceraLibrero}}' => $this->mdl->CabeceraLibrero);

			$vista = file_get_contents("Vista/genero.html");
			$header = file_get_contents("Vista/navbar.html");
			$footer = file_get_contents("Vista/footer.html");
			$vista = strtr($vista, $diccionario);

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
									'{{numero}}' => $x
										);
				$aux = $repetir_cad;
				$aux = strtr($aux,$diccionarioGeneros);
				$generos = $generos.$aux."</br>";
			}
			
			
			
		    $vista = str_replace("{{GENEROS}}",$generos,$vista);
			$vista = $header . $vista. $footer;
			//Mostrar la vista
			echo $vista;
		}else
		{
			http_response_code(404);
		}
	}
	function validateInteger($valor){
		return is_int((int)$valor);
	}
}
?>