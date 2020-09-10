<?php

if($_SESSION["perfil"] == "Especial"){

  echo '<script>

    window.location = "inicio";

  </script>';

  return;

}

?>

<div class="content-wrapper">


<section class="content-header">

    <h1>
   Administrar proyectos

    </h1>

    <ol class="breadcrumb">
  
  <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
  
  <li class="active">Administrar proyectos</li>

</ol>

</section>

<!--MAIN content-->

<section class="container">


<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin-top:10%;">
    <div class="box box-solid">
        <div class="box-body">
            <a href="proyectos">

                <center>

                <h4>Ver proyectos existentes</h4>
                <i class="fas fa-eye opciondual" style="font-size: 100px;padding: 10px;"></i>

            </center>
            
            </a>
        </div>
    </div>
</div>

<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin-top:10%;">
    <div class="box box-solid">
        <div class="box-body">
            <a href="" data-toggle="modal" data-target="#modalAgregarProyecto">

                <center>

                <h4>Crear nuevo proyecto</h4>
                <i class="fas fa-folder-plus opciondual" style="font-size: 100px;padding: 10px;"></i>

            </center>
            
            </a>
        </div>
    </div>
</div>


<!--<button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarMaterial">
      
      Agregar material

    </button>-->


    <!--=====================================
MODAL AGREGAR PROYECTO
======================================-->

<div id="modalAgregarProyecto" class="modal fade" role="dialog">

<div class="modal-dialog">

