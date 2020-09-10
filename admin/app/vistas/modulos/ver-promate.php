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
      
      Historial de materiales utilizados
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Historial progresos</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
  
        <a href="agregar-progreso">

          <!--<button class="btn btn-primary">
            
            Agregar progreso

          </button>-->

        </a>

      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Material</th>
           <th>Tipo de Medida</th>
           <th>Proyecto</th>
           <th>Material Disponible</th>
           <th>Agregado</th>
           <!--<th>Total</th>
           <th>Fecha</th>
           <th></th>-->

         </tr> 

        </thead>

        <tbody>

        <?php

            $item = "id_categoria";
            $valor = $_GET["idPromate"];
            //$orden = "id";

            $productos = ControladorProductos::ctrMostrarPromate($item, $valor);
            $listaproductos = array($productos);

            foreach ($listaproductos as $key => $value) {

              echo ' <tr>

                      <td>'.($key+1).'</td>
                      <td class="text-uppercase">'.$value["descripcion"].'</td>
                      <td class="text-uppercase">'.$value["tipoM"].'</td>
                      <td class="text-uppercase">'.$value["nomProyecto"].'</td>
                      <td class="text-uppercase">'.$value["stock"].'</td>
                      <td class="text-uppercase">'.$value["fecha"].'</td>
                      <!--<td class="text-uppercase"></td>

                      <td>-->

                        <div class="btn-group">
                            
                        <!--<button class="btn btn-warning btnEditarProgreso" idProgreso=""><i class="fa fa-pencil"></i></button>

                        <button class="btn btn-success btnVerProgreso" idProgreso=""><i class="fa fa-eye"></i></button>-->';

                          if($_SESSION["perfil"] == "Administrador"){

                            echo '<!--<button class="btn btn-danger btnEliminarProgreso" idProgreso=""><i class="fa fa-times"></i></button>-->';

                          }

                        echo '</div>  

                      </td>

                    </tr>';

            }

        ?>
               
        </tbody>

       </table>

       <?php

      $eliminarProgreso = new ControladorProgreso();
      $eliminarProgreso -> ctrEliminarProgreso();

      ?>
       

      </div>

    </div>

  </section>

</div>




