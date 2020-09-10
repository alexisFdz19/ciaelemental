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
   Estudio de factibilidad

    </h1>

    <ol class="breadcrumb">
  
  <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
  
  <li class="active">Estudio de factibilidad</li>

</ol>

</section>

<!--MAIN content-->

<section class="container">


<form method="post">

  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:10%;">
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Datos de IP</h3>
        </div>
            <div class="box-body">

            <?php

            $item = null;
            $valor = null;

            $categorias = ControladorCategorias::ctrMostrarUltimaCategoria($item, $valor);

            foreach ($categorias as $key => $value){
              echo '
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fas fa-file-signature"></i></span>
                      <input type="text" class="form-control" placeholder="nombre de proyecto" value="'.$value["categoria"].'" readonly>
                    </div>
            <br>
              ';
            }

            ?>

            <!--<div class="input-group">
                <span class="input-group-addon"><i class="fas fa-file-signature"></i></span>
                <input type="email" class="form-control" placeholder="nombre de proyecto">
            </div>
            <br>-->

            <!-- AQUI VA LA TABLA DE PRUEBA-->



            <div class="box">
        <div class="box-header">
          <h3 class="box-title">Striped Full Width Table</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
          <table class="table table-striped">
            <tbody><tr>
              <th style="width: 10px">#</th>
              <th>Task</th>
              <th></th>
            </tr>
            <tr>
              <td>1.</td>
              <td>¿El proyecto cuenta con los recursos financieros necesarios para su ejecución?</td>
              <td>
                <div>
                <center><input type="checkbox" class="big-checkbox" required=""></center>
                </div>
              </td>
            </tr>
            <tr>
              <td>2.</td>
              <td>¿Se cuenta con los recursos humanos necesarios para la ejecución del proyecto?</td>
              <td>
                <div>
                  <center><input type="checkbox" class="big-checkbox" required=""></center>
                </div>
              </td>
            </tr>
            <tr>
              <td>3.</td>
              <td>¿Se cuenta con los recursos técnicos necesarios para la ejecucución del proyecto?</td>
              <td>
                <div>
                <center><input type="checkbox" class="big-checkbox" required=""></center>
                </div>
              </td>
            </tr>
            <tr>
              <td>4.</td>
              <td>¿Hay existencia de material necesario para la ejecución del proyecto?</td>
              <td>
                <div>
                <center><input type="checkbox" class="big-checkbox" required=""></center>
                </div>
              </td>
            </tr>

            <tr>
              <td>5.</td>
              <td>¿Hay vehículos disponibles para la ejecución del proyecto?</td>
              <td>
                <div>
                <center><input type="checkbox" class="big-checkbox" required=""></center>
                </div>
              </td>
            </tr>

            <tr>
              <td>6.</td>
              <td>El proyecto es factible</td>
              <td>
                <div>
                <center><input type="checkbox" class="big-checkbox" required=""></center>
                </div>
              </td>
            </tr>
   
          </tbody></table>
        </div>
        <!-- /.box-body -->
      </div>
              <br>

            <div class="col-lg-12">
              <div class="form-group">
                <label>Observaciones</label>
                <textarea class="form-control" rows="3" id="obs" name="obs"></textarea>
              </div>
            </div>  
            
            <div class="modal-footer">

              <button type="submit" class="btn btn-primary">Siguiente</button>

            </div>

            <?php

          $nuevoCom = new ControladorOBPYC();
          $nuevoCom -> ctrCrearOBPYC();

        ?> 

    </div>
</form>
    
</div>






</div>
</section>
</div>



<!--content wrapper-->