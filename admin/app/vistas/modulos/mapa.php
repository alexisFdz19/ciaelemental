<?php

$item = null;

$valor = null;

$proyectos = ControladorCategorias::ctrMostrarCategorias($item, $valor);
$censos = ControladorCenso::ctrMostrarCensos($item, $valor);

?>

<div class="content-wrapper">

    <script src="vistas/js/mapa_registros.js"></script>

    <section class="content-header">

        <h1>

            Mapa de proyectos


        </h1>

        <ol class="breadcrumb">

            <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

            <li class="active">Mapa de proyectos</li>

        </ol>

        <hr>

    </section>

    <div class="container-fluid">

        <div class="col-xs-12 col-md-3">

            <div class="panel panel-primary">

                <div class="panel-heading"><h4><span class="fa fa-map"></span> Controles del mapa</h4></div>

                <div class="panel-body">

                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                        <div class="panel panel-default">

                            <div class="panel-heading" role="tab" id="headingOne">

                                <div class="row">

                                    <div class="col-xs-6">

                                        <h4 class="panel-title">

                                            <a role="button" data-toggle="collapse" data-parent="#accordion"
                                               href="#collapseOne"
                                               aria-expanded="true" aria-controls="collapseOne">

                                                Censos

                                            </a>

                                        </h4>

                                    </div>

                                    <div class="col-xs-6" style="text-align: right">

                                        <button class="btn btn-primary btn-sm" onclick="checkAll('check-censo')">Seleccionar todos</button>

                                    </div>

                                </div>

                            </div>

                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                                 aria-labelledby="headingOne">

                                <div class="panel-body">

                                    <?php foreach ($censos as $censo){ ?>
                                        <?php $images = json_decode($censo["foto"]); ?>
                                        <li>
                                            <input type="checkbox" name="check-censo"
                                                   data-lat="<?php echo $censo["latitud"]?>"
                                                   data-lng="<?php echo $censo["longitud"]?>"
                                                   data-name="<?php echo $censo["modeloLE"]?>"
                                                   data-image="vistas/img/censos/<?php echo $censo["modeloLE"]?>/<?php echo $images[0] ?>"
                                                   checked>
                                            <?php echo $censo['modeloLE'] ?>
                                        </li>

                                    <?php } ?>

                                </div>

                            </div>

                        </div>

                    </div>

                    <?php foreach ($proyectos as $proyecto){ ?>

                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                        <div class="panel panel-default">

                            <div class="panel-heading" role="tab" id="headingOne">

                                <div class="row">

                                    <div class="col-xs-6">

                                        <h4 class="panel-title">

                                            <a role="button" data-toggle="collapse" data-parent="#accordion"
                                               href="#collapseOne"
                                               aria-expanded="true" aria-controls="collapseOne">

                                                <?php echo  $proyecto["categoria"] ?>

                                            </a>

                                        </h4>

                                    </div>

                                    <div class="col-xs-6" style="text-align: right">

                                        <button class="btn btn-primary btn-sm" onclick="checkAll(<?php echo $proyecto["id"] ?>)">Seleccionar todos</button>

                                    </div>

                                </div>

                            </div>

                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                                 aria-labelledby="headingOne">

                                <div class="panel-body">

                                    <ul>

                                        <?php
                                            $field = 'idProyect';
                                            $val = $proyecto["id"];
                                        ?>

                                        <?php $registros = ControladorRegistro::ctrMostrarRegistros($field, $val);
                                        ?>

                                        <?php foreach ($registros as $registro){ ?>
                                        <?php $images = json_decode($registro["foto"]); ?>
                                        <li>
                                            <input type="checkbox" name="<?php echo $val ?>"
                                                   data-lat="<?php echo $registro["latitud"]?>"
                                                   data-lng="<?php echo $registro["longitud"]?>"
                                                   data-name="<?php echo $registro["luminew"]?>"
                                                   data-image="vistas/img/luminarias/<?php echo $registro["luminew"]?>/<?php echo $images[0] ?>"
                                                   checked>
                                            <?php echo $registro['luminew'] ?>
                                        </li>

                                        <?php } ?>

                                    </ul>

                                </div>

                            </div>

                        </div>

                    </div>

                    <?php } ?>


                </div>

            </div>

        </div>

        <div class="col-xs-12 col-md-9">

            <div class="panel panel-primary">

                <div class="panel-heading">

                    <div class="row">

                        <div class="col-xs-6">

                            <h4><span class="fa fa-map-marker"></span> Mapa </h4>

                        </div>

                        <div class="col-xs-6" style="text-align: right">

                            <button class="btn btn-success btn-sm" id="actualizar-mapa" onclick="actualizarMapa()">

                                <span class="fa fa-circle"></span>  Actualizar mapa

                            </button>

                        </div>

                    </div>

                </div>

                <div class="panel-body">

                    <div id="map" style="width: 100%; height: 500px"></div>

                </div>

            </div>
        </div>

    </div>

</div>




