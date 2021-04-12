<?php 
	session_start();
	
    require_once 'php/conexion.php';
	$conexion=conexion();
	
	if(isset($_SESSION['user'])){
		$usuario=strtoupper($_SESSION['user']);
	
		
		/*$name=$_SESSION['user'];
		$sql= "select nombre from usuarios where nombre='$name'";
		$result=mysqli_query($conexion,$sql);
		$row=$result->fetch_assoc();
		$_SESSION['nombre']=$row['nombre'];*/
	
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
                                <a class="dropdown-item" href="perfil.php"><i class="icon-User"></i>Mi Perfil</a>

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
                            <span><h3>Agenda</h3></span>
                        </div>
						
                <div class="container">
                		<div class="row">
                    <div class="col-sm-8 mr-auto ml-auto text-center">
                        <div class="center-title mb60">
                            <h2></h2>
                            <p class="lead">
                                02 - 03 November 2020.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row margin-b-30">
                    <div class="col-md-10 mr-auto ml-auto">
                        <div>

                            <!-- Nav tabs -->
                            <ul class="nav tabs-schedule nav-tabs list-inline" role="tablist">
                                <li role="presentation" class="nav-item"><a class="nav-link active" href="#fday" aria-controls="fday" role="tab" data-toggle="tab">Dia 1 <span>2 Noviembre 2020</span></a></li>
                                <li role="presentation" class="nav-item"><a href="#sday" aria-controls="sday" role="tab" data-toggle="tab">Dia 2 <span>3 Noviembre 2020</span></a></li>
                                <!-- 
								<li role="presentation" class="nav-item"><a class="nav-link" href="#03" aria-controls="03" role="tab" data-toggle="tab">Day 3 <span>3 November 2016</span></a></li> 
								-->
								
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                              <div role="tabpanel" class="tab-pane active" id="fday">
                                    <div class="row margin-b-30">
                                        <div class="col-sm-3 event-info">
                                            <span>Lunes</span>
                                            <span>9:00 AM A 10:45 AM</span>
                                        <!--<span class="event-hall">Basement R1</span> -->
                                        </div>
                                        <div class="col-sm-9 event-detail">
                                            <h3><a href="#">Introduccion a eventos virtuales</a></h3>
                                            <div class="row margin-b-20">
                                                <div class="col-sm-2">
                                                    <img src="../images/team1.jpg" alt="" class="img-fluid">
                                                </div>
                                                <div class="col-sm-10">
                                                    <h4>Tareg Gechen</h4>
                                                    <p>
                                                        El objetivo de estas reuniones es con la finalidad de dejar una imagen positiva en clientes, proveedores y colaboradores, crear un alto impacto con cada detalle del evento, generado pertenencia, credibilidad, y reconocimiento entre un grupo de invitados, además de compartir un agradable momento disfrutando de un delicioso y variado banquete.
                                                    </p>
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                    <div class="row margin-b-30">
                                        <div class="col-sm-3 event-info">
                                            <span>Lunes</span>
                                            <span>11:00 AM A 11:45 AM</span>
                                        <!--<span class="event-hall">Basement R1</span> -->
                                        </div>
                                        <div class="col-sm-9 event-detail">
                                            <h3><a href="#">Un cambio de visión en los clientes</a></h3>
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <img src="../images/team4.jpg" alt="" class="img-fluid">
                                                </div>
                                                <div class="col-sm-10">
                                                    <h4>Alberto Lopez</h4>
                                                    <p>
                                                        But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings, the master-builder of human happiness
                                                    </p>
													<br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row margin-b-30" style="opacity: 0.7;">
                                        <div class="col-sm-3 event-info">
                                            <span>LUNES</span>
                                            <span>1:00 AM A 2:00 AM</span>
                                        <!--<span class="event-hall">Fulkari Restaurant</span> -->
                                        </div>
                                        <div class="col-sm-9 event-detail">
                                            <h3><a href="#">Receso para Almuerzo</a></h3>
                                            <p>
                                       			<br>
											
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3 event-info">
                                            <span>LUNES</span>
                                            <span>2:00 AM A 4:30 AM</span>
                                        <!--<span class="event-hall">Basement R1</span> -->
                                        </div>
                                        <div class="col-sm-9 event-detail">
                                            <h3><a href="#">Redes Sociales para Eventos</a></h3>
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <img src="../images/team4.jpg" alt="" class="img-fluid">
                                                </div>
                                                <div class="col-sm-10">
                                                    <h4>Rachel Franco</h4>
                                                    <p>
                                                        But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings, the master-builder of human happiness
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              <div role="tabpanel" class="tab-pane" id="sday">
                                    <div class="row margin-b-30">
                                        <div class="col-sm-3 event-info">
                                            <span>Martes</span>
                                            <span>9:00 AM A 10:45 AM</span>
                                        <!-- <span class="event-hall">Basement R2</span> -->
                                        </div>
                                        <div class="col-sm-9 event-detail">
                                            <h3><a href="#">Plataformas de Transmision</a></h3>
                                            <div class="row margin-b-20">
                                                <div class="col-sm-2">
                                                    <img src="images/team1.jpg" alt="" class="img-fluid">
                                                </div>
                                                <div class="col-sm-10">
                                                    <h4>Ruben Hurtado</h4>
                                                    <p>
                                                        Experiencia en operaciones logisticas y de ventas
														<br>
														<br>
														<br>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row margin-b-30">
                                        <div class="col-sm-3 event-info">
                                            <span>Martes</span>
                                            <span>11:00 AM a 11:45 AM</span>
                                            <span class="event-hall">Basement R1</span>
                                        </div>
                                        <div class="col-sm-9 event-detail">
                                            <h3><a href="#">Compra de productos digitales</a></h3>
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <img src="images/team4.jpg" alt="" class="img-fluid">
                                                </div>
                                                <div class="col-sm-10">
                                                    <h4>Henry Hurtado</h4>
                                                    <p>
                                                         Proceso de compra en productos digitales. los retos que debe asumir el personal de compra frente a un producto intangible.
														<br>
														<br>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row margin-b-30" style="opacity: 0.7;">
                                        <div class="col-sm-3 event-info">
                                            <span>MARTES</span>
                                            <span>1:00 AM A 2:00 AM</span>
                                        <!--<span class="event-hall">Fulkari Restaurant</span> -->
                                        </div>
                                        <div class="col-sm-9 event-detail">
                                            <h3><a href="#">Receso para Almuerzo</a></h3>
                                            <p>
                                       			<br>
											
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3 event-info">
                                            <span>MARTES</span>
                                            <span>2:00 AM A 4:30 AM</span>
                                        <!--    <span class="event-hall">Basement R1</span> -->
                                        </div>
                                        <div class="col-sm-9 event-detail">
                                            <h3><a href="#">Planificacion de un evento virtual</a></h3>
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <img src="images/team4.jpg" alt="" class="img-fluid">
                                                </div>
                                                <div class="col-sm-10">
                                                    <h4>Jose Carmona</h4>
                                                    <p>
                                                        But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings, the master-builder of human happiness
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade " id="03">
                                    <div class="row margin-b-30">
                                        <div class="col-sm-3 event-info">
                                            <span>Wednesday</span>
                                            <span>9:00 AM to 10:45 AM</span>
                                            <span class="event-hall">Basement R1</span>
                                        </div>
                                        <div class="col-sm-9 event-detail">
                                            <h3><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                            <div class="row margin-b-20">
                                                <div class="col-sm-2">
                                                    <img src="images/team5.jpg" alt="" class="img-fluid">
                                                </div>
                                                <div class="col-sm-10">
                                                    <h4>John Miller</h4>
                                                    <p>
                                                        But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings, the master-builder of human happiness
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <img src="images/team6.jpg" alt="" class="img-fluid">
                                                </div>
                                                <div class="col-sm-10">
                                                    <h4>Adam Doe</h4>
                                                    <p>
                                                        But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings, the master-builder of human happiness
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row margin-b-30">
                                        <div class="col-sm-3 event-info">
                                            <span>Wednesday</span>
                                            <span>11:00 AM to 11:45 AM</span>
                                            <span class="event-hall">Basement R1</span>
                                        </div>
                                        <div class="col-sm-9 event-detail">
                                            <h3><a href="#">Roadmap about bootstrap updates</a></h3>
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <img src="images/team4.jpg" alt="" class="img-fluid">
                                                </div>
                                                <div class="col-sm-10">
                                                    <h4>Robert</h4>
                                                    <p>
                                                        But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings, the master-builder of human happiness
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row margin-b-30" style="opacity: 0.7;">
                                        <div class="col-sm-3 event-info">
                                            <span>Wednesday</span>
                                            <span>1:00 AM to 2:00 AM</span>
                                            <span class="event-hall">Fulkari Restaurant</span>
                                        </div>
                                        <div class="col-sm-9 event-detail">
                                            <h3><a href="#">lunch</a></h3>
                                            <p>
                                                But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings, the master-builder of human happiness
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3 event-info">
                                            <span>Wednesday</span>
                                            <span>2:00 AM to 4:30 AM</span>
                                            <span class="event-hall">Basement R1</span>
                                        </div>
                                        <div class="col-sm-9 event-detail">
                                            <h3><a href="#">Closing ceremony</a></h3>
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <img src="../images/team4.jpg" alt="" class="img-fluid">
                                                </div>
                                                <div class="col-sm-10">
                                                    <h4>Smitha Doe</h4>
                                                    <p>
                                                        But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings, the master-builder of human happiness
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
    </body>
</html>
<?php
} else {
	header("location:login.php");
	}
 ?>
