<?php

class ControladorUsuarios{

    // INGRESO DE USUARIOS
    static public function ctrIngresoUsuario(){
        if(isset($_POST["ingUsuario"])){

            if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingUsuario"])){

                $encriptar = crypt($_POST["ingPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

                     $tabla = "usuarios";

                    $item = "usuario";
                    $valor = $_POST["ingUsuario"];

                    $respuesta = ModeloUsuarios::MdlMostrarUsuarios($tabla, $item, $valor);

                    if($respuesta["usuario"] == $_POST["ingUsuario"] && $respuesta["password"] == $encriptar){

                        $_SESSION["iniciarSesion"] = "ok";
                        $_SESSION["id"] = $respuesta["id"];
						$_SESSION["nombre"] = $respuesta["nombre"];
						$_SESSION["usuario"] = $respuesta["usuario"];
						$_SESSION["perfil"] = $respuesta["perfil"];

                        echo '<script>

								window.location = "inicio";

							</script>';

                        


                    }else{
                        echo '
    
                        <div class="alert alert-danger" role="alert">
                        Error al ingresar, por favor ingresa los datos correctamente.
                        </div>
                        ';
                        
                    }
                
                 

                }

            }

        }



/*=============================================
	REGISTRO DE USUARIO
	=============================================*/

	static public function ctrCrearUsuario(){
        if(isset($_POST["nuevoUsuario"])){
            if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoNombre"]) &&
			   preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevoUsuario"]) &&
			   preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevoPassword"])){

                $tabla = "usuarios";
        
                $encriptar = crypt($_POST["nuevoPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

                $datos = array("nombre" => $_POST["nuevoNombre"],
					           "usuario" => $_POST["nuevoUsuario"],
					           "password" => $encriptar,
					           "perfil" => $_POST["nuevoPerfil"]);
                
                 $respuesta = ModeloUsuarios::mdlIngresarUsuario($tabla, $datos);
                 if($respuesta == "ok"){

                    echo '<script>

                Swal.fire({
                    icon: "success",
                    title: "Exito!",
                    text: "¡El usuario se ha creado correctamente!",
                    confirmButtonColor: "#007bff",
                    confirmButtonText: "Aceptar" ,

                }).then(function(result){

                    if(result.value){
                    
                        window.location = "usuarios";

                    }

                });
            

            </script>';
                    
                 }



               }else{

                echo '<script>

                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "¡El usuario no puede ir vacío o llevar caracteres especiales!",
                    confirmButtonColor: "#007bff",
                    confirmButtonText: "Aceptar" ,

                }).then(function(result){

                    if(result.value){
                    
                        window.location = "usuarios";

                    }

                });
            

            </script>';

               }

        }

    }


    	/*=============================================
	MOSTRAR USUARIO
	=============================================*/

	static public function ctrMostrarUsuarios($item, $valor){

		$tabla = "usuarios";

		$respuesta = ModeloUsuarios::MdlMostrarUsuarios($tabla, $item, $valor);

		return $respuesta;
	}



}




?>
