<?php

require_once "../controladores/registro.controlador.php";
require_once "../modelos/registro.modelo.php";

class AjaxRegistros{
	
	/*=============================================
	EDITAR Registro
	=============================================*/

	public $idRegistro;

	public function ajaxEditarRegistro(){

		$item = "idR";
		$valor = $this->idRegistro;

		$respuesta = ControladorRegistro::ctrMostrarRegistros($item, $valor);

		echo json_encode($respuesta);
	}	
}

/*=============================================
EDITAR CENSO
=============================================*/
if (isset($_POST["idRegistro"])) {
	
	$registro = new AjaxRegistros();
	$registro -> idRegistro = $_POST["idRegistro"];
	$registro -> ajaxEditarRegistro();
}