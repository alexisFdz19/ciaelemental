<?php

//define("DEFAULT_CONTROLLER", "tareas"); // Conrolador default
define("DEFAULT_CONTROLLER", "tareas"); // Conrolador default
define("DEFAULT_LAYOUT", "default"); // plantilla default

define("APP_FOLDER", "ciaelemental/admin/app"); // Carpeta del proyecto
define("APP_URL", "http://".$_SERVER['SERVER_NAME']."/".APP_FOLDER."/"); // URL del proyecto
define("APP_URL_CSS", APP_URL."public/css/"); // CSS
define("APP_URL_IMG", APP_URL."public/img/"); // Img
define("APP_URL_JS",  APP_URL."public/js/"); // JS

define("APP_NAME", "Administrador de ligas de interés"); // Nombre de la app

// Datos de la base de datos

define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "ciaelemental");
define("DB_CHAR", "UTF8");
