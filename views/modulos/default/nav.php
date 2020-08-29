<!-- header -->

<header class="fixed-top header">

  <!-- top header -->
  <div class="top-header py-2 bg-white">

    <div class="container">

      <div class="row no-gutters">

        <div class="col-lg-4 text-center text-lg-left">

          <a class="text-color mr-3" href="callto:+529982149538"><strong>Síguenos en:</strong> </a>

          <ul class="list-inline d-inline">

            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="https://www.facebook.com/CIA-Elemental-101267611701636" target="_blank"><i class="ti-facebook"></i></a></li>
            <!--<li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-twitter-alt"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-linkedin"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-instagram"></i></a></li>-->

          </ul>

        </div>

        <div class="col-lg-8 text-center text-lg-right">

          <!--<ul class="list-inline">
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="notice.html">notice</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="research.html">research</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="scholarship.html">SCHOLARSHIP</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#" data-toggle="modal" data-target="#loginModal">login</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#" data-toggle="modal" data-target="#signupModal">register</a></li>
          </ul>-->

        </div>

      </div>

    </div>

  </div>

  <!-- navbar -->

  <div class="navigation w-100">

    <div class="container">

      <nav class="navbar navbar-expand-lg navbar-dark p-0">

		<a class="navbar-brand" href="index"><img src="<?php echo $url?>views/images/logo3.png" alt="logo"></a>
		
        <button id="botonMenu" class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">

          <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navigation">

          <ul class="navbar-nav ml-auto text-center">

            <li class="nav-item">

                <a class="nav-link clickMenu" data-scroll href="<?php echo $url?>index#AcercaDeCIA">Acerca de CIA</a>

            </li>

            <li class="nav-item">

                <a class="nav-link clickMenu" data-scroll href="<?php echo $url?>index#DondeOperamos">¿Dónde Operamos?</a>

            </li>

            <?php

                // Colocar dentro del ul del diseño de tu Nav el siguiente código PHP
                $item = null;
                $valor = null;
                $i = 0; // contador

                $paginas = ControladorPaginas::ctrMostrarPaginas($item, $valor);

                foreach ($paginas as $key => $value){
                    
                    // Impresión de las páginas que tienes registradas en tu BD, colocar en el diseño de tu li. href="'.$value["ruta"].'" (nombre de la ruta de las páginas). Nombre del item="'.$value["nombre"].'" (nombre que se mostrará en el nav de tu sitio web)
                    echo '
                    
                        <li class="nav-item">
                            
                            <a class="nav-link" href="'.$value["ruta"].'">'.$value["nombre"].'</a>

                        </li>
                    
                    ';

                    if (++$i == 3) break; //termina de contar solo las páginas que irán en el menú

                }

            ?>

          </ul>

        </div>

      </nav>

    </div>

  </div>

</header>