<?php

if ($_SESSION["perfil"] == "Especial") {

    echo '<script>

    window.location = "inicio";

  </script>';

    return;

}

?>

<script src="/vistas/js/registro_censo.js"></script>

<div class="content-wrapper">


    <section class="content-header">

        <h1>
            Nuevo censo

        </h1>

        <ol class="breadcrumb">


        </ol>

    </section>

    <!--MAIN content-->

    <section class="container">

        <form method="post" id="censo-form">
            <div class="box box-info" style="margin-top:10%;">
                <div class="box-header with-border">
                    <h3 class="box-title"><b>Información de censado</b></h3>
                </div>
                <div class="box-body">


                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Luminarias por poste</label>
                                <select class="form-control" name="lumina">
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

                                <input class="form-control" type="text" placeholder="ID de luminaria" id="luminaID"
                                       name="luminaID">
                                <div id="result-username" align="center"></div>

                            </div>

                        </div>

                        <div class="col-lg-4">

                            <div class="form-group">

                                <label>RPU</label>

                                <input class="form-control" type="text" placeholder="RPU" id="rpus" name="rpus">

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

                                <input class="form-control" type="text" placeholder="Colonia" id="colonia"
                                       name="colonia">

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

                                <input class="form-control" type="text" placeholder="Altura en metros" id="alturaP"
                                       name="alturaP">

                            </div>

                        </div>

                    </div>

                    <br>
                    <hr>
                    <br>


                    <div class="row">

                        <div class="col-lg-4">

                            <h4>Tipo de vialidad</h4>

                            <div class="form-group">

                                <div class="radio">
                                    <label>
                                        <input type="radio" name="vialidad" id="optionsRadios1" value="Primaria"
                                               checked="">
                                        Primaria
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="vialidad" id="optionsRadios2" value="Secundaria">
                                        Secundaria
                                    </label>
                                </div>

                            </div>

                        </div>

                        <div class="col-lg-4">

                            <h4>Ubicación de poste</h4>

                            <div class="form-group">

                                <div class="radio">
                                    <label>
                                        <input type="radio" name="ubicacionP" id="optionsRadios3" value="Camellon"
                                               checked="">
                                        Camellon
                                    </label>
                                </div>

                                <div class="radio">
                                    <label>
                                        <input type="radio" name="ubicacionP" id="optionsRadios4" value="Andador">
                                        Andador
                                    </label>
                                </div>

                                <div class="radio">
                                    <label>
                                        <input type="radio" name="ubicacionP" id="optionsRadios5" value="Lateral">
                                        Lateral
                                    </label>
                                </div>


                            </div>


                        </div>

                        <div class="col-lg-4">

                            <div class="form-group">

                                <label>Distancia interpostal (m)</label>

                                <input class="form-control" type="text" id="distanciaI" name="distanciaI"
                                       placeholder="Distancia (m)">

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

                                <input class="form-control" type="text" id="cos" name="cos"
                                       placeholder="ID de luminaria">

                            </div>

                        </div>


                    </div>

                    <br>
                    <hr>
                    <br>


                    <div class="row">

                        <div class="col-lg-4">

                            <h4>Estado del circuito</h4>

                            <div class="form-group">

                                <div class="radio">
                                    <label>
                                        <input type="radio" name="estadoC" id="optionsRadios1" value="ON" checked="">
                                        ON
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="estadoC" id="optionsRadios2" value="OFF">
                                        OFF
                                    </label>
                                </div>

                            </div>

                        </div>


                        <div class="col-lg-4">

                            <h4>Alimentación</h4>

                            <div class="form-group">

                                <div class="radio">
                                    <label>
                                        <input type="radio" name="alimentacion" id="optionsRadios4" value="Subterránea"
                                               checked="">
                                        Subterránea
                                    </label>
                                </div>

                                <div class="radio">
                                    <label>
                                        <input type="radio" name="alimentacion" id="optionsRadios5" value="Área">
                                        Aérea
                                    </label>
                                </div>


                            </div>


                        </div>

                        <div class="col-lg-4">

                            <h4>Luminaria de alto riesgo</h4>

                            <div class="form-group">

                                <div class="radio">
                                    <label>
                                        <input type="radio" name="luminaAlR" id="optionsRadios1"
                                               value="Cerca de transformador" checked="">
                                        Cerca de transformador
                                    </label>
                                </div>

                                <div class="radio">
                                    <label>
                                        <input type="radio" name="luminaAlR" id="optionsRadios2"
                                               value="Cable de media tensión">
                                        Cable de media tensión
                                    </label>
                                </div>

                                <div class="radio">
                                    <label>
                                        <input type="radio" name="luminaAlR" id="optionsRadios3" value="Ninguno">
                                        Ninguno
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

                            <div class="form-group">

                                <label>Latitud</label>

                                <!--AQUI PON UN VARCHAR PORQUE LA LATITUD Y LONGITUD LLEVAN COMAS, PUNTOS Y EL SIGNO DE GRADOS-->

                                <input class="form-control" type="text" placeholder="Latitud" id="latitud"
                                       name="latitud">

                            </div>

                        </div>

                        <div class="col-lg-4">

                            <div class="form-group">

                                <label>Longitud</label>

                                <input class="form-control" type="text" placeholder="Longitud" id="longitud"
                                       name="longitud">

                            </div>

                        </div>

                        <div class="col-lg-4">

                            <div class="form-group">

                                <label>Instalador</label>

                                <input class="form-control" type="text" placeholder="Instalador" id="instalador"
                                       name="instalador">

                            </div>

                        </div>

                    </div>


                    <br>
                    <hr>
                    <br>


                    <div class="row">

                        <div class="col-lg-4">

                            <div class="form-group">

                                <h4>Tipo de poste</h4>

                                <div class="form-group">

                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="tipodeposte" id="Metal" value="Metal" checked="">
                                            Metal
                                        </label>
                                    </div>

                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="tipodeposte" id="Concreto" value="Concreto">
                                            Concreto
                                        </label>
                                    </div>

                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="tipodeposte" id="Madera" value="Madera">
                                            Madera
                                        </label>
                                    </div>

                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="tipodeposte" id="Otro" value="Otro">
                                            Otro
                                        </label>
                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="col-lg-4">

                            <div class="form-group">

                                <label>Modelo de luminaria existente</label>

                                <input class="form-control" type="text" placeholder="Modelo de luminaria existente"
                                       id="luminariaexistente" name="luminariaexistente">

                            </div>

                        </div>

                        <div class="col-lg-4">

                            <div class="form-group">

                                <label>Potencia de luminaria existente (W)</label>

                                <input class="form-control" type="text" placeholder="Potencia de luminaria existente"
                                       id="potencialuminaria" name="potencialuminaria">

                            </div>


                        </div>

                    </div>

                    <div class="row">

                        <div class="col-xs-12">

                            <div class="form-group">
                                <div class="" id="contenedor-imagenes">SUBIR FOTO
                                    <button type="button" class="btn btn-primary" id="btn-add-input-imagen">+</button>
                                </div>
                                <br>
                                <input type="file" class="nuevaFotoLumi" name="nuevaFotoLumi[]">
                                <p class="help-block">Peso máximo de la foto 2MB</p>
                            </div>

                        </div>

                    </div>


                    <br>
                    <hr>
                    <br>

                    <div class="row">

                        <div class="col-lg-4">

                            <div class="form-group">

                                <label>Observaciones</label>

                                <textarea rows="4" class="form-control input-lg" cols="50" name="Observaciones"
                                          placeholder="Observaciones"></textarea>

                            </div>

                        </div>
                    </div>


                </div>
                <!-- /.box-body -->

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Guardar información</button>
                </div>
            </div>

            <?php

            //$crearCenso = new ControladorCenso();
            //$crearCenso -> ctrCrearCenso();

            ?>

        </form>

    </section>
</div>


<!--content wrapper-->