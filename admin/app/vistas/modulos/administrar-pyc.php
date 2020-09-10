<?php

if($_SESSION["rol"] == "Especial"){

  echo '<script>

    window.location = "inicio";

  </script>';

  return;

}

?>

<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Gestionar Categor&iacuteas
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Gestionar Categor&iacuteas</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
  
        <!--<button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCategoria">
          
          Agregar Proyecto

        </button>-->

      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Nombre</th>
           <!--<th>Ubicación</th>
           <th>Combustible para Viaje</th>
           <th>Combustible Operativo</th>
           <th>Combustible con OPS</th>
           <th>Sys Instaladores</th>
           <th>Sys Choferes</th>
           <th>Sys Sobreestantes</th>
           <th>Semanas</th>
           <th>Alimentos por Día</th>
           <th>Costo del Hospedaje</th>
           <th>Costo de Alimentos por Proyecto</th>
           <th>Caja Total</th>
           <th>En Efectivo</th>
           <th>Costo Total</th>
           <th>Costo Semanal</th>
           <th>Costo Diario</th>
           <th>Observaciones</th>-->
           <th>Acciones</th>

         </tr> 

        </thead>

        <tbody>

        <?php

          $item = null;
          $valor = null;

          $pyc = ControladorPYC::ctrMostrarPYC($item, $valor);

          foreach ($pyc as $key => $value) {

            echo '<tr>

                    <td>'.($key+1).'</td>

                    <td class="text-uppercase">'.$value["nombre"].'</td>

                    <td>

                      <div class="btn-group">
                          
                        <button class="btn btn-warning btnEditarPYC" data-toggle="modal" data-target="#modalEditarPYC" idPyc="'.$value["id"].'"><i class="fa fa-pencil"></i></button>';

                      //if($_SESSION["perfil"] == "Administrador"){

                          //echo '<button class="btn btn-danger btnEliminarCategoria" idCategoria="'.$value["idP"].'"><i class="fa fa-times"></i></button>';

                      //}

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
MODAL EDITAR CLIENTE
======================================-->

<div id="modalEditarPYC" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

    <form role="form" method="post">

    <!--=====================================
    CABEZA DEL MODAL
    ======================================-->

    <div class="modal-header" style="background:#3c8dbc; color:white">

    <button type="button" class="close" data-dismiss="modal">&times;</button>

    <h4 class="modal-title">Editar PYC</h4>

    </div>

    <!--=====================================
    CUERPO DEL MODAL
    ======================================-->

    <div class="modal-body">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:10%;">
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Datos del proyecto</h3>
          </div>
          <div class="box-body">

            <div class="input-group">
              <span class="input-group-addon"><i class="fas fa-file-signature"></i></span>
              <input type="text" class="form-control" placeholder="nombre de proyecto" readonly id="editarProyect" name="editarProyect">
              <input type="hidden" class="form-control" id="idPyct" name="idPyct">
              <input type="hidden" class="form-control" id="idCat" name="idCat">
            </div>
            <br>

            <div class="input-group">
              <span class="input-group-addon"><i class="fas fa-map-marker-alt"></i></span> 
              <input type="text" class="form-control" placeholder="Lugar de ejecución" readonly id="editarLug" name="editarLug">
            </div>
            <br>

            <!-- AQUI VA LA TABLA-->

            <div class="col-md-6">
              <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Conceptos</h3>
                </div>

                <form role="form">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Distancia aproximada desde origen (KM)</label>
                      <input type="number" class="form-control" id="input1" onkeyup="combusOP()" placeholder="KM aproximados">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Unidades necesarias</label>
                      <input type="number" class="form-control" id="input2" onkeyup="combusOP()" min="0" placeholder="Número de unidades">
                    </div>


                    <div class="form-group">
                      <label for="exampleInputPassword1">Instaladores</label>
                      <input type="number" class="form-control" id="input3" onkeyup="combusOP()" min="0" placeholder="Número de instaladores">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Choferes</label>
                      <input type="number" class="form-control" id="input4" onkeyup="combusOP()" min="0" placeholder="Número de choferes">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Sobreestante</label>
                      <input type="number" class="form-control" id="input6" onkeyup="combusOP()" min="0" placeholder="">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Días aproximados de trabajo</label>
                      <input type="number" class="form-control" id="input5" onkeyup="combusOP()" min="0" placeholder="Días de trabajo (aprox)">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Costo por Habitación</label>
                      <input type="number" class="form-control" id="input10" onkeyup="combusOP()" min="0" placeholder="Costo por Habitación">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Hospedaje (habitaciones)</label>
                      <input type="number" class="form-control" id="input7" onkeyup="combusOP()" min="0" placeholder="Habitaciones">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Hospedaje (noches)</label>
                      <input type="number" class="form-control" id="input8" onkeyup="combusOP()" min="0" placeholder="Noches">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Alimentos por día</label>
                      <input type="number" class="form-control" id="editarRes8" name="editarRes8" min="0" placeholder="Alimentos (por día)" readonly>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Caja chica (semanal)</label>
                      <input type="number" class="form-control" id="input9" onkeyup="combusOP()" min="0" placeholder="Caja chica">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Observaciones</label>
                      <!--<input type="text" rows="4" cols="50" class="form-control input-lg" id="obser" name="obser">-->
                      <textarea rows="4" class="form-control input-lg" cols="50" onkeyup="comen()" name="obser" id="obser" required></textarea>
                    </div>
                   
                  </div>
                  <!-- /.box-body -->

                </form>

              </div>
            </div>
            <!-- AQUI TERMINA LA TABLA IZQUIERDA -->

            <!-- AQUI INICIA LA TABLA DERECHA -->

            <div class="col-md-6">
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Cálculo</h3>
                </div>

                <!-- /.box-header -->
           <!-- form start -->
           <form role="form" method="post">
              <div class="box-body">

              <div style="display:none;">
                <div class="input-group">
                <span class="input-group-addon"><i class="fas fa-file-signature"></i></span>
                <input type="text" class="form-control" placeholder="nombre de proyecto" readonly id="editarProyecto" name="editarProyecto">
                <input  class="form-control" id="idPyc" name="idPyc">
                <input  class="form-control" id="idCatego" name="idCatego">
              </div>
              <br>

              <div class="input-group">
                <span class="input-group-addon"><i class="fas fa-map-marker-alt"></i></span> 
                <input type="text" class="form-control" placeholder="Lugar de ejecución" readonly id="editarLugar" name="editarLugar">
              </div>
              <br>
              
              </div>

              <label for="exampleInputPassword1">Combustible para viaje</label>
                  <div class="input-group">
                      <span class="input-group-addon"><i class="fas fa-gas-pump"></i></span>
                      <!--<input type="email" class="form-control" placeholder="">-->
                      <input class="form-control" type="text" id="editarRes1" name="editarRes1" readonly>
                  </div>
                    <br>
                    
                  <!--<div class="form-group">
                  <label for="exampleInputPassword1">Combustible operativo</label>
                  <input type="number" class="form-control" id="editarRes2" name="editarRes2"  min="0" placeholder="Combustible operativo"  readonly>
                </div>-->

                  <label for="exampleInputPassword1">Combustible operativo</label>
                  <div class="input-group">
                      <span class="input-group-addon"><i class="fas fa-gas-pump"></i></span>
                      <input type="text" class="form-control" id="editarRes2" name="editarRes2" readonly>
                  </div>
                      <br>
                      <!--<label for="exampleInputPassword1">SyS instaladores</label>
                  <div class="input-group">
                      <span class="input-group-addon"><i class=""></i></span>
                      <input type="text" class="form-control" id="editarRes4" name="editarRes4" readonly>
                  </div>-->
                      <br>

                      <label for="exampleInputPassword1">SyS Choferes</label>
                  <div class="input-group">
                      <span class="input-group-addon"><i class=""></i></span>
                      <input type="text" class="form-control" id="editarRes5" name="editarRes5" readonly>
                  </div>
                      <br>

                      <label for="exampleInputPassword1">Sys Sobreestantes</label>
                  <div class="input-group">
                      <span class="input-group-addon"><i class=""></i></span>
                      <input type="text" class="form-control" id="editarRes6" name="editarRes6" readonly>
                  </div>
                      <br>

                      <label for="exampleInputPassword1">Semanas</label>
                  <div class="input-group">
                      <span class="input-group-addon"><i class="fas fa-calendar"></i></span>
                      <input type="text" class="form-control" id="editarRes7" name="editarRes7" readonly>
                  </div>
                    <br>
                    <div class="form-group" style="display:none;">
                      <label for="exampleInputPassword1">Alimentos por día</label>
                      <input type="number" class="form-control" id="editarRes12" name="editarRes12" min="0" placeholder="Alimentos (por día)" readonly>
                    </div>


                      <label for="exampleInputPassword1">Costo total de hospedaje</label>
                  <div class="input-group">
                      <span class="input-group-addon"><i class="fas fa-hotel"></i></span>
                      <input type="text" class="form-control" id="editarRes9" name="editarRes9" readonly>
                  </div>
                      <br>

                      <label for="exampleInputPassword1">Costo de alimentos por proyecto</label>
                  <div class="input-group">
                      <span class="input-group-addon"><i class="fas fa-utensils"></i></span>
                      <input type="text" class="form-control" id="editarRes10" name="editarRes10" readonly>
                  </div>
                      <br>

                      <label for="exampleInputPassword1">Caja chica Total</label>
                  <div class="input-group">
                      <span class="input-group-addon"><i class="fas fa-money-bill"></i></span>
                      <input type="text" class="form-control" id="editarRes13" name="editarRes13" readonly>
                  </div>
                    <br>

                      <label for="exampleInputPassword1">En efectivo</label>
                  <div class="input-group">
                      <span class="input-group-addon"><i class="fas fa-money-bill"></i></span>
                      <input type="text" class="form-control" id="editarRes11" name="editarRes11" readonly>
                  </div>
                      <br>

                      <label for="exampleInputPassword1">Costo Total</label>
                  <div class="input-group small-box bg-green">
                      <span class="input-group-addon"><i class="fas fa-money-bill"></i></span>
                      <input type="text" class="form-control" id="editarTotalFF" name="editarTotalFF" readonly>
                  </div>
                      <br>    
                    
                      <label for="exampleInputPassword1">Costo Semanal</label>
                  <div class="input-group small-box bg-green">
                      <span class="input-group-addon"><i class="fas fa-money-bill"></i></span>
                      <input type="text" class="form-control" id="editarTotalS" name="editarTotalS" readonly>
                  </div>
                      <br>

                      <label for="exampleInputPassword1">Costo Diario</label>
                  <div class="input-group small-box bg-green">
                      <span class="input-group-addon"><i class="fas fa-money-bill"></i></span>
                      <input type="text" class="form-control" id="editarTotalD" name="editarTotalD" readonly>
                  </div>
                      <br>

                  <div class="form-group" style="display:none;">
                    <label for="exampleInputPassword1">Observaciones</label>
                    <!--<input type="text" rows="4" cols="50" class="form-control input-lg" id="obser" name="obser">-->
                    <textarea rows="4" class="form-control input-lg observ" cols="50" name="obser1" id="obser1" ></textarea>
                  </div>
                
              </div>
              <!-- /.box-body -->

              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Guardar información</button>
            </div>

             <?php

              $crearPYC = new ControladorPYC();
              $crearPYC -> ctrEditarPYC();

             ?>

            </form>  

              </div>
            </div>

          </div>
        </div> 
      </div>
    </div>

    <!--=====================================
    PIE DEL MODAL
    ======================================-->

    <div class="modal-footer">

    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

    <!--button type="submit" class="btn btn-primary">Guardar cambios</button>-->

    </div>

    </form>

    </div>

  </div>

</div>

<?php

  $eliminarProyecto = new ControladorCategorias();
  $eliminarProyecto -> ctrBorrarCategoria();

?>

<script type="text/javascript">

(function() {
  /**
   * Ajuste decimal de un número.
   *
   * @param {String}  tipo  El tipo de ajuste.
   * @param {Number}  valor El numero.
   * @param {Integer} exp   El exponente (el logaritmo 10 del ajuste base).
   * @returns {Number} El valor ajustado.
   */
  function decimalAdjust(type, value, exp) {
    // Si el exp no está definido o es cero...
    if (typeof exp === 'undefined' || +exp === 0) {
      return Math[type](value);
    }
    value = +value;
    exp = +exp;
    // Si el valor no es un número o el exp no es un entero...
    if (isNaN(value) || !(typeof exp === 'number' && exp % 1 === 0)) {
      return NaN;
    }
    // Shift
    value = value.toString().split('e');
    value = Math[type](+(value[0] + 'e' + (value[1] ? (+value[1] - exp) : -exp)));
    // Shift back
    value = value.toString().split('e');
    return +(value[0] + 'e' + (value[1] ? (+value[1] + exp) : exp));
  }

  // Decimal round
  if (!Math.round10) {
    Math.round10 = function(value, exp) {
      return decimalAdjust('round', value, exp);
    };
  }
  // Decimal floor
  if (!Math.floor10) {
    Math.floor10 = function(value, exp) {
      return decimalAdjust('floor', value, exp);
    };
  }
  // Decimal ceil
  if (!Math.ceil10) {
    Math.ceil10 = function(value, exp) {
      return decimalAdjust('ceil', value, exp);
    };
  }
  combusOP();
})();

function combusOP() {
  let input1 = Number( document.getElementById('input1').value );
  let input2 = Number( document.getElementById('input2').value );
  let input3 = Number( document.getElementById('input3').value );
  let input4 = Number( document.getElementById('input4').value );
  let input5 = Number( document.getElementById('input5').value );
  let input6 = Number( document.getElementById('input6').value );
  let input7 = Number( document.getElementById('input7').value );
  let input8 = Number( document.getElementById('input8').value );
  let input9 = Number( document.getElementById('input9').value );
  let input10 = Number( document.getElementById('input10').value );

  let op = input1 * 4 * 2 * input2;
  let opCO = Math.round(input2 * 833.33 * input5);
  let opSysC = input4 * 416.67 * input5;
  let opSysS = input6 * 500 * input5;
  let opSe = Math.round10(input5 / 7);
  let comPD = (input3 + input4 + input6) * 250;

  document.getElementById('editarRes1').value = op;
  document.getElementById('editarRes2').value = opCO;
  document.getElementById('editarRes5').value = opSysC
  document.getElementById('editarRes6').value = opSysS;
  document.getElementById('editarRes7').value = opSe;
  document.getElementById('editarRes8').value = comPD;

  let res8 = Number(document.getElementById('editarRes8').value);
  let opH = input7 * input8 * input10;
  let cosAP = input5 * res8;

  document.getElementById('editarRes9').value = opH;
  document.getElementById('editarRes10').value = cosAP;
  document.getElementById('editarRes11').value = input9;

  let res11 = Number(document.getElementById('editarRes11').value);
  let cashT = res11 * input5;

  document.getElementById('editarRes12').value = res8;
  document.getElementById('editarRes13').value = cashT;

  totalF();
  totalS();
  totalD();
}

function totalF(){
    let res1 = Number(document.getElementById('editarRes1').value);
    let res2 = Number(document.getElementById('editarRes2').value);
    let res5 = Number(document.getElementById('editarRes5').value);
    let res6 = Number(document.getElementById('editarRes6').value);
    let res9 = Number(document.getElementById('editarRes9').value);
    let res10 = Number(document.getElementById('editarRes10').value);
    let res11 = Number(document.getElementById('editarRes11').value);
    let res12 = Number(document.getElementById('editarRes12').value)
    let res13 = Number(document.getElementById('editarRes13').value);
    let tot = Math.round(res1 + res2 + res5 + res6 + res9 + res10 + res11 + res12 + res13);

    document.getElementById('editarTotalFF').value = tot;

    totalD();
    totalS();
  }

  function totalS(){
    let totalFF = Number(document.getElementById('editarTotalFF').value);
    let res7 = Number(document.getElementById('editarRes7').value);
    let tot2 = Math.round(totalFF / res7);

    document.getElementById('editarTotalS').value = tot2;
  }

  function totalD(){
    let totalFF = Number(document.getElementById('editarTotalFF').value);
    let input5 = Number(document.getElementById('input5').value);
    let tot3 = Math.round(totalFF / input5);

    document.getElementById('editarTotalD').value = tot3;
  }

  /**function combusOP() {
    let input1 = Number( document.getElementById('input1').value );
    let input2 = Number( document.getElementById('input2').value );
    let op = input1 * 4 * 2 * input2;

    let input5 = Number( document.getElementById('input5').value );
    let opCO = Math.round(input2 * 833.33 * input5);

    let input3 = Number( document.getElementById('input3').value );
    //let opSysI = input3 * 900 * input5;

    let input4 = Number( document.getElementById('input4').value );
    let opSysC = input4 * 416.67 * input5;

    let input6 = Number( document.getElementById('input6').value );
    let opSysS = input6 * 500 * input5;

    let opSe = Math.round10(input5 / 7);

    let comPD = (input3 + input4 + input6) * 250;

    document.getElementById('editarRes1').value = op;
    document.getElementById('editarRes2').value = opCO;
    //document.getElementById('editarRes4').value = opSysI;
    document.getElementById('editarRes5').value = opSysC;
    document.getElementById('editarRes6').value = opSysS;
    document.getElementById('editarRes7').value = opSe;
    document.getElementById('editarRes8').value = comPD;

    let res8 = Number(document.getElementById('editarRes8').value);
    let cosAP = input5 * res8;

    document.getElementById('editarRes10').value = cosAP;
    document.getElementById('editarRes12').value = res8;

    let res11 = Number(document.getElementById('editarRes11').value);
    let cashT = res11 * input5;

    document.getElementById('editarRes13').value = cashT;

    //comOP();
    cash();
    totalF();
    totalS();
    totalD();
  }*/

  function comen(){
    let obser = String(document.getElementById('obser').value);

    document.getElementById('obser1').value = obser;
  }

  /*function comOP(){
    let res2 = Number(document.getElementById('editarRes2').value);

    document.getElementById('editarRes3').value = res2;

    totalF();
  }*/

  /*function hos(){
    let input7 = Number( document.getElementById('input7').value );
    let input8 = Number( document.getElementById('input8').value );
    let input10 = Number( document.getElementById('input10').value );
    let opH = input7 * input8 * input10;

    document.getElementById('editarRes9').value = opH;

    totalF();
  }

  function cash(){
    let input9 = Number( document.getElementById('input9').value );

    document.getElementById('editarRes11').value = input9;

    totalF();
    combusOP();
  }

  function totalF(){
    let res1 = Number(document.getElementById('editarRes1').value);
    let res2 = Number(document.getElementById('editarRes2').value);
    //let res4 = Number(document.getElementById('editarRes4').value);
    let res5 = Number(document.getElementById('editarRes5').value);
    let res6 = Number(document.getElementById('editarRes6').value);
    let res12 = Number(document.getElementById('editarRes12').value);
    let res9 = Number(document.getElementById('editarRes9').value);
    let res10 = Number(document.getElementById('editarRes10').value);
    let res11 = Number(document.getElementById('editarRes11').value);
    let res13 = Number(document.getElementById('editarRes13').value);
    let tot = Math.round(res1 + res2 + res5 + res6 + res12 + res9 + res10 + res11 + res13);

    document.getElementById('editarTotalFF').value = tot;

    totalD();
    totalS();
  }

  function totalS(){
    let totalFF = Number(document.getElementById('editarTotalFF').value);
    let res7 = Number(document.getElementById('editarRes7').value);
    let tot2 = Math.round(totalFF / res7);

    document.getElementById('editarTotalS').value = tot2;
  }

  function totalD(){
    let totalFF = Number(document.getElementById('editarTotalFF').value);
    let input5 = Number(document.getElementById('input5').value);
    let tot3 = Math.round(totalFF / input5);

    document.getElementById('editarTotalD').value = tot3;
  }*/

</script>