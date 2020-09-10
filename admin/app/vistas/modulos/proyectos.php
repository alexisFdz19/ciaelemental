<?php

if($_SESSION["rol"] == "Vendedor"){

  echo '<script>

    window.location = "inicio";

  </script>';

  return;

}

?>

<script src="/vistas/js/proyectos_registros.js"></script>

<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
    Administrador de ligas de interés
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Tabla ligas de interés</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
  
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCategoria">
          
          Agregar Liga

        </button>

      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>T&iacutetulo</th>
           <th>Descrici&oacuten</th>
           <th>Fecha</th>
           <th>Link</th>
           <th>Categoria</th>
           <!--<th>Trabajos a Realizar</th>
           <th>Luminarias</th>
           <th>Material</th>
           <th>N° Luminarias</th>
           <th>Tipo Vialidad</th>
           <th>Consideraciones</th>
           <th>Observaciones</th>-->
           <th>Acciones</th>

         </tr> 

        </thead>

        <tbody>

        <?php

          $item = null;
          $valor = null;

          $proyectos = ControladorCategorias::ctrMostrarCategorias($item, $valor);
          $respuesta = ControladorPYC::ctrMostrarPYC($item, $valor);
          //$fila= mysqli_fetch_array($respuesta);

          foreach ($proyectos as $key => $value) {
             $originalDateI = $value["fecha"];
             //$originalDateF = $value["fechaF"];  
             $newDateI = date("d/m/Y", strtotime($originalDateI));
             //$newDateF = date("d/m/Y", strtotime($originalDateF));

            echo '<tr>

                    <td>'.($key+1).'</td>

                    <td class="text-uppercase">'.$value["nombre"].'</td>
                    <td class="text-uppercase">'.$value["descripcion"].'</td>
                    <td class="text-uppercase">'.$newDateI.'</td>
                    <td class="text-uppercase">'.$value["link"].'</td>';

                    foreach($respuesta as $key => $value1){
                      if($value1["id"] == $value["categoria_id"]){
                        echo '<td class="text-uppercase">'.$value1["nombre"].'</td>';
                      } else{
                        //echo '<td class="text-uppercase">'.$value["categoria_id"].'</td>';
                      }
                    }                    

                    echo '<td>

                      <div class="btn-group">
                          
                        <button class="btn btn-warning btnEditarCategoria" data-toggle="modal" data-target="#modalEditarCategoria" idCategoria="'.$value["id"].'"><i class="fa fa-pencil"></i></button>';

                      if($_SESSION["rol"] == "Administrador"){

                          echo '<button class="btn btn-danger btnEliminarCategoria" idCategoria="'.$value["id"].'"><i class="fa fa-times"></i></button>';

                      }

                      echo '</div>  

                    </td>

                  </tr>';
            }

        ?>
   
        </tbody>

       </table>

      </div>

    </div>

  </section>

</div>

<!--=====================================
MODAL AGREGAR CLIENTE
======================================-->

