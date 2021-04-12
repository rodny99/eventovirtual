<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<?php require_once "scripts.php"; ?>
</head>
<body background="../images/escenografia.jpg">
<br><br><br>
<div class="container">
	<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6">
			<div class="panel panel-success">
				<div class="panel panel-heading"><strong><h3 align="center">REGISTRO DE USUARIOS</h3></strong></div>
				<div class="panel panel-body">
					<form id="frmRegistro">
					   <div class="row">
							<div class="col-md-6">
								<label>Tipo de documento</label>
								<select class="form-control" required="" id="tipoid" name="tipoid">
											<option value="cc">CC</option>
											<option value="Pasaporte">Pasaporte</option>
								</select>
							</div>
							<div class="col-md-6">
								<label>Numero de Identificacion</label>
								<input type="text" class="form-control input-sm" id="identificacion" name="">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-6">
								<label>Nombre</label>
								<input type="text" class="form-control input-sm" id="nombre" name="">
							</div>
							<div class="col-md-6">
								<label>Apellido</label>
								<input type="text" class="form-control input-sm" id="apellido" name="">
							</div>
					    </div>				
						<br>
								<label>Email</label>
								<input type="text" class="form-control input-sm" id="email" name="">
						<br>
								<label>Usuario</label>
								<input type="text" class="form-control input-sm" id="usuario" name="">
						<br>
						<div class="row">
							<div class="col-md-6">
								<label>Password</label>
								<input type="text" class="form-control input-sm" id="password" name="">
							</div>
							<div class="col-md-6">
								<label>Confirma el Password</label>
								<input type="text" class="form-control input-sm" id="pass_con" name="">
							</div>
						</div>
					<p></p>
					<span class="btn btn-primary" id="registrarNuevo">Registrar</span>
					</form>
					<div style="text-align: right;">
						<a href="login.php" class="btn btn-default">Login</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-4"></div>
	</div>
</div>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#registrarNuevo').click(function(){

			if($('#nombre').val()==""){
				alertify.alert("Debes agregar el nombre");
				return false;
			}else if($('#email').val()==""){
				alertify.alert("Debes agregar el email");
				return false;
			}else if($('#identificacion').val()==""){
				alertify.alert("Debes agregar el numero de identificacion");
				return false;
			}
			else if($('#apellido').val()==""){
				alertify.alert("Debes agregar el apellido");
				return false;
			}else if($('#usuario').val()==""){
				alertify.alert("Debes agregar el usuario");
				return false;
			}else if($('#password').val()==""){
				alertify.alert("Debes agregar el password");
				return false;
			}else if($('#password').val()!=$('#pass_con').val()){
				alertify.alert("Las Contraseñas no coinciden");
				return false;
			}

			cadena="nombre=" + $('#nombre').val() +
					"&apellido=" + $('#apellido').val() +
					"&tipoid=" + $('#tipoid').val() +
					"&identificacion=" + $('#identificacion').val() +
					"&email=" + $('#email').val() + 
					"&usuario=" + $('#usuario').val() + 
					"&password=" + $('#password').val();

					$.ajax({
						type:"POST",
						url:"php/registro.php",
						data:cadena,
						success:function(r){

							if(r==2){
								alertify.alert("Este usuario ya existe, prueba con otro :)");
							}
							else if(r==1){
								$('#frmRegistro')[0].reset();
								alertify.success("Agregado con exito");
							}else{
								alertify.error("Fallo al agregar");
							}
						}
					});
		});
	});
</script>

