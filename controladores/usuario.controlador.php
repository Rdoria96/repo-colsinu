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
    }




?>
