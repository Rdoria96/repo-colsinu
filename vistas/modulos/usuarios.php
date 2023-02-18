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

    <!-- <button type="button" class="btn btn-success" id="prueba"> click </button> -->

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
                            <button class="btn btn-secondary btn-sm btnEditarUsuario" idUsuario="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarUsuario"> <i class="fas fa-user-edit"></i> </button>
                            <button class="btn btn-danger btn-sm"> <i class="fas fa-user-times"></i> </button>
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
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

          <div class="modal-header bg-secondary">
            <h4 class="modal-title fs-5" id="exampleModalLabel">  Agregar usuario  </h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">

                      <!-- CAMPO CEDULA -->
                <div class="col-md-6">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend"> <i class="fas fa-id-card-alt"></i> </span>
                  </div>
                  <input type="text" class="form-control" name="nuevoDocumento" placeholder="N° de cedula" required>
                </div>
                </div>

                <!-- CAMPO NOMBRE COMPPLETO -->
                <div class="col-md-6">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend"> <i class="fas fa-id-card-alt"></i> </span>
                  </div>
                  <input type="text" class="form-control" name="nuevoNombre" placeholder="Nombre completo" required>
                  </div>
                </div>

                <!-- CAMPO TELEFONO -->
                <div class="col-md-6">
                <div class="input-group mt-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend"> <i class="fas fa-phone"></i> </span>
                  </div>
                  <input type="text" class="form-control" name="nuevoTelefono" placeholder="Telefono" required>
                  </div>
                </div>

                <!-- CAMPO EMAIL -->
                <div class="col-md-6">
                <div class="input-group mt-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend"> <i class="fas fa-envelope"></i> </span>
                  </div>
                  <input type="email" class="form-control" name="nuevoEmail" placeholder="Correo electronico" required>
                  </div>
                </div>

                <!-- CAMPO TIPO DE SANGRE -->
                <div class="col-md-6">
                <div class="input-group mt-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend"> <i class="fas fa-user-alt-slash"></i> </span>
                  </div>
                  <input type="text" class="form-control" name="nuevoTipo" placeholder="Tipo de sangre" required maxlength="3">
                  </div>
                </div>

                  <!-- CAMPO FECHA NACIMIENTO -->
                  <div class="col-md-6">
                <div class="input-group mt-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend"> <i class="fas fa-calendar-alt"></i> </span>
                  </div>
                  <input type="date" class="form-control" name="nuevoFecha" placeholder="Tipo de sangre" required>
                  </div>
                </div>

                 <!-- CAMPO USUARIO DEL SISTEMA -->
                 <div class="col-md-6">
                      <div class="input-group mt-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupPrepend"> <i class="fas fa-lock"></i> </span>
                    </div>
                    <input type="text" class="form-control" name="nuevoUsuario" placeholder="Ingresar usuario" required>
                  </div>
                
                </div>

                   <!-- CAMPO  CONTRASEÑA DEL USUARIO DEL SISTEMA -->
                   <div class="col-md-6">
                        <div class="input-group mt-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupPrepend"> <i class="fas fa-key"></i> </span>
                    </div>
                    <input type="password" class="form-control" name="nuevoPassword" placeholder="Ingresar contraseña" required>
                  </div>
                    
                
                </div>


                 <!-- CAMPO USUARIO DEL PERFIL -->
                 <div class="col-md-12">

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

                <div class="col-md-12 mt-3">
                  <h5 class="text-danger">*Datos de contacto en caso de emergencia:</h5>
                </div>

                  <!-- CAMPO NOMBRE CONACTO EMERGENCIA -->
                  <div class="col-md-6">
                      <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupPrepend"> <i class="fas fa-user-friends"></i> </span>
                    </div>
                    <input type="text" class="form-control" name="nuevoNombreFamiliar" placeholder="Nombre completo" required>
                  </div>
                
                </div>

                <!-- CAMPO TELEFONO CONACTO EMERGENCIA -->
                <div class="col-md-6">
                      <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupPrepend"> <i class="fas fa-phone"></i> </span>
                    </div>
                    <input type="text" class="form-control" name="nuevoTelefonoFamiliar" placeholder="Telefono" required>
                  </div>
                
                </div>



            </div> 
            <!-- fin del row -->
            
          </div>
          <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-secondary">Guardar usuario</button>
            
          </div>

          <!-- LLAMADO AL METODO CREAR USUARIO, UBICADO EN EL CONTROLADOR USUARIOS -->
          
        <?php

            $crearUsuario = new ControladorUsuarios();
            $crearUsuario -> ctrCrearUsuario();

          ?>

      </form>
    </div>
  </div>
</div>





<!-- MODAL EDITAR USUARIO -->

<div class="modal fade" id="modalEditarUsuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

          <div class="modal-header bg-secondary">
            <h4 class="modal-title fs-5" id="exampleModalLabel">  Editar usuario  </h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">

          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupPrepend"> <i class="fas fa-id-card-alt"></i> </span>
            </div>
            <input type="text" class="form-control"  name="editarNombre" value="" required>
          </div>

          <div class="input-group mt-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupPrepend"> <i class="fas fa-fingerprint"></i> </span>
            </div>
            <input type="text" class="form-control"  name="editarUsuario" value="" required>
          </div>


          <div class="input-group mt-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupPrepend"> <i class="fas fa-key"></i> </span>
            </div>
            <input type="password" class="form-control" name="editarPassword" placeholder="Ingresar nueva contraseña" required>
          </div>


          <div class="input-group mt-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupPrepend"> <i class="fas fa-key"></i> </span>
            </div>
            <select class="form-control input-lg" name="editarPerfil">
                      
                      <option value="" id="editarPerfil"></option>

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
          <button type="submit" class="btn btn-secondary">Actualizar usuario</button>
            
          </div>

          <!-- AQUI VA EL LAMADO AL METODO EDITAR USUARIO UBICADO EN EL CONTROLADOR DE USUARIOS -->

          
       

      </form>
    </div>
  </div>
</div>



