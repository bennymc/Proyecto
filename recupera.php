<?php
	include "includes/navbar.html";
?>
<!-- ***************** FORMULARIO PARA RECUPERAR CONTRASEÑA **************** -->	
	<div id="contenedor">
		<section id="formrecuperapass" class="col-md-4 col-md-offset-4">
			<div class="panel panel-danger">
				<div class="panel-heading">
		   			 <h3 id="recuperarpass" class="panel-title">Recuperar Contraseña</h3>
		  		</div>
		  		<form method="post" onsubmit="return VCorreo()">
			  		<div class="panel-body">
			   			<div class="form-group">
							  <label class="col-md-12 control-label" for="Email">Ingresa tu Email</label>  
							  <div class="col-md-12">
							  <input id="email" name="email" type="email" placeholder="" class="form-control input-md" required="">    
							  </div>
						</div>		  		
				  		<div class="form-group">
							<div class="col-md-12 ">
								<button type="submit" class="btn btn-danger pull-right" id="btnrecupera">Recuperar</button>
							</div>
						</div>	
			  		</div>	
		  		</form>
			</div>
		</section>
	</div>
<!-- ***************** FIN DEL FORMULARIO  **************** -->	
<?php
	include "includes/footer.html";
?>


