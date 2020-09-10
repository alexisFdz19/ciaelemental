<?php

require_once "conexion.php";

class ModeloProgreso{

    /*=============================================
	MOSTRAR PROGRESOS
    =============================================*/
    
    static public function mdlMostrarProgresos($tabla, $item, $valor){

		if($item != null){

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
	REGISTRO DE PROGRESO
	=============================================*/

	static public function mdlIngresarProgreso($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(idProyec, nomPro, cliente, user, descripM, cantidadMP) VALUES (:idProyec, :nomPro, :cliente, :user, :descripM, :cantidadMP)");

		$stmt->bindParam(":idProyec", $datos["idProyec"], PDO::PARAM_INT);
		$stmt->bindParam(":nomPro", $datos["nomPro"], PDO::PARAM_STR);
		$stmt->bindParam(":cliente", $datos["cliente"], PDO::PARAM_STR);
		$stmt->bindParam(":user", $datos["user"], PDO::PARAM_STR);
		$stmt->bindParam(":descripM", $datos["descripM"], PDO::PARAM_STR);
		$stmt->bindParam(":cantidadMP", $datos["cantidadMP"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	EDITAR PROGRESO
	=============================================*/

	static public function mdlEditarProgreso($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET  idProyec = :idProyec, nomPro = :nomPro, cliente = :cliente, user = :user, descripM = :descripM, cantidadMP = :cantidadMP WHERE idPro = :idPro");

		$stmt->bindParam(":idProyec", $datos["idProyec"], PDO::PARAM_INT);
		$stmt->bindParam(":nomPro", $datos["nomPro"], PDO::PARAM_STR);
		$stmt->bindParam(":cliente", $datos["cliente"], PDO::PARAM_STR);
		$stmt->bindParam(":user", $datos["user"], PDO::PARAM_STR);
		$stmt->bindParam(":descripM", $datos["descripM"], PDO::PARAM_STR);
		$stmt->bindParam(":cantidadMP", $datos["cantidadMP"], PDO::PARAM_STR);
		$stmt->bindParam(":idPro", $datos["idPro"], PDO::PARAM_INT);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	ELIMINAR PROGRESO
	=============================================*/

	static public function mdlEliminarProgreso($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE idPro = :idPro");

		$stmt -> bindParam(":idPro", $datos, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}

}