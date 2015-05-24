<?php

class editorialCtl{
	private $modelo;
	function __construct(){
		require_once("Modelo/editorialMdl.php");
		$this->mdl=new editorialMdl();
		require_once("Controlador/diccionariomaestro.php");
			$this->dicc = new diccionarioM(); 	
	}
	public function ejecutar(){
		if(isset($_GET['id']) && $this->validateInteger($_GET['id'])){
			$idEditorial = $_GET['id'];
			$this->mdl->show($idEditorial);
			$diccionario = array(
				'{{Titulo}}' => $this->mdl->Titulo);

			$vista = file_get_contents("Vista/editorial.html");
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
									'{{idEditorial}}' => $idEditorial
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

class editorialGeneroCtl{
	private $modelo;
	function __construct(){
		require_once("Modelo/editorialMdl.php");
		$this->mdl=new editorialMdl();
		require_once("Controlador/diccionariomaestro.php");
			$this->dicc = new diccionarioM(); 
	}
	public function ejecutar(){
		if(isset($_GET['idEditorial']) && $this->validateInteger($_GET['idEditorial']) && isset($_GET['idGenero']) && $this->validateInteger($_GET['idGenero'])){
			$idEditorial = $_GET['idEditorial'];
			$idGenero = $_GET['idGenero'];
			$this->mdl->show2($idEditorial, $idGenero);
			$diccionario = array(
				'{{Editorial}}' => $this->mdl->Nombre,
				'{{Genero}}' => $this->mdl->nombreGenero);

			$vista = file_get_contents("Vista/editorialGenero.html");
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
									'{{idEditorial}}' => $idEditorial
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