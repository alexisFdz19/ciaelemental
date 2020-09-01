<!-- page title -->
<section class="page-title-section overlay bg-cover" data-background="<?php echo $url?>views/images/banner/banner.jpg">

  <div class="container">

    <div class="row">

      <div class="col-md-8">

        <ul class="list-inline custom-breadcrumb">

          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="">Ligas de interés</a></li>

          <li class="list-inline-item text-white h3 font-secondary "></li>

        </ul>

        <!--<p class="text-lighten">Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p>-->

      </div>

    </div>

  </div>

</section>
<!-- /page title -->

<!-- courses -->
<section class="section">

  <div class="container">

    <!-- course list -->
    <div class="row justify-content-center">

      <?php

        // Impresor de ligas
        $item = null;
        $valor = null;

        $ligas = ControladorLigas::ctrMostrarLigas($item, $valor);

        foreach ($ligas as $key => $value){

          echo '

          <div class="col-lg-4 col-sm-6 mb-5">

            <div class="card p-0 border-primary rounded-0 hover-shadow">
  
              <div class="card-body">
    
                <a href="">
                  <h4 class="card-title">'.$value["nombre"].'</h4>
                </a>

                <li class="list-inline-item" style="color: #F29C3C;"><i class="ti-calendar mr-1 text-color"></i>'.$value["fecha"].'</li>
                <br><br>
    
                <p class="card-text mb-4">'.$value["descripcion"].'</p>
    
                <a href="'.$value["link"].'" target="_blank" class="btn btn-primary btn-sm">Ver más</a>
    
              </div>
    
            </div>
    
          </div>

          ';

        }


      ?>

      <!-- course item -->
      <!--<div class="col-lg-4 col-sm-6 mb-5">

        <div class="card p-0 border-primary rounded-0 hover-shadow">

          <img class="card-img-top rounded-0" src="images/courses/course-1.jpg" alt="course thumb">

          <div class="card-body">

            <ul class="list-inline mb-2">

              <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>

              <li class="list-inline-item"><a class="text-color" href="#">Consultoría</a></li>

            </ul>

            <a href="">
              <h4 class="card-title">Liga de interés demo</h4>
            </a>

            <p class="card-text mb-4"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>

            <a href="" class="btn btn-primary btn-sm">Ver más</a>

          </div>

        </div>

      </div>-->

    <!-- /course list -->

  </div>

</section>
<!-- /courses -->