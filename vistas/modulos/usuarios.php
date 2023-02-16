<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Gestión de usuarios</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="usuarios">Usuarios</a></li>
              <li class="breadcrumb-item active">Gestionar usuario</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modalAgregarUsuario">
      <i class="fas fa-user-plus"></i> Crear usuario
    </button>

    <div class="container-fluid mt-3">
      <div class="row">
        <div class="col-12">
        <table id="example2" class="table table-bordered table-hover dt-responsive table-sm tablas">
                  <thead>
                  <tr>
                    <th style="width: 10px;">#</th>
                    <th>Nombre</th>
                    <th>Usuario</th>
                    <th>Perfil</th>
                    <th>Estado</th>
                    <th>Último login</th>
                    <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>

                    <?php
                     $item = null;
                     $valor = null;
                      $usuarios = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);
                      foreach ($usuarios as $key => $value){
                        echo '

                        <tr>
                        <td>'.($key+1).'</td>
                        <td>'.$value["nombre"].'</td>
                        <td>'.$value["usuario"].'</td>';
                        echo '<td>'.$value["perfil"].'</td>';
                        if($value["estado"] != 0){
                          echo '<td><button class="btn btn-success btn-xs btnActivar" idUsuario="'.$value["id"].'" estadoUsuario="0">Activado</button></td>';
                        }else{

                          echo '<td><button class="btn btn-danger btn-xs btnActivar" idUsuario="'.$value["id"].'" estadoUsuario="1">Desactivado</button></td>';
      
                        }  

                        echo '<td>'.$value["ultimo_login"].'</td>
                        <td>

                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <button type="button" class="btn btn-secondary btn-sm"> <i class="fas fa-user-edit"></i> </button>
                            <button type="button" class="btn btn-danger btn-sm"> <i class="fas fa-user-times"></i> </button>
                      </div>
      
      
                        </td>
      
                      </tr>';
                     
                      }

                    
                    ?>

                  
                  
                  </tbody>
                 
                </table>
        </div>
        
      </div>
    </div>



    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- MODAL AGREGAR USUARIO -->

  <div class="modal fade" id="modalAgregarUsuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <form role="form" method="post">

          <div class="modal-header bg-secondary">
            <h4 class="modal-title fs-5" id="exampleModalLabel">  Agregar usuario  </h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">

          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupPrepend"> <i class="fas fa-id-card-alt"></i> </span>
            </div>
            <input type="text" class="form-control" name="nuevoNombre" placeholder="Ingresar nombre y apellido" required>
          </div>

          <div class="input-group mt-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupPrepend"> <i class="fas fa-fingerprint"></i> </span>
            </div>
            <input type="text" class="form-control" name="nuevoUsuario" placeholder="Ingresar usuario" required>
          </div>


          <div class="input-group mt-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupPrepend"> <i class="fas fa-key"></i> </span>
            </div>
            <input type="password" class="form-control" name="nuevoPassword" placeholder="Ingresar contraseña" required>
          </div>


          <div class="input-group mt-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupPrepend"> <i class="fas fa-key"></i> </span>
            </div>
            <select class="form-control input-lg" name="nuevoPerfil">
                      
                      <option value="">Selecionar perfil</option>

                      <option value="Administrador">Administrador</option>

                      <option value="Paramedico">Paramedico</option>

                      <option value="Radio Operador">Radio Operador</option>

                      <option value="Radicador">Radicador</option>

                      <option value="Auxiliar">Auxiliar</option>

              </select>
        
          </div>


          
            
          </div>
          <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-secondary">Guardar usuario</button>
            
          </div>
          
        <?php

            $crearUsuario = new ControladorUsuarios();
            $crearUsuario -> ctrCrearUsuario();

?>

      </form>
    </div>
  </div>
</div>


