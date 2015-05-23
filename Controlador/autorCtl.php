<?php

class autorCtl{
	private $modelo;
	function __construct(){
		require_once("Modelo/autorMdl.php");
		$this->mdl=new autorMdl();
		require_once("Controlador/diccionariomaestro.php");
			$this->dicc = new diccionarioM(); 	
	}
	public function ejecutar(){
		if(isset($_GET['id']) && $this->validateInteger($_GET['id'])){
			$idAutor = $_GET['id'];
			$this->mdl->show($idAutor);
			$diccionario = array(
				'{{Nombre}}' => $this->mdl->Nombre,
				'{{Foto}}' => $this->mdl->Foto);

			$vista = file_get_contents("Vista/autor.html");
			$this->dicc->CargarHeader();			
			$footer = file_get_contents("Vista/footer.html");
			$vista = strtr($vista, $diccionario);

			$i = strpos($vista,'{{repite generos');
			$f = strpos($vista, '}}', $i);
			$ff = strpos($vista, '{{termina repite1}}', $f);

			$bloque = substr($vista, $i,$ff-$i+19);

			$repetir_cad = substr($vista, $f+2, ($ff-16)-$f);
			//echo $repetir_cad;
			$vista = str_replace($bloque,"",$vista);

			$generos="";

			for($x=0; $x < count($this->mdl->Generos); $x++) {
				$diccionarioGeneros= array(
									'{{genero}}' => $this->mdl->Generos[$x],
									'{{idGenero}}' => $x+1,
									'{{idAutor}}' => $idAutor
										);
				$aux = $repetir_cad;
				$aux = strtr($aux,$diccionarioGeneros);
				$generos = $generos.$aux."</br>";
			}
			
		    $vista = str_replace("{{GENEROS}}",$generos,$vista);
			


			$i = strpos($vista,'{{repite libros');
			$f = strpos($vista, '}}', $i);
			$ff = strpos($vista, '{{termina repite2}}', $f);
			$bloque = substr($vista, $i,$ff-$i+19);
			//var_dump($bloque);

			$repetir_cad = substr($vista, $f+2, $ff-$f-2);
			//echo $repetir_cad;
			
			$vista = str_replace($bloque,"",$vista);
			
			$libros="";

			for($x=0; $x < count($this->mdl->idLibros); $x++) {
				$diccionarioLibros= array(
									'{{titulo}}' => $this->mdl->nombreLibros[$x],
									'{{id}}' => $this->mdl->idLibros[$x],
									'{{url}}' => $this->mdl->urlLibros[$x]
										);
				$aux = $repetir_cad;
				$aux = strtr($aux,$diccionarioLibros);
				$libros = $libros.$aux;
			}
			
		    $vista = str_replace("{{LIBROS}}",$libros,$vista);
			$vista = $this->dicc->headerfinal . $vista. $footer;

			

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


class autorgeneroCtl{
	private $modelo;
	function __construct(){
		require_once("Modelo/autorMdl.php");
		$this->mdl=new autorMdl();
		require_once("Controlador/diccionariomaestro.php");
			$this->dicc = new diccionarioM(); 
	}
	public function ejecutar(){
		if(isset($_GET['idAutor']) && $this->validateInteger($_GET['idAutor']) && isset($_GET['idGenero']) && $this->validateInteger($_GET['idGenero'])){
			$idAutor = $_GET['idAutor'];
			$idGenero = $_GET['idGenero'];
			$this->mdl->show2($idAutor, $idGenero);
			$diccionario = array(
				'{{Nombre}}' => $this->mdl->Nombre,
				'{{Foto}}' => $this->mdl->Foto,
				'{{Genero}}' => $this->mdl->nombreGenero);

			$vista = file_get_contents("Vista/autorGenero.html");
			$this->dicc->CargarHeader();			
			$footer = file_get_contents("Vista/footer.html");
			$vista = strtr($vista, $diccionario);

			$i = strpos($vista,'{{repite generos');
			$f = strpos($vista, '}}', $i);
			$ff = strpos($vista, '{{termina repite1}}', $f);

			$bloque = substr($vista, $i,$ff-$i+19);

			$repetir_cad = substr($vista, $f+2, ($ff-16)-$f);
			//echo $repetir_cad;
			$vista = str_replace($bloque,"",$vista);

			$generos="";

			for($x=0; $x < count($this->mdl->Generos); $x++) {
				$diccionarioGeneros= array(
									'{{genero}}' => $this->mdl->Generos[$x],
									'{{idGenero}}' => $x+1,
									'{{idAutor}}' => $idAutor
										);
				$aux = $repetir_cad;
				$aux = strtr($aux,$diccionarioGeneros);
				$generos = $generos.$aux."</br>";
			}
			
		    $vista = str_replace("{{GENEROS}}",$generos,$vista);
			


			$i = strpos($vista,'{{repite libros');
			$f = strpos($vista, '}}', $i);
			$ff = strpos($vista, '{{termina repite2}}', $f);
			$bloque = substr($vista, $i,$ff-$i+19);
			//var_dump($bloque);

			$repetir_cad = substr($vista, $f+2, $ff-$f-2);
			//echo $repetir_cad;
			
			$vista = str_replace($bloque,"",$vista);
			
			$libros="";

			for($x=0; $x < count($this->mdl->idLibros); $x++) {
				$diccionarioLibros= array(
									'{{titulo}}' => $this->mdl->nombreLibros[$x],
									'{{id}}' => $this->mdl->idLibros[$x],
									'{{url}}' => $this->mdl->urlLibros[$x]
										);
				$aux = $repetir_cad;
				$aux = strtr($aux,$diccionarioLibros);
				$libros = $libros.$aux;
			}
			
		    $vista = str_replace("{{LIBROS}}",$libros,$vista);
			$vista = $this->dicc->headerfinal . $vista. $footer;

			

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