<div id="modalAgregarCategoria" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

    <form role="form" method="post">

    <!--=====================================
    CABEZA DEL MODAL
    ======================================-->

    <div class="modal-header" style="background:#3c8dbc; color:white">

    <button type="button" class="close" data-dismiss="modal">&times;</button>

    <h4 class="modal-title">Agregar liga</h4>

    </div>

    <!--=====================================
    CUERPO DEL MODAL
    ======================================-->

    <div class="modal-body">

    <div class="box-body">

        <!-- ENTRADA PARA EL NOMBRE -->
        
        <div class="form-group">
        
        <div class="input-group">
        
            <span class="input-group-addon"><i class="fa fa-th"></i></span> 

            <input type="text" class="form-control input-lg" name="nuevaCategoria" placeholder="Ingresar título" required>

        </div>

        </div>

        <!-- ENTRADA PARA SELECCIONAR CLIENTE 

        <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <select class="form-control input-lg" id="nuevoUsuario" name="nuevoUsuario" required>
                  
                  <option value="">Selecionar Cliente</option>

                  <?php

                  $item = null;
                  $valor = null;

                  $clientes = ControladorClientes::ctrMostrarClientes($item, $valor);

                  foreach ($clientes as $key => $value) {
                    
                    echo '<option value="'.$value["nombre"].'">'.$value["nombre"].'</option>';
                  }

                  ?>
  
                </select>

              </div>

            </div>-->

        <!-- CLIENTE -->

        <!--<div class="form-group">
    
        <div class="input-group">
        
            <span class="input-group-addon"><i class="fa fa-user"></i></span> 

            <input type="text" class="form-control input-lg" name="nuevoUsuario" placeholder="Cliente" required>

        </div>
        </div>-->

        <!-- LUGAR DE EJECUCIÓN -->

        <div class="form-group">
        
        <div class="input-group">
        
            <span class="input-group-addon"><i class="fas fa-boxes"></i></span> 

            <!--<input type="text" class="form-control input-lg" name="nuevoLugar" placeholder="Descripción" required>-->
            <textarea rows="4" class="form-control input-lg" cols="50" name="nuevoLugar" placeholder="Descipción" required></textarea>

        </div>

        </div>

        <!-- SELECCIONAR CLIENTE 

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

        </div>-->

        <!-- FECHA ESTIMADA DE INICIO -->

        <div class="form-group">
        
        <div class="input-group">
        
            <span class="input-group-addon"><i class="fas fa-calendar-day"></i></span> 

            <input type="date" id="reservation" class="form-control input-lg" name="nuevoFI" placeholder="Fecha estimada de inicio" required>

        </div>

        </div>

        <!-- FECHA ESTIMADA DE TERMINO 

        <div class="form-group">
        
        <div class="input-group">
        
            <span class="input-group-addon"><i class="fas fa-calendar-check"></i></span> 

            <input type="date" class="form-control input-lg" name="nuevoFF" placeholder="Fecha estimada de termino" required>

        </div>

        </div>-->

        <!-- TRABAJOS A REALIZAR 

        <div class="form-group">
        
        <div class="input-group">
        
            <span class="input-group-addon"><i class="fas fa-hammer"></i></span> 

            <textarea rows="4" class="form-control input-lg" cols="50" name="TrabajosaRealizar" placeholder="Trabajos a realizar" required></textarea>

            <input type="text" class="form-control input-lg" name="nuevoPassword" placeholder="Trabajos a realizar" required>

        </div>

        </div>-->

        <!-- MARCA DE LUMINARIAS 

        <div class="form-group">
        
        <div class="input-group">
        
            <span class="input-group-addon"><i class="fas fa-lightbulb"></i></span> 

            <input type="text" class="form-control input-lg" name="nuevaLuminaria" placeholder="Marca de luminarias" required>

        </div>

        </div>-->

        <!-- DESCRIPCIÓN DE MATERIAL -->

        <div class="form-group">
        
        <div class="input-group">
        
            <span class="input-group-addon"><i class="fas fa-lightbulb"></i></span> 

            <!--<input type="text" class="form-control input-lg" name="nuevoMaterial" placeholder="Link" required>-->
            <textarea rows="2" class="form-control input-lg" cols="50" name="nuevoMaterial" placeholder="Link" required></textarea>

        </div>

        </div>

        <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-bookmark-o"></i></span> 

                <select class="form-control input-lg" id="nuevoUsuario" name="nuevoUsuario" required>
                  
                  <option value="">Selecionar Categoría</option>

                  <?php

                  $item = null;
                  $valor = null;

                  $clientes = ControladorPYC::ctrMostrarPYC($item, $valor);

                  foreach ($clientes as $key => $value) {
                    
                    echo '<option value="'.$value["id"].'">'.$value["nombre"].'</option>';
                  }

                  ?>
  
                </select>

              </div>

            </div>

        <!-- CANTIDAD DE LUMINARIAS 

        <div class="form-group">
        
        <div class="input-group">
        
            <span class="input-group-addon"><i class="fas fa-list-ol"></i></span> 

            <input type="number" min="0" max="99999999" class="form-control input-lg" name="nuevaCantidad" placeholder="Cantidad de luminarias" required>

        </div>

        </div>-->

        <!-- TIPO DE VIALIDAD DONDE SE REALIZARÁN LOS TRABAJOS 

        <div class="form-group">
        
        <div class="input-group">
        
            <span class="input-group-addon"><i class="fas fa-road"></i></span> 

            <textarea rows="4" class="form-control input-lg" cols="50" name="TipoVialidad" placeholder="Tipo de vialidad donde se realizarán los trabajos" required></textarea>


            <input type="text" class="form-control input-lg" name="nuevoPassword" placeholder="Trabajos a realizar" required>

        </div>

        </div>-->

    <!-- CONSIDERACIONES / TRABAJOS ESPECIALES 

        <div class="form-group">
        
        <div class="input-group">
        
            <span class="input-group-addon"><i class="fas fa-star"></i></span> 

            <textarea rows="4" class="form-control input-lg" cols="50" name="Consideraciones" placeholder="Consideraciones / trabajos especiales" required></textarea>


            <input type="text" class="form-control input-lg" name="nuevoPassword" placeholder="Trabajos a realizar" required>

        </div>

        </div>-->

    <!-- OBSERVACIONES 

        <div class="form-group">
        
        <div class="input-group">
        
            <span class="input-group-addon"><i class="fas fa-sticky-note"></i></span> 

            <textarea rows="4" class="form-control input-lg" cols="50" name="Observaciones" placeholder="Observaciones" required></textarea>


            <input type="text" class="form-control input-lg" name="nuevoPassword" placeholder="Trabajos a realizar" required>

        </div>

        </div>-->

    </div>

    </div>

    <!--=====================================
    PIE DEL MODAL
    ======================================-->

    <div class="modal-footer">

    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

    <button type="submit" class="btn btn-primary">Guardar liga</button>

    </div>

    </form>

      <?php

        $crearProyecto = new ControladorCategorias();
        $crearProyecto -> ctrCrearCategoria();

      ?>

    </div>

  </div>

