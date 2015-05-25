 	<?php
				include "includes/navbar.html";
	?>
	<div id="contenedor">
		<div class="panel panel-success" id="inbox">
  			<div class="panel-heading">
   				 <h3 class="TituloGrande">Mensajes recibidos</h3>
  			</div>
  			<div class="panel-body" >
   				<div class=" col-md-4">
					  <h3>Mensajes</h3>
					  <ol>
					  		{LISTAMENSAJES}
					  	  <li><a href="?ctl=inbox&show={USERID}">Mensaje de {USERID}</a></li>
					  	  	{ENDLISTAMENSAJES}
					  </ol>
				  </div>
	    		<div class=" inboxi  col-md-8">
				   	 <h3>Cuerpo del mensaje</h3>
					 <textarea readonly class="form-control" id="cuerpo" name="cuerpo">{CUERPOMENSAJES}</textarea>
					 <textarea  class="form-control" id="respuesta" name="respuesta"></textarea>
					 <button id="btnmensaje" type="button" class="btn btn-default">Responder</button>
  				</div>

			</div>		
		</div>		




