<?php

class ControladorUsuarios{
    static public function ctrIngresoUsuario(){
        if(isset($_POST["ingUsuario"])){
            if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingUsuario"]) &&
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingPassword"]) ){
                     $tabla = "usuarios";

                    $item = "usuario";
                    $usuario = $_POST["ingUsuario"];

                    $respuesta = ModeloUsuarios::MdlMostrarUsuarios($tabla, $item, $usuario);

                    if($respuesta["usuario"] == $_POST["ingUsuario"] && $respuesta["password"] == $_POST["ingPassword"]){
                        $_SESSION["iniciarSesion"] = "ok";

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
                $datos = array("nombre" => $_POST["nuevoNombre"],
					           "usuario" => $_POST["nuevoUsuario"],
					           "password" => $_POST["nuevoPassword"],
					           "perfil" => $_POST["nuevoPerfil"]);
                
                 $respuesta = ModeloUsuarios::mdlIngresarUsuario($tabla, $datos);
                 if($respuesta == "ok"){
                    echo '<script>

					swal.fire({
                        position: "bottom-end",
                        icon: "success",
                        title: "Usuario creado correctamente",
                        showConfirmButton: false,
                        timer: 1800

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




}




?>
