function cambiaGenero(genero){
	//Creamos el objeto AJAX
	var miajax = nuevoAjax();
	//Hago la petición a mi server
	miajax.open('post','back.php',true);
	//Función para cuando cambie el status
	miajax.onreadystatechange = function(){
		if(miajax.readyState == 4){
			//Proceso el texto como JS
			var json = JSON.parse(miajax.responseText);
			for(i in json.Generos){
				console.log(json.Generos[i]);
				if(genero == json.Generos[i].TituloLibrero)
				{
					$('h3#titulo').text(json.Generos[i].TituloLibrero);
					$('h1#tituloLibrero').text(json.Generos[i].TituloLibrero);
					$('p#descripcion').text(json.Generos[i].Descripcion);
				}
			}
			for(i in json.Libros){
				var listaLibros = document.getElementById("contenedorgenero");
				listaLibros.getElementsByClassName("center-block tituloLibro")[i].textContent = "TÍTULO";
				listaLibros.getElementsByClassName("center-block imagenL")[i].src = "http://placehold.it/100x150";
			}		
			var j = 0;
			for(i in json.Libros){
				console.log(json.Libros[i]);
				var listaLibros = document.getElementById("contenedorgenero");
				var titulo = json.Libros[i].Titulo;
				var img = json.Libros[i].Imagen;
				if(genero == json.Libros[i].Genero)
				{
					listaLibros.getElementsByClassName("center-block tituloLibro")[j].textContent = titulo;
					listaLibros.getElementsByClassName("center-block imagenL")[j].src = img;
					j++;
				}
			}		
		}
	}
	miajax.send(null);
}