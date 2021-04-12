<?php 
	session_start();
	
    require_once 'php/conexion.php';
	
	$conexion=conexion();
	
	if(isset($_SESSION['user'])){
		$id_usuario=($_SESSION['id']);
		
		$sql= "select * from usuarios where id='$id_usuario'";
		$result=mysqli_query($conexion,$sql);
		$row=$result->fetch_assoc();
		$email=$row['email'];
		$num_id=$row['identificacion'];
		$tipoId=$row['tipoid'];
		$name=$row['nombre'];
		$second_name=$row['apellido'];
	
 ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Evento Virtual</title>    
        <!-- Bootstrap-->
        <link href="lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!--Common Plugins CSS -->
        <link href="css/plugins/plugins.css" rel="stylesheet">
        <!--fonts-->
        <link href="lib/line-icons/line-icons.css" rel="stylesheet">
        <link href="lib/font-awesome/css/fontawesome-all.min.css" rel="stylesheet">
        <link href="lib/chartist/chartist.min.css" rel="stylesheet" />
        <link href="css/chartist-custom.css" rel="stylesheet" />
        <!-- jvectormap -->
        <link href="lib/vector-map/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="js/alertifyjs/css/themes/default.css">
<link rel="stylesheet" type="text/css" href="js/alertifyjs/css/alertify.css">

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/alertifyjs/alertify.js"></script>
		
        <link href="../vendor/style-event.css" rel="stylesheet">
    </head>
    <body>

        <div class="page-wrapper" id="page-wrapper">
            <aside id="page-aside" class=" page-aside aside-fixed">
                <div class="sidenav darkNav">
                    <a href="index.php" class="app-logo d-flex flex flex-row align-items-center overflow-hidden justify-content-center">
						  <i class="icon-Cloud inline-icon rounded avatar32 d-inline-flex align-items-center justify-content-center" ></i>
                        <span class="logo-text d-inline-flex"> <span class='font700 d-inline-block mr-1'>COPY</span> EVENTOS</span>
                        
                    </a>
                    <div class="flex">
                        <div class="aside-content slim-scroll">
                            <ul class="metisMenu" id="metisMenu">
                               
                                <li><i class="icon-Tablet nav-thumbnail"></i>
                                    <a href="agenda.php">
                                        <span class="nav-text">
                                            Agenda 
                                        </span> 
                                    </a>
                                </li>
								<li><i class="icon-Business-Mens nav-thumbnail"></i>
                                    <a href="inicio.php">
                                        <span class="nav-text">
                                            Muestra Comercial
                                        </span> 
                                    </a>
                                </li>
								<li><i class="icon-Video nav-thumbnail"></i>
                                    <a href="player.php">
                                        <span class="nav-text">
                                            Conferencias
                                        </span> 
                                    </a>
                                </li>
								<li><i class="icon-Video nav-thumbnail"></i>
                                    <a href="player2.php">
                                        <span class="nav-text">
                                            Reuniones
                                        </span> 
                                    </a>
                                </li>
								<li><i class="icon-Medal nav-thumbnail"></i>
                                    <a href="certificado.php">
                                        <span class="nav-text">
                                            Certificado
                                        </span> 
                                    </a>
                                </li>

                              

                            </ul>
                        </div><!-- aside content end-->
                    </div><!-- aside hidden scroll end-->
                    <div class="aside-footer p-3 pl-25">
                        <div class="">
                            App Version - 1.0
                        </div>
                    </div><!-- aside footer end-->
                </div><!-- sidenav end-->
            </aside><!-- page-aside end-->
            <main class="content">
                <header class="navbar page-header whiteHeader navbar-expand-lg">
                       <ul class="nav flex-row mr-auto">
                        <li class="nav-item">
                            <a href="javascript:void(0)" class="nav-link sidenav-btn h-lg-down">
                                <span class="navbar-toggler-icon"></span>
                            </a>
                            <a class="nav-link sidenav-btn h-lg-up" href="#page-aside"  data-toggle="dropdown" data-target="#page-aside">
                                <span class="navbar-toggler-icon"></span>
                            </a>
                        </li>

                    </ul>
                    <ul class="nav flex-row order-lg-2 ml-auto nav-icons">
                        <li class="nav-item dropdown user-dropdown align-items-center">
                            <a class="nav-link" href="#" id="dropdown-user" role="button" data-toggle="dropdown">
                                <span class="user-states states-online">
                                    <img src="images/avatar6.jpg" width="35" alt="" class=" img-fluid rounded-circle">
                                </span>
                                <span class="ml-2 h-lg-down dropdown-toggle">
                                    Hola, <?php echo $_SESSION['user'];?>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">

                                <a class="dropdown-item" href="#"><i class="icon-User"></i>Mi Perfil</a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="php/salir.php"><i class="icon-Power"></i> Salir</a>

                            </div>
                        </li>
                        <li class="h-lg-up nav-item">
                            <a href="#" class=" nav-link collapsed" data-toggle="collapse" data-target="#navbarToggler" aria-expanded="false">
                                <i class="icon-Magnifi-Glass2"></i>
                            </a>
                        </li>
                    </ul>

                </header>
               <!-- page-sub-Header end-->
				<!---------------------------------------- Programa ------------------------------------------------>		
				
				<div class="page-content">
                    <div class="container-fluid">
                        <div class="title-sep sep-body mb-30">
                            <span><h3>Perfil</h3></span>
                        </div>
				<div class="container">
					<div class="row">
						<div class="col-sm-3"></div>
						<div class="col-sm-6">
							<div class="panel panel-success">
								 <div class="col-lg-12">
												<div class="portlet-box portlet-gutter ui-buttons-col mb-30">
													<div class="portlet-header flex-row flex d-flex align-items-center b-b">
														<div class="flex d-flex flex-column">
															<h3>Actualizar Datos</h3>
														</div>
													</div>
													<div class="portlet-body">
											<form id="frmRegistro">
					   <div class="row">
							<div class="col-md-6">
								<label>Tipo de documento</label>
								<select class="form-control" required="" id="tipoid" name="tipoid">
									<option value="<?php echo $tipoId?>" selected><?php echo $tipoId?></option>
									        <option value="cc">CC</option>
											<option value="Pasaporte">Pasaporte</option>
								</select>
							</div>
							<div class="col-md-6">
								<label>Numero de Identificacion</label>
								<input type="text" class="form-control input-sm" id="identificacion" name="" value="<?php echo $num_id ?>">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-6">
								<label>Nombre</label>
								<input type="text" class="form-control input-sm" id="nombre" name="" value="<?php echo $name?>">
							</div>
							<div class="col-md-6">
								<label>Apellido</label>
								<input type="text" class="form-control input-sm" id="apellido" name="" value="<?php echo $second_name?>">
							</div>
					    </div>				
						<br>
								<label>Email</label>
								<input type="text" class="form-control input-sm" id="email" name="" value="<?php echo $email?>">
						<br>


					<p></p>
					<span class="btn btn-primary" id="updateUsuario">Actualizar</span>
					</form>
													</div>
													
												</div><!--portlet-->

											</div>
							</div>
						</div>
						<div class="col-sm-4"></div>
					</div>
                </div>	
              		
       
                    </div>
                </div>
				<!---------------------------------------- Recorrido virtual --------------------------------------------------->
			
               <footer class="content-footer bg-light b-t">
                    <div class="d-flex flex align-items-center pl-15 pr-15">
                        <div class="d-flex flex p-3 ml-auto">
                            <div>
                                <a href="#" class="d-inline-flex pl-0 pr-2 b-r">Contact</a>
                                
                            </div>
                        </div>
                        <div class="d-flex flex p-3 mr-auto justify-content-end">
                            <div class="text-muted">© Copyright 2014-2018. Assan</div>
                        </div>
                    </div>
                </footer>
            </main><!-- page content end-->
        </div><!-- app's main wrapper end -->
        <!-- Common plugins -->
        <script type="text/javascript" src="js/plugins/plugins.js"></script> 
        <script type="text/javascript" src="js/appUi-custom.js"></script> 
        <script type="text/javascript" src="lib/chartjs/dist/chart.min.js"></script>
        <script type="text/javascript" src="lib/peity/jquery.peity.min.js"></script>
        <script src="lib/chartist/chartist.min.js"></script>
        <script src="lib/chartist/chartist-tooltip.js"></script>
        <!-- jvectormap -->
        <script src="lib/vector-map/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="lib/vector-map/jquery-jvectormap-world-mill-en.js"></script>
       <script type="text/javascript" src="js/dashboard.custom.js"></script> 
	<script>
    function pageRedirect() {
        window.location.replace("perfil.php");
    }      
    
</script>	
	<script type="text/javascript">
	$(document).ready(function(){
		$('#updateUsuario').click(function(){

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
			}

			cadena="nombre=" + $('#nombre').val() +
					"&apellido=" + $('#apellido').val() +
					"&tipoid=" + $('#tipoid').val() +
					"&identificacion=" + $('#identificacion').val() +
					"&email=" + $('#email').val();

					$.ajax({
						type:"POST",
						url:"php/updateUsuario.php",
						data:cadena,
						success:function(r){

							if(r==2){
								alertify.alert("Este usuario ya existe, prueba con otro :)");
							}
							else if(r==1){
								$('#frmRegistro')[0].reset();
								alertify.success("Actualizado con exito");
								setTimeout("pageRedirect()", 1000);
								//location.href ="perfil.php";
									
							}else{
								alertify.error("Fallo al Actualizar");
							}
						}
					});
		});
		 
	});

 

</script>

    </body>
</html>
<?php
} else {
	header("location:login.php");
	}
 ?>
