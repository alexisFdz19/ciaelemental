<?php

require_once "../controladores/censo.controlador.php";
require_once "../modelos/censo.modelo.php";

class AjaxCensos{
	
	/*=============================================
	EDITAR CENSO
	=============================================*/

	public $idCenso;

	public function ajaxEditarCenso(){

		$item = "idC";
		$valor = $this->idCenso;

		$respuesta = ControladorCenso::ctrMostrarCensos($item, $valor);

		echo json_encode($respuesta);
	}	
}

/*=============================================
EDITAR CENSO
=============================================*/
if (isset($_POST["idCenso"])) {
	
	$censo = new AjaxCensos();
	$censo -> idCenso = $_POST["idCenso"];
	$censo -> ajaxEditarCenso();
}