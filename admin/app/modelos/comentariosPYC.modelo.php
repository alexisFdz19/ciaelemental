<?php

require_once 'conexion.php';

class ModeloOBPYC{

	/*=============================================
	CREAR OBPYC
	=============================================*/
	
	static public function mdlInsertarOB($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(observacion) VALUES (:observacion)");

		$stmt->bindParam(":observacion", $datos, PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;
	}

	/*=============================================
	MOSTRAR ULTIMO COMENTARIO
	=============================================*/

	static public function mdlMostrarUltimoComentario($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY id DESC LIMIT 1 ");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY id DESC LIMIT 1");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;

	}
}