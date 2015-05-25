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

		if(isset($_GET['add'])){
			
			$add=$_GET['add'];
			if($add=="true"){
				$this->mdl->addLibro($_GET['id']);
				echo '
				<div class="alert alert-dismissible alert-success" id="modalContent">
				  <button type="button" class="close" data-dismiss="alert">×</button>
				  <strong>AGREGADO!</strong><p>Este libro ahora esta en tu librero.</p> 
				</div>
			';
			}else header('Location: ?ctl=inicio');	
		}

		if(isset($_GET['review'])){
			if($_GET['review']=="true"){
				$review = $_POST['resena'];
				$this->mdl->addReview($_GET['id'], $review);
				echo '
				<div class="alert alert-dismissible alert-success" id="modalContent">
				  <button type="button" class="close" data-dismiss="alert">×</button>
				  <strong>EXITO!</strong><p>Tu reseña ha sido guardada.</p> 
				</div>
			';
			}
		}

		if(isset($_GET['id']) && $this->validateInteger($_GET['id'])){
			if($_GET['id']!=0)
			{
				$this->mdl->show($_GET['id']);
			$vista = file_get_contents("Vista/ejemplar.html");
			$this->dicc->CargarHeader();			
			$footer = file_get_contents("Vista/footer.html");
			
			$tam=12;
			if(isset($_SESSION['usuario'])){
				$agregado=$this->mdl->verificarLibrero($_GET['id']);
				if($agregado){
					$i = strpos($vista,'{ADD');
					$f = strpos($vista, '}',$i);
					$ff = strpos($vista, '{ENDADD}',$f);					
					$frm = substr($vista, $f+2,$ff-($f+2));
					$vista  = str_replace($frm,"",$vista );
				}
				$resena=$this->mdl->verificarResena($_GET['id']);
				if($resena){
					$i = strpos($vista,'{ESCRIBIRRESEÑA');
					$f = strpos($vista, '}',$i);
					$ff = strpos($vista, '{ENDESCRIBIRRESEÑA}',$f);					
					$frm = substr($vista, $f+2,$ff-($f+2));
					$vista  = str_replace($frm,"",$vista );
					$tam=12;
				}
				else $tam=7;;
			}else{
				$i = strpos($vista,'{ADD');
				$f = strpos($vista, '}',$i);
				$ff = strpos($vista, '{ENDADD}',$f);					
				$frm = substr($vista, $f+2,$ff-($f+2));
				$vista  = str_replace($frm,"",$vista );
				$i = strpos($vista,'{ESCRIBIRRESEÑA');
				$f = strpos($vista, '}',$i);
				$ff = strpos($vista, '{ENDESCRIBIRRESEÑA}',$f);					
				$frm = substr($vista, $f+2,$ff-($f+2));
				$vista  = str_replace($frm,"",$vista );
				$tam=12;
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
				'{ENDADD}'=> "",
				'{ESCRIBIRRESEÑA}'=> "",
				'{ENDESCRIBIRRESEÑA}'=> "",
				'{TAM}'=> $tam,
				'{IDLIBRO}'=>$_GET['id'],
			);

			
			$vista = strtr($vista, $diccionario);

			$i = strpos($vista,'{{repite reseñas');
			$f = strpos($vista, '}}', $i);
			$ff = strpos($vista, '{{termina repite}}', $f);
			$bloque = substr($vista, $i,$ff-$i+18);
			//var_dump($bloque);

			$repetir_cad = substr($vista, $f+2, $ff-$f-2);
			//echo $repetir_cad;
			
			$vista = str_replace($bloque,"",$vista);
			
			$reviews="";

			for($x=0; $x < count($this->mdl->idReviews); $x++) {
				$diccionarioResenas= array(
									'{{Nombre}}' => $this->mdl->nombreUsuarioReview[$x],
									'{{id}}' => $this->mdl->idUsuarioReview[$x],
									'{{Texto}}' => $this->mdl->textoReview[$x]
										);
				$aux = $repetir_cad;
				$aux = strtr($aux,$diccionarioResenas);
				$reviews = $reviews.$aux;
			}
			
		    $vista = str_replace("{{RESEÑA}}",$reviews,$vista);



			$vista = $this->dicc->headerfinal . $vista. $footer;
			echo $vista;
		}else
		{header('Location: ?ctl=inicio');	}
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