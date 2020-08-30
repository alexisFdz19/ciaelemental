<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>CIA Elemental: <?php if(isset($this->titulo)) {echo $this->titulo; } ?></title>

	<link rel="stylesheet" type="text/css" href="<?php echo APP_URL."views/layouts/default/css/bootstrap.min.css"?>">

	<link rel="stylesheet" type="text/css" href="<?php echo APP_URL."views/layouts/default/css/style.css"?>">

	<!-- **Favicon** -->
    <link rel="shortcut icon" href="<?php echo APP_URL."views/layouts/default/img/favicon2.png"?>" type="image/x-icon" />

</head>

<body>

	<header class="fixed-top header">

		<!-- top header -->
		<div class="top-header py-2" style="background-color: #1A1A37;">

				<div class="container">

				<div class="row no-gutters">

					<div class="col-lg-4 text-center text-lg-left">

					<!--<a class="text-color mr-3" href="callto:+529982149538"><strong>Síguenos en:</strong> </a>-->

					<ul class="list-inline d-inline">

						<!--<li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="https://www.facebook.com/CIA-Elemental-101267611701636" target="_blank"><i class="ti-facebook"></i></a></li>-->
						<!--<li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-twitter-alt"></i></a></li>
						<li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-linkedin"></i></a></li>
						<li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-instagram"></i></a></li>-->

					</ul>

					</div>

					<div class="col-lg-8 text-center text-lg-right">

					<ul class="list-inline">

						<li class="list-inline-item">
							
							<a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="<?php echo APP_URL."../../"; ?>" style="background-color: #ffffff";>Regresar al Sitio Web</a>
						
						</li>

						<!--<li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="research.html">research</a></li>

						<li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="scholarship.html">SCHOLARSHIP</a></li>

						<li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#" data-toggle="modal" data-target="#loginModal">login</a></li>

						<li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#" data-toggle="modal" data-target="#signupModal">register</a></li>-->

					</ul>

					</div>

				</div>

			</div>

		</div>

	</header>

	<div class="container wrapper" style="margin-top: 70px; margin-bottom: 70px;">
	
	<?php

		if($this->_msg->hasMessages()){

			echo $this->_msg->display();

		}

	?>

</body>
