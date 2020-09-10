/*=============================================
SUBIENDO LA FOTO DEL USUARIO
=============================================*/
$(".nuevaFotoLumi").change(function(){

	var imagen = this.files[0];
	
	/*=============================================
  	VALIDAMOS EL FORMATO DE LA IMAGEN SEA JPG O PNG
  	=============================================*/

  	if(imagen["type"] != "image/jpeg" && imagen["type"] != "image/png"){

  		$(".nuevaFotoLumi").val("");

  		 swal({
		      title: "Error al subir la imagen",
		      text: "¡La imagen debe estar en formato JPG o PNG!",
		      type: "error",
		      confirmButtonText: "¡Cerrar!"
		    });

  	}else if(imagen["size"] > 2000000){

  		$(".nuevaFotoLumi").val("");

  		 swal({
		      title: "Error al subir la imagen",
		      text: "¡La imagen no debe pesar más de 2MB!",
		      type: "error",
		      confirmButtonText: "¡Cerrar!"
		    });

  	}else{

  		var datosImagen = new FileReader;
  		datosImagen.readAsDataURL(imagen);

  		$(datosImagen).on("load", function(event){

  			var rutaImagen = event.target.result;

  			$(".previsualizar").attr("src", rutaImagen);

  		})

  	}
})

/*=============================================
EDITAR CENSO
=============================================*/
$(".tablas").on("click", ".btnEditarRegistro", function(){

	var idRegistro = $(this).attr("idRegistro");

	var datos = new FormData();
	datos.append("idRegistro", idRegistro);

	$.ajax({
		url: "ajax/registros.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType:"json",
		success: function(respuesta){

			$("#nomP").val(respuesta["nomProyect"]);
			$("#editarLumi").val(respuesta["lumi"]);
			$("#editarLuminId").val(respuesta["luminId"]);
			$("#editarRpu").val(respuesta["rpu"]);
			$("#editarCol").val(respuesta["col"]);
			$("#editarCalle").val(respuesta["calle"]);
			$("#editarAlp").val(respuesta["alP"]);
			$("#editarTipoVi").val(respuesta["tipoVi"]);
			$("#editarUbip").val(respuesta["ubiP"]);
			$("#editarDisIn").val(respuesta["disIn"]);
			$("#editarCarriles").val(respuesta["carriles"]);
			$("#editarCo").val(respuesta["co"]);
			$("#editarEstaC").val(respuesta["estaC"]);
			$("#editarAlimen").val(respuesta["alimen"]);
			$("#editarLumiAR").val(respuesta["lumiAR"]);
			$("#editarLatitud").val(respuesta["latitud"]);
			$("#editarLongitud").val(respuesta["longitud"]);
			$("#editarInstalador").val(respuesta["instalador"]);
			$("#editarTipoP").val(respuesta["tipoP"]);
			$("#editarLumiE").val(respuesta["modeloLE"]);
			$("#editarPotencia").val(respuesta["potenciaLE"]);
			$("#editarLumiN").val(respuesta["luminew"]);
			$("#editarPotenciaN").val(respuesta["potencialuminew"]);
			$("#editarObser").val(respuesta["observaciones"]);
			$("#fotoActualLumi").val(respuesta["foto"]);

			if(respuesta["foto"] != ""){

				$(".previsualizarEditar").attr("src", respuesta["foto"]);

			}else{

				$(".previsualizarEditar").attr("src", "vistas/img/luminarias/Lum/gtx.jpg");

			}

			$("#idProyect").val(respuesta["idProyect"]);
			$("#idRegistro").val(respuesta["idR"]);

		}
	})

})

/**
$("#editarModelo").val(respuesta["modeloLI"]);
			$("#editarPotencia").val(respuesta["potenciaLI"]);
			$("#editarInstaVT").val(respuesta["instaVT"]);
			$("#editarInstaCF").val(respuesta["instaCF"]);
			$("#editarInstaCD").val(respuesta["instaCD"]);
			$("#editarInstaBP").val(respuesta["instaBP"]);
			$("#editarInstaTGPC").val(respuesta["instaTGPC"]);
			$("#editarObser").val(respuesta["obser"]);
 */

/*=============================================
ELIMINAR CENSO
=============================================*/
$(".tablas").on("click", ".btnEliminarRegistro", function(){

	 var idRegistro = $(this).attr("idRegistro");

	 swal({
	 	title: '¿Está seguro de borrar el registro?',
	 	text: "¡Si no lo está, puede cancelar la acción!",
	 	type: 'warning',
	 	showCancelButton: true,
	 	confirmButtonColor: '#3085d6',
	 	cancelButtonColor: '#d33',
	 	cancelButtonText: 'Cancelar',
	 	confirmButtonText: 'Si, borrar registro'
	 }).then(function(result){

	 	if(result.value){

	 		window.location = "index.php?ruta=administrar-registros&idRegistro="+idRegistro;

	 	}

	 })

})