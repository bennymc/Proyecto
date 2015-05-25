<?php

class inboxMdl{

	public $mensajesrecividos;
	public $mensajesen;



	
	function CargarMensajes($user){
		require('config.inc');
		$conexion = new mysqli($servidor,$usuario,$pass,$bd);
		if($conexion -> connect_errno){
			echo "Hubo un error";
			echo "<br>$conexion->connect_errno";
		}
		$id= $_SESSION['usuario'];
		$consulta = "SELECT * FROM mensaje WHERE receptoridUsuario1 = '".$id."' ORDER By fecha  " ;
		//Ejecuto el QUERY para datos de usuario
		$resultado = $conexion->query($consulta);
		$resultado = $resultado->fetch_row();
		


	}


	function Cargar(){
		require('config.inc');
		$conexion = new mysqli($servidor,$usuario,$pass,$bd);
		if($conexion -> connect_errno){
			echo "Hubo un error";
			echo "<br>$conexion->connect_errno";
		}
		$id= $_SESSION['usuario'];
		$consulta = "SELECT emisoridUsuario , receptoridUsuario1 FROM mensaje WHERE receptoridUsuario1 = '".$id."'  ORDER By fecha" ;
		//Ejecuto el QUERY para datos de usuario
		$resultado = $conexion->query($consulta);
		$resultado = $resultado->fetch_row();
		if($resultado!= NULL){
				//Si tiene mensajes}

		}
		else
			return false;

	}
	
}

?>