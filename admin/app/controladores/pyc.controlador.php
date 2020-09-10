<?php

 

class ControladorPYC{
	
	/*=============================================
	MOSTRAR CATEGORIAS
	=============================================*/

	static public function ctrMostrarPYC($item, $valor){

		$tabla = "categorias";

		$respuesta = ModeloPYC::pnMostrarPYC($tabla, $item, $valor);

		return $respuesta;
	
	}

	/*=============================================
	CREAR PYC
	=============================================*/

	static public function ctrCrearPYC(){

		if(isset($_POST["nuevoCliente"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoCliente"])){

				$tabla = "categorias";

				//$datos = $_POST["nuevoCliente"];
				$datos = array("nombre"=>$_POST["nuevoCliente"]);

				$respuesta = ModeloPYC::mdlIngresarPYC($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "Información guardada correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "clientes";

									}
								})

					</script>';

				}


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡La categor&íacute no puede ir vacía o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "clientes";

							}
						})

			  	</script>';

			}

		}

	}

	/*=============================================
	EDITAR PYC
	=============================================*/

	static public function ctrEditarPYC(){

		if(isset($_POST["editarCliente"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]|[#\.\-a-zA-Z0-9 ]+$/', $_POST["editarCliente"])){

				$tabla = "categorias";

				$datos = array("nombre"=>$_POST["editarCliente"],
							   "id"=>$_POST["idCliente"]);

				$respuesta = ModeloPYC::mdlEditarPYC($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "La categor&iacutea ha sido editada correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "clientes";

									}
								})

					</script>';

				}


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡La categor&iacutea no puede ir vacía o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "clientes";

							}
						})

			  	</script>';

			}

		}

    }
}