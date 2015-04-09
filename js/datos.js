function cambiaGenero(genero){
	$('#libro1').show();
	$('#contenedorgenero').children().not('#libro1').remove();
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
			var ContenedorPadre = document.getElementById("contenedorgenero");
			var LibroHijo = document.getElementById("libro1");
			
			var j = 0;
			var cont = 0;
			for(i in json.Libros){
				
				
				var titulo = json.Libros[i].Titulo; 
				var img = json.Libros[i].Imagen;
				if(genero == json.Libros[i].Genero)
				{
					cont++;
					console.log(img);
					var nuevoLibro = LibroHijo.cloneNode(true);
					nuevoLibro.setAttribute("id", "Libro"+cont);
					ContenedorPadre.appendChild(nuevoLibro); 
					$('#Libro'+cont).find('img').attr('src',img);
					$('#Libro'+cont).find('a').eq(1).text(titulo);
					j++;
				}
			}
			$('#libro1').hide();		
		}
	}

	miajax.send(null);
}