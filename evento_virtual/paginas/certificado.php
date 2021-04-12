<?php 
	session_start();
	
    require_once 'php/conexion.php';
	$conexion=conexion();
	
	if(isset($_SESSION['user'])){
		$id_usuario=($_SESSION['id']);
		
		$sql= "select * from usuarios where id='$id_usuario'";
		$result=mysqli_query($conexion,$sql);
		$row=$result->fetch_assoc();

		$name=strtoupper($row['nombre']);
		$second_name=strtoupper($row['apellido']);
	
 ?>
<!DOCTYPE html>
<html lang="en">
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
                                    <a href=".html">
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
				<!---------------------------------------- Reproductor de video------------------------------------------------>
               	 <div class="page-content">
                    <div class="container-fluid">
                        <div class="title-sep sep-body mb-30">
                            <span></span>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                              
                            </div><!--col-->
                            <div class="col-md-4">
                                <div class="bg-gradient-primary bg-primary pt-4 pb-4 rounded shadow-sm">
                                    <img src="images/medal.png" alt="" class="img-fluid shadow-sm avatar100 ml-auto mr-auto d-block rounded-circle">
                                    <div class="text-center pt-15">
                                        <h5 class=" mb-0"><?php echo $name." ".$second_name?></h5>
                                        <span class="text-muted  d-block pb-2">Participante</span>
                                        <div class="clearifx pb-3">
  
                                            <span class="p-2 text-center d-inline-block ">
                                                <span class="pt-1  fs-1x">Gracias por participar en el evento virtual, a continuacion presionar en generar para descargar su certificado.</span>
                                                <span class="pt-1  fs12 text-muted"></span>
                                            </span>
                                            <span class="p-2 text-center d-inline-block ">
                                                <span class="pt-1  fs-1x"></span><br>
                                                <span class="pt-1  fs12 text-muted"></span>
                                            </span>
                                        </div>
										<form method="post" action="php/generar_certificado.php">
											<input type="hidden" id="nombre" name="nombre" value="<?php echo $name; ?>"/>
											<input type="hidden" id="apellido" name="apellido" value="<?php echo $second_name; ?>"/>
											<button type="submit" formtarget="_blank" value="Generar" id="submit-button" class="btn btn-light"><i class="fa fa-paper-plane"></i> Generar</button>
                                        </form>
                                    </div>
                                </div>
                            </div><!--col-->
							<div class="col-md-4">
                               
                            </div><!--col-->
                           
                          
                        </div>
                      
                    </div>
                </div>
				<!---------------------------------------- Recorrido virtual --------------------------------------------------->

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
    </body>
</html>
<?php
} else {
	header("location:login.php");
	}
 ?>
