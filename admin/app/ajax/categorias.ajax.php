<?php

require_once "../controladores/categorias.controlador.php";
require_once "../modelos/categorias.modelo.php";

class AjaxCategorias{

	/*=============================================
	EDITAR PROYECTO
	=============================================*/	

	public $idCategoria;

	public function ajaxEditarCategoria(){

		$item = "id";
		$valor = $this->idCategoria;

		$respuesta = ControladorCategorias::ctrMostrarCategorias($item, $valor);

		echo json_encode($respuesta);


	}

}

/*=============================================
EDITAR CLIENTE
=============================================*/	

if(isset($_POST["idCategoria"])){

	$cliente = new AjaxCategorias();
	$cliente -> idCategoria = $_POST["idCategoria"];
	$cliente -> ajaxEditarCategoria();

}

class AjaxidProyecto{

	/*=============================================
	EDITAR PROYECTO
	=============================================*/	

	public $idProyecto;

	public function ajaxExtraerProyecto(){

		$item = "id";
		$valor = $this->idProyecto;

		$respuesta = ControladorCategorias::ctrMostrarCategorias($item, $valor);

		echo json_encode($respuesta);


	}

}

/*=============================================
EXTAER IDPROYECTO
=============================================*/	

if(isset($_POST["idProyecto"])){

	$cliente = new AjaxidProyecto();
	$cliente -> idProyecto = $_POST["idProyecto"];
	$cliente -> ajaxExtraerProyecto();

}