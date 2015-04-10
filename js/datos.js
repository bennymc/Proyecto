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

function CargarGenerosRandom()
{
	for(var y=1; y<6; y++)
	{
		$('#libroG'+y).show();
		$('#contenedorG'+y).children().not('#libroG'+y).remove();
	}
	//Creamos el objeto AJAX
	var miajax = nuevoAjax();
	//Hago la petición a mi server
	miajax.open('post','back.php',true);
	//Función para cuando cambie el status
	miajax.onreadystatechange = function(){
		if(miajax.readyState == 4){
			//Proceso el texto como JS
			var json = JSON.parse(miajax.responseText);
			var VectorA = new Array(10); //creamos el vector 

			for(var i=0; i<5; i++){ 
				VectorA[i] = Math.round(Math.random()*33); 
			} //Selecciono 5 numeros random
			var flag=true;
			while(flag){
				flag=false;
				for(var i=0; i<5; i++){
					for(var j=i+1; j<5; j++){
						if(VectorA[i]==VectorA[j]){
							flag=true;
							VectorA[j]=	VectorA[i]+1;
						}
						
					}
				}
			}//evitar randoms iguales

			var contG=1
			for(var i=0; i<5; i++){ 
				if(VectorA[i]>33){
					VectorA[i]=VectorA[i]-34;
				}
				console.log(VectorA[i]);
				var genero = json.Generos[VectorA[i]].TituloLibrero; 
				
				$('#G'+contG).text(genero);
				
				var ContenedorPadre = document.getElementById("contenedorG"+contG);
				var LibroHijo = document.getElementById("libroG"+contG);
				
				
				var cont = 0;
				for(x in json.Libros){
					
					var img = json.Libros[x].Imagen;
					if(genero == json.Libros[x].Genero)
					{
						cont++;
						var nuevoLibro = LibroHijo.cloneNode(true);
						nuevoLibro.setAttribute("id", "LibroG"+cont);
						ContenedorPadre.appendChild(nuevoLibro); 
						$('#LibroG'+cont).find('img').attr('src',img);
						
					}
				}
				contG++;		
			}
				
			for(var y=1; y<6; y++)
			{
				$('#libroG'+y).hide();
				
			}		
		
		}
	}
	miajax.send(null);	

}



