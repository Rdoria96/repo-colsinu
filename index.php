<?php
require_once "controladores/plantilla.controlador.php";
require_once "controladores/usuario.controlador.php";

require_once "modelos/usuarios.modelo.php";


//llama a la plantilla
$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();


?>