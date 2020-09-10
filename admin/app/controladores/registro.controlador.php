<?php


class ControladorRegistro{

	/*=============================================
	MOSTRAR REGISTRO
	=============================================*/

	static public function ctrMostrarRegistros($item, $valor){

		$tabla = "registro";

		$respuesta = ModeloRegistro::mdlMostrarRegistros($tabla, $item, $valor);

		return $respuesta;
	
	}

	/*=============================================
	CREAR REGISTRO
	=============================================*/

	static public function ctrCrearRegistro(){


		if (isset($_POST["lumina"])){

			
			if (preg_match('/^[0-9]+$/', $_POST["lumina"])&&
				preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["luminarianueva"])) {

				/*=============================================
				VALIDAR IMAGEN
				=============================================*/

				$ruta = " ";

				if(isset($_FILES["nuevaFotoLumi"]["tmp_name"])){

					list($ancho, $alto) = getimagesize($_FILES["nuevaFotoLumi"]["tmp_name"]);

					$nuevoAncho = 500;
					$nuevoAlto = 500;

					/*=============================================
					CREAMOS EL DIRECTORIO DONDE VAMOS A GUARDAR LA FOTO DEL USUARIO
					=============================================*/

					$directorio = "vistas/img/luminarias/".$_POST["luminarianueva"];

					mkdir($directorio, 0755);

					/*=============================================
					DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP
					=============================================*/

					if($_FILES["nuevaFotoLumi"]["type"] == "image/jpeg"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

						$aleatorio = mt_rand(100,999);

						$ruta = "vistas/img/luminarias/".$_POST["luminarianueva"]."/".$aleatorio.".jpg";

						$origen = imagecreatefromjpeg($_FILES["nuevaFotoLumi"]["tmp_name"]);						

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagejpeg($destino, $ruta);

					}

					if($_FILES["nuevaFotoLumi"]["type"] == "image/png"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

						$aleatorio = mt_rand(100,999);

						$ruta = "vistas/img/luminarias/".$_POST["luminarianueva"]."/".$aleatorio.".png";

						$origen = imagecreatefrompng($_FILES["nuevaFotoLumi"]["tmp_name"]);						

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagepng($destino, $ruta);

					}

				}
				
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
								"foto" => $ruta);

				$respuesta = ModeloRegistro::mdlIngresarRegistro($tabla, $datos);

				if ($respuesta == "ok") {
					
					echo'<script>

					swal({
						  type: "success",
						  title: "El Registro ha sido guardado correctamente okok",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "proyectos";

									}
								})

					</script>';

				}

			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El Registro no puede ir vacía o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "proyectos";

							}
						})

			  	</script>';
			}

		}

	}

	/*=============================================
	CREAR CENSO
	=============================================*/

	/*static public function ctrCrearRegistro(){

		if (isset($_POST["modeloluminstalada"])){
			
			if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["modeloluminstalada"])) {
				
				$tabla = "registro";
				/*var_dump($_POST['modeloluminstalada']);
				var_dump($_POST['potencialuminstalada']);
				var_dump($_POST['varillatierra']);
				var_dump($_POST['cablefase']);
				var_dump($_POST['desnudotierra']);
				var_dump($_POST['brazoposte']);
				var_dump($_POST['tuboenposte']);
				var_dump($_POST['observacionesfinales']);*/

				/*$datos = array("modeloLI" => $_POST["modeloluminstalada"],
								"potenciaLI" => $_POST["potencialuminstalada"],
								"instaVT" => $_POST["varillatierra"],
								"instaCF" => $_POST["cablefase"],
								"instaCD" => $_POST["desnudotierra"],
								"instaBP" => $_POST["brazoposte"],
								"instaTGPC" => $_POST["tuboenposte"],
								"obser" => $_POST["observacionesfinales"]);

				$respuesta = ModeloRegistro::mdlIngresarRegistro($tabla, $datos);

				if ($respuesta == "ok") {
					
					echo'<script>

					swal({
						  type: "success",
						  title: "El registro ha sido guardado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "proyectos";

									}
								})

					</script>';

				}

			}else{*/

				/*echo'<script>

					swal({
						  type: "error",
						  title: "¡El registro no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "registro-instalacion";

							}
						})

			  	</script>';
			}

		}

	}*/

	/*=============================================
	EDITAR Registro
	=============================================*/

	static public function ctrEditarRegistro(){

		if(isset($_POST["editarLumi"])){

			if(preg_match('/^[0-9]+$/', $_POST["editarLumi"]) &&
				preg_match('/^[#\.\-a-zA-Z0-9 ]|[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nomP"])&&
				preg_match('/^[0-9]|[#\.\-a-zA-Z0-9]|[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ]+$/', $_POST["editarLuminId"])&&
				preg_match('/^[0-9]+$/', $_POST["editarRpu"])&&
				preg_match('/^[#\.\-a-zA-Z0-9 ]+$/', $_POST["editarCol"])&&
				preg_match('/^[#\.\-a-zA-Z0-9 ]+$/', $_POST["editarCalle"])&&
				preg_match('/^[0-9]+$/', $_POST["editarAlp"])&&
				preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarTipoVi"])&&
				preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarUbip"])&&
				preg_match('/^[0-9]+$/', $_POST["editarDisIn"])&&
				preg_match('/^[0-9]+$/', $_POST["editarCarriles"])&&
				preg_match('/^[0-9]+$/', $_POST["editarCo"])&&
				preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarEstaC"])&&
				preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarAlimen"])&&
				preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarLumiAR"])&&
				preg_match('/^[a-zA-Z0-9]|[a-zA-Z0-9\,]+$/', $_POST["editarLatitud"])&&
				preg_match('/^[a-zA-Z0-9]|[a-zA-Z0-9\,]+$/', $_POST["editarLongitud"])&&
				preg_match('/^[#\.\-a-zA-Z0-9 ]+$/', $_POST["editarInstalador"])&&
				preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarTipoP"])&&
				preg_match('/^[#\.\-a-zA-Z0-9 ]|[a-zA-Z0-9\,]+$/', $_POST["editarLumiE"])&&
				preg_match('/^[#\.\-a-zA-Z0-9 ]+$/', $_POST["editarPotencia"])&&
				preg_match('/^[#\.\-a-zA-Z0-9 ]+$/', $_POST["editarLumiN"])&&
				preg_match('/^[#\.\-a-zA-Z0-9 ]+$/', $_POST["editarPotenciaN"])&&
				preg_match('/^[#\.\-a-zA-Z0-9 ]|[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]|[a-zA-Z, ]*$/', $_POST["editarObser"])){

				/*=============================================
				VALIDAR IMAGEN
				=============================================*/

				$ruta = $_POST["fotoActualLumi"];

				if(isset($_FILES["editarFotoLumi"]["tmp_name"]) && !empty($_FILES["editarFotoLumi"]["tmp_name"])){

					list($ancho, $alto) = getimagesize($_FILES["editarFotoLumi"]["tmp_name"]);

					$nuevoAncho = 500;
					$nuevoAlto = 500;

					/*=============================================
					CREAMOS EL DIRECTORIO DONDE VAMOS A GUARDAR LA FOTO DEL USUARIO
					=============================================*/

					$directorio = "vistas/img/luminarias/".$_POST["editarLumiN"];

					/*=============================================
					PRIMERO PREGUNTAMOS SI EXISTE OTRA IMAGEN EN LA BD
					=============================================*/

					if(!empty($_POST["fotoActualLumi"])){

						unlink($_POST["fotoActualLumi"]);

					}else{

						mkdir($directorio, 0755);

					}

					/*=============================================
					DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP
					=============================================*/

					if($_FILES["editarFotoLumi"]["type"] == "image/jpeg"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

						$aleatorio = mt_rand(100,999);

						$ruta = "vistas/img/luminarias/".$_POST["editarLumiN"]."/".$aleatorio.".jpg";

						$origen = imagecreatefromjpeg($_FILES["editarFotoLumi"]["tmp_name"]);						

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagejpeg($destino, $ruta);

					}

					if($_FILES["editarFotoLumi"]["type"] == "image/png"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

						$aleatorio = mt_rand(100,999);

						$ruta = "vistas/img/luminarias/".$_POST["editarLumiN"]."/".$aleatorio.".png";

						$origen = imagecreatefrompng($_FILES["editarFotoLumi"]["tmp_name"]);						

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagepng($destino, $ruta);

					}

				}

				$tabla = "registro";

				//var_dump($_POST['editarLumi']);

				$datos = array("lumi"=>$_POST["editarLumi"],
								"nomProyect"=>$_POST["nomP"],
								"luminId"=>$_POST["editarLuminId"],
								"rpu"=>$_POST["editarRpu"],
								"col"=>$_POST["editarCol"],
								"calle"=>$_POST["editarCalle"],
								"alP"=>$_POST["editarAlp"],
								"tipoVi"=>$_POST["editarTipoVi"],
								"ubiP"=>$_POST["editarUbip"],
								"disIn"=>$_POST["editarDisIn"],
								"carriles"=>$_POST["editarCarriles"],
								"co"=>$_POST["editarCo"],
								"estaC"=>$_POST["editarEstaC"],
								"alimen"=>$_POST["editarAlimen"],
								"lumiAR"=>$_POST["editarLumiAR"],
								"latitud"=>$_POST["editarLatitud"],
								"longitud"=>$_POST["editarLongitud"],
								"instalador"=>$_POST["editarInstalador"],
								"tipoP"=>$_POST["editarTipoP"],
								"modeloLE"=>$_POST["editarLumiE"],
								"potenciaLE"=>$_POST["editarPotencia"],
								"luminew"=>$_POST["editarLumiN"],
								"potencialuminew"=>$_POST["editarPotenciaN"],
								"observaciones"=>$_POST["editarObser"],
								"foto"=>$ruta,
								"idProyect"=>$_POST["idProyect"],
							    "idR"=>$_POST["idRegistro"]);

				$respuesta = ModeloRegistro::mdlEditarRegistro($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El registro ha sido editado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "administrar-registros";

									}
								})

					</script>';

				}


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El registro no puede ir vacía o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "administrar-registros";

							}
						})

			  	</script>';

			}

		}

	}

	/*=============================================
	EDITAR REGISTRO
	=============================================*/

	/*static public function ctrEditarRegistro(){

		if(isset($_POST["editarModelo"])){

			if(preg_match('/^[#\.\-a-zA-Z0-9 ]|[a-zA-Z0-9\,]+$/', $_POST["editarModelo"]) &&
				preg_match('/^[0-9]+$/', $_POST["editarPotencia"])&&
				preg_match('/^[#\.\-a-zA-Z0-9 ]+$/', $_POST["editarInstaVT"])&&
				preg_match('/^[#\.\-a-zA-Z0-9 ]+$/', $_POST["editarInstaCF"])&&
				preg_match('/^[#\.\-a-zA-Z0-9 ]+$/', $_POST["editarInstaCD"])&&
				preg_match('/^[#\.\-a-zA-Z0-9 ]+$/', $_POST["editarInstaBP"])&&
				preg_match('/^[#\.\-a-zA-Z0-9 ]+$/', $_POST["editarInstaTGPC"])&&
				preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]|[a-zA-Z0-9]|[a-zA-Z0-9\,]|[#\.\-a-zA-Z0-9 ]+$/', $_POST["editarObser"])){


				$tabla = "registro";

				$datos = array("modeloLI"=>$_POST["editarModelo"],
								"potenciaLI"=>$_POST["editarPotencia"],
								"instaVT"=>$_POST["editarInstaVT"],
								"instaCF"=>$_POST["editarInstaCF"],
								"instaCD"=>$_POST["editarInstaCD"],
								"instaBP"=>$_POST["editarInstaBP"],
								"instaTGPC"=>$_POST["editarInstaTGPC"],
								"obser"=>$_POST["editarObser"],
								"idR"=>$_POST["idRegistro"]);

				$respuesta = ModeloRegistro::mdlEditarRegistro($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El registro ha sido editado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "proyectos";

									}
								})

					</script>';

				}


			}else{*/

				/*echo'<script>

					swal({
						  type: "error",
						  title: "¡La registro no puede ir vacía o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "proyectos";

							}
						})

			  	</script>';

			}

		}

	}*/

	/*=============================================
	BORRAR CENSO
	=============================================*/

	static public function ctrBorrarRegistro(){

		if(isset($_GET["idRegistro"])){

			$tabla ="registro";
			$datos = $_GET["idRegistro"];

			$respuesta = ModeloRegistro::mdlBorrarRegistro($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

					swal({
						  type: "success",
						  title: "El registro ha sido eliminado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "administrar-registros";

									}
								})

					</script>';
			}
		}
		
	}
}