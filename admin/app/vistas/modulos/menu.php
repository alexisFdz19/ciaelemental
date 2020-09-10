<aside class="main-sidebar">

	 <section class="sidebar">

		<ul class="sidebar-menu">

		<?php

		if($_SESSION["rol"] == "Administrador" || $_SESSION["rol"] == "Especial"){

			echo '<li>

				<a href="proyectos">

					<i class="fa fa-th"></i>
					<span>Ligas</span>

				</a>

			</li>

			<li>

				<a href="clientes">

					<i class="fa fa-gg"></i>
					<span>Gestionar Categorias</span>

				</a>

			</li>';

		}

		if($_SESSION["rol"] == "Administrador"){

			echo '<!--<li>

				<a href="proyectos">

					<i class="fa fa-th"></i>
					<span>Proyectos</span>

				</a>

			</li>-->

			<li>

			<a href="usuarios">

					<i class="fa fa-user"></i>
					<span>Usuarios</span>

				</a>

			</li>

			<!--<li>

				<a href="materiales">

					<i class="fa fa-product-hunt"></i>
					<span>Materiales</span>

				</a>

			</li>-->';

		}

		if($_SESSION["rol"] == "Administrador" || $_SESSION["rol"] == "Vendedor"){

			echo '<!--<li>

				<a href="clientes">

					<i class="fa fa-gg"></i>
					<span>Clientes</span>

				</a>

			</li>-->';

		}

		if($_SESSION["rol"] == "Administrador" || $_SESSION["rol"] == "Especial"){

			echo '<li>

				<a href="https://www.ciaelemental.com/">

				<i class="fas fa-globe-americas"></i>
					<span>Sitio Web</span>

				</a>

			</li>';

		}

		if($_SESSION["rol"] == "Administrador" || $_SESSION["rol"] == "Vendedor"){

			echo '<!--<li class="treeview">

				<a href="#">

				<i class="fas fa-file-signature"></i>
					
					<span>Censos y registros</span>
					
					<span class="pull-right-container">
					
						<i class="fa fa-angle-left pull-right"></i>

					</span>

				</a>

				<ul class="treeview-menu">
					

					<li>

						<a href="nuevo-censo">
							
							<i class="fa fa-circle-o"></i>
							<span>Crear nuevo censo</span>

						</a>

					</li>-->';

					if($_SESSION["rol"] == "Administrador"){

					echo '<!--<li>

						<a href="administrar-censos">
							
							<i class="fa fa-circle-o"></i>
							<span>Administrar censos</span>

						</a>

					</li>
					
					<li>

						<a href="administrar-registros">
							
							<i class="fa fa-circle-o"></i>
							<span>Administrar registros</span>

						</a>

					</li>-->';

					}

				

				echo '</ul>

			</li>';

		}

		if($_SESSION["rol"] == "Administrador" || $_SESSION["rol"] == "Vendedor"){

			echo '<!--<li class="treeview">

				<a href="#">

					<i class="fa fa-list-ul"></i>
					
					<span>Progreso</span>
					
					<span class="pull-right-container">
					
						<i class="fa fa-angle-left pull-right"></i>

					</span>

				</a>

				<ul class="treeview-menu">
					
					<!--<li>

						<a href="historial-progresos">
							
							<i class="fa fa-circle-o"></i>
							<span>Historial de progresos</span>

						</a>

					</li>

					<li>

						<a href="agregar-progreso">
							
							<i class="fa fa-circle-o"></i>
							<span>Agregar progreso</span>

						</a>

					</li>-->';

					/*if($_SESSION["perfil"] == "Administrador"){

					echo '<li>

						<a href="#">
							
							<i class="fa fa-circle-o"></i>
							<span>Reporte de avances</span>

						</a>

					</li>';

					}*/

				

				echo '</ul>

			</li>';

		}

		?>

		</ul>

	 </section>

</aside>