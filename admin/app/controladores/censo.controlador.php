<?php


class ControladorCenso{

	/*=============================================
	MOSTRAR CENSO
	=============================================*/

	static public function ctrMostrarCensos($item, $valor){

		$tabla = "censo";

		$respuesta = ModeloCenso::mdlMostrarCensos($tabla, $item, $valor);

		return $respuesta;
	
	}

	/*=============================================
	CREAR CENSO
	=============================================*/

	static public function ctrCrearCenso(){

		if (isset($_POST["lumina"])){
			
			if (preg_match('/^[0-9]+$/', $_POST["lumina"])) {
				
				$tabla = "censo";

				$datos = array("lumi" => $_POST["lumina"],
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
								"obser" => $_POST["Observaciones"]);

				$respuesta = ModeloCenso::mdlIngresarCenso($tabla, $datos);

				if ($respuesta == "ok") {
					
					echo'<script>

					swal({
						  type: "success",
						  title: "El censo ha sido guardada correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "administrar-censos";

									}
								})

					</script>';

				}

			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El censo no puede ir vacía o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "nuevo-censo";

							}
						})

			  	</script>';
			}

		}

	}

	/*=============================================
	EDITAR CENSO
	=============================================*/

	static public function ctrEditarCenso(){

		if(isset($_POST["editarLumi"])){

			if(preg_match('/^[0-9]+$/', $_POST["editarLumi"]) &&
				preg_match('/^[0-9]|[#\.\-a-zA-Z0-9 ]+$/', $_POST["editarLuminId"])&&
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
				preg_match('/^[#\.\-a-zA-Z0-9 ]|[a-zA-Z0-9\,]|[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]|[a-zA-Z, ]*$/', $_POST["editarObser"])){


				$tabla = "censo";

				//var_dump($_POST['editarLumi']);

				$datos = array("lumi"=>$_POST["editarLumi"],
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
								"obser"=>$_POST["editarObser"],
							    "idC"=>$_POST["idCenso"]);

				$respuesta = ModeloCenso::mdlEditarCenso($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El proyecto ha sido editado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "administrar-censos";

									}
								})

					</script>';

				}


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡La categoría no puede ir vacía o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "administrar-censos";

							}
						})

			  	</script>';

			}

		}

	}

	/*=============================================
	BORRAR CENSO
	=============================================*/

	static public function ctrBorrarCenso(){

		if(isset($_GET["idCenso"])){

			$tabla ="censo";
			$datos = $_GET["idCenso"];

			$respuesta = ModeloCenso::mdlBorrarCenso($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

					swal({
						  type: "success",
						  title: "El censo ha sido eliminado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "administrar-censos";

									}
								})

					</script>';
			}
		}
		
	}
}