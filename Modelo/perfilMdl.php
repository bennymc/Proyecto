<?php

class perfilMdl{
	public $nombre;
	public $librodestacado;
	public $imgLdestacado;
	public $imgPerfil;
	public $descripcion;

	/**
	*Obtiene los datos de un item en  especifico
	*y lo asigna a un modelo
	* @param int $id
	* @return
	*/

	function show($id){

		//Busca en la base de datos ese item
		$response = file_get_contents('www/json/datos.json');

		//Convierto el json en un objeto
		$response=json_decode($response);

		
		//Asigno los valores a mi modelo

		$this->nombre = $response->Perfil[$id-1]->Nombre." ".$response->Perfil[$id-1]->Apellido;
		$this->librodestacado = $response->Libros[$response->Perfil[$id-1]->Destacado]->Titulo;
		$this->imgPerfil = "\"".$response->Perfil[$id-1]->ImgPerfil."\"";
		$this->imgLdestacado= "\"".$response->Libros[$response->Perfil[$id-1]->Destacado]->Imagen."\"";
		$this->descripcion = $response->Perfil[$id-1]->Intereses;
	}
}

?>