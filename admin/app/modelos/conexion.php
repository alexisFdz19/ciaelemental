<?php

class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=ciaelemental", //electr_app
			            "root",
			            "");

		$link->exec("set names utf8");

		return $link;

	}

}