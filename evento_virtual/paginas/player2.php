<?php 
	session_start();
	
    require_once 'php/conexion.php';
	$conexion=conexion();
	
	if(isset($_SESSION['user'])){
		
		

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
    </head>
    <body>

        <div class="page-wrapper" id="page-wrapper">
            <aside id="page-aside" class=" page-aside aside-fixed">
                <div class="sidenav darkNav">
                    <a href="index.html" class="app-logo d-flex flex flex-row align-items-center overflow-hidden justify-content-center">
						  <i class="icon-Cloud inline-icon rounded avatar32 d-inline-flex align-items-center justify-content-center" ></i>
                        <span class="logo-text d-inline-flex"> <span class='font700 d-inline-block mr-1'>COPY</span> EVENTOS</span>
                        
                    </a>
                    <div class="flex">
                        <div class="aside-content slim-scroll">
                            <ul class="metisMenu" id="metisMenu">
                               
                                <li><i class="icon-Business-Mens nav-thumbnail"></i>
                                    <a href="agenda.php">
                                        <span class="nav-text">
                                            Agenda 
                                        </span> 
                                    </a>
                                </li>
								<li><i class="icon-Video nav-thumbnail"></i>
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
				<!---------------------------------------- Reproductor de video------------------------------------------------>
                <div class="page-content flex" style='background-image: url(&quot;../images/escenografia.jpg&quot;)'>
                   	<div class="">
						<br>
						<br>
					<table width="1100" border="0" align="center">
					  <tbody>
						<tr>
						  <td width="750" height="564">
									<iframe allow="camera; microphone; display-capture" src="https://meet.jit.si/PruebaSalaMuestraComercialStandCopyEventos" allowfullscreen="true" style="height: 100%; width: 100%; border: 0px;">
									</iframe>
							</td>
						</tr>
					  </tbody>
					</table> 
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
