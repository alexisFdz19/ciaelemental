/*=============================================
EDITAR Proyecto
=============================================*/
$(".tablas").on("click", ".btnEditarCategoria", function(){

	var idCategoria = $(this).attr("idCategoria");

	var datos = new FormData();
    datos.append("idCategoria", idCategoria);

    $.ajax({

      url:"ajax/categorias.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success:function(respuesta){
      
        $("#editarCategoria").val(respuesta["nombre"]);
        $("#editarLugar").val(respuesta["descripcion"]);
        $("#editarFI").val(respuesta["fecha"]);
        $("#editarLumi").val(respuesta["link"]);
        $("#editarCliente").val(respuesta["categoria_id"]);
        $("#idCategoria").val(respuesta["id"]);
	  }

  	})

})

/*=============================================
EXTRAER PROYECTO ID & NOMBRE PROYECTO
=============================================*/
$(".tablas").on("click", ".btnAgregarRegistro", function(){

	var idProyecto = $(this).attr("idProyecto");

	var datos = new FormData();
    datos.append("idProyecto", idProyecto);

    $.ajax({

      url:"ajax/categorias.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success:function(respuesta){

        $("#idProyecto").val(respuesta["id"]);
        $("#nomPro").val(respuesta["categoria"]);
	  }

  	})

})

/*=============================================
BOTON VER PROMATE
=============================================*/
$(".tablas").on("click", ".btnVerMateriales", function(){
	var idPromate = $(this).attr("idPromate");
	window.location = "index.php?ruta=ver-promate&idPromate="+idPromate;

})

/*=============================================
BOTON VER PROGREMATE
=============================================*/
$(".tablas").on("click", ".btnVerProgresoMate", function(){
    var idProgremate = $(this).attr("idProgremate");
    window.location = "index.php?ruta=ver-progremate&idProgremate="+idProgremate;

})

/*=============================================
BOTON VERIFICAR ID LUMINARIA keyup blur
=============================================*/
$(document).ready(function() {	
  $('#luminaID').on('keyup', function() {
      $('#result-username').html('<img src="vistas/img/plantilla/tenor.gif" width="60" height="50" />').fadeOut(1000);

      var idLumi = $(this).val();		
      var dataString = 'luminaID='+idLumi;

      $.ajax({
          type: "POST",
          url: "ajax/check_id.php",
          data: dataString,
          success: function(data) {
              $('#result-username').fadeIn(1000).html(data);
          }
      });
  });              
});

/*=============================================
ELIMINAR PROYECTO
=============================================*/
$(".tablas").on("click", ".btnEliminarCategoria", function(){

	var idCategoria = $(this).attr("idCategoria");
	
	swal({
        title: '¿Está seguro de querer eliminar? Esta acción eliminara todo los datos y compononentes vinculados',
        text: "¡Si no lo está puede cancelar la acción!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Si, borrar liga!'
      }).then(function(result){
        if (result.value) {
          
            window.location = "index.php?ruta=proyectos&idCategoria="+idCategoria;
        }

  })

})