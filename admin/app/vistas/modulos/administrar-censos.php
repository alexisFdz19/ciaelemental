<?php

if ($_SESSION["perfil"] == "Vendedor") {

    echo '<script>

      window.location = "inicio";

    </script>';

    return;

}

?>

<script src="vistas/js/registro_censo.js"></script>

<div class="content-wrapper">

    <section class="content-header">

        <h1>

            Censos realizados

        </h1>

        <ol class="breadcrumb">

            <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

            <li class="active">Censos realizados</li>

        </ol>

    </section>

    <section class="content">

        <div class="box">

            <!-- <div class="box-header with-border">

              <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCategoria">

                Agregar censo

              </button>

            </div> -->

            <div class="box-body">

                <table class="table table-bordered table-striped dt-responsive tablas" width="100%">

                    <thead>

                    <tr>

                        <th style="width:10px">#</th>
                        <th>Luminarias por Poste</th>
                        <th>ID Luminaria</th>
                        <th>RPU</th>
                        <th>Colonia</th>
                        <th>Calle</th>
                        <th>Altura del Poste (m)</th>
                        <th>Vialidad</th>
                        <th>Ubicación del Poste</th>
                        <th>Distancia interpostal (m)</th>
                        <th>Carriles</th>
                        <th>C O</th>
                        <th>Estado del Circuito</th>
                        <th>Alimentación</th>
                        <th>Luminaria de Alto Riesgo</th>
                        <th>Latitud</th>
                        <th>Longitud</th>
                        <th>Instalador</th>
                        <th>Tipo Poste</th>
                        <th>Modelo Luminaria</th>
                        <th>Potencia Luminaria</th>
                        <th>Observaciones</th>
                        <th>Acciones</th>
                        <th>Foto</th>
                        <th>Geolocalización</th>

                    </tr>

                    </thead>

                    <tbody>

                    <?php

                    $item = null;
                    $valor = null;

                    $censo = ControladorCenso::ctrMostrarCensos($item, $valor);

                    foreach ($censo as $key => $value) {

                        echo ' <tr>

                      <td>' . ($key + 1) . '</td>

                      <td class="text-uppercase">' . $value["lumi"] . '</td>
                      <td class="text-uppercase">' . $value["luminId"] . '</td>
                      <td class="text-uppercase">' . $value["rpu"] . '</td>
                      <td class="text-uppercase">' . $value["col"] . '</td>
                      <td class="text-uppercase">' . $value["calle"] . '</td>
                      <td class="text-uppercase">' . $value["alP"] . '</td>
                      <td class="text-uppercase">' . $value["tipoVi"] . '</td>
                      <td class="text-uppercase">' . $value["ubiP"] . '</td>
                      <td class="text-uppercase">' . $value["disIn"] . '</td>
                      <td class="text-uppercase">' . $value["carriles"] . '</td>
                      <td class="text-uppercase">' . $value["co"] . '</td>
                      <td class="text-uppercase">' . $value["estaC"] . '</td>
                      <td class="text-uppercase">' . $value["alimen"] . '</td>
                      <td class="text-uppercase">' . $value["lumiAR"] . '</td>
                      <td class="text-uppercase">' . $value["latitud"] . '</td>
                      <td class="text-uppercase">' . $value["longitud"] . '</td>
                      <td class="text-uppercase">' . $value["instalador"] . '</td>
                      <td class="text-uppercase">' . $value["tipoP"] . '</td>
                      <td class="text-uppercase">' . $value["modeloLE"] . '</td>
                      <td class="text-uppercase">' . $value["potenciaLE"] . '</td>
                      <td class="text-uppercase">' . $value["obser"] . '</td>

                      <td>

                        <div class="btn-group">
                            
                          <button class="btn btn-warning btnEditarCenso" idCenso="' . $value["idC"] . '" data-toggle="modal" data-target="#modalEditarCenso"><i class="fa fa-pencil"></i></button>';

                        if ($_SESSION["perfil"] == "Administrador") {

                            echo '<button class="btn btn-danger btnEliminarCenso" idCenso="' . $value["idC"] . '"><i class="fa fa-times"></i></button>';

                        }

                        echo '</div> </td>';


                        if ($value["foto"] != "") {

                            $images = json_decode($value["foto"]);

                            echo '<td>';

                            foreach ($images as $image) {

                                echo '<img src="vistas/img/censos/' . $value["modeloLE"] . '/' . $image . '" class="img-thumbnail" width="720">';

                            }

                            echo '</td>';

                        } else {

                            echo '<td><img src="vistas/img/luminarias/default/anonymous.png" class="img-thumbnail" width="40px"></td>';
                        }



                        echo '<td>';

                        echo '<button class="btn btn-success btn-show-map" data-toggle="modal" data-target="#modalGeo" 
                                data-lat="'.$value["latitud"] .'" data-lng="'.$value["longitud"] .'" onclick="showMap(this)">
                                <i class="fa fa-map-marker"></i>
                             </button>';

                        echo '</td>';


                    echo '</tr>';
                    }

                    ?>

                    </tbody>

                </table>

            </div>

        </div>

    </section>

