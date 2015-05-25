<?php

class usuarioCtl{

	private $modelo;
	function __construct(){
		require_once("Modelo/usuarioMdl.php");
		$this->mdl=new usuarioMdl();
		require_once("Controlador/diccionariomaestro.php");
		$this->dicc = new diccionarioM(); 	
	}

	function ejecutar(){
		if (isset($_POST['userId']) && isset($_POST['mensaje']) && isset($_SESSION['idUsuario'])) {
			$this->mdl->EnviaMensaje($_POST['userId'],$_POST['mensaje']);
			echo '
				<div class="alert alert-dismissible alert-success" id="modalContent">
				  <button type="button" class="close" data-dismiss="alert">×</button>
				  <strong>Correcto!</strong><p>Mensaje Enviado</p> 
				</div>
			';
		}

		if(isset($_GET['id'])){
			
			$this->mdl->show($_GET['id']);


			if($this->mdl->nombre != NULL){
			  if(isset($_SESSION['idUsuario'])) 
			  	$idUser=$_SESSION['idUsuario'];
			  else
			  	$idUser=NULL;

				if($_GET['id'] != $idUser){
					$vista = file_get_contents("Vista/usuario.php");
					$this->dicc->CargarHeader();
					$footer = file_get_contents("Vista/footer.html");
					
					
					$vista= $this->dicc->headerfinal .$vista;
					//Reemplazo con un diccionario
					$diccionario = array(
										'{nombre}' => $this->mdl->nombre,
										'{libroD}' => $this->mdl->librodestacado ,
										'{descripcion}' => $this->mdl->descripcion,
										'{foto}' => $this->mdl->imgPerfil,
										'{imglibroD}'=> $this->mdl->imgLdestacado,
										'{USER}' => $_GET['id'],
										'{{idDestacado}}' => $this->mdl->idDestacado,
										'{LINKPERFIL}' => "?ctl=perfil",
										'{idUSUARIO}'=> $idUser,
										'{USER}' => $this->mdl->user,
										'{USERID}' => $this->mdl->userID
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
					$vista =  $vista.  $footer;

					if(isset($_SESSION['idUsuario']))
					{

					}
					else{
							$i = strpos($vista,'{MENSAJEBTN');
							$f = strpos($vista, '}',$i);
							$ff = strpos($vista, '{ENDMENSAJEBTN}',$f);					
							$frm = substr($vista, $f+2,$ff-($f+2));
							$vista  = str_replace($frm,"",$vista );
						}

						$diccionario = array(
										'{MENSAJEBTN}'=>"",
										'{ENDMENSAJEBTN}'=>""
										);
					$vista= strtr($vista,$diccionario);
					//Mostrar la vista
					echo $vista;
				}else
				header('Location: ?ctl=perfil');	

			}else
				$this->dicc->CargarInicio();



		}else
			$this->dicc->CargarInicio();

	}
	
}
?>