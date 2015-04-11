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
					$('#Libro'+cont).find('a').eq(0).attr("href", "ejemplar.php?titulo=" + titulo);
					$('#Libro'+cont).find('a').eq(1).attr("href", "ejemplar.php?titulo=" + titulo);
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
				if(VectorA[i]>=24){
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
						$('#LibroG'+contG+'-'+cont).attr("href", "ejemplar.php?titulo=" + json.Libros[x].Titulo);
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
				VectorD[i] = Math.round(Math.random()*30); 
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
				if(VectorD[i]>=30){
					VectorD[i]=VectorD[i]-30;
				}
									
				var ContenedorPadre = document.getElementById("destacados");
				var LibroHijo = document.getElementById("libroD");			
				var imgd = json.Libros[VectorD[i]].Imagen;
				var nuevoLibro = LibroHijo.cloneNode(true);
				nuevoLibro.setAttribute("id", "LibroD"+contD);
				ContenedorPadre.appendChild(nuevoLibro); 
				$('#LibroD'+contD).attr("href", "ejemplar.php?titulo=" + json.Libros[VectorD[i]].Titulo);
				$('#LibroD'+contD).find('img').attr('src',imgd);
				
				contD++;		
			}
			$('#libroD').hide();
					
		
		}
	}
	miajax.send(null);
}

function cargarReseñas(){
	$('#reseña').show();
	$('#ultimasreview').children().not('#reseña').remove();
	//Creamos el objeto AJAX
	var miajax = nuevoAjax();
	//Hago la petición a mi server
	miajax.open('post','back.php',true);
	//Función para cuando cambie el status
	miajax.onreadystatechange = function(){
		if(miajax.readyState == 4){
			//Proceso el texto como JS
			var json = JSON.parse(miajax.responseText);
			var ContenedorPadre = document.getElementById("ultimasreview");
			var Hijo = document.getElementById("reseña");
			
			var cont = 0;
			for(i in json.Reseñas){
				
				var usuario = json.Reseñas[i].Usuario;
				var titulo = json.Reseñas[i].Título; 
				var calificacion = json.Reseñas[i].Calificación;
				var texto = json.Reseñas[i].Texto;

				cont++;
				
				var nuevaReseña = Hijo.cloneNode(true);
				nuevaReseña.setAttribute("id", "Reseña"+cont);
				ContenedorPadre.appendChild(nuevaReseña); 
				$('#Reseña'+cont).find('h4').eq(0).text(usuario);
				$('#Reseña'+cont).find('a').eq(5).attr("href", "usuario.php?usuario=" + usuario);
				$('#Reseña'+cont).find('h4').eq(1).text(titulo);
				$('#Reseña'+cont).find('a').eq(6).attr("href", "ejemplar.php?titulo=" + titulo);
				$('#Reseña'+cont).find('textarea').text(texto);
			}
					$('#reseña').hide();
		}
		
	}

	miajax.send(null);
}

