<?php

define("DS", DIRECTORY_SEPARATOR); //Separadores (/) linux y /(\) windows
define("ROOT", realpath(dirname(__FILE__)) . DS); //Donde poner el archivo raiz
define("APP_PATH", ROOT . "aplication" . DS); //donde esta la aplicacion

//echo APP_PATH;

require_once(APP_PATH . "Config.php");
require_once(APP_PATH . "Request.php");
require_once(APP_PATH . "Bootstrap.php");
require_once(APP_PATH . "Controller.php");
require_once(APP_PATH . "Model.php");
require_once(APP_PATH . "View.php");
require_once(APP_PATH . "Database.php");
require_once(ROOT . "libs" . DS .  "FlashMessages.php");

//echo "<pre>";
//print_r(get_required_files());

if (!session_id()) @session_start();

try{

	Bootstrap::run(new Request);
} 
	catch(Exception $e){
		
		echo $e->getMessage();

}