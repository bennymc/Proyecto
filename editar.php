<?php
	include "includes/navbar.html";
?>

		
		<section class="col-md-6">
			<form class="form-horizontal">
				<fieldset>
					<legend>Editar Perfil</legend>
					<div class="form-group">
					  <label class="col-md-4 control-label" for="nombre">Nombre</label>  
					  <div class="col-md-5">
					  <input id="nombre" name="nombre" type="text" class="form-control input-md" required="">    
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-md-4 control-label" for="apellidos">Apellidos</label>  
					  <div class="col-md-5">
					  <input id="apellidos" name="apellidos" type="text" class="form-control input-md" required="">    
					  </div>
					</div>					
					<div class="form-group">
					  <label class="col-md-4 control-label" for="sexo">Sexo</label>
					  <div class="col-md-4">
					    <select id="sexo" name="sexo" class="form-control">
					      <option value="m">Masculino</option>
					      <option value="f">Femenino</option>
					    </select>
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-md-4 control-label" for="intereses">Intereses</label>
					  <div class="col-md-4">                     
					    <textarea class="form-control" id="intereses" name="intereses"></textarea>
					  </div>
					</div>					
					<div class="form-group">
					  <label class="col-md-4 control-label" for="bday">Fecha de nacimiento</label>
					  <div class="col-md-5">
					    <input id="bday" name="bday" type="date" placeholder="dd/mm/aaaa" class="form-control input-md" required="">
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-md-4 control-label" for="imgperfil">Imagen de perfil</label>
					  <div class="col-md-4">
					    <input id="imgperfil" name="imgperfil" class="input-file" type="file">
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-md-4 control-label" >Guardar</label>
					  <div class="col-md-2">
					    <button id="Guardar" name="Guardar" class="btn btn-default">Actualizar</button>
					  </div>
					  <div class="col-md-2">
					   <a href="perfil.php">
					    	<button id="Cancelar" name="Cancelar" class="btn btn-default">Cancelar</button>
					   </a>
					  </div>
					</div>
				</fieldset>
			</form>
		</section>

		<aside class="col-md-6">
			<form class="form-horizontal" id="cambiarcontraseña">
				<fieldset>
					<legend>Cambiar contraseña</legend>
					<div class="form-group">
						  <label class="col-md-4 control-label" for="passwordold">Contraseña Actual:</label>
						  <div class="col-md-5">
						    <input id="passwordold" name="passwordold" type="password" placeholder="" class="form-control input-md" required="">
						  </div>
						</div>
						<div class="form-group">
						  <label class="col-md-4 control-label" for="passwordnew">Contraseña Nueva:</label>
						  <div class="col-md-5">
						    <input id="passwordnew" name="passwordnew" type="password" placeholder="" class="form-control input-md" required="">
						  </div>
						  <div class="col-md-9">
					    <button id="cambiar" name="cambiar" class="btn btn-default">Cambiar</button>
					  </div>
					</div>
				</fieldset>
			</form>

			


		</aside>

		<?php
			include "includes/footer.html";
		?>
