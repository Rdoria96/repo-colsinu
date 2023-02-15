<?php
require_once "conexion.php";
class ModeloUsuarios{
    /*=============================================
	MOSTRAR USUARIOS
	=============================================*/

	static public function mdlMostrarUsuarios($tabla, $item, $usuario){

		
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
			$stmt -> bindParam(":".$item, $usuario, PDO::PARAM_STR);
			$stmt -> execute();
			return $stmt -> fetch();

		

			

	}
}


?>