</div>

<div id="modalGeo" class="modal fade" role="dialog" style="margin: auto">
    <div class="modal-dialog">
        <div class="modal-header" style="background:#3c8dbc; color:white">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Ubicación Registro </h4>
        </div>
        <div class="modal-content">
            <div id="map" style="width: 600px; height: 500px"></div>
        </div>
    </div>
</div>

<!--=====================================
MODAL EDITAR CATEGORÍA
======================================-->

<div id="modalEditarCenso" class="modal fade" role="dialog">

    <div class="modal-dialog">

        <div class="modal-content">

            <form role="form" method="post">

                <!--=====================================
                CABEZA DEL MODAL
                ======================================-->

                <div class="modal-header" style="background:#3c8dbc; color:white">

                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                    <h4 class="modal-title">Editar censo</h4>

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
                                    <select class="form-control" name="editarLumi" id="editarLumi">
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

                                    <input class="form-control" type="text" id="editarLuminId" name="editarLuminId">
                                    <input type="hidden" name="idCenso" id="idCenso" required>

                                </div>

                            </div>

                            <div class="col-lg-4">

                                <div class="form-group">

                                    <label>RPU</label>

                                    <input class="form-control" type="text" id="editarRpu" name="editarRpu">

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

                                    <input class="form-control" type="text" id="editarCol" name="editarCol">

                                </div>

                            </div>

                            <div class="col-lg-4">

                                <div class="form-group">

                                    <label>Calle</label>

                                    <input class="form-control" type="text" placeholder="Calle" id="editarCalle"
                                           name="editarCalle">

                                </div>

                            </div>

                            <div class="col-lg-4">

                                <div class="form-group">

                                    <label>Altura de poste (m)</label>

                                    <input class="form-control" type="text" id="editarAlp" name="editarAlp">

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
                                    <select class="form-control" name="editarTipoVi" id="editarTipoVi">
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
                                    <select class="form-control" name="editarUbip" id="editarUbip">
                                        <option value="Camellon">Camellon</option>
                                        <option value="Andador">Andador</option>
                                        <option value="Lateral">Lateral</option>
                                    </select>
                                </div>

                                <!--<h4>Ubicación de poste</h4>

                                    <div class="form-group">

                                        <div class="radio">
                                            <label>
                                            <input type="radio" name="ubicacionP" id="optionsRadios3" value="Camellon" checked="">
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


                                    </div>-->


                            </div>

                            <div class="col-lg-4">

                                <div class="form-group">

                                    <label>Distancia interpostal (m)</label>

                                    <input class="form-control" type="text" id="editarDisIn" name="editarDisIn">

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
                                    <select class="form-control" id="editarCarriles" name="editarCarriles">
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

                                    <input class="form-control" type="text" id="editarCo" name="editarCo">

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
                                    <select class="form-control" id="editarEstaC" name="editarEstaC">
                                        <option value="ON">ON</option>
                                        <option value="OFF">OFF</option>
                                    </select>
                                </div>

                            </div>

                            <div class="col-lg-4">

                                <div class="form-group">
                                    <label>Alimentación</label>
                                    <select class="form-control" id="editarAlimen" name="editarAlimen">
                                        <option value="Subterránea">Subterránea</option>
                                        <option value="Área">Área</option>
                                    </select>
                                </div>

                                <!--<h4>Alimentación</h4>

                                    <div class="form-group">

                                        <div class="radio">
                                            <label>
                                            <input type="radio" name="alimentacion" id="optionsRadios4" value="Subterránea" checked="">
                                            Subterránea
                                            </label>
                                        </div>

                                        <div class="radio">
                                                <label>
                                                <input type="radio" name="alimentacion" id="optionsRadios5" value="Área">
                                                Aérea
                                                </label>
                                        </div>


                                    </div>-->


                            </div>

                            <div class="col-lg-4">

                                <div class="form-group">
                                    <label>Luminaria de Alto Riesgo</label>
                                    <select class="form-control" id="editarLumiAR" name="editarLumiAR">
                                        <option value="Cerca de transformador">Cerca de transformador</option>
                                        <option value="Cable de media tensión">Cable de media tensión</option>
                                        <option value="Ninguno">Ninguno</option>
                                    </select>
                                </div>

                                <!--<h4>Luminaria de alto riesgo</h4>

                                    <div class="form-group">

                                        <div class="radio">
                                            <label>
                                            <input type="radio" name="luminaAlR" id="optionsRadios1" value="Cerca de transformador" checked="">
                                            Cerca de transformador
                                            </label>
                                        </div>

                                        <div class="radio">
                                                <label>
                                                <input type="radio" name="luminaAlR" id="optionsRadios2" value="Cable de media tensión">
                                                Cable de media tensión
                                                </label>
                                        </div>

                                        <div class="radio">
                                            <label>
                                            <input type="radio" name="luminaAlR" id="optionsRadios3" value="Ninguno">
                                            Ninguno
                                            </label>
                                        </div>

                                    </div>-->

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

                                    <input class="form-control" type="text" id="editarLatitud" name="editarLatitud">

                                </div>

                            </div>

                            <div class="col-lg-4">

                                <div class="form-group">

                                    <label>Longitud</label>

                                    <input class="form-control" type="text" id="editarLongitud" name="editarLongitud">

                                </div>

                            </div>

                            <div class="col-lg-4">

                                <div class="form-group">

                                    <label>Instalador</label>

                                    <input class="form-control" type="text" id="editarInstalador"
                                           name="editarInstalador">

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
                                        <select class="form-control" id="editarTipoP" name="editarTipoP">
                                            <option value="Metal">Metal</option>
                                            <option value="Concreto">Concreto</option>
                                            <option value="Madera">Madera</option>
                                            <option value="Otro">Otro</option>
                                        </select>
                                    </div>

                                    <!--<h4>Tipo de poste</h4>

                                        <div class="form-group">

                                                <div class="radio">
                                                    <label>
                                                    <input type="radio" name="editarTipoP" id="metal" value="metal" checked="">
                                                    Metal
                                                    </label>
                                                </div>

                                                <div class="radio">
                                                        <label>
                                                        <input type="radio" name="editarTipoP" id="concreto" value="concreto">
                                                    Concreto
                                                        </label>
                                                </div>

                                                <div class="radio">
                                                    <label>
                                                    <input type="radio" name="editarTipoP" id="madera" value="madera">
                                                    Madera
                                                    </label>
                                                </div>

                                                <div class="radio">
                                                    <label>
                                                    <input type="radio" name="editarTipoP" id="otro" value="otro">
                                                    Otro
                                                    </label>
                                                </div>

                                        </div>-->

                                </div>

                            </div>

                            <div class="col-lg-4">

                                <div class="form-group">

                                    <label>Modelo de luminaria existente</label>

                                    <input class="form-control" type="text" id="editarLumiE" name="editarLumiE">

                                </div>

                            </div>

                            <div class="col-lg-4">

                                <div class="form-group">

                                    <label>Potencia de luminaria existente (W)</label>

                                    <input class="form-control" type="text"
                                           placeholder="Potencia de luminaria existente" id="editarPotencia"
                                           name="editarPotencia">

                                </div>

                            </div>

                        </div>

                        <div class="row">

                            <div class="col-lg-4">

                                <div class="form-group">

                                    <label>Observaciones</label>

                                    <textarea rows="4" class="form-control input-lg editarObser" cols="50"
                                              name="editarObser" placeholder="Observaciones"></textarea>

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

                    <button type="submit" class="btn btn-primary">Guardar cambios</button>

                </div>

                <?php

                $editarCenso = new ControladorCenso();
                $editarCenso->ctrEditarCenso();

                ?>

            </form>

        </div>

    </div>

</div>

<?php

$borrarCenso = new ControladorCenso();
$borrarCenso->ctrBorrarCenso();

?>


