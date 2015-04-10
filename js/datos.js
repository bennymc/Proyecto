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
				VectorA[i] = Math.round(Math.random()*24); 
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
				if(VectorA[i]>24){
					VectorA[i]=VectorA[i]-24;
				}
				console.log(VectorA[i]);
				console.log(json.Generos[VectorA[i]].TituloLibrero);
				var genero = json.Generos[VectorA[i]].TituloLibrero; 
				
				$('#G'+contG).text(genero);
				
				var ContenedorPadre = document.getElementById("contenedorG"+contG);
				var LibroHijo = document.getElementById("libroG"+contG);
				
				
				var cont = 0;
				for(x in json.Libros){
					
					var imgg = json.Libros[x].Imagen;
					
					if(genero == json.Libros[x].Genero)
					{
						console.log(imgg);
						cont++;
						var nuevoLibro = LibroHijo.cloneNode(true);
						nuevoLibro.setAttribute("id", "LibroG"+contG+"-"+cont);
						ContenedorPadre.appendChild(nuevoLibro); 
						$('#LibroG'+contG+'-'+cont).find('img').attr('src',imgg);
						if(cont==5)
							break;
					}
				}
				$('#libroG'+contG).hide();
				contG++;		
			}
				
					
		
		}
	}
	miajax.send(null);	

}

function LibrosPopulares(){
	
		$('#libroD').show();
		$('#destacados').children().not('#libroD').remove();
	
	//Creamos el objeto AJAX
	var miajax = nuevoAjax();
	//Hago la petición a mi server
	miajax.open('post','back.php',true);
	//Función para cuando cambie el status
	miajax.onreadystatechange = function(){
		if(miajax.readyState == 4){
			//Proceso el texto como JS
			var json = JSON.parse(miajax.responseText);
			var VectorD = new Array(10); //creamos el vector 

			for(var i=0; i<5; i++){ 
				VectorD[i] = Math.round(Math.random()*31); 
			} //Selecciono 5 numeros random
			var flag=true;
			while(flag){
				flag=false;
				for(var i=0; i<5; i++){
					for(var j=i+1; j<5; j++){
						if(VectorD[i]==VectorD[j]){
							flag=true;
							VectorD[j]=	VectorD[i]+1;
						}
						
					}
				}
			}//evitar randoms iguales

			var contD=1
			for(var i=0; i<5; i++){ 
				if(VectorD[i]>31){
					VectorD[i]=VectorD[i]-31;
				}
									
				var ContenedorPadre = document.getElementById("destacados");
				var LibroHijo = document.getElementById("libroD");			
				var imgd = json.Libros[VectorD[i]].Imagen;
				var nuevoLibro = LibroHijo.cloneNode(true);
				nuevoLibro.setAttribute("id", "LibroD"+contD);
				ContenedorPadre.appendChild(nuevoLibro); 
				$('#LibroD'+contD).find('img').attr('src',imgd);
				
				contD++;		
			}
			$('#libroD').hide();
					
		
		}
	}
	miajax.send(null);
}


function CargarPerfil(){
	
		$('#libroP').show();
		$('#ContenedorPerfil').children().not('#libroP').remove();
	
	//Creamos el objeto AJAX
	var miajax = nuevoAjax();
	//Hago la petición a mi server
	miajax.open('post','back.php',true);
	//Función para cuando cambie el status
	miajax.onreadystatechange = function(){
		if(miajax.readyState == 4){
			//Proceso el texto como JS
			var json = JSON.parse(miajax.responseText);
			
			var nombre= json.Perfil[0].Nombre+" "+json.Perfil[0].Apellido;
			$('#Nombre').text(nombre);
			var librodestacado = json.Perfil[0].Destacado;
			$('#Ldestacado').text(json.Libros[librodestacado].Titulo)
			var imgLdestacado = json.Libros[librodestacado].Imagen;
			$('#librodestacado').attr('src',imgLdestacado);
			var ContenedorPadre = document.getElementById("ContenedorPerfil");
			var LibroHijo = document.getElementById("libroP");			
			
				
				
			
			$('#libroP').hide();
					
		
		}
	}
	miajax.send(null);
}

