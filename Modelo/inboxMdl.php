<?php

class inboxMdl{

	public $mensajesrecividos;
	public $mensajesen;
	public $idMensajes;
	public $cuerpo;
	public $fecha;
	public $emisor;
	public $nombre;

	function EnviaMensaje($destino,$mensaje){
	require('config.inc');
		$conexion = new mysqli($servidor,$usuario,$pass,$bd);
		if($conexion -> connect_errno){
			echo "Hubo un error";
			echo "<br>$conexion->connect_errno";
		}
		$remite= $_SESSION['idUsuario'];
		$fecha= date("Y/m/d");
		
		$query = 
				"INSERT INTO mensaje ( cuerpo, fecha, emisoridUsuario, receptoridUsuario1 ) 
				VALUES (
					\"$mensaje\",
					\"$fecha\",
					\"$remite\",
					\"$destino\"
					)";

				
				$resultado = $conexion->query($query);

		$conexion->close();
		

}
	
	function CargarMensajes(){
		require('config.inc');
		$conexion = new mysqli($servidor,$usuario,$pass,$bd);
		if($conexion -> connect_errno){
			echo "Hubo un error";
			echo "<br>$conexion->connect_errno";
		}
		$id = $_SESSION['idUsuario'];

		$consulta = "SELECT idMensaje
				 FROM mensaje
				 WHERE receptoridUsuario1 = '".$id."'";
		$resultado = $conexion->query($consulta);
		if($conexion->errno){
			die("Tu query tiene un error
				<br>$conexion->error");
		}
		while($fila=$resultado->fetch_assoc()){
			$this->idMensajes[]=$fila["idMensaje"];
		}
		if(count($this->idMensajes)>0){
			foreach ($this->idMensajes as $idMsg) {
				$consulta = "SELECT m.cuerpo, m.fecha, m.emisoridUsuario, u.user 
				 FROM mensaje m
				 JOIN usuario u ON u.idUsuario = m.emisoridUsuario
				 WHERE idMensaje = '".$idMsg."'
				 ORDER BY fecha LIMIT 10";
				$resultado = $conexion->query($consulta);
				if($conexion->errno){
					die("Tu query tiene un error
						<br>$conexion->error");
				}
				while($fila=$resultado->fetch_assoc()){
					$this->cuerpo[]=$fila["cuerpo"];
					$this->fecha[]=$fila["fecha"];
					$this->emisor[]=$fila["emisoridUsuario"];
					$this->nombre[]=$fila["user"];
				}	
			}
		}
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