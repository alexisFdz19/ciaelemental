<?php

require('../modelos/registro.modelo.php');

$allowTypes = array('jpg', 'png', 'jpeg', 'gif');

if (!empty(array_filter($_FILES['nuevaFotoLumi']['name']))) {

    // File upload path
    $directorio = "../vistas/img/luminarias/".$_POST["luminarianueva"];
    mkdir($directorio, 0755);
    $imagenes = array();

    foreach ($_FILES['nuevaFotoLumi']['name'] as $key => $val) {

        $fileName = basename($_FILES['nuevaFotoLumi']['name'][$key]);
        $targetFilePath = $directorio.'/'. $fileName;

        // Check whether file type is valid
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        if (in_array($fileType, $allowTypes)) {

            if (move_uploaded_file($_FILES["nuevaFotoLumi"]["tmp_name"][$key], $targetFilePath)) {

                array_push($imagenes,$fileName);

            } else {

               echo 'error1';

            }


        } else {

            echo 'error2';

        }

    }
}

$imagenes = json_encode($imagenes);

$tabla = "registro";

$datos = array("lumi" => $_POST["lumina"],
    "idProyect" => $_POST["idProyecto"],
    "nomProyect" => $_POST["nomPro"],
    "luminId" => $_POST["luminaID"],
    "rpu" => $_POST["rpus"],
    "col" => $_POST["colonia"],
    "calle" => $_POST["calles"],
    "alP" => $_POST["alturaP"],
    "tipoVi" => $_POST["vialidad"],
    "ubiP" => $_POST["ubicacionP"],
    "disIn" => $_POST["distanciaI"],
    "carriles" => $_POST["ccarriles"],
    "co" => $_POST["cos"],
    "estaC" => $_POST["estadoC"],
    "alimen" => $_POST["alimentacion"],
    "lumiAR" => $_POST["luminaAlR"],
    "latitud" => $_POST["latitud"],
    "longitud" => $_POST["longitud"],
    "instalador" => $_POST["instalador"],
    "tipoP" => $_POST["tipodeposte"],
    "modeloLE" => $_POST["luminariaexistente"],
    "potenciaLE" => $_POST["potencialuminaria"],
    "modeloLE" => $_POST["luminariaexistente"],
    "luminew" => $_POST["luminarianueva"],
    "potencialuminew" => $_POST["potencianueva"],
    "observaciones" => $_POST["Observ"],
    "foto" => $imagenes);

$respuesta = ModeloRegistro::mdlIngresarRegistro($tabla, $datos);

echo $respuesta;


