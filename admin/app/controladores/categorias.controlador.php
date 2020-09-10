<?php

class ControladorCategorias{

    /*=============================================
	MOSTRAR Proyectos
	=============================================*/

	static public function ctrMostrarCategorias($item, $valor){

		$tabla = "tareas";

		$respuesta = ModeloCategorias::mdlMostrarCategorias($tabla, $item, $valor);

		return $respuesta;

    }

    /*=============================================
	MOSTRAR ULTIMO Proyecto
	=============================================*/

	static public function ctrMostrarUltimaCategoria($item, $valor){

		$tabla = "categorias";

		$respuesta = ModeloCategorias::mdlMostrarUltimaCategoria($tabla, $item, $valor);

		return $respuesta;
	
	}
    
    /*=============================================
	CREAR PROYECTOS
	=============================================*/

	static public function ctrCrearCategoria(){

		if(isset($_POST["nuevaCategoria"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevaCategoria"])){

				$tabla = "tareas";

				//$datos = $_POST["nuevaCategoria"];

				$datos = array("nombre" => $_POST["nuevaCategoria"],
								"descripcion" => $_POST["nuevoLugar"],
								"fecha" => $_POST["nuevoFI"],
								"link" => $_POST["nuevoMaterial"],
								"categoria_id" => $_POST["nuevoUsuario"]);

				$respuesta = ModeloCategorias::mdlIngresarCategoria($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "La liga ha sido guardada correctamente",
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
						  title: "¡La liga no puede ir vacía o llevar caracteres especiales!",
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
	EDITAR PROYECTO
	=============================================*/

	static public function ctrEditarCategoria(){

		if(isset($_POST["editarCategoria"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarCategoria"]) &&
				preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]|[a-zA-Z0-9]|[a-zA-Z0-9\,]|[#\.\-a-zA-Z0-9 ]+$/', $_POST["editarLugar"]) &&
				preg_match('/^[#\.\-a-zA-Z0-9 ]+$/', $_POST["editarFI"])&&
				preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]|[a-zA-Z0-9]|[a-zA-Z0-9\,]|[#\.\-a-zA-Z0-9 ]+$/', $_POST["editarLumi"]) &&
				preg_match('/^[0-9]+$/', $_POST["editarCliente"])){


				$tabla = "tareas";

				$datos = array("nombre"=>$_POST["editarCategoria"],
								"descripcion"=>$_POST["editarLugar"],
								"fecha"=>$_POST["editarFI"],
								"link"=>$_POST["editarLumi"],
								"categoria_id"=>$_POST["editarCliente"],
							   "id"=>$_POST["idCategoria"]);

				$respuesta = ModeloCategorias::mdlEditarCategoria($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "La liga ha sido editada correctamente",
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
						  title: "¡La liga no puede ir vacía o llevar caracteres especiales!",
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
	BORRAR CATEGORIA
	=============================================*/

	static public function ctrBorrarCategoria(){

		if(isset($_GET["idCategoria"])){

			$tabla ="tareas";
			$datos = $_GET["idCategoria"];

			$respuesta = ModeloCategorias::mdlBorrarCategoria($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

					swal({
						  type: "success",
						  title: "La liga ha sido eliminada correctamente",
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

}