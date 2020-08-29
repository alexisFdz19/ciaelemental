<?php

class Controladorligas{

	/*=============================================
	=           Controlador          =
	=============================================*/

	static public function ctrMostrarligas($item, $valor){

		$tabla = "tareas";

		$respuesta = ModeloLigas::mdlMostrarligas($tabla, $item, $valor);

		return $respuesta;

	}

}