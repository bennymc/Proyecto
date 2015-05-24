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
			$vista = file_get_contents("Vista/ejemplar.html");
			$this->dicc->CargarHeader();			
			$footer = file_get_contents("Vista/footer.html");
			

			if(isset($_SESSION['usuario'])){
				$agregado=$this->mdl->verificarLibrero($_GET['id']);
				if($agregado){
					$i = strpos($vista,'{ADD');
					$f = strpos($vista, '}',$i);
					$ff = strpos($vista, '{ENDADD}',$f);					
					$frm = substr($vista, $f+2,$ff-($f+2));
					$vista  = str_replace($frm,"",$vista );
				}

			}else{
				$i = strpos($vista,'{ADD');
				$f = strpos($vista, '}',$i);
				$ff = strpos($vista, '{ENDADD}',$f);					
				$frm = substr($vista, $f+2,$ff-($f+2));
				$vista  = str_replace($frm,"",$vista );
			}

			

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
				'{{idGenero}}' => $this->mdl->idGenero,
				'{ADD}'=> "",
				'{ENDADD}'=> ""
			);

			
			$vista = strtr($vista, $diccionario);
			$vista = $this->dicc->headerfinal . $vista. $footer;
			echo $vista;
		}else
		{
			header('Location: ?ctl=inicio');	
		}

	}
	function validateInteger($valor){
		return is_int((int)$valor);
	}
}
?>