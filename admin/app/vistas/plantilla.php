<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Admin CIA Elemental</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">

    <!--<link rel="icon" href="vistas/img/plantilla/icono-negro.png">-->

    <!--=====================================
   PLUGINS DE CSS
   ======================================-->

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="vistas/bower_components/bootstrap/dist/css/bootstrap.min.css">

    <link rel="shortcut icon" href="vistas/img/favicon2.png" type="image/x-icon">
    <link rel="icon" href="vistas/img/favicon2.png" type="image/x-icon">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="vistas/bower_components/font-awesome/css/font-awesome.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="vistas/bower_components/Ionicons/css/ionicons.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="vistas/dist/css/AdminLTE.css">

    <!-- AdminLTE Skins -->
    <link rel="stylesheet" href="vistas/dist/css/skins/_all-skins.min.css">

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <!-- DataTables -->
    <link rel="stylesheet" href="vistas/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="vistas/bower_components/datatables.net-bs/css/responsive.bootstrap.min.css">

    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="vistas/plugins/iCheck/all.css">

    <!-- Daterange picker -->
    <link rel="stylesheet" href="vistas/bower_components/bootstrap-daterangepicker/daterangepicker.css">

    <!-- Morris chart -->
    <link rel="stylesheet" href="vistas/bower_components/morris.js/morris.css">

    <!--=====================================
    PLUGINS DE JAVASCRIPT
    ======================================-->

    <!-- jQuery 3 -->
    <script src="vistas/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap 3.3.7 -->
    <script src="vistas/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- FastClick -->
    <script src="vistas/bower_components/fastclick/lib/fastclick.js"></script>

    <!-- AdminLTE App -->
    <script src="vistas/dist/js/adminlte.min.js"></script>

    <!-- DataTables -->
    <script src="vistas/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vistas/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="vistas/bower_components/datatables.net-bs/js/dataTables.responsive.min.js"></script>
    <script src="vistas/bower_components/datatables.net-bs/js/responsive.bootstrap.min.js"></script>

    <!-- SweetAlert 2 -->
    <script src="vistas/plugins/sweetalert2/sweetalert2.all.js"></script>
    <!-- By default SweetAlert2 doesn't support IE. To enable IE 11 support, include Promise polyfill:-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

    <!-- iCheck 1.0.1 -->
    <script src="vistas/plugins/iCheck/icheck.min.js"></script>

    <!-- InputMask -->
    <script src="vistas/plugins/input-mask/jquery.inputmask.js"></script>
    <script src="vistas/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="vistas/plugins/input-mask/jquery.inputmask.extensions.js"></script>

    <!-- jQuery Number -->
    <script src="vistas/plugins/jqueryNumber/jquerynumber.min.js"></script>

    <!-- daterangepicker http://www.daterangepicker.com/-->
    <script src="vistas/bower_components/moment/min/moment.min.js"></script>
    <script src="vistas/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Morris.js charts http://morrisjs.github.io/morris.js/-->
    <script src="vistas/bower_components/raphael/raphael.min.js"></script>
    <script src="vistas/bower_components/morris.js/morris.min.js"></script>

    <!-- ChartJS http://www.chartjs.org/-->
    <script src="vistas/bower_components/Chart.js/Chart.js"></script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgQeHHRAQKU0ekdPjLb6CKlbb4oQ131s8&callback=initMap"
            type="text/javascript"></script>

</head>

<!--=====================================
CUERPO DOCUMENTO
======================================-->

<body class="hold-transition skin-blue sidebar-collapse sidebar-mini login-page">

<?php

if (isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok") {

    echo '<div class="wrapper">';

    /*=============================================
    CABEZOTE
    =============================================*/

    include "modulos/cabezote.php";

    /*=============================================
    MENU
    =============================================*/

    include "modulos/menu.php";

    /*=============================================
    CONTENIDO
    =============================================*/


    //RUTAS RETIRADAS//
    // $_GET["ruta"] == "categorias" ||
    //$_GET["ruta"] == "productos" ||

    //RUTAS AGREGADAS//
    // $_GET["ruta"] == "administrar-proyectos" ||
    // $_GET["ruta"] == "factibilidad" ||
    // $_GET["ruta"] == "pyc" ||
    // $_GET["ruta"] == "nuevo-censo" ||


    if (isset($_GET["ruta"])) {

        if ($_GET["ruta"] == "inicio" ||
            $_GET["ruta"] == "usuarios" ||
            $_GET["ruta"] == "materiales" ||
            $_GET["ruta"] == "proyectos" ||
            $_GET["ruta"] == "factibilidad" ||
            $_GET["ruta"] == "pyc" ||
            $_GET["ruta"] == "administrar-proyectos" ||
            $_GET["ruta"] == "administrar-censos" ||
            $_GET["ruta"] == "administrar-pyc" ||
            $_GET["ruta"] == "nuevo-censo" ||
            $_GET["ruta"] == "registro-instalacion" ||
            $_GET["ruta"] == "administrar-registros" ||
            $_GET["ruta"] == "historial-progresos" ||
            $_GET["ruta"] == "agregar-progreso" ||
            $_GET["ruta"] == "clientes" ||
            $_GET["ruta"] == "ventas" ||
            $_GET["ruta"] == "mapa" ||
            $_GET["ruta"] == "registromap" ||
            $_GET["ruta"] == "crear-venta" ||
            $_GET["ruta"] == "editar-venta" ||
            $_GET["ruta"] == "editar-progreso" ||
            $_GET["ruta"] == "ver-progreso" ||
            $_GET["ruta"] == "ver-promate" ||
            $_GET["ruta"] == "ver-progremate" ||
            $_GET["ruta"] == "reportes" ||
            $_GET["ruta"] == "salir" ||
            $_GET["ruta"] == "mapa_registro") {

            include "modulos/" . $_GET["ruta"] . ".php";

        } else {

            include "modulos/404.php";

        }

    } else {

        include "modulos/inicio.php";

    }

    /*=============================================
    FOOTER
    =============================================*/

    include "modulos/footer.php";

    echo '</div>';

} else {

    include "modulos/login.php";

}

?>


<script src="vistas/js/plantilla.js"></script>
<script src="vistas/js/usuarios.js"></script>
<script src="vistas/js/categorias.js"></script>
<script src="vistas/js/productos.js"></script>
<script src="vistas/js/promate.js"></script>
<script src="vistas/js/clientes.js"></script>
<!--<script src="vistas/js/ventas.js"></script>-->
<script src="vistas/js/ventas2.js"></script>
<script src="vistas/js/reportes.js"></script>
<script src="vistas/js/censos.js"></script>
<script src="vistas/js/registros.js"></script>
<script src="vistas/js/pyc.js"></script>
<script src="vistas/js/proyectos_registros.js"></script>


</body>
</html>
