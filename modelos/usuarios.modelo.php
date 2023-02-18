<?php
require_once "conexion.php";
class ModeloUsuarios{
    /*=============================================
	MOSTRAR USUARIOS
	=============================================*/

	static public function mdlMostrarUsuarios($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}
		

		//$stmt -> close();

		$stmt = null;
		

			

	}


	
	/*=============================================
	REGISTRO DE USUARIO
	=============================================*/

	static public function mdlIngresarUsuario($tabla, $datos){
		//ESTOS CAMPOS DEBEN TENER LOS MISMO NOMBRES DE LA BASE DE DATOS
		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(cedula, nombre, telefono, email, tipo_sangre, fecha_nacimiento, usuario, password, perfil, nombre_familiar, telefono_familiar) VALUES (:cedula, :nombre, :telefono, :email, :tipo_sangre, :fecha_nacimiento, :usuario, :password, :perfil, :nombre_familiar, :telefono_familiar)");

		
		$stmt->bindParam(":cedula", $datos["cedula"], PDO::PARAM_STR);
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
		$stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
		$stmt->bindParam(":tipo_sangre", $datos["tipo_sangre"], PDO::PARAM_STR);
		$stmt->bindParam(":fecha_nacimiento", $datos["fecha_nacimiento"], PDO::PARAM_STR);
		$stmt->bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);
		$stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
		$stmt->bindParam(":perfil", $datos["perfil"], PDO::PARAM_STR);
		$stmt->bindParam(":nombre_familiar", $datos["nombre_familiar"], PDO::PARAM_STR);
		$stmt->bindParam(":telefono_familiar", $datos["telefono_familiar"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";	

		}else{

			return "error";
		
		}

		//$stmt->close();
		
		$stmt = null;

	}
}


?>