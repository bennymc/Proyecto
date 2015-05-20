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
				

				//y limpiarlas
				$user	= $_POST["usuario"];
				$pass	= $_POST["pass"];	
				$valido= $this->mdl->valida($user,$pass);	


				if($valido){
					
					session_start();
					$_SESSION['usuario']   = $user;
					$_SESSION['idUsuario'] = $this->mdl->idUsuario;
					
					$this->dicc->CargarInicioWSesion();


				}else
				{
					$this->dicc->CargarInicio();
				}
			
				
			}
			

		}
	}


	class logoutCtl{


		function logout(){
			session_unset();
			session_destroy();		
			setcookie(session_name(), '', time()-3600);
		}
	}


?>