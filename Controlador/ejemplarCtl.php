<?php

class ejemplarCtl{
	private $modelo;
	function __construct(){
		require_once("Modelo/ejemplarMdl.php");
		$this->mdl=new ejemplarMdl();
		require_once("Controlador/diccionariomaestro.php");
			$this->dicc = new diccionarioM();
	}
	public function ejecutar(){
		if(isset($_GET['id']) && $this->validateInteger($_GET['id'])){
			$this->mdl->show($_GET['id']);
			$diccionario = array(
				'{{Portada}}' => $this->mdl->Portada,
				'{{Titulo}}' => $this->mdl->Titulo,
				'{{TituloOriginal}}' => $this->mdl->TituloOriginal,
				'{{Autor}}' => $this->mdl->Autor,
				'{{idAutor}}' => $this->mdl->idAutor,
				'{{Editorial}}' => $this->mdl->Editorial,
				'{{idEditorial}}' => $this->mdl->idEditorial,
				'{{Año}}' => $this->mdl->AñoEdicion,
				'{{ISBN}}' => $this->mdl->ISBN,
				'{{Genero}}' => $this->mdl->Genero,
				'{{idGenero}}' => $this->mdl->idGenero);

			$vista = file_get_contents("Vista/ejemplar.html");
			$this->dicc->CargarHeader();			
			$footer = file_get_contents("Vista/footer.html");
			$vista = strtr($vista, $diccionario);
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