<html lang="es">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Registro - Evento Virtual</title>   
		<?php require_once "scripts.php"; ?>
        <!-- Plugins CSS -->
        <link href="../css/plugins/plugins.css" rel="stylesheet">
        <link href="../css/style-event.css" rel="stylesheet">
		<script src="../js/jquery-3.2.1.min.js"></script>
	
    </head>

    <body data-spy="scroll" data-offset="58" data-target="#navbarevent" background="../images/escenografia.jpg">

            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title h4" id="exampleModalLabel">Registrate al Evento</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="ti-close"></i></span>
                        </button>
                    </div>
                   <form id="signupform" class="form-horizontal" role="form" action="php/registro.php" method="POST" autocomplete="off">
					   <div id="signupalert" style="display:none" class="alert alert-danger">
								<p>Error:</p>
								<span></span>
							</div>
                        <div class="modal-body">
                            <div class="row">
								<div class="col-md-12 mb10">
                                    <select class="form-control" required="" id="tipoid" name="tipoid">
                                        <option value="">Tipo de documento</option>
                                        <option value="cc">CC</option>
                                        <option value="Pasaporte">Pasaporte</option>
                                    </select>
                                </div>
								<div class="col-md-12 mb10">
                                    <input type="text" class="form-control" placeholder="Numero documento" id="numero" required="" name="numero" >
                                </div>
                                <div class="col-md-12 mb10">
                                    <input type="text" class="form-control" placeholder="Nombres" id="nombres" required="" name="nombres">
                                </div>
								<div class="col-md-12 mb10">
                                    <input type="text" class="form-control" placeholder="apellidos" id="apellidos" required="" name="apellidos">
                                </div>
                                <div class="col-md-12 mb10">
                                    <input type="email" class="form-control" placeholder="correo" id="email" required="" name="email">
                                </div>
                                <div class="col-md-12 mb10">
                                    <input type="text" class="form-control" placeholder="telefono" id="telefono" required="" name="telefono">
                                </div>
								 <div class="col-md-12 mb10">
                                    <input type="text" class="form-control" placeholder="usuario" id="usuario" required="" name="usuario">
                                </div>
                                <div class="col-md-12 mb10">
                                    <input type="text" class="form-control" placeholder="contraseña" id="password" required="" name="password">
                                </div>
								<div class="col-md-12 mb10">
                                    <input type="text" class="form-control" placeholder="Repita la contraseña" id="pass_con" required="" name="pass_con">
                                </div>		
                            </div>
                        </div>
                        <div class="modal-footer">
                           <span class="btn btn-primary" id="registrarNuevo">Registrar</span>
                        </div>
                    </form>
                </div>
            </div>
        <!--back to top  -->
        <a href="#" class="back-to-top hidden-xs-down" id="back-to-top"><i class="ti-angle-up"></i></a>
        <!-- jQuery first, then Tether, then Bootstrap JS. -->
	
        <script src="js/plugins/plugins.js"></script> 
        <script src="js/event.custom.js"></script>
    </body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
		$('#registrarNuevo').click(function(){

			if($('#nombres').val()==""){
				alertify.alert("Debes agregar el nombre");
				return false;
			}else if($('#apellidos').val()==""){
				alertify.alert("Debes agregar el apellido");
				return false;
			}else if($('#apellidos').val()==""){
				alertify.alert("Debes agregar el apellido");
				return false;
			}
			else if($('#usuario').val()==""){
				alertify.alert("Debes agregar el usuario");
				return false;
			}else if($('#password').val()==""){
				alertify.alert("Debes agregar el password");
				return false;
			}else if($('#password').val()!=$('#pass_con').val()){
				alertify.alert("Las Contraseñas no coinciden");
				return false;
			}
			
			
			cadena="tipoid=" + $('#tipoid').val() +
				    "&numero=" + $('#numero').val() +
					"&nombres=" + $('#nombres').val() +
					"&apellidos=" + $('#apellidos').val() +
				    "&email=" + $('#email').val() +
					"&telefono=" + $('#telefono').val() +
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
