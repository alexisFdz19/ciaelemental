<?php

require_once("conexion.php");

class ModeloRegistro{

	/*=============================================
	MOSTRAR REGISTROS
	=============================================*/

	static public function mdlMostrarRegistros($tabla, $item, $valor){

		if($item != null){

		    //print_r($item,$valor);

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = $valor");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt->execute();

			//return $stmt->fetchAll();

			return $stmt->fetch();


		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	CREAR REGISTRO
	=============================================*/

	static public function mdlIngresarRegistro($tabla, $datos){
		$stmt = conexion::conectar()->prepare("INSERT INTO $tabla(idProyect, nomProyect, lumi, luminId, rpu, col, calle, alP, tipoVi, ubiP, disIn, carriles, co, estaC, alimen, lumiAR, latitud, longitud, instalador, tipoP, modeloLE, potenciaLE, luminew, potencialuminew, observaciones, foto) VALUES(:idProyect, :nomProyect, :lumi, :luminId, :rpu, :col, :calle, :alP, :tipoVi, :ubiP, :disIn, :carriles, :co, :estaC, :alimen, :lumiAR, :latitud, :longitud, :instalador, :tipoP, :modeloLE, :potenciaLE, :luminew, :potencialuminew, :observaciones, :foto)");

		$stmt->bindParam(":idProyect", $datos["idProyect"], PDO::PARAM_STR);
		$stmt->bindParam(":nomProyect", $datos["nomProyect"], PDO::PARAM_STR);
		$stmt->bindParam(":lumi", $datos["lumi"], PDO::PARAM_STR);
		$stmt->bindParam(":luminId", $datos["luminId"], PDO::PARAM_STR);
		$stmt->bindParam(":rpu", $datos["rpu"], PDO::PARAM_STR);
		$stmt->bindParam(":col", $datos["col"], PDO::PARAM_STR);
		$stmt->bindParam(":calle", $datos["calle"], PDO::PARAM_STR);
		$stmt->bindParam(":alP", $datos["alP"], PDO::PARAM_STR);
		$stmt->bindParam(":tipoVi", $datos["tipoVi"], PDO::PARAM_STR);
		$stmt->bindParam(":ubiP", $datos["ubiP"], PDO::PARAM_STR);
		$stmt->bindParam(":disIn", $datos["disIn"], PDO::PARAM_STR);
		$stmt->bindParam(":carriles", $datos["carriles"], PDO::PARAM_STR);
		$stmt->bindParam(":co", $datos["co"], PDO::PARAM_STR);
		$stmt->bindParam(":estaC", $datos["estaC"], PDO::PARAM_STR);
		$stmt->bindParam(":alimen", $datos["alimen"], PDO::PARAM_STR);
		$stmt->bindParam(":lumiAR", $datos["lumiAR"], PDO::PARAM_STR);
		$stmt->bindParam(":latitud", $datos["latitud"], PDO::PARAM_STR);
		$stmt->bindParam(":longitud", $datos["longitud"], PDO::PARAM_STR);
		$stmt->bindParam(":instalador", $datos["instalador"], PDO::PARAM_STR);
		$stmt->bindParam(":tipoP", $datos["tipoP"], PDO::PARAM_STR);
		$stmt->bindParam(":modeloLE", $datos["modeloLE"], PDO::PARAM_STR);
		$stmt->bindParam(":potenciaLE", $datos["potenciaLE"], PDO::PARAM_STR);
		$stmt->bindParam(":luminew", $datos["luminew"], PDO::PARAM_STR);
		$stmt->bindParam(":potencialuminew", $datos["potencialuminew"], PDO::PARAM_STR);
		$stmt->bindParam(":observaciones", $datos["observaciones"], PDO::PARAM_STR);
		$stmt->bindParam(":foto", $datos["foto"], PDO::PARAM_STR);

		if ($stmt->execute()) {
			
			return "ok";
		}else{

			return "error";
		}

		$stmt->close();
		$stmt = null;
	}

	/*=============================================
	EDITAR REGISTRO
	=============================================*/

	static public function mdlEditarRegistro($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET idProyect = :idProyect, nomProyect = :nomProyect, lumi = :lumi, luminId = :luminId, rpu = :rpu, col = :col, calle = :calle, alP = :alP, tipoVi = :tipoVi, ubiP = :ubiP, disIn = :disIn, carriles = :carriles, co = :co, estaC = :estaC, alimen = :alimen, lumiAR = :lumiAR, latitud = :latitud, longitud = :longitud, instalador = :instalador, tipoP = :tipoP, modeloLE = :modeloLE, potenciaLE = :potenciaLE, luminew = :luminew, potencialuminew = :potencialuminew, observaciones = :observaciones, foto = :foto WHERE idR = :idR");

		$stmt->bindParam(":nomProyect", $datos["nomProyect"], PDO::PARAM_STR);
		$stmt->bindParam(":lumi", $datos["lumi"], PDO::PARAM_STR);
		$stmt->bindParam(":luminId", $datos["luminId"], PDO::PARAM_STR);
		$stmt->bindParam(":rpu", $datos["rpu"], PDO::PARAM_STR);
		$stmt->bindParam(":col", $datos["col"], PDO::PARAM_STR);
		$stmt->bindParam(":calle", $datos["calle"], PDO::PARAM_STR);
		$stmt->bindParam(":alP", $datos["alP"], PDO::PARAM_STR);
		$stmt->bindParam(":tipoVi", $datos["tipoVi"], PDO::PARAM_STR);
		$stmt->bindParam(":ubiP", $datos["ubiP"], PDO::PARAM_STR);
		$stmt->bindParam(":disIn", $datos["disIn"], PDO::PARAM_STR);
		$stmt->bindParam(":carriles", $datos["carriles"], PDO::PARAM_STR);
		$stmt->bindParam(":co", $datos["co"], PDO::PARAM_STR);
		$stmt->bindParam(":estaC", $datos["estaC"], PDO::PARAM_STR);
		$stmt->bindParam(":alimen", $datos["alimen"], PDO::PARAM_STR);
		$stmt->bindParam(":lumiAR", $datos["lumiAR"], PDO::PARAM_STR);
		$stmt->bindParam(":latitud", $datos["latitud"], PDO::PARAM_STR);
		$stmt->bindParam(":longitud", $datos["longitud"], PDO::PARAM_STR);
		$stmt->bindParam(":instalador", $datos["instalador"], PDO::PARAM_STR);
		$stmt->bindParam(":tipoP", $datos["tipoP"], PDO::PARAM_STR);
		$stmt->bindParam(":modeloLE", $datos["modeloLE"], PDO::PARAM_STR);
		$stmt->bindParam(":potenciaLE", $datos["potenciaLE"], PDO::PARAM_STR);
		$stmt->bindParam(":luminew", $datos["luminew"], PDO::PARAM_STR);
		$stmt->bindParam(":potencialuminew", $datos["potencialuminew"], PDO::PARAM_STR);
		$stmt->bindParam(":observaciones", $datos["observaciones"], PDO::PARAM_STR);
		$stmt->bindParam(":foto", $datos["foto"], PDO::PARAM_STR);
		$stmt->bindParam(":idProyect", $datos["idProyect"], PDO::PARAM_INT);
		$stmt->bindParam(":idR", $datos["idR"], PDO::PARAM_INT);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		}

		$stmt->close();
		$stmt = null;
	}

	/*=============================================
	EDITAR REGISTRO
	=============================================*/

	/*static public function mdlEditarRegistro($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET modeloLI = :modeloLI, potenciaLI = :potenciaLI, instaVT = :instaVT, instaCF = :instaCF, instaCD = :instaCD, instaBP = :instaBP, instaTGPC = :instaTGPC, obser = :obser WHERE idR = :idR");

		$stmt->bindParam(":modeloLI", $datos["modeloLI"], PDO::PARAM_STR);
		$stmt->bindParam(":potenciaLI", $datos["potenciaLI"], PDO::PARAM_STR);
		$stmt->bindParam(":instaVT", $datos["instaVT"], PDO::PARAM_STR);
		$stmt->bindParam(":instaCF", $datos["instaCF"], PDO::PARAM_STR);
		$stmt->bindParam(":instaCD", $datos["instaCD"], PDO::PARAM_STR);
		$stmt->bindParam(":instaBP", $datos["instaBP"], PDO::PARAM_STR);
		$stmt->bindParam(":instaTGPC", $datos["instaTGPC"], PDO::PARAM_STR);
		$stmt->bindParam(":obser", $datos["obser"], PDO::PARAM_STR);
		$stmt->bindParam(":idR", $datos["idR"], PDO::PARAM_INT);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		}

		$stmt->close();
		$stmt = null;
	}*/

	/*=============================================
	BORRAR Registro
	=============================================*/

	static public function mdlBorrarRegistro($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE idR = :idR");

		$stmt -> bindParam(":idR", $datos, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}

}