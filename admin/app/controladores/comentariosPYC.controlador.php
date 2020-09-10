<?php

class ControladorOBPYC{

	/*=============================================
	CREAR OBPYC
	=============================================*/

	static public function ctrCrearOBPYC(){

		if(isset($_POST["obs"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]|[a-zA-Z, ]*$/', $_POST["obs"])){

				$tabla = "obser";

				$dato = $_POST["obs"];

				$respuesta = ModeloOBPYC::mdlInsertarOB($tabla, $dato);

				if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El proyecto es factible",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "pyc";

									}
								})

					</script>';

				}


			}elseif ($respuesta == null) {
				echo'<script>

					swal({
						  type: "success",
						  title: "El proyecto es factible",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "pyc";

									}
								})

					</script>';
			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡Ingrese por lo menos una observación!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "factibilidad";

							}
						})

			  	</script>';

			}

		}

	}

	/*=============================================
	MOSTRAR ULTIMO COMENTARIO
	=============================================*/

	static public function ctrMostrarUltimoComentario($item, $valor){

		$tabla = "obser";

		$respuesta =  ModeloOBPYC::mdlMostrarUltimoComentario($tabla, $item, $valor);

		return $respuesta;
	
	}
}