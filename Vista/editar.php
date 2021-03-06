
	<div id="contenedor ">
		<section class="col-md-6">
			<form class="form-horizontal" method="post" onsubmit="return VEditar()" enctype="multipart/form-data">
				<fieldset>
					<legend>Editar Perfil</legend>
					<div class="form-group">
					  <label class="col-md-4 control-label" for="nombre">Nombre</label>  
					  <div class="col-md-5">
					  <input id="nombre" name="nombre" type="text" class="form-control input-md" required="" value="{NOMBRE}" >    
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-md-4 control-label" for="apellidos">Apellidos</label>  
					  <div class="col-md-5">
					  <input id="apellidos" name="apellidos" type="text" class="form-control input-md" required="" value="{APELLIDOS}" >    
					  </div>
					</div>					
					<div class="form-group">
					  <label class="col-md-4 control-label" for="sexo">Sexo</label>
					  <div class="col-md-5">
					    <select id="sexo" name="sexo" class="form-control" >
					      <option value="Masculino" {SELECTM}>Masculino</option>
					      <option value="Femenino" {SELECTF}>Femenino</option>
					    </select>
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-md-4 control-label" for="intereses">Intereses</label>
					  <div class="col-md-5">                     
					    <textarea class="form-control" id="intereses" name="intereses" >{INTERESES}</textarea>
					  </div>
					</div>					
					<div class="form-group">
					  <label class="col-md-4 control-label" for="bday">Fecha de nacimiento</label>
					  <div class="col-md-5">
					    <input id="bday" name="bday" type="date" placeholder="" min="1925-01-01" max="2000-01-01" class="form-control input-md" required="" value="{NACIMIENTO}">
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-md-4 control-label" for="fav">Libro Favorito:</label>
					  <div class="col-md-5">
					    <select id="fav" name="fav" class="form-control">
					    	 {OPCIONES}
					    </select>
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-md-4 control-label" for="imgperfil">Imagen de perfil</label>
					  <div class="col-md-6">
					    <input id="imgperfil" name="imgperfil" class="input-file" type="file" accept="image/*" >
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-md-4 control-label" >Guardar</label>
					  <div class="col-md-2">
					    <button id="Guardar" name="Guardar" class="btn btn-default">Actualizar</button>
					  </div>
					  
					</div>
				</fieldset>
			</form>
		</section>

		<aside class="col-md-6">
			<form class="form-horizontal" id="cambiarcontraseña" method="post" onsubmit="return CambioPass()">
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
					    <button onclick="cifrar()" id="cambiar" name="cambiar" class="btn btn-default">Cambiar</button>
					  </div>
					</div>
				</fieldset>
			</form>
			<script src="http://crypto-js.googlecode.com/svn/tags/3.1.2/build/rollups/sha1.js"></script>
						<script>
							function cifrar(){
								var input_password = document.getElementById("passwordold").value;
						    var hash = CryptoJS.SHA1(input_password);
						    document.getElementById("passwordold").value = hash ;
						    var input_password2 = document.getElementById("passwordnew").value;
						    var hash = CryptoJS.SHA1(input_password2);
						    document.getElementById("passwordnew").value = hash ;
							}
						</script>
		</aside>
	</div>
