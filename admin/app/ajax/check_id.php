<?php 
require('../modelos/conexion.php');
sleep(1);
if (isset($_POST)) {
    $idLumi = (string)$_POST['luminaID'];
 
    $result = Conexion::conectar()->prepare(
        'SELECT * FROM registro WHERE luminId = "'.strtolower($idLumi).'"'
    );

    $result->bindValue('luminId',$idLumi);
    $result->execute();
    $verificar = $result->fetch();
 
    if ($verificar["luminId"] > 0) {
        echo '<div class="alert alert-danger"><strong>Error!</strong> ID de luminaria ya existente.</div>';
    } else {
        //echo '<div class="alert alert-success"><strong>Enhorabuena!</strong> ID disponible.</div>';
    }
}