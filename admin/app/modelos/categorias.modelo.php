<?php

require_once "conexion.php";

class ModeloCategorias{

    /*=============================================
	MOSTRAR Proyectos
	=============================================*/

	static public function mdlMostrarCategorias($tabla, $item, $valor){

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
	MOSTRAR ULTIMO PROYECTO
	=============================================*/

	static public function mdlMostrarUltimaCategoria($tabla, $item, $valor){

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
    
    /*=============================================
	CREAR PROYECTO
	=============================================*/

	static public function mdlIngresarCategoria($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, descripcion, fecha, link, categoria_id) VALUES (:nombre, :descripcion, :fecha, :link, :categoria_id)");

		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
		$stmt->bindParam(":fecha", $datos["fecha"], PDO::PARAM_STR);
		$stmt->bindParam(":link", $datos["link"], PDO::PARAM_STR);
		$stmt->bindParam(":categoria_id", $datos["categoria_id"], PDO::PARAM_INT);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

    }
    
    /*=============================================
	EDITAR PROYECTO
	=============================================*/

	static public function mdlEditarCategoria($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, descripcion = :descripcion, fecha = :fecha, link = :link, categoria_id = :categoria_id WHERE id = :id");

		$stmt -> bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt -> bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
		$stmt -> bindParam(":fecha", $datos["fecha"], PDO::PARAM_STR);
		$stmt -> bindParam(":link", $datos["link"], PDO::PARAM_STR);
		$stmt -> bindParam(":categoria_id", $datos["categoria_id"], PDO::PARAM_INT);
		$stmt -> bindParam(":id", $datos["id"], PDO::PARAM_INT);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

    }
    
    /*=============================================
	BORRAR PROYECTO
	=============================================*/

	static public function mdlBorrarCategoria($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

		// DELETE a1, a2 FROM categorias AS a1 INNER JOIN productos AS a2 WHERE a1.Id=a2.id_categoria

		$stmt -> bindParam(":id", $datos, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}

}