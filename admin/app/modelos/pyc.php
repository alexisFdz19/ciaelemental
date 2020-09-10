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
   Planeación y costeo del proyecto

    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Planeación y costeo del proyecto</li>
    
    </ol>

</section>

<!--MAIN content-->

<section class="container">


<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:10%;">
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Datos del proyecto</h3>
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
                      <input type="text" class="form-control" placeholder="nombre de proyecto" value="'.$value["categoria"].'" readonly id="nom">
                    </div>
                    <br>

                    <div class="input-group">
                      <span class="input-group-addon"><i class="fas fa-map-marker-alt"></i></span> 
                      <input type="text" class="form-control" placeholder="Lugar de ejecución" value="'.$value["lugar"].'" readonly id="lug">
                    </div>
                    <br>
              ';
            }

            ?>

            <!--<div class="input-group">
                <span class="input-group-addon"><i class="fas fa-file-signature"></i></span>
                <input type="email" class="form-control" placeholder="nombre de proyecto">
            </div>
            <br>

            <div class="input-group">
                    <span class="input-group-addon"><i class="fas fa-map-marker-alt"></i></span> 
                    <input type="email" class="form-control" placeholder="Lugar de ejecución">
                </div>
                <br>-->

            <!-- AQUI VA LA TABLA-->

            
                <div class="col-md-6">
                <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Conceptos</h3>
                </div>
           
           <!-- /.box-header -->
           <!-- form start -->
           <form role="form">
             <div class="box-body">
               <div class="form-group">
                 <label for="exampleInputEmail1">Distancia aproximada desde origen (KM)</label>
                 <input type="number" class="form-control" id="input1"  placeholder="KM aproximados">
               </div>
               <div class="form-group">
                 <label for="exampleInputPassword1">Unidades necesarias</label>
                 <input type="number" class="form-control" id="input2"  min="0" placeholder="Número de unidades">
               </div>


               <div class="form-group">
                 <label for="exampleInputPassword1">Instaladores</label>
                 <input type="number" class="form-control" id="input3" min="0" placeholder="Número de instaladores">
               </div>

               <div class="form-group">
                 <label for="exampleInputPassword1">Choferes</label>
                 <input type="number" class="form-control" id="input4" min="0" placeholder="Número de choferes">
               </div>

               <div class="form-group">
                 <label for="exampleInputPassword1">Sobreestante</label>
                 <input type="number" class="form-control" id="input6" min="0" placeholder="Número de Sobreestantes">
               </div>

               <div class="form-group">
                 <label for="exampleInputPassword1">Días aproximados de trabajo</label>
                 <input type="number" class="form-control" id="input5" min="0" placeholder="Días de trabajo (aprox)">
               </div>

               <div class="form-group">
                 <label for="exampleInputPassword1">Costo por Habitación</label>
                 <input type="number" class="form-control" id="input10" min="0" placeholder="Costo por Habitación">
               </div>

               <div class="form-group">
                 <label for="exampleInputPassword1">Hospedaje (habitaciones)</label>
                 <input type="number" class="form-control" id="input7" min="0" placeholder="Habitaciones">
               </div>

               <div class="form-group">
                 <label for="exampleInputPassword1">Hospedaje (noches)</label>
                 <input type="number" class="form-control" id="input8" min="0" placeholder="Noches">
               </div>

               <div class="form-group">
                 <label for="exampleInputPassword1">Alimentos por día</label>
                 <input type="number" class="form-control" id="res8" name="res8" min="0" placeholder="Alimentos (por día)" readonly>
               </div>

               <div class="form-group">
                 <label for="exampleInputPassword1">Caja chica (semanal)</label>
                 <input type="number" class="form-control" id="input9"  min="0" placeholder="Caja chica">
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
                
                 <?php

                  $item = null;
                  $valor = null;

                  $categorias = ControladorCategorias::ctrMostrarUltimaCategoria($item, $valor);

                  foreach ($categorias as $key => $value){
                    echo '
                  <div class="input-group">
                      <span class="input-group-addon"><i class="fas fa-file-signature"></i></span>
                      <input type="text" class="form-control" placeholder="nombre de proyecto" value="'.$value["categoria"].'" readonly id="nom" name="nom">
                  </div>
                  <br>

                  <div class="input-group">
                    <span class="input-group-addon"><i class="fas fa-map-marker-alt"></i></span> 
                    <input type="text" class="form-control" placeholder="Lugar de ejecución" value="'.$value["lugar"].'" readonly id="lug" name="lug">
                  </div>
                  <br>

                  <div class="input-group">
                    <span class="input-group-addon"><i class="fas fa-map-marker-alt"></i></span> 
                    <input type="text" class="form-control" placeholder="Lugar de ejecución" value="'.$value["id"].'" readonly id="idCatego" name="idCatego">
                  </div>
                  <br>
                    ';
                  }
                ?>

                <?php

                $item = null;
                $valor = null;

                $categorias = ControladorOBPYC::ctrMostrarUltimoComentario($item, $valor);

                foreach ($categorias as $key => $value){
                  echo '
                        <div class="input-group" style="display: none; visibility: hidden;">
                          <span class="input-group-addon"><i class="fas fa-file-signature"></i></span>
                          <input type="text" class="form-control" placeholder="nombre de proyecto" value="'.$value["observacion"].'" readonly id="obse" name="obse">
                        </div>
                        <br>
                  ';
                }

                ?>

        </div>

             <label for="exampleInputPassword1">Combustible para viaje</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fas fa-gas-pump"></i></span>
                    <!--<input type="email" class="form-control" placeholder="">-->
                    <input class="form-control" type="text" id="res1" name="res1" >
                </div>
                  <br>
                  
                <!--<div class="form-group"> el siguiente era res3 y Combustible con OPS
                 <label for="exampleInputPassword1">Combustible operativo 1</label>
                 <input type="number" class="form-control" id="res2" name="res2" onkeyup="" min="0" placeholder="Combustible operativo"  readonly>
               </div>-->

                <label for="exampleInputPassword1">Combustible operativo</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fas fa-gas-pump"></i></span>
                    <input type="text" class="form-control" id="res2" name="res2" >
                </div>
                    <br>
                    <!--<label for="exampleInputPassword1">SyS instaladores</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class=""></i></span>
                    <input type="text" class="form-control" id="res4" name="res4" readonly>
                </div>-->
                    <br>

                    <label for="exampleInputPassword1">SyS Choferes</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class=""></i></span>
                    <input type="text" class="form-control" id="res5" name="res5" >
                </div>
                    <br>

                    <label for="exampleInputPassword1">Sys Sobreestantes</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class=""></i></span>
                    <input type="text" class="form-control" id="res6" name="res6">
                </div>
                    <br>

                    <label for="exampleInputPassword1">Semanas</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fas fa-calendar"></i></span>
                    <input type="text" class="form-control" id="res7" name="res7" >
                </div>
                  <br>
                <div class="form-group" style="display:none;">
                 <label for="exampleInputPassword1">Alimentos por día</label>
                 <input type="number" class="form-control" id="res12" name="res12" min="0" placeholder="Alimentos (por día)" >
               </div>


                    <label for="exampleInputPassword1">Costo total de hospedaje</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fas fa-hotel"></i></span>
                    <input type="text" class="form-control" id="res9" name="res9" >
                </div>
                    <br>

                    <label for="exampleInputPassword1">Costo de alimentos por proyecto</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fas fa-utensils"></i></span>
                    <input type="text" class="form-control" id="res10" name="res10" >
                </div>
                    <br>

                    <label for="exampleInputPassword1">Caja chica Total</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fas fa-money-bill"></i></span>
                    <input type="text" class="form-control" id="res13" name="res13" >
                </div>
                    <br>

                    <label for="exampleInputPassword1">En efectivo (Semanal)</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fas fa-money-bill"></i></span>
                    <input type="text" class="form-control" id="res11" name="res11" >
                </div>
                    <br>

                    <label for="exampleInputPassword1">Costo Total</label>
                <div class="input-group small-box bg-green">
                    <span class="input-group-addon"><i class="fas fa-money-bill"></i></span>
                    <input type="text" class="form-control" id="totalFF" name="totalFF" >
                </div>
                    <br>    
                  
                    <label for="exampleInputPassword1">Costo Semanal</label>
                <div class="input-group small-box bg-green">
                    <span class="input-group-addon"><i class="fas fa-money-bill"></i></span>
                    <input type="text" class="form-control" id="totalS" name="totalS" >
                </div>
                    <br>

                    <label for="exampleInputPassword1">Costo Diario</label>
                <div class="input-group small-box bg-green">
                    <span class="input-group-addon"><i class="fas fa-money-bill"></i></span>
                    <input type="text" class="form-control" id="totalD" name="totalD" >
                </div>
                    <br>
               
             </div>
             <!-- /.box-body -->

             <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Guardar información</button>
            </div>

             <?php

              $crearPYC = new ControladorPYC();
              $crearPYC -> ctrCrearPYC();

             ?>
           </form>
         </div>
