<?php

	class loginCtl{

		private $mdl;
		private $dicc;
		public $valido;
		/**
		* Contruye el modelo a utilizar
		*/
		function __construct(){

			require_once("Modelo/sesionMdl.php");
			$this->mdl = new sesionMdl();
			require_once("Controlador/diccionariomaestro.php");
			$this->dicc = new diccionarioM(); 	 
			
		}
		

		function ejecutar(){


			
			if(empty($_POST)){
				$this->dicc->CargarInicio();
				
			}
			else{
				//Obtener las variables para la alta
				//var_dump($_POST["pass"]);

				//y limpiarlas
				$user	= $_POST["usuario"];
				$pass	= $_POST["pass"];	
				$valido= $this->mdl->valida($user,$pass);	


				if($valido){
					
					//session_start();
					$_SESSION['usuario']   = $user;
					$_SESSION['idUsuario'] = $this->mdl->idUsuario;
					
					$this->dicc->CargarInicio();


				}else
				{
					$this->dicc->CargarInicio();
					echo  '
					<div class="alert alert-dismissible alert-danger" id="modalContent">
					  <button type="button" class="close" data-dismiss="alert">×</button>
					  <strong>ERROR!</strong><p>Usuario o Contraseña incorrecta</p> 
					</div>
					';
				}
			
				
			}
			

		}
	}


	class logoutCtl{

		private $dicc;
		function ejecutar(){
			
			session_unset();
			session_destroy();		
			setcookie(session_name(), '', time()-3600);
			require_once("Controlador/diccionariomaestro.php");
			$this->dicc = new diccionarioM(); 

			$this->dicc->CargarInicio();

		}
	}


?>