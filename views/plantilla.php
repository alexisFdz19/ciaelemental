<?php

    /*=============================================
    =            Ruta del proyecto          =
    =============================================*/

    $url = Ruta::ctrRuta();

?>

<!doctype html>
<html lang="esp">

<head>

    <!-- Archivos de estilo css y etc -->

    <meta charset="utf-8">

    <title>CIA - Consultoría, Impuestos y Auditorías</title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="theme-color" content="#1E1E4B"/>

    <!-- **Font Awesome** -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css" integrity="sha256-PF6MatZtiJ8/c9O9HQ8uSUXr++R9KBYu4gbNG5511WE=" crossorigin="anonymous" />

    <!-- ** Plugins Needed for the Project ** -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo $url?>views/plugins/bootstrap/bootstrap.min.css">
    <!-- slick slider -->
    <link rel="stylesheet" href="<?php echo $url?>views/plugins/slick/slick.css">
    <!-- themefy-icon -->
    <link rel="stylesheet" href="<?php echo $url?>views/plugins/themify-icons/themify-icons.css">
    <!-- animation css -->
    <link rel="stylesheet" href="<?php echo $url?>views/plugins/animate/animate.css">
    <!-- aos -->
    <link rel="stylesheet" href="<?php echo $url?>views/plugins/aos/aos.css">
    <!-- venobox popup -->
    <link rel="stylesheet" href="<?php echo $url?>views/plugins/venobox/venobox.css">

    <!-- Main Stylesheet -->
    <link href="<?php echo $url?>views/css/style.css" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" href="<?php echo $url?>views/images/favicon2.png" type="image/x-icon">
    <link rel="icon" href="<?php echo $url?>views/images/favicon2.png" type="image/x-icon">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-177260226-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-177260226-1');
    </script>


</head>

<body>

<!-- preloader start -->
<div class="preloader">

    <img src="<?php echo $url?>views/images/preloader2.gif" alt="preloader">

</div>
<!-- preloader end -->

