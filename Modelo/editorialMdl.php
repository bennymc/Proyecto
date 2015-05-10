<?php

class editorialMdl{
	public $TituloLibrero;
	public $CabeceraLibrero;
	public $Descripcion;

	function show($id){
		$response = file_get_contents('www/json/datos.json');
		$response = json_decode($response);

		$this->TituloLibrero = $response->Generos[$id-1]->TituloLibrero;
		$this->CabeceraLibrero = $response->Generos[$id-1]->CabeceraLibrero;
		$this->Descripcion = $response->Generos[$id-1]->Descripcion;
	}

}