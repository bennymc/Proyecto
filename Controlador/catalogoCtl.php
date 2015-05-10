<?php

/**
*Clase para llevar el manejo de los items con sus propios
*metodos y atributos en referencia a un item
**/
class catalogoCtl{
	private $mdl;
	/**
	* Contruye el modelo a utilizar
	*/
	function __construct(){
		//require_once("Modelo/catalogoMdl.php");
		//$this->mdl=new catalogoMdl();
	}

	function ejecutar(){
		// Validar accesos y permisos

		// Validar entradas

		// En base a accion ejecutar un metodo
		//if(isset($_GET['id'])){			
			$this->Cargar();
			
		// }else
		// {
		// 	http_response_code(404);
		// }

	}

	function Cargar(){

		//valido variables y ejecuta el modelo para obtener la informacion
		if(true){
			
			
			
			//Cargar  la vista
			require_once("Vista/libros.php");
			

		}
		else
		{
			//Llamar vista de error
			echo "no hay id";
		}

	}

	/**
	*Valida que un valor dado sea un entero
	*@param mixed $valor
	*@return boolean
	*/

	function validateInteger($valor){

		return is_int((int)$valor);
	}

}


?>