<!-- Colocar el siguiente codigo dinámico entre el/los divs principales del body en la maquetación del sitio web -->
<!-- Inicio de divs-->
    
        
        <?php

            /*=============================================
            =            NAV          =
            =============================================*/

            include "modulos/default/nav.php"; // Ruta del archivo

                /*==============================================
                =             Contenido dinamico                =
                ==============================================*/
                
                $rutas = array();
                $ruta = null;
                $infoPropiedad = null;

                if(isset($_GET["ruta"])){

                    $rutas = explode("/", $_GET["ruta"]);

                    $item = "ruta";
                    $valor = $rutas[0];

                        /*==============================================
                        =       URL´s Amigables de paginas        =
                        ==============================================*/

                        $rutaPaginas = ControladorPaginas::ctrMostrarPaginas($item, $valor);

                        if($rutas[0] == $rutaPaginas["ruta"]){

                            $ruta = $rutas[0];

                        }

                        /*==============================================
                        =  Lista blanca de  URL´s Amigables (Páginas que se muestran) =
                        ==============================================*/

                        switch ($ruta) {

                            //Casos con respecto a la cantidad de páginas que habrá en el sitio web

                            case 'index':
                                include "modulos/index.php"; // Ruta del archivo de la página
                                break;

                            case 'servicios':
                                include "modulos/servicios.php"; // Ruta del archivo de la página
                                break;

                            case 'ligas-de-interes':
                                include "modulos/ligas-de-interes.php"; // Ruta del archivo de la página
                                break;

                            case 'contacto':
                                include "modulos/contacto.php"; // Ruta del archivo de la página
                                break;

                            case 'correo-enviado':
                                    include "modulos/correo-enviado.php"; // Ruta del archivo de la página
                                    break;
                            
                            // Página de error 404   
                            default:
                                include "modulos/default/404.php"; // Ruta del archivo
                                break;

                        }


                }else{

                    // Página index o home por defecto del sitio web
                    include "modulos/index.php"; // Ruta del archivo
          
                }

            /*=============================================
            =            Footer          =
            =============================================*/

            include "modulos/default/footer.php"; // Ruta del archivo

        ?>

    <!-- Cierre de los divs principales del body -->

    <a class="appWhatsApp animated bounceIn" target="_blank" href="https://api.whatsapp.com/send?phone=52 9982149538&text=¡Hola&nbsp;amigos&nbsp;de&nbsp;CIA Elemental!&nbsp;¿Pueden&nbsp;ayudarme?">

        <img src="<?php echo $url?>views/images/social-media.png" alt="WhatsApp">

    </a>

    <!-- Aviso de privacidad-->
    <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Aviso de privacidad</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
            
            <p>

                <b>Identidad y domicilio del responsable del tratamiento</b><br>
                El responsable del tratamiento de sus datos personales es CIA Elemental, a través de su pagina web.<br><br>
                 
                <b>Recopilación y uso de datos personales</b><br>
                CIA Elemental se dedica a proteger la confidencialidad y privacidad de la información que se le ha confiado. Como parte de esta obligación fundamental, se compromete a proteger y utilizar adecuadamente la información personal o datos personales (en lo sucesivo “IPDP” o “datos personales”) que se recopile a través de sus sitios web y/o sea proporcionada voluntariamente por los visitantes a nuestros sitios web (en lo sucesivo los “Usuarios”, “usted”).<br><br>
                 
                <b>Tratamiento de datos personales</b><br>
                Obtenemos IPDP sobre los Usuarios cuando éstos eligen proporcionarla — por ejemplo, para ponerse en contacto con buzones o para registrarse para ciertos servicios. Al registrar y/o enviar información en nuestro sitio web, usted también acepta el uso de esta información de acuerdo con este Aviso de Privacidad. Su IPDP no se utiliza para otros propósitos, a menos que obtengamos su consentimiento, o a menos que sea requerido o permitido por la ley y/o normas aplicables. Por ejemplo, si usted nos envía un mensaje de correo electrónico solicitando información sobre nuestros servicios, utilizaremos su dirección de correo electrónico y otra información que usted proporcione para responder a su solicitud, de conformidad con los principios y en términos de lo dispuesto en la Ley Federal de Protección de Datos Personales en Posesión de los Particulares (LFPDPPP), su Reglamento y la legislación aplicable en la materia.
                
            </p>

            </div>
        </div>
    </div>
    <!-- Aviso de priacidad -->

    <!-- Colocación de todos los archivos/plugins de JS o JQuery -->

    <!-- jQuery -->
    <script src="<?php echo $url?>views/plugins/jQuery/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="<?php echo $url?>views/plugins/bootstrap/bootstrap.min.js"></script>
    <!-- slick slider -->
    <script src="<?php echo $url?>views/plugins/slick/slick.min.js"></script>
    <!-- aos -->
    <script src="<?php echo $url?>views/plugins/aos/aos.js"></script>
    <!-- venobox popup -->
    <script src="<?php echo $url?>views/plugins/venobox/venobox.min.js"></script>
    <!-- filter -->
    <script src="<?php echo $url?>views/plugins/filterizr/jquery.filterizr.min.js"></script>
    <!-- google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
    <script src="<?php echo $url?>views/plugins/google-map/gmap.js"></script>

    <!-- Main Script -->
    <script src="<?php echo $url?>views/js/script.js"></script>

    <!-- Animaciones -->
    <script src="<?php echo $url?>views/js/eskju.jquery.scrollflow.min.js"></script>
    <script src="<?php echo $url?>views/js/smooth-scroll.min.js"></script>
    <script src="<?php echo $url?>views/js/menu.js"></script>
    <script>
    smoothScroll.init({
    selector: '[data-scroll]', // Selector for links (must be a class, ID, data attribute, or element tag)
    selectorHeader: null, // Selector for fixed headers (must be a valid CSS selector) [optional]
    speed: 600, // Integer. How fast to complete the scroll in milliseconds
    easing: 'easeOutQuint', // Easing pattern to use
    offset: 0, // Integer. How far to offset the scrolling anchor location in pixels
    callback: function ( anchor, toggle ) {} // Function to run after scrolling
    });
    </script>


</body>

</html>