</div>

<!--=====================================
MODAL EDITAR CLIENTE
======================================-->

<div id="modalEditarCategoria" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

    <form role="form" method="post">

    <!--=====================================
    CABEZA DEL MODAL
    ======================================-->

    <div class="modal-header" style="background:#3c8dbc; color:white">

    <button type="button" class="close" data-dismiss="modal">&times;</button>

    <h4 class="modal-title">Editar liga</h4>

    </div>

    <!--=====================================
    CUERPO DEL MODAL
    ======================================-->

    <div class="modal-body">

    <div class="box-body">

        <!-- ENTRADA PARA EL NOMBRE -->
        
        <div class="form-group">
        
        <div class="input-group">
        
            <span class="input-group-addon"><i class="fa fa-th"></i></span> 

            <input type="text" class="form-control input-lg" name="editarCategoria" id="editarCategoria" required>

            <input type="hidden"  name="idCategoria" id="idCategoria" required>

        </div>

        </div>

        <!-- ENTRADA PARA EL CLIENTE     

        <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span>

                <select class="form-control input-lg" name="editarCliente" id="editarCliente" required>

                  <?php

                  $item = null;
                  $valor = null;

                  $clientes = ControladorClientes::ctrMostrarClientes($item, $valor);

                  foreach ($clientes as $key => $value) {
                    
                    echo '<option value="'.$value["nombre"].'">'.$value["nombre"].'</option>';
                  }

                  ?>
  
                </select>

              </div>

            </div>-->
        
        <!--<div class="form-group">
          <div class="input-group">
          
              <span class="input-group-addon"><i class="fa fa-user"></i></span> 

              <input type="text" class="form-control input-lg" name="editarCliente" id="editarCliente" required>
          </div>

        </div>-->

        <!-- ENTRADA PARA EL LUGAR     -->
        
        <div class="form-group">
        
        <div class="input-group">
        
            <span class="input-group-addon"><i class="fas fa-boxes"></i></span> 

            <!--<input type="text" class="form-control input-lg" name="editarLugar" id="editarLugar" required>-->
            <textarea rows="4" class="form-control input-lg" cols="50" placeholder="Descripcion" name="editarLugar" id="editarLugar" required></textarea>
        </div>

        </div>

        <!-- ENTRADA PARA EL ClienteR    
        
        <div class="form-group">
        
        <div class="input-group">
        
            <span class="input-group-addon"><i class="fa fa-user"></i></span> 

            <input type="text" class="form-control input-lg" name="editarCli" id="editarCli" required>
        </div>

        </div> -->

        <!-- ENTRADA PARA EL FI     -->
        
        <div class="form-group">
        
        <div class="input-group">
        
            <span class="input-group-addon"><i class="fas fa-calendar-day"></i></span> 

            <input type="date" class="form-control input-lg" name="editarFI" id="editarFI" required>
        </div>

        </div>

        <!-- ENTRADA PARA EL FF     -
        
        <div class="form-group">
        
        <div class="input-group">
        
            <span class="input-group-addon"><i class="fas fa-calendar-check"></i></span> 

            <input type="date" class="form-control input-lg" name="editarFF" id="editarFF" required>
        </div>

        </div>-->

        <!-- ENTRADA PARA EL TR     
        
        <div class="form-group">
        
        <div class="input-group">
        
            <span class="input-group-addon"><i class="fas fa-hammer"></i></span>  

            <textarea rows="4" class="form-control input-lg" cols="50" placeholder="Trabajos a realizar" name="editarTR" id="editarTR" required></textarea>
        </div>

        </div>-->

        <!-- ENTRADA PARA EL ML     -->
        
        <div class="form-group">
        
        <div class="input-group">
        
            <span class="input-group-addon"><i class="fas fa-lightbulb"></i></span>  

            <!--<input type="text" class="form-control input-lg" name="editarLumi" id="editarLumi" required>-->
            <textarea rows="2" class="form-control input-lg" cols="50" placeholder="Pegar Link" name="editarLumi" id="editarLumi" required></textarea>
        </div>

        </div>

        <!-- ENTRADA PARA EL M     -->
        
        <div class="form-group">
        
        <div class="input-group">
        
            <span class="input-group-addon"><i class="fa fa-bookmark-o"></i></span> 

            <select class="form-control input-lg" name="editarCliente" id="editarCliente" required>

            <?php

              $item = null;
              $valor = null;

              $clientes = ControladorPYC::ctrMostrarPYC($item, $valor);

              foreach ($clientes as $key => $value) {
                    
                echo '<option value="'.$value["id"].'">'.$value["nombre"].'</option>';
              }

            ?>
          </select>
        </div>

        </div>

        <!-- ENTRADA PARA EL LumiC     
        
        <div class="form-group">
        
        <div class="input-group">
        
            <span class="input-group-addon"><i class="fas fa-list-ol"></i></span> 

            <input type="number" class="form-control input-lg" name="editarCL" id="editarCL" required>
        </div>

        </div>-->

        <!-- ENTRADA PARA EL TV      
        
        <div class="form-group">
        
        <div class="input-group">
        
            <span class="input-group-addon"><i class="fas fa-road"></i></span> 

            <textarea rows="4" class="form-control input-lg" cols="50" name="editarTV" id="editarTV" placeholder="Tipo de vialidad donde se realizarán los trabajos" required></textarea>
        </div>

        </div>-->

        <!-- ENTRADA PARA EL Con     
        
        <div class="form-group">
        
        <div class="input-group">
        
            <span class="input-group-addon"><i class="fas fa-star"></i></span> 

            <textarea rows="4" class="form-control input-lg" cols="50" name="editarCon" id="editarCon" placeholder="Consideraciones / trabajos especiales" required></textarea>
        </div>

        </div>-->

        <!-- ENTRADA PARA EL OB     
        
        <div class="form-group">
        
        <div class="input-group">
        
            <span class="input-group-addon"><i class="fas fa-sticky-note"></i></span> 

            <textarea rows="4" class="form-control input-lg" cols="50" name="editarOB" id="editarOB" placeholder="Observaciones" required></textarea>
        </div>

        </div>-->

    </div>

    </div>

    <!--=====================================
    PIE DEL MODAL
    ======================================-->

    <div class="modal-footer">

    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

    <button type="submit" class="btn btn-primary">Guardar cambios</button>

    </div>

    </form>

    <?php

    $editarProyecto = new ControladorCategorias();
    $editarProyecto -> ctrEditarCategoria();

    ?> 

    </div>

  </div>

