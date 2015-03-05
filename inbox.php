 	<?php
				include "includes/navbar.html";
	?>
<div class="panel panel-success col-md-12" id="inbox">
	  <div class="panel-heading">
	    <h1 class="panel-title">Mensajes recibidos</h1>
	  </div>
	  <div class="inboxi panel-body col-md-4">
		  <h3>Mensajes</h3>
		  <ol>
		  	  <li><a href="#">Mensaje de Usuario1</a></li>
			  <li><a href="#">Mensaje de Usuario2</a></li>
			  <li><a href="#">Mensaje de Usuario3</a></li>
			  <li><a href="#">Mensaje de Usuario4</a></li>
			  <li><a href="#">Mensaje de Usuario5</a></li>
		  </ol>
	  </div>
	   <div class="panel-body col-md-8">
	   	 <h3>Cuerpo del mensaje</h3>
		  <textarea readonly class="form-control" id="cuerpo" name="cuerpo"></textarea>
		  <div>
			    <a href="#respuesta" class="btn btn-lg btn-default" data-toggle="modal">Responder</a>					    
			    <div id="respuesta" class="modal fade">
			        <div class="modal-dialog">
			            <div class="modal-content">
			                <div class="modal-header">
			                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			                    <h4 class="modal-title">Escribe aquí tu respuesta para UsuarioX</h4>
			                </div>
			                <div class="modal-body">
			                    <textarea class="form-control" id="mensaje" name="mensaje"></textarea>
			                </div>
			                <div class="modal-footer">
			                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			                    <button type="button" class="btn btn-primary">Enviar</button>
			                </div>
			            </div>
			        </div>
			    </div>
			</div> 
	  </div>
</div>
		<?php
			include "includes/footer.html";
		?>