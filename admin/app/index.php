<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/usuarios.controlador.php";
require_once "controladores/categorias.controlador.php";
require_once "controladores/productos.controlador.php";
require_once "controladores/clientes.controlador.php";
require_once "controladores/ventas.controlador.php";
require_once "controladores/pyc.controlador.php";
require_once "controladores/comentariosPYC.controlador.php";
require_once "controladores/censo.controlador.php";
require_once "controladores/registro.controlador.php";
//require_once "controladores/registroController.php";
require_once "controladores/progreso.controlador.php";

require_once "modelos/usuarios.modelo.php";
require_once "modelos/categorias.modelo.php";
require_once "modelos/productos.modelo.php";
require_once "modelos/clientes.modelo.php";
require_once "modelos/ventas.modelo.php";
require_once "modelos/pyc.modelo.php";
require_once "modelos/comentariosPYC.modelo.php";
require_once "modelos/censo.modelo.php";
require_once "modelos/registro.modelo.php";
require_once "modelos/progreso.modelo.php";



$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();