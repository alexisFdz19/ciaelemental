<?php

// Controlador de la plantilla del sitio web
require_once "controllers/plantilla.controlador.php";
// Controlador de las paginas que van en el sitio web
require_once "controllers/paginas.controlador.php";

// Modelo de las rutas de archivos del sitio web
require_once "models/rutas.php";
// Modelo de las paginas que van en el sitio web
require_once "models/paginas.modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla -> plantilla();