</div>



<!-- AQUI TERMINA LA TABLA DERECHA -->


    
</div>



</div>


<!-- CONTENIDO DE COSTO TOTAL 

<div class="col-lg-4 col-xs-12">
          small box 
          <div class="small-box bg-green">
            <div class="inner">
              <p>Costo total</p><input type="text" id="totalFF" readonly> 
            </div>
            
          </div>
        </div>-->


<!--TERMINA COSTO TOTAL -->






<!-- CONTENIDO DE COSTO POR SEMANA -->




<!--TERMINA COSTO POR SEMANA 


<div class="col-lg-4 col-xs-12">
           small box 
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>$ 7,200</h3>

              <p>Costo por semana</p>
            </div>
            <div class="icon">
                <i class="fas fa-calendar-week"></i>
            </div>
            
          </div>
        </div>-->




<!--INICIA COSTO POR DÍA 

<div class="col-lg-4 col-xs-12">
          small box 
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>$ 1,150</h3>

              <p>Costo por día</p>
            </div>
            <div class="icon">
              <i class="fas fa-calendar-day"></i>
            </div>
           
          </div>
        </div>-->

<!-- TERMINA COSTO POR DÍA-->



<!--<script type="text/javascript">

  function combusOP() {
    let input1 = Number( document.getElementById('input1').value );
    let input2 = Number( document.getElementById('input2').value );
    let op = input1 * 4 * 2 * input2;

    //let input5 = Number( document.getElementById('input5').value );
    //let opCO = Math.round(input2 * 833.33 * input5);

    //let input3 = Number( document.getElementById('input3').value );
    /*let opSysI = input3 * 900 * input5;*/

    //let input4 = Number( document.getElementById('input4').value );
    //let opSysC = input4 * 416.67 * input5;

    //let input6 = Number( document.getElementById('input6').value );
    //let opSysS = input6 * 500 * input5;

    //let opSe = Math.floor(input5 / 6);

    //let comPD = (input3 + input4 + input6) * 250;

    //document.getElementById('res1').value = op;
    //document.getElementById('res2').value = opCO;
    /*document.getElementById('res4').value = opSysI;*/
    //document.getElementById('res5').value = opSysC;
    //document.getElementById('res6').value = opSysS;
    //document.getElementById('res7').value = opSe;
    //document.getElementById('res8').value = comPD;

    //let res8 = Number(document.getElementById('res8').value);
    //let cosAP = input5 * res8;

    //document.getElementById('res10').value = cosAP;
    //document.getElementById('res12').value = res8;

    
    //let res11 = Number(document.getElementById('res11').value);
    //let cashT = res11 * input5;

    //document.getElementById('res13').value = cashT;

    //comOP();
    /*cash();
    totalF();
    totalS();
    totalD();*/
  }

  /*function comOP(){
    let res2 = Number(document.getElementById('res2').value);

    document.getElementById('res3').value = res2;

    totalF();
  }*/

  /*function hos(){
    let input7 = Number( document.getElementById('input7').value );
    let input8 = Number( document.getElementById('input8').value );
    let input10 = Number( document.getElementById('input10').value );
    let opH = input7 * input8 * input10;

    document.getElementById('res9').value = opH;

    totalF();
  }

  function cash(){
    let input9 = Number( document.getElementById('input9').value );

    document.getElementById('res11').value = input9;

    totalF();
    combusOP();
  }

  function totalF(){
    let res1 = Number(document.getElementById('res1').value);
    let res2 = Number(document.getElementById('res2').value);
    //let res4 = Number(document.getElementById('res4').value);
    let res5 = Number(document.getElementById('res5').value);
    let res6 = Number(document.getElementById('res6').value);
    let res12 = Number(document.getElementById('res12').value)
    let res9 = Number(document.getElementById('res9').value);
    let res10 = Number(document.getElementById('res10').value);
    let res11 = Number(document.getElementById('res11').value);
    let res13 = Number(document.getElementById('editarRes13').value);
    let tot = Math.round(res1 + res2 + res5 + res6 + res12 + res9 + res10 + res11 + res13);

    document.getElementById('totalFF').value = tot;

    totalD();
    totalS();
  }

  function totalS(){
    let totalFF = Number(document.getElementById('totalFF').value);
    let res7 = Number(document.getElementById('res7').value);
    let tot2 = Math.round(totalFF / res7);

    document.getElementById('totalS').value = tot2;
  }

  function totalD(){
    let totalFF = Number(document.getElementById('totalFF').value);
    let input5 = Number(document.getElementById('input5').value);
    let tot3 = Math.round(totalFF / input5);

    document.getElementById('totalD').value = tot3;
  }*/

