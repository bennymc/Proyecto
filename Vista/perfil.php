
<!-- ****************************** INICIA ASIDE ***************************************** -->
    <aside class="col-md-3">
    <!-- ****************************** FOTO Y NOMBRE EN PERFIL ************************************* -->
    	<div class="panel panel-success">
			<div class="panel-heading">
			    <h1 class="titulosenperfil" id="Nombre"> {nombre} </h1>
			</div>
			<div class="panel-body ">
			    <img class="center-block" id="fotodeperfil" src= "www/images/Usuarios/{foto}"  alt="imagen de perfil">
			</div>
    	</div>	
    <!-- ****************************** LIBRO DESTACADO ************************************* -->
    	<div class="panel panel-success">
			<div class="panel-heading">
			    <h1 class="titulosenperfil" id="Ldestacado"> {libroD} </h1>
			</div>
			<div class="panel-body ">
			    <a href="?ctl=ejemplar&id={{idDestacado}}" id="LdestacadoTitulo"><img class="center-block" id="librodestacado" src= {imglibroD} alt="Libro Destacado"></a>
			</div>
    	</div>	
    <!-- ****************************** DESCRIPCION ************************************* -->	
    	<div class="panel panel-success">
			<div class="panel-heading">
			    <h1 class="titulosenperfil">Descripcion</h1>
			</div>
			<div class="panel-body ">
			    <p id="Intereses"> {descripcion} </p>

			</div>
    	</div>
   
    	
    </aside>
<!-- ************************************* FIN ASIDE ************************************* -->
<!-- ************************************* INICIO SECTION ******************************** -->
    <section class="col-md-8 col-md-offset-1">
    <!-- ************************************* LIBRERO ******************************** -->	
    	<div class="panel panel-success">
		  	<div class="panel-heading">
		    	<h1 class="Contenedoresdelibros">LIBRERO</h1>
		  	</div>
		  	<div class="panel-body"> 
			    
				<div class="col-md-12" id="ContenedorPerfil">
					{LIBRERO}
					{repite libro}
					<div class="col-md-2 librosencontenedor" id="libroP">	
					<a href="?ctl=ejemplar&id={{id}}" class="center-block">{titulo}</a>
					<a href="?ctl=ejemplar&id={{id}}" class="center-block"><img src= {imglibro} alt="Libro"></a>
					<a href="#" data-toggle="modal" data-book-id="{{id}}" data-target="#smallModal" id="modalstatus" class="center-block">{status}</a>					
					</div>					
					{end repite} 
				</div>				
			</div>
		</div>
		
    </section>
<!-- ************************************* FIN SECTION ************************************* -->
