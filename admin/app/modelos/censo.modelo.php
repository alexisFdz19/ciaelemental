<?php

require_once("conexion.php");


class ModeloCenso
{

    /*=============================================
    MOSTRAR CENSOS
    =============================================*/

    static public function mdlMostrarCensos($tabla, $item, $valor)
    {

        if ($item != null) {

            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

            $stmt->bindParam(":" . $item, $valor, PDO::PARAM_STR);

            $stmt->execute();

            return $stmt->fetch();

        } else {

            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

            $stmt->execute();

            return $stmt->fetchAll();

        }

        $stmt->close();

        $stmt = null;

    }

    /*=============================================
    CREAR CATEGORIA
    =============================================*/

    static public function mdlIngresarCenso($tabla, $datos)
    {
        $stmt = conexion::conectar()->prepare("INSERT INTO $tabla(
            lumi, luminId, rpu, col, calle, alP, tipoVi, ubiP, disIn, carriles, 
            co, estaC, alimen, lumiAR, latitud, longitud, instalador, tipoP, 
            modeloLE, potenciaLE, obser, foto) VALUES(
            '".$datos["lumi"]."',
            '".$datos["luminId"]."', 
            '".$datos["rpu"]."', 
            '".$datos["col"]."', 
            '".$datos["calle"]."',
            '".$datos["alP"]."', 
            '".$datos["tipoVi"]."',
            '".$datos["ubiP"]."',
            '".$datos["disIn"]."',
            '".$datos["carriles"]."',
            '".$datos["co"]."',
            '".$datos["estaC"]."',
            '".$datos["alimen"]."',
            '".$datos["lumiAR"]."',
            '".$datos["latitud"]."',
            '".$datos["longitud"]."',
            '".$datos["instalador"]."',
            '".$datos["tipoP"]."',
            '".$datos["modeloLE"]."',
            '".$datos["potenciaLE"]."',
            '".$datos["obser"]."',
            '".$datos["foto"]."')");

        //return print_r($stmt);

        if ($stmt->execute()) {

            return "ok";
        } else {

            return "error";
        }

        $stmt->close();
        $stmt = null;
    }

    /*=============================================
    EDITAR CATEGORIA
    =============================================*/

    static public function mdlEditarCenso($tabla, $datos)
    {

        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET lumi = :lumi, luminId = :luminId, rpu = :rpu, col = :col, calle = :calle, alP = :alP, tipoVi = :tipoVi, ubiP = :ubiP, disIn = :disIn, carriles = :carriles, co = :co, estaC = :estaC, alimen = :alimen, lumiAR = :lumiAR, latitud = :latitud, longitud = :longitud, instalador = :instalador, tipoP = :tipoP, modeloLE = :modeloLE, potenciaLE = :potenciaLE, obser = :obser WHERE idC = :idC");

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
        $stmt->bindParam(":obser", $datos["obser"], PDO::PARAM_STR);
        $stmt->bindParam(":idC", $datos["idC"], PDO::PARAM_INT);

        if ($stmt->execute()) {

            return "ok";

        } else {

            return "error";
        }

        $stmt->close();
        $stmt = null;
    }

    /*=============================================
    BORRAR CENSO
    =============================================*/

    static public function mdlBorrarCenso($tabla, $datos)
    {

        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE idC = :idC");

        $stmt->bindParam(":idC", $datos, PDO::PARAM_INT);

        if ($stmt->execute()) {

            return "ok";

        } else {

            return "error";

        }

        $stmt->close();

        $stmt = null;

    }
}