<?php

require_once "conexion.php";

class ModeloPYC{
	
	/*=============================================
	MOSTRAR PROYECTOS
	=============================================*/

	static public function pnMostrarPYC($tabla, $item, $valor){
		if ($item != null) {

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;
	}

	/*=============================================
	CREAR PYC
	=============================================*/

	static public function mdlIngresarPYC($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre) VALUES (:nombre)");

		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	EDITAR PYC
	=============================================*/

	static public function mdlEditarPYC($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre WHERE id = :id");

		/**
		//$stmt->bindParam(":comO", $datos["comO"], PDO::PARAM_STR);
		//$stmt->bindParam(":sysI", $datos["sysI"], PDO::PARAM_STR);
		*/

		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt -> bindParam(":id", $datos["id"], PDO::PARAM_INT);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}
}