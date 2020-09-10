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
   Nuevo registro de instalación

    </h1>

    <ol class="breadcrumb">
      

      

    
    </ol>

</section>

<!--MAIN content-->

<section class="container">

<form method="post">
    <div class="box box-info" style="margin-top:10%;">
            <div class="box-header with-border">
                <h4><b>INFORMACIÓN DE INSTALACIÓN</b></h4>
            </div>
            <div class="box-body">
              

              <div class="row">

                <div class="col-lg-4">
                

                    <div class="form-group">

                        <label>Modelo de luminaria instalada</label>

                        <input class="form-control" type="text" placeholder="Modelo de luminaria instalada" id="modeloluminstalada" name="modeloluminstalada">

                    </div>

                </div>

                <div class="col-lg-4">

                    <div class="form-group">

                        <label>Potencia de luminaria instalada</label>

                        <input class="form-control" type="text" placeholder="Potencia de luminaria instalada" id="potencialuminstalada" name="potencialuminstalada">
    
                    </div>

                </div>

                <div class="col-lg-4">

                    <div class="form-group">
                    <h4>Instalación de varilla a tierra</h4>

                        <div class="radio">
                            <label>
                                <input type="radio" name="varillatierra" id="varillasi" value="Si" checked="">
                                    Si
                            </label>
                        </div>  

                        <div class="radio">
                            <label>
                                <input type="radio" name="varillatierra" id="varillano" value="No">
                                    No
                            </label>
                        </div>   

                    </div>

                </div>

              </div>

                <br>
                <hr>
                <br>








                <div class="row">

                <div class="col-lg-4">

                    <h4>Instalación de cables para fases</h4>

                    <div class="form-group">

                        <div class="radio">
                            <label>
                            <input type="radio" name="cablefase" id="cablefasesi" value="Si" checked="">
                            Si
                            </label>
                         </div>
                        <div class="radio">
                            <label>
                            <input type="radio" name="cablefase" id="cablefaseno" value="No">
                            No
                            </label>
                    </div>

                </div>

            </div>





                        <div class="col-lg-4">

                            <h4>Instalación de cable desnudo para tierra</h4>

                                <div class="form-group">

                                    <div class="radio">
                                        <label>
                                        <input type="radio" name="desnudotierra" id="sitierra" value="Si" checked="">
                                        Si
                                        </label>
                                    </div>

                                    <div class="radio">
                                            <label>
                                            <input type="radio" name="desnudotierra" id="notierra" value="No">
                                            No
                                            </label>
                                    </div>
                                    
                                
                                </div>
                                

                        </div>

                        <div class="col-lg-4">

                            <h4>Instalación de brazo de poste</h4>

                                <div class="form-group">

                                    <div class="radio">
                                        <label>
                                        <input type="radio" name="brazoposte" id="brazosi" value="Si" checked="">
                                        Si
                                        </label>
                                    </div>

                                    <div class="radio">
                                            <label>
                                            <input type="radio" name="brazoposte" id="brazono" value="No">
                                            No
                                            </label>
                                    </div>     
                                
                                </div>

                    </div>

              </div>


              <br>
              <hr>
              <br>


              <div class="row">

                <div class="col-lg-6">

                    <h4>Instalación de tubo galvanizado en poste de concreto</h4>

                    <div class="form-group">

                        <div class="radio">
                            <label>
                            <input type="radio" name="tuboenposte" id="tubosi" value="Si" checked="">
                            Si
                            </label>
                         </div>
                        <div class="radio">
                            <label>
                            <input type="radio" name="tuboenposte" id="tubono" value="No">
                            No
                            </label>
                    </div>

                </div>

            </div>





                        <div class="col-lg-6">

                            <h4>Observaciones</h4>

                                <div class="form-group">

                                <textarea rows="4" class="form-control input-lg" cols="50" name="observacionesfinales" id="observacionesfinales" placeholder="Observaciones"></textarea>
                                    
                                
                                </div>
                                

                        </div>

                        

              </div>


              <br>
              <hr>
              <br>





            </div>
            <!-- /.box-body -->

            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Guardar información</button>
            </div>
          </div>

          <?php

          $crearRegistro = new ControladorRegistro();
          $crearRegistro -> ctrCrearRegistro();

        ?>

</form>

</section>
</div>



<!--content wrapper-->