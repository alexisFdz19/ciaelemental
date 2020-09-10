/*=============================================
EDITAR Proyecto
=============================================*/
$(".tablas").on("click", ".btnEditarPYC", function(){

	var idPyc = $(this).attr("idPyc");

	var datos = new FormData();
    datos.append("idPyc", idPyc);

    $.ajax({

      url:"ajax/pyc.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success:function(respuesta){
      
        $("#editarProyecto").val(respuesta["nomP"]);
        $("#editarProyect").val(respuesta["nomP"]);
        $("#editarLugar").val(respuesta["lugar"]);
        $("#editarLug").val(respuesta["lugar"]);
        $("#editarRes1").val(respuesta["comV"]);
        $("#editarRes2").val(respuesta["comOP"]);
        //$("#editarRes3").val(respuesta["comO"]);
        //$("#editarRes4").val(respuesta["sysI"]);
        $("#editarRes5").val(respuesta["sysC"]);
        $("#editarRes6").val(respuesta["sysS"]);
        $("#editarRes7").val(respuesta["weeks"]);
        $("#editarRes12").val(respuesta["aliPD"]);
        $("#editarRes9").val(respuesta["costoH"]);
        $("#editarRes10").val(respuesta["costoP"]);
        $("#editarRes13").val(respuesta["cashET"]);
        $("#editarRes11").val(respuesta["cashE"]);
        $("#editarTotalFF").val(respuesta["costoT"]);
        $("#editarTotalS").val(respuesta["costoS"]);
        $("#editarTotalD").val(respuesta["costoD"]);
        $("#obser").val(respuesta["observacion"]);
        $(".observ").val(respuesta["observacion"]);
        $("#idCat").val(respuesta["idCate"]);
        $("#idPyct").val(respuesta["idP"])
        $("#idCatego").val(respuesta["idCate"]);
        $("#idPyc").val(respuesta["idP"]);
	  }

  	})

})

/*=============================================
ELIMINAR PROYECTO
=============================================*/
$(".tablas").on("click", ".btnEliminarPYC", function(){

	var idPyc = $(this).attr("idPyc");
	
	swal({
        title: '¿Está seguro de borrar el proyecto?',
        text: "¡Si no lo está puede cancelar la acción!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Si, borrar proyecto!'
      }).then(function(result){
        if (result.value) {
          
            window.location = "index.php?ruta=proyectos&idPyc="+idPyc;
        }

  })

})