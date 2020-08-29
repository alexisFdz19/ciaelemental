<?php

abstract class AppController
{
	protected $_view;

	public function __construct(){
		$this->_view = new View(new Request);
	}
	abstract function index();

	protected function loadModel($modelo){
		$modelo = $modelo."Model";
		$rutaModelo = ROOT."models".DS.$modelo.".php";


		if (is_readable($rutaModelo)) {
		 	require_once($rutaModelo);
		 	$modelo = new $modelo;
		 	return $modelo;
		 			 }else{
		 	throw new Exception("Error al cargar el modelo");
		 }
	}

	public function redirect($url = array()){

		$path = "";
		if ($url["controller"]){

			$path .= $url["controller"];
		}

		if ($url["action"]){

			$path .="".$url["action"];

		}

		return APP_URL.$path;
		
		//header("LOCATION: ".APP_URL.$path);

	}
}

