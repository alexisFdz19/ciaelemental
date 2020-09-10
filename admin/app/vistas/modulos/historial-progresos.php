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

          <button class="btn btn-primary">
            
            Agregar progreso

          </button>

        </a>

         <!--<button type="button" class="btn btn-default pull-right" id="daterange-btn">
           
            <span>
              <i class="fa fa-calendar"></i> Rango de fecha
            </span>

            <i class="fa fa-caret-down"></i>

         </button>-->

      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Proyecto</th>
           <th>Cliente</th>
           <th>Usuario</th>
           <!--<th>Descripción del material</th>-->
           <!--<th>Cantidad de material agregado</th>-->
           <!--<th>Total</th>
           <th>Fecha</th>-->
           <th>Acciones</th>

         </tr> 

        </thead>

        <tbody>

        <?php

          /*if(isset($_GET["fechaInicial"])){

            $fechaInicial = $_GET["fechaInicial"];
            $fechaFinal = $_GET["fechaFinal"];

          }else{

            $fechaInicial = null;
            $fechaFinal = null;

          }

          $respuesta = ControladorVentas::ctrRangoFechasVentas($fechaInicial, $fechaFinal);

          foreach ($respuesta as $key => $value) {
           
           echo '<tr>

                  <td>'.($key+1).'</td>

                  <td>'.$value["codigo"].'</td>';

                  $itemCliente = "id";
                  $valorCliente = $value["id_cliente"];

                  $respuestaCliente = ControladorClientes::ctrMostrarClientes($itemCliente, $valorCliente);

                  echo '<td>'.$respuestaCliente["nombre"].'</td>';

                  $itemUsuario = "id";
                  $valorUsuario = $value["id_vendedor"];

                  $respuestaUsuario = ControladorUsuarios::ctrMostrarUsuarios($itemUsuario, $valorUsuario);

                  echo '<td>'.$respuestaUsuario["nombre"].'</td>

                  <td>'.$value["metodo_pago"].'</td>

                  <td>$ '.number_format($value["neto"],2).'</td>

                  <!--<td>$ '.number_format($value["total"],2).'</td>-->

                  <td>'.$value["fecha"].'</td>

                  <td>

                    <div class="btn-group">
                        
                      <!--<button class="btn btn-info btnImprimirFactura" codigoVenta="'.$value["codigo"].'">

                        <i class="fa fa-print"></i>-->

                      </button>';

                      if($_SESSION["perfil"] == "Administrador"){

                      echo '<button class="btn btn-warning btnEditarVenta" idVenta="'.$value["id"].'"><i class="fa fa-pencil"></i></button>

                      <button class="btn btn-danger btnEliminarVenta" idVenta="'.$value["id"].'"><i class="fa fa-times"></i></button>';

                    }

                    echo '</div>  

                  </td>

                </tr>';
            }*/

        ?>

        <?php

            $item = null;
            $valor = null;

            $progreso = ControladorProgreso::ctrMostrarProgresos($item, $valor);

            foreach ($progreso as $key => $value) {

              echo ' <tr>

                      <td>'.($key+1).'</td>
                      <td class="text-uppercase">'.$value["nomPro"].'</td>
                      <td class="text-uppercase">'.$value["cliente"].'</td>
                      <td class="text-uppercase">'.$value["user"].'</td>
                      <!--<td class="text-uppercase"></td>-->
                      <!--<td class="text-uppercase">'.$value["cantidadMP"].'</td>-->
                      <!--<td class="text-uppercase"></td>-->

                      <td>

                        <div class="btn-group">
                            
                        <button class="btn btn-warning btnEditarProgreso" idProgreso="'.$value["idPro"].'"><i class="fa fa-pencil"></i></button>

                        <button class="btn btn-success btnVerProgreso" idProgreso="'.$value["idPro"].'"><i class="fa fa-eye"></i></button>';

                          if($_SESSION["perfil"] == "Administrador"){

                            echo '<button class="btn btn-danger btnEliminarProgreso" idProgreso="'.$value["idPro"].'"><i class="fa fa-times"></i></button>';

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




