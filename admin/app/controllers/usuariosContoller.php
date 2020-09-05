<?php

class Usuarios extends AppController{

	public function __contruct(){
		parent::__contruct();
	}

	public function index(){
		$usuarios = $this->db->find("usuarios", "all");	
		$this->set("usuarios", $usuarios);
	}

	public function login(){
		if($_POST){
			$pass = new Password();
			$filter = new Validations();
			$auth = new Authorization();

			$username = $filter->sanitizeText($_POST["username"]);
			$password = $filter->sanitizeText($_POST["password"]);

			$options['conditions'] = " username = '$username'";
			$usuario = $this->db->find("usuarios", "first", $options);

			if($pass->isValid($password, $usuario['password'])){
				$auth->login($usuario);
				$this->redirect(array("controller"=>"tareas"));
			}else{
				echo "Usuario Invalido";
			}
		}
	}

	public function logout(){
		$auth = new Authorization();
		$auth->logout();
	}	
}