</script>-->

<!--<script type="text/javascript">
  function combus() {
     let input1 = Number( document.getElementById('input1').value );
     let input2 = Number( document.getElementById('input2').value );
     let op = input1 * 4 * 2 * input2;
     
     document.getElementById('res1').value = op;

     totalF();
  }

  function cosC(){
    let input3 = Number( document.getElementById('input3').value );

    document.getElementById('res2').value = input3;

    totalF();
  }

  function sysG(){
    let input4 = Number( document.getElementById('input4').value );
    let input5 = Number( document.getElementById('input5').value );
    let input6 = Number( document.getElementById('input6').value );
    let input7 = Number( document.getElementById('input7').value );
    let input10 = Number( document.getElementById('input10').value );
    let opT = input4 * 900 * input5;
    let opC = input6 * 416.67 * input5;
    let opS = input7 * 500 * input5;
    let opSe = Math.round(input5 / 6);
    //let opSe = input5 / 6;
    let opA = input10 * input5;


    document.getElementById('res3').value = opT;
    document.getElementById('res4').value = opC;
    document.getElementById('res5').value = opS;
    document.getElementById('res6').value = opSe;
    document.getElementById('res8').value = opA;

    totalF();
    totalD();
    totalS();
  }

  function hos(){
    let input8 = Number( document.getElementById('input8').value );
    let input9 = Number( document.getElementById('input9').value );
    let opH = input8 * 400 * input9;

    document.getElementById('res7').value = opH;

    totalF();
  }

  function cash(){
    let input11 = Number( document.getElementById('input11').value );

    document.getElementById('res9').value = input11;

    totalF();
  }

  function totalF(){
    let res1 = Number(document.getElementById('res1').value);
    let res2 = Number(document.getElementById('res2').value);
    let res3 = Number(document.getElementById('res3').value);
    let res4 = Number(document.getElementById('res4').value);
    let res5 = Number(document.getElementById('res5').value);
    let res7 = Number(document.getElementById('res7').value);
    let res8 = Number(document.getElementById('res8').value);
    let res9 = Number(document.getElementById('res9').value);
    let tot = Math.round(res1 + res2 + res3 + res4 + res5 + res7 + res8 + res9);

    document.getElementById('totalFF').value = tot;

    totalD();
    totalS();
  }

  function totalD(){
    let totalFF = Number(document.getElementById('totalFF').value);
    let input5 = Number(document.getElementById('input5').value);
    let tot2 = Math.round(totalFF / input5);

    document.getElementById('totalD').value = tot2;
  }

  function totalS(){
    let totalFF = Number(document.getElementById('totalFF').value);
    let res6 = Number(document.getElementById('res6').value);
    let tot3 = Math.round(totalFF / res6);

    document.getElementById('totalS').value = tot3;
  }
  

</script>-->

<!--<script type="text/javascript">
function sumar (valor) {
    var total = 0;  
    valor = parseInt(valor); // Convertir el valor a un entero (número).
  
    total = document.getElementById('spTotal').innerHTML;
  
    // Aquí valido si hay un valor previo, si no hay datos, le pongo un cero "0".
    total = (total == null || total == undefined || total == "") ? 0 : total;
  
    /* Esta es la suma. */
    total = (parseInt(total) + parseInt(valor));
  
    // Colocar el resultado de la suma en el control "span".
    document.getElementById('spTotal').innerHTML = total;
}

</script>-->

</section>
</div>



<!--content wrapper-->