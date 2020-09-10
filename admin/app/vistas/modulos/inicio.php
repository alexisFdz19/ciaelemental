<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      CIA Elemental
      
      <small>Panel de Control</small>
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Bienvenida</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="row">
      
    <?php

    if($_SESSION["rol"] =="Administrador"){

      //include "inicio/cajas-superiores.php";

    }

    ?>

    </div> 

     <div class="row">
       
        <!--<div class="col-lg-12">

          <?php

          /*if($_SESSION["rol"] =="Administrador"){
          
           include "reportes/grafico-ventas.php";

          }*/

          ?>

        </div>-->

        <div class="col-lg-6">

          <?php

          if($_SESSION["rol"] =="Administrador"){
          
           //include "reportes/productos-mas-vendidos.php";

         }

          ?>

        </div>

         <div class="col-lg-6">

          <?php

          if($_SESSION["rol"] =="Administrador"){
          
           //include "inicio/productos-recientes.php";

         }

          ?>

        </div>

         <div class="col-lg-12">
           
          <?php

          if($_SESSION["rol"] =="Administrador"){

             echo '<div class="box box-success">

             <div class="box-header">

             <h1>Bienvenid@ ' .$_SESSION["user"].'</h1>

             <a href="proyectos" class="logo">Lista de Ligas</a> </br>
             <a href="clientes" class="logo">Gestionar Categorías</a> </br>
             <a href="usuarios" class="logo">Usuarios</a>

             </div>

             </div>';

          } else {
            echo '<div class="box box-success">

             <div class="box-header">

             <h1>Bienvenid@ ' .$_SESSION["user"].'</h1>

             <a href="proyectos" class="logo">Lista de Ligas</a> </br>
             <a href="clientes" class="logo">Gestionar Categorías</a> </br>

             </div>

             </div>';
          }

          ?>

         </div>

     </div>

  </section>
 
</div>
