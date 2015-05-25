
<!-- ****************************** INICIA ASIDE ***************************************** -->
	<aside class="col-md-3">
	<!-- ****************************** FOTO Y NOMBRE EN PERFIL ************************************* -->	
		<div class="panel panel-success">
		  	<div class="panel-heading">
				<h1 class="titulosenperfil">{nombre}</h1>
			</div>
			<div class="panel-body ">
				<img class="center-block" id="fotodeperfil" src="www/images/Usuarios/{foto}" alt="imagen de perfil">
			</div>
		  	<div>
		  		{MENSAJEBTN}
				<div class="bs-example">
				    <!-- Button HTML (to Trigger Modal) -->
				    <a href="#myModal" class="center-block" data-id-user="{USERID}" data-toggle="modal"><span class=" btn btn-sm btn-default glyphicon glyphicon-envelope"> Mensaje</span></a>
				    				    
				    <!-- Modal HTML -->
				    <div id="myModal" class="modal fade">
				        <div class="modal-dialog">
				            <div class="modal-content">
				                <div class="modal-header">
				                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				                    <h4 class="modal-title">Escribe aquí tu mensaje para {USER}</h4>
				                </div>
				                <form class="form-horizontal" method="post" onsubmit="return validaMensaje()" action="?ctl=usuario&id={USERID}&send=true">
          							<fieldset>
          						<div class="modal-body">
				                	 <input type="text" name="userId" value="" hidden=hidden>
				                    <textarea class="form-control" id="mensaje" name="mensaje"></textarea>
				                </div>
				                <div class="modal-footer">
				                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				                    <button type="sumbit" class="btn btn-primary">Enviar</button>
				                </div>
				                </fieldset>
    						  </form>
				            </div>
				        </div>
				    </div>
				</div>
				<script type="text/javascript"> 
				    $('#myModal').on('show.bs.modal', function(e) {
				    var bookId = $(e.relatedTarget).data('id-user');
				    $(e.currentTarget).find('input[name="userId"]').val(bookId);
				});
				</script>
				{ENDMENSAJEBTN}  
			</div>
		</div>	
	<!-- ****************************** LIBRO DESTACADO ************************************* -->
		<div class="panel panel-success">
			<div class="panel-heading">
				<h1 class="titulosenperfil">{libroD}</h1>
			</div>
			<div class="panel-body ">
				<a href="?ctl=ejemplar&id={{idDestacado}}"><img class="center-block" id="librodestacado" src={imglibroD}  alt="Libro Destacado"></a>
			</div>
		</div>
	<!-- ****************************** DESCRIPCION ************************************* -->		
		<div class="panel panel-success">
			<div class="panel-heading">
				<h1 class="titulosenperfil">Su Descripcion</h1>
			</div>
			<div class="panel-body ">
			   <p> {descripcion}</p> 
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
					
					</div>					
					{end repite} 
				</div>				
			</div>
		</div>
		
    </section>



	