<div class="modal-content">

  <form role="form" method="post">

    <!--=====================================
    CABEZA DEL MODAL
    ======================================-->

    <div class="modal-header" style="background:#3c8dbc; color:white">

      <button type="button" class="close" data-dismiss="modal">&times;</button>

      <h4 class="modal-title">Agregar proyecto</h4>

    </div>

    <!--=====================================
    CUERPO DEL MODAL
    ======================================-->

    <div class="modal-body">

      <div class="box-body">

        <!-- NOMBRE DEL PROYECTO -->
        
        <div class="form-group">
          
          <div class="input-group">
          
            <span class="input-group-addon"><i class="fas fa-file-signature"></i></span> 

            <input type="text" class="form-control input-lg" name="nuevoNombre" placeholder="Nombre del proyecto" required>

          </div>

        </div>

        <!-- CLIENTE -->

         <div class="form-group">
          
          <div class="input-group">
          
            <span class="input-group-addon"><i class="fa fa-user"></i></span> 

            <input type="text" class="form-control input-lg" name="nuevoUsuario" placeholder="Cliente" required>

          </div>

        </div>

        <!-- LUGAR DE EJECUCIÓN -->

         <div class="form-group">
          
          <div class="input-group">
          
            <span class="input-group-addon"><i class="fas fa-map-marker-alt"></i></span> 

            <input type="text" class="form-control input-lg" name="nuevoLugar" placeholder="Lugar de ejecución" required>

          </div>

        </div>

        <!-- SELECCIONAR CLIENTE -->

        <div class="form-group">
          
          <div class="input-group">
          
            <span class="input-group-addon"><i class="fa fa-users"></i></span> 

            <select class="form-control input-lg" name="nuevoPerfil">
              
              <option value="">Selecionar cliente</option>

              <option value="Administrador">Administrador</option>

              <option value="Especial">Especial</option>

              <option value="Vendedor">Vendedor</option>

            </select>

          </div>

        </div>

         <!-- FECHA ESTIMADA DE INICIO -->

         <div class="form-group">
          
          <div class="input-group">
          
            <span class="input-group-addon"><i class="fas fa-calendar-day"></i></span> 

            <input type="date" id="reservation" class="form-control input-lg" name="nuevoFI" placeholder="Fecha estimada de inicio" required>

          </div>

        </div>

        <!-- FECHA ESTIMADA DE TERMINO -->

        <div class="form-group">
          
          <div class="input-group">
          
            <span class="input-group-addon"><i class="fas fa-calendar-check"></i></span> 

            <input type="date" class="form-control input-lg" name="nuevoFF" placeholder="Fecha estimada de termino" required>

          </div>

        </div>

        <!-- TIEMPO DE EJECUCIÓN AUTOMÁTICO 

        <div class="form-group">
          
          <div class="input-group">
          
            <span class="input-group-addon"><i class="fas fa-hourglass-half"></i></span> 

            <input type="text" class="form-control input-lg" name="nuevoTiempo" placeholder="Tiempo de ejecución automático" required>

          </div>

        </div> -->

        <!-- TRABAJOS A REALIZAR -->

        <div class="form-group">
          
          <div class="input-group">
          
            <span class="input-group-addon"><i class="fas fa-hammer"></i></span> 

            <textarea rows="4" class="form-control input-lg" cols="50" name="TrabajosaRealizar" placeholder="Trabajos a realizar" required></textarea>

            <!--<input type="text" class="form-control input-lg" name="nuevoPassword" placeholder="Trabajos a realizar" required>-->

          </div>

        </div>

        <!-- MARCA DE LUMINARIAS -->

        <div class="form-group">
          
          <div class="input-group">
          
            <span class="input-group-addon"><i class="fas fa-lightbulb"></i></span> 

            <input type="text" class="form-control input-lg" name="nuevaLuminaria" placeholder="Marca de luminarias" required>

          </div>

        </div>

        <!-- DESCRIPCIÓN DE MATERIAL -->

        <div class="form-group">
          
          <div class="input-group">
          
            <span class="input-group-addon"><i class="fas fa-boxes"></i></span> 

            <input type="text" class="form-control input-lg" name="nuevoMaterial" placeholder="Descripción de material" required>

          </div>

        </div>

        <!-- CANTIDAD DE LUMINARIAS -->

        <div class="form-group">
          
          <div class="input-group">
          
            <span class="input-group-addon"><i class="fas fa-list-ol"></i></span> 

            <input type="number" min="0" max="99999999" class="form-control input-lg" name="nuevaCantidad" placeholder="Cantidad de luminarias" required>

          </div>

        </div>

         <!-- TIPO DE VIALIDAD DONDE SE REALIZARÁN LOS TRABAJOS -->

         <div class="form-group">
          
          <div class="input-group">
          
            <span class="input-group-addon"><i class="fas fa-road"></i></span> 

            <textarea rows="4" class="form-control input-lg" cols="50" name="TipoVialidad" placeholder="Tipo de vialidad donde se realizarán los trabajos" required></textarea>


            <!--<input type="text" class="form-control input-lg" name="nuevoPassword" placeholder="Trabajos a realizar" required>-->

          </div>

        </div>

        <!-- CONSIDERACIONES / TRABAJOS ESPECIALES -->

        <div class="form-group">
          
          <div class="input-group">
          
            <span class="input-group-addon"><i class="fas fa-star"></i></span> 

            <textarea rows="4" class="form-control input-lg" cols="50" name="Consideraciones" placeholder="Consideraciones / trabajos especiales" required></textarea>


            <!--<input type="text" class="form-control input-lg" name="nuevoPassword" placeholder="Trabajos a realizar" required>-->

          </div>

        </div>

        <!-- OBSERVACIONES -->

        <div class="form-group">
          
          <div class="input-group">
          
            <span class="input-group-addon"><i class="fas fa-sticky-note"></i></span> 

            <textarea rows="4" class="form-control input-lg" cols="50" name="Observaciones" placeholder="Observaciones" required></textarea>


            <!--<input type="text" class="form-control input-lg" name="nuevoPassword" placeholder="Trabajos a realizar" required>-->

          </div>

        </div>

        


      </div>

    </div>

    <!--=====================================
    PIE DEL MODAL
    ======================================-->

    <div class="modal-footer">

      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

      <button type="submit" class="btn btn-primary">Guardar información</button>

    </div>

    <?php

      $crearProyecto = new ControladorCategorias();
      $crearProyecto -> ctrCrearCategoria();

    ?>

  </form>

</div>

</div>

</div>




</section>
<!--content-->

</div>

<!--content wrapper-->