</div>

<!--=====================================
  MODAL AGREGAR REGISTRO
  ======================================-->

  <div id="modalAgregarRegistro" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
          <form role="form" method="post" enctype="multipart/form-data" id="formulario-registro">

          <!--=====================================
          CABEZA DEL MODAL
          ======================================-->

          <div class="modal-header" style="background:#3c8dbc; color:white">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Agregar Registro</h4>
          </div>

          <!--=====================================
          CUERPO DEL MODAL
          ======================================-->

          <div class="modal-body">
            <div class="box-body">

              <div class="row">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label>Luminarias por poste</label>
                      <select class="form-control" name="lumina" id="lumina">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                      </select>
                    </div>
                </div>

                  <div class="col-lg-4">
                      <div class="form-group">
                          <label>Identificador de luminaria</label>
                          <input class="form-control" type="text" id="luminaID" name="luminaID" required>
                          <input  type="hidden" name="idProyecto" id="idProyecto" required>
                          <input  type="hidden" name="nomPro" id="nomPro" required>
                          <div id="result-username" align="center"></div>
                      </div>
                  </div>

                  <div class="col-lg-4">
                      <div class="form-group">
                          <label>RPU</label>
                          <input class="form-control" type="text" id="rpus" name="rpus">
                      </div>
                  </div>
                </div>

              <br>
              <hr>
              <br>

              <div class="row">
                  <div class="col-lg-4">
                      <div class="form-group">
                          <label>Colonia</label>
                          <input class="form-control" type="text" id="colonia" name="colonia">
                      </div>
                  </div>

                  <div class="col-lg-4">
                      <div class="form-group">
                          <label>Calle</label>
                          <input class="form-control" type="text" placeholder="Calle" id="calles" name="calles">
                      </div>
                  </div>

                  <div class="col-lg-4">
                      <div class="form-group">
                          <label>Altura de poste (m)</label>
                          <input class="form-control" type="text" id="alturaP" name="alturaP">
                      </div>
                  </div>
              </div> 

              <br>
              <hr>
              <br>

              <div class="row">

                  <div class="col-lg-4">
                  
                  <div class="form-group">
                    <label>Tipo de Vialidad</label>
                    <select class="form-control" name="vialidad" id="vialidad">
                      <option value="Primaria">Primaria</option>
                      <option value="Secundaria">Secundaria</option>
                    </select>
                  </div>

                  <!--<h4>Tipo de vialidad</h4>

                      <div class="form-group">

                          <div class="radio">
                              <label>
                              <input type="radio" name="vialidad" id="optionsRadios12" value="Primaria" checked="">
                              Primaria
                              </label>
                          </div>
                      <div class="radio">
                              <label>
                              <input type="radio" name="vialidad" id="optionsRadios2" value="Secundaria">
                              Secundaria
                              </label>
                      </div>

                  </div>-->

                </div>

                <div class="col-lg-4">

                  <div class="form-group">
                    <label>Ubicación de Poste</label>
                    <select class="form-control" name="ubicacionP" id="ubicacionP">
                      <option value="Camellon">Camellon</option>
                      <option value="Andador">Andador</option>
                      <option value="Lateral">Lateral</option>
                    </select>
                  </div>

                  </div>

                  <div class="col-lg-4">
                    <div class="form-group">
                      <label>Distancia interpostal (m)</label>
                      <input class="form-control" type="text" id="distanciaI" name="distanciaI">
                    </div>
                  </div>
              </div>

              <br>
              <hr>
              <br>

              <div class="row">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label>Carriles</label>
                    <select class="form-control" id="ccarriles" name="ccarriles">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                    </select>
                    </div>
                  </div>

                  <div class="col-lg-4">
                      <div class="form-group">
                          <label>C 0</label>
                          <input class="form-control" type="text" id="cos" name="cos">
                      </div>
                </div>
              </div>

              <br>
              <hr>
              <br>

              <div class="row">
                <div class="col-lg-4">
                    <div class="form-group">
                    <label>Estado del Circuito</label>
                    <select class="form-control" id="estadoC" name="estadoC">
                      <option value="ON">ON</option>
                      <option value="OFF">OFF</option>
                    </select>
                  </div>
                 </div>

                 <div class="col-lg-4">
                  <div class="form-group">
                    <label>Alimentación</label>
                    <select class="form-control" id="alimentacion" name="alimentacion">
                      <option value="Subterránea">Subterránea</option>
                      <option value="Área">Área</option>
                    </select>
                  </div>
                          </div>

                          <div class="col-lg-4">

                            <div class="form-group">
                              <label>Luminaria de Alto Riesgo</label>
                              <select class="form-control" id="luminaAlR" name="luminaAlR">
                                <option value="Cerca de transformador">Cerca de transformador</option>
                                <option value="Cable de media tensión">Cable de media tensión</option>
                                <option value="Ninguno">Ninguno</option>
                              </select>
                  </div>
                </div>
              </div>

              <br>
              <hr>
              <br>

              <div class="row">
                  <div class="col-lg-4">
                      <div class="form-group">
                          <label>Latitud</label>
                          <input class="form-control" type="text" id="latitud" name="latitud">
                      </div>
                  </div>

                  <div class="col-lg-4">
                      <div class="form-group">
                          <label>Longitud</label>
                          <input class="form-control" type="text"  id="longitud" name="longitud">
                      </div>
                  </div>

                  <div class="col-lg-4">
                      <div class="form-group">
                          <label>Instalador</label>
                          <input class="form-control" type="text" id="instalador" name="instalador">
                  </div>
                </div>

              </div>

              <br>
              <hr>
              <br>

              <div class="row">
                  <div class="col-lg-4">
                      <div class="form-group">
                      <div class="form-group">
                        <label>Tipo de Poste</label>
                        <select class="form-control" id="tipodeposte" name="tipodeposte">
                          <option value="Metal">Metal</option>
                          <option value="Concreto">Concreto</option>
                          <option value="Madera">Madera</option>
                          <option value="Otro">Otro</option>
                         </select>
                      </div>
                      </div>
                  </div>

                  <div class="col-lg-4">
                      <div class="form-group">
                          <label>Modelo de luminaria existente</label>
                          <input class="form-control" type="text" id="luminariaexistente" name="luminariaexistente">
                      </div>
                  </div>

                  <div class="col-lg-4">
                      <div class="form-group">
                          <label>Potencia de luminaria existente (W)</label>
                          <input class="form-control" type="text" placeholder="Potencia de luminaria existente" id="potencialuminaria" name="potencialuminaria">
                      </div>
                  </div>
                </div>

              <br>
              <hr>
              <br>

                <div class="row">
                  <div class="col-lg-4">
                      <div class="form-group">
                          <label>Luminaria Nueva</label>
                          <input class="form-control" type="text" id="luminarianueva" name="luminarianueva">
                      </div>
                  </div>

                  <div class="col-lg-4">
                      <div class="form-group">
                          <label>Potencia de Luminaria Nueva (W)</label>
                          <input class="form-control" type="text" id="potencianueva" name="potencianueva">
                      </div>
                  </div>
        
                    <div class="input-group">
                        <textarea rows="4" class="form-control input-lg" cols="50" name="Observ" placeholder="Observaciones"></textarea>
                    </div>

                </div>

                <div class="row">
                  <div class="form-group">
                    <div class="panel" id="contenedor-imagenes">SUBIR FOTO <button type="button" class="btn btn-primary" id="btn-add-input-imagen">+</button></div>
                    <input type="file" class="nuevaFotoLumi" name="nuevaFotoLumi[]">
                    <p class="help-block">Peso máximo de la foto 2MB</p>
                  </div>
                </div>

            </div>
          </div>

          <!--=====================================
          PIE DEL MODAL
          ======================================-->

          <div class="modal-footer">

            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

            <button type="submit" class="btn btn-primary" id="btn-send-registro">Guardar Registro</button>

          </div>

          <?php

            //$nuevoRegistro = new ControladorRegistro();
            //$nuevoRegistro->ctrCrearRegistro();

          ?>

          </form>
        </div>
    </div>
  </div>

<?php

  $eliminarProyecto = new ControladorCategorias();
  $eliminarProyecto -> ctrBorrarCategoria();

?>




