<?php

require_once "../controladores/pyc.controlador.php";
require_once "../modelos/pyc.modelo.php";

class AjaxPYC{

	/*=============================================
	EDITAR PROYECTO
	=============================================*/	

	public $idPyc;

	public function ajaxEditarPYC(){

		$item = "idP";
		$valor = $this->idPyc;

		$respuesta = ControladorPYC::ctrMostrarPYC($item, $valor);

		echo json_encode($respuesta);


	}

}

/*=============================================
EDITAR CLIENTE
=============================================*/	

if(isset($_POST["idPyc"])){

	$cliente = new AjaxPYC();
	$cliente -> idPyc = $_POST["idPyc"];
	$cliente -> ajaxEditarPYC();

}