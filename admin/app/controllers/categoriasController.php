<?php

class categoriasController extends AppController{

    	public function __construct(){

		parent::__construct();

		$this->_view = new View(new Request);
		$this->_messages = new \Plasticbrain\flashMessages\flashMessages();

    }
    
    
	public function index(){

		$categorias = $this->loadmodel("categoria");
		$this->_view->categorias = $categorias->listarTodo();
		
		$this->_view->titulo = "Listado de categorías";
		$this->_view->renderizar("index");
	
	}

	public function Agregar(){

		if($_POST){

			$categorias = $this->loadModel("categoria");

				if ($categorias->guardar($_POST)){

					$this->_messages->success(

						'Catcategorias guardada correctamente', 
						$this->redirect(array("controller"=>"categorias"))

					);

				}

		}

		$categorias = $this->loadModel("categoria");
		$this->_view->categorias = $categorias->listarTodo();

		$this->_view->titulo = "Agregar tarea";
		$this->_view->renderizar("agregar");

	}

	public function editar($id=null){

		if($_POST){

			$categorias = $this->loadModel("categoria");

			if($categorias->actualizar($_POST)){

				$this->_messages->success(
				
					'Categoría editada correctamente', 
					$this->redirect(array("controller"=>"categorias"))

				);

			}else{


				$this->_messages->error(
				
					'Error al editar la categoría', 
					$this->redirect(array("controller"=>"categorias"))

				);

			}
			

		}

		$categorias = $this->loadModel("categoria");
		$this->_view->categorias = $categorias->buscarPorId($id);

		$this->_view->titulo = "Editar tarea";
		$this->_view->renderizar("editar");

	}

		public function eliminar ($id){

		$categorias = $this->loadModel("categoria");
		$registro = $categorias->buscarPorId($id);

		if(!empty($registro)){

			$categorias->eliminarPorId($id);
			
			$this->_messages->success(
				
				'Categoría eliminada correctamente', 
				$this->redirect(array("controller"=>"categorias"))

			);

		}

	}

}