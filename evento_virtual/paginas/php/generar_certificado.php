<?php 



define('FPDF_FONTPATH', 'font/');

require ('fpdf.php');

require ('conexion.php');


$name=$_POST['nombre'];
$second_name=$_POST['apellido'];

/*$identificacion= $_POST['identificacion'];

$strConsulta = "SELECT nombres, apellidos, cantidad from asistentes where identificacion='$identificacion'";

$resultado = mysqli_query($mysqli,$strConsulta);

$row = mysqli_fetch_array($resultado);

$num_rows=mysqli_num_rows($resultado);*/


if(empty($name)){
	
	echo '

	<html>

	<head>

    <meta name="viewport" content="width=device-width">

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>HOMER -  Email Template</title>

    <style>

        * {

            font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;

            font-size: 100%;

            line-height: 1.6em;

            margin: 0;

            padding: 0;

        }



        img {

            max-width: 600px;

            width: 100%;

        }



        body {

            -webkit-font-smoothing: antialiased;

            height: 100%;

            -webkit-text-size-adjust: none;

            width: 100% !important;

        }



        a {

            color: #348eda;

        }



        .btn-primary {

            Margin-bottom: 10px;

            width: auto !important;

        }



        .btn-primary td {

            background-color: #62cb31;

            border-radius: 3px;

            font-family: "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;

            font-size: 14px;

            text-align: center;

            vertical-align: top;

        }



        .btn-primary td a {

            background-color: #62cb31;

            border: solid 1px #62cb31;

            border-radius: 3px;

            border-width: 4px 20px;

            display: inline-block;

            color: #ffffff;

            cursor: pointer;

            font-weight: bold;

            line-height: 2;

            text-decoration: none;

        }



        .last {

            margin-bottom: 0;

        }



        .first {

            margin-top: 0;

        }



        .padding {

            padding: 10px 0;

        }



        table.body-wrap {

            padding: 20px;

            width: 100%;

        }



        table.body-wrap .container {

            border: 1px solid #e4e5e7;

        }



        table.footer-wrap {

            clear: both !important;

            width: 100%;

        }



        .footer-wrap .container p {

            color: #666666;

            font-size: 12px;



        }



        table.footer-wrap a {

            color: #999999;

        }



        h1,

        h2,

        h3 {

            color: #111111;

            font-family: "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;

            font-weight: 200;

            line-height: 1.2em;

            margin: 40px 0 10px;

        }



        h1 {

            font-size: 36px;

        }

        h2 {

            font-size: 28px;

        }

        h3 {

            font-size: 22px;

        }



        p,

        ul,

        ol {

            font-size: 14px;

            font-weight: normal;

            margin-bottom: 10px;

        }



        ul li,

        ol li {

            margin-left: 5px;

            list-style-position: inside;

        }



        /* ---------------------------------------------------

            RESPONSIVENESS

        ------------------------------------------------------ */



        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */

        .container {

            clear: both !important;

            display: block !important;

            Margin: 0 auto !important;

            max-width: 600px !important;

        }



        /* Set the padding on the td rather than the div for Outlook compatibility */

        .body-wrap .container {

            padding: 40px;

        }



        /* This should also be a block element, so that it will fill 100% of the .container */

        .content {

            display: block;

            margin: 0 auto;

            max-width: 600px;

        }



        /* Lets make sure tables in the content area are 100% wide */

        .content table {

            width: 100%;

        }



    </style>

</head>



<body bgcolor="#f7f9fa">



<table class="body-wrap" bgcolor="#f7f9fa">

    <tr>

        <td></td>

        <td class="container" bgcolor="#FFFFFF">



            <div class="content">

                <table>

                    <tr>

                        <td>

                            <strong>Estimado Usuario</strong>

                            <p>Despues de verificar en la base de datos, no hemos encontrado informacion relacionada con el documento suministrado.</p>

                            <p>Por Favor verifica nuevamente, recuerda no ingresar puntos ni caracteres especiales.</p>

                            

                            <table class="btn-primary" cellpadding="0" cellspacing="0" border="0">

                                <tr>

                                    <td>

                                        <a href="index.php">Intentar Nuevamente</a>

                                    </td>

                                </tr>

                            </table>

                            <p>Si aun no puedes descargar tu certificado, escribenos al correo que aparece a continuacion, indicando su nombre, apellidos, pais, y numero de identificacion</p>

                            <p><a href="#">sistemas@copyeventos.com</a></p>

                        </td>

                    </tr>

                </table>

            </div>



        </td>

        <td></td>

    </tr>

</table>



</body>

</html>









';

	exit;

}else{



//$contador=$row['cantidad'];

//$cantidad=$contador+1;



//$instruccion="UPDATE asistentes SET cantidad=$cantidad where identificacion=$identificacion";

//$resultado = mysqli_query($mysqli,$instruccion);





//Propiedades

//$cedula = $_POST['cedula'];

$dia = '28';

$mes = 'Noviembre';

//$ano = '2013';



//$pdf = new FPDF('L','cm',array(29.700,21));

$pdf=new FPDF('L','mm','A4');

$pdf->SetTextColor(0,0,0);



$pdf->AddPage();

$pdf->Image('img/certificado.png',0,0,297,210,'PNG');



// Nombre y Apellido

$pdf->SetFont('helvetica','B',33);

//$pdf->cell(40);

$pdf->setXY(25,115);

$pdf->cell(250,10,$name . " " . $second_name,0,0,'C');

//$pdf->Text(40,99,$row['nombres'] . " " . $row['apellidos']);



// Cedula

//$pdf->SetFont('helvetica','',8);

//$pdf->Text(1.7,6.1,$cedula);



// Dia

$pdf->SetFont('helvetica','B',15);

//$pdf->Text(210,147,$dia);



// Mes



//$pdf->SetFont('helvetica','B',15);

//$pdf->Text(230,147,$mes);





$pdf->Output('certificado.pdf','I');

}

?>