function cargaTitulo(titulo){
	//Creamos el objeto AJAX
	var miajax = nuevoAjax();
	//Hago la petición a mi server
	miajax.open('post','back.php',true);
	//Función para cuando cambie el status
	miajax.onreadystatechange = function(){
		if(miajax.readyState == 4){
			//Proceso el texto como JS
			var json = JSON.parse(miajax.responseText);
			for(i in json.Libros){
				console.log(json.Libros[i]);
				if(titulo == json.Libros[i].Titulo)
				{
					$('p#titulo').text(json.Libros[i].Titulo);
					$('p#autor').text(json.Libros[i].Autor);
					$('#ficha').find('a').eq(0).text(json.Libros[i].Autor);
					$('#ficha').find('a').eq(0).attr("href", "autor.php?autor=" + json.Libros[i].Autor);
					$('p#editorial').text(json.Libros[i].Editorial);
					$('#ficha').find('a').eq(1).text(json.Libros[i].Editorial);
					$('#ficha').find('a').eq(1).attr("href", "editorial.php?editorial=" + json.Libros[i].Editorial);
					$('p#año').text(json.Libros[i].Año);
					$('p#isbn').text(json.Libros[i].ISBN);
					$('p#genero').text(json.Libros[i].Genero);
					$('#ficha').find('a').eq(2).text(json.Libros[i].Genero);
					$('#ficha').find('a').eq(2).attr("href", "genero.php?genero=" + json.Libros[i].Genero);
					$('p#tOriginal').text(json.Libros[i].TOriginal);
					$('#portadaEjemplar').attr('src',json.Libros[i].Imagen);
				}
				
			}
			for(i in json.Reseñas){
				
				var usuario = json.Reseñas[i].Usuario;
				var titulorev = json.Reseñas[i].Título; 
				var calificacion = json.Reseñas[i].Calificación;
				var texto = json.Reseñas[i].Texto;
				if(titulorev == titulo){
					$('#userreview').find('a').eq(5).text("Reseña de el usuario " + usuario);
					$('#userreview').find('a').eq(5).attr("href", "usuario.php?usuario=" + usuario);
					$('#userreview').find('textarea').eq(0).text(texto);
				}
			}		
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
			$('#LdestacadoTitulo').attr("href", "ejemplar.php?titulo=" + json.Libros[librodestacado].Titulo);
			var descripcion = json.Perfil[0].Intereses;
			$('#Intereses').text(descripcion);
			$('#fotodeperfil').attr('src',json.Perfil[0].ImgPerfil);
			var librosagregados = json.Perfil[0].Libros;
			var libros = librosagregados.split(',');
			var librosStatus = json.Perfil[0].Status;
			var Status = librosStatus.split(',');
			var ContenedorPadre = document.getElementById("ContenedorPerfil");
			var LibroHijo = document.getElementById("libroP");			
			
			var cont=1;
			for(var x=0; x < libros.length; x++)
			{
				var n =libros[x];
				var nuevoLibro = LibroHijo.cloneNode(true);
				nuevoLibro.setAttribute("id", "Libro"+cont);
				ContenedorPadre.appendChild(nuevoLibro); 
				$('#Libro'+cont).find('img').attr('src',json.Libros[n].Imagen);
				var titulo=json.Libros[n].Titulo.slice(0,10)+'...';
				$('#Libro'+cont).find('a').eq(0).text(titulo);
				$('#Libro'+cont).find('a').eq(0).attr("href", "ejemplar.php?titulo=" + json.Libros[n].Titulo);
				if(Status[x]== 1){
					$('#Libro'+cont).find('a').eq(2).text('Leído');
				}
				if(Status[x]== 2){
					$('#Libro'+cont).find('a').eq(2).text('Leyendo');
				}
				if(Status[x]== 3){
					$('#Libro'+cont).find('a').eq(2).text('Por leer');
				}
				
				cont++;
			}
				
				
			
			$('#libroP').hide();
					
		
		}
	}
	miajax.send(null);
}

function EditarPerfil(){
	
	//Creamos el objeto AJAX
	var miajax = nuevoAjax();
	//Hago la petición a mi server
	miajax.open('post','back.php',true);
	//Función para cuando cambie el status
	miajax.onreadystatechange = function(){
		
		if(miajax.readyState == 4){
			//Proceso el texto como JS
			var json = JSON.parse(miajax.responseText);
			
			
			$('#nombre').val(json.Perfil[0].Nombre);
			$('#apellidos').val(json.Perfil[0].Apellido);
			var x= json.Perfil[0].Sexo;
			if(x= "Femenino")
				$('#sexo option').eq(1).attr('selected','selected'); 
			else
				$('#sexo option').eq(0).attr('selected','selected'); 
			$('textarea#intereses').text(json.Perfil[0].Intereses);
			$('input#bday').val(json.Perfil[0].FechaNacimiento);		
			
			
		}
	}

	miajax.send(null);
}
