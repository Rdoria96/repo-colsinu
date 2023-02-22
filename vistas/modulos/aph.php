<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Gestión de formatos APH</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="usuarios">Registros</a></li>
              <li class="breadcrumb-item active">Formato APH</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modalAgregarUsuario">
    <i class="fas fa-file-medical"></i> Nuevo formato
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
                  <tbody >
                  <tr>
                    <td>1</td>
                    <td>Internet
                      Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td> 4</td>
                    <td>
                      <button class="btn btn-success btn-xs">Activado</button>
                    </td>
                    <td>Win 95+</td>
                    <td>
                      <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                      <button type="button" class="btn btn-secondary btn-sm"> <i class="fas fa-user-edit"></i> </button>
                      <button type="button" class="btn btn-danger btn-sm"> <i class="fas fa-user-times"></i> </button>
                      </div>
                    </td>
                  </tr>
                  
                  </tbody>
                 
                </table>
        </div>
        
      </div>
    </div>



    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- MODAL AGREGAR FORMATO APH -->

  <div class="modal fade" id="modalAgregarUsuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">

      <form action="post" role="form" enctype="multipart/form-data">

          <div class="modal-header bg-secondary">
            <h4 class="modal-title fs-5" id="exampleModalLabel">  Registrar formato APH  </h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">

            
                <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">

                <li class="nav-item">
                  <a class="nav-link active" id="custom-tabs-three-paciente-tab" data-toggle="pill" href="#custom-tabs-three-paciente" role="tab" aria-controls="custom-tabs-three-paciente" aria-selected="true">Paciente</a>  
                </li>

                <li class="nav-item">
                  <a class="nav-link" id="custom-tabs-three-aseguradora-tab" data-toggle="pill" href="#custom-tabs-three-aseguradora" role="tab" aria-controls="custom-tabs-three-aseguradora" aria-selected="false">Aseguradora</a>
                  </li>

                  <li class="nav-item">
                  <a class="nav-link" id="custom-tabs-three-causa-tab" data-toggle="pill" href="#custom-tabs-three-causa" role="tab" aria-controls="custom-tabs-three-causa" aria-selected="false">Causa externa</a>
                  </li>


                  <li class="nav-item">
                  <a class="nav-link" id="custom-tabs-three-antecedentes-tab" data-toggle="pill" href="#custom-tabs-three-antecedentes" role="tab" aria-controls="custom-tabs-three-antecedentes" aria-selected="false">Antecedentes personales</a>
                  </li>

                  <li class="nav-item">
                  <a class="nav-link" id="custom-tabs-three-examen-tab" data-toggle="pill" href="#custom-tabs-three-examen" role="tab" aria-controls="custom-tabs-three-examen" aria-selected="false">Examen fisico</a>
                  </li>

                  <li class="nav-item">
                  <a class="nav-link" id="custom-tabs-three-procedimiento-tab" data-toggle="pill" href="#custom-tabs-three-procedimiento" role="tab" aria-controls="custom-tabs-three-procedimiento" aria-selected="false">Procedimiento</a>
                  </li>


                  <li class="nav-item">
                  <a class="nav-link" id="custom-tabs-three-materiales-tab" data-toggle="pill" href="#custom-tabs-three-materiales" role="tab" aria-controls="custom-tabs-three-materiales" aria-selected="false">Materiales y drogas</a>
                  </li>


                  
                </ul>

                <div class="tab-content" id="custom-tabs-three-tabContent">

                <div class="tab-pane fade active show" id="custom-tabs-three-paciente" role="tabpanel" aria-labelledby="custom-tabs-three-paciente-tab">
                  <div class="row">
                     <!-- MOVIL -->
                  <div class="col-md-2 mt-2">
                      <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend"> Movil: </span>
                      </div>

                      <input type="text" class="form-control" name="nuevoMovil" required>

                      </div>
                      </div>

                       <!-- PLACA -->

                      <div class="col-md-2 mt-2">
                      <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend"> Placa: </span>
                      </div>

                      <input type="text" class="form-control" name="nuevoPlaca" required>

                      </div>
                      </div>

                      
                    <!-- BUSCAR CLIENTE -->
                  <div class="col-md-4 mt-2">
                  <div class="input-group">
                  <input type="text" class="form-control" placeholder="ingresar documento" aria-label="Recipient's username" aria-describedby="button-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-secondary" type="button" id="button-addon2"> <i class="fas fa-search"></i> </button>
                  </div>
                  </div>
                  </div>

                  </div>
                  <!-- fin del row -->

                  <div class="row">
                    <!-- tipo de doc -->
                    
                        <div class="col-md-2">
                        <div class="input-group mt-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend"> <i class="fas fa-key"></i> </span>
                      </div>
                      <select class="form-control input-lg" name="nuevoTipoID">
                                
                                <option value="">CC</option>


                        </select>
                  
                    </div>

                    </div>

                          <!-- NUMERO DE INDENTIFICACION -->
                <div class="col-md-3 mt-3">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend"> <i class="fas fa-id-card"></i> </span>
                  </div>
                  <input type="text" class="form-control" name="nuevoID" placeholder="Numero de documento" required>
                </div>

                </div>

          <!-- FECHA DE EXPEDICIÓN -->

                <div class="col-md-3 mt-3">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend"> Fecha exp. </span>
                  </div>
                  <input type="date" class="form-control" name="nuevoFechaExpedicion" placeholder="Numero de documento" required>
                </div>
                </div>

                <!-- NOMBRES -->

                <div class="col-md-4 mt-3">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend"> <i class="fas fa-user"></i> </span>
                  </div>
                  <input type="text" class="form-control" name="nuevoNombres" placeholder="Nombres" required>
                </div>

                </div>

                <!-- APELLIDOS -->

                  <div class="col-md-4 mt-3">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupPrepend"> <i class="fas fa-user"></i> </span>
                    </div>
                    <input type="text" class="form-control" name="nuevoApellidos" placeholder="Apellidos" required>
                  </div>

                  </div>


                   <!-- SEXO -->
                    <div class="col-md-2">
                        <div class="input-group mt-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend"> <i class="fas fa-venus-mars"></i> </span>
                      </div>
                      <select class="form-control input-lg" name="nuevoGenero">
                                
                                <option value="femenino">FEMENINO</option>
                                <option value="masculino">MASCULINO</option>
                                <option value="otro">OTRO</option>


                        </select>
                  
                    </div>

                    </div>

                     <!-- PRIORIDAD -->
                  <div class="col-md-2 mt-3">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupPrepend"> <i class="fas fa-sign-language"></i> </span>
                    </div>
                    <input type="text" class="form-control" name="nuevoPrioridad" placeholder="Prioridad" required>
                  </div>

                  </div>


                  <!-- FECHA NACIMIENTO -->

         
                <div class="col-md-3 mt-3">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend"> Fecha Nac. </span>
                  </div>
                  <input type="date" class="form-control" name="nuevoFechaNacimiento"  required>
                </div>

                </div>    


        </div>
        <!-- fin del row -->

        <div class="row">
        <!-- EDAD -->
        <div class="col-md-2 mt-3">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupPrepend"> Edad </span>
            </div>
            <input type="text" class="form-control" name="nuevoEdad"  required>
          </div>

          </div>


            <!-- ESTADO CIVIL -->

            <div class="col-md-3 mt-3">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupPrepend"> <i class="fas fa-ring"></i> </span>
            </div>
            <input type="text" class="form-control" name="nuevoEstadoCivil" placeholder="Estado civil" required>
          </div>

          </div>


           <!-- ocupacion -->

           <div class="col-md-4 mt-3">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupPrepend"> <i class="fas fa-briefcase"></i> </span>
            </div>
            <input type="text" class="form-control" name="nuevoOcupacion" placeholder="Ocupación" required>
          </div>

          </div>

          
           <!-- celular -->

           <div class="col-md-3 mt-3">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupPrepend"> <i class="fas fa-phone-alt"></i> </span>
            </div>
            <input type="text" class="form-control" name="nuevoCelular" placeholder="Celular" required>
          </div>

          </div>


        </div> 
        <!-- FIN DEL ROW -->

        <div class="row">

            <!-- DIRECCION DE RESIDENCIA -->
            <div class="col-md-4 mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupPrepend"> <i class="fas fa-map-marker-alt"></i> </span>
                </div>
                <input type="text" class="form-control" name="nuevoDireccionResidencia" placeholder="Dirección de residencia" required>
              </div>

          </div>

          <!-- TELEFONO -->
          <div class="col-md-3 mt-3">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupPrepend"> <i class="fas fa-phone-square"></i> </span>
            </div>
            <input type="text" class="form-control" name="nuevoTelefono" placeholder="Telefono" required>
          </div>

          </div>

              <!-- ZONA -->
          <div class="col-md-2">
          <div class="input-group mt-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupPrepend"> <i class="fas fa-wifi"></i> </span>
            </div>
            <select class="form-control input-lg" name="nuevoZona">
                      
                      <option value="">Zona :</option>
                      <option value="urbana">MASCULINO</option>
                      <option value="rural">OTRO</option>


              </select>
        
          </div>

          </div>

          <!-- CIUDAD -->
          <div class="col-md-3 mt-3">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupPrepend"> <i class="fas fa-city"></i> </span>
            </div>
            <input type="text" class="form-control" name="nuevoCiudad" placeholder="Ciudad" required>
          </div>

          </div>
   

            </div>

            <!-- FIN DEL ROW -->


            <div class="row">

             <!-- departamento -->
          <div class="col-md-3 mt-3">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupPrepend"> <i class="fas fa-street-view"></i> </span>
            </div>
            <input type="text" class="form-control" name="nuevoDepartamento" placeholder="Departamento" required>
          </div>

          </div>
          <!-- PARENTEZCO -->
          <div class="col-md-5 mt-3">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupPrepend"> <i class="fas fa-user"></i> </span>
            </div>
            <input type="text" class="form-control" name="nuevoNombreAcompañante" placeholder="Nombres acompañante" required>
          </div>

          </div>

          <!-- parentezco -->
          <div class="col-md-3 mt-3">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupPrepend"> <i class="fas fa-users"></i> </span>
            </div>
            <input type="text" class="form-control" name="nuevoNombreAcompañante" placeholder="Parentezco" required>
          </div>

          </div>


            </div>
            <!-- fin del row -->
            
            <div class="row">

            <!-- celular parentezco -->
            <div class="col-md-4 mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupPrepend"> <i class="fas fa-phone-square"></i> </span>
                </div>
                <input type="text" class="form-control" name="CelularPariente" placeholder="Telefono" required>
              </div>

              </div>


              <!-- avisar a: -->
              <div class="col-md-4 mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupPrepend"> <i class="fa fa-user"></i> </span>
                </div>
                <input type="text" class="form-control" name="nevoAvisar" placeholder="Avisar a:" required>
              </div>

              </div>

              <div class="col-md-4 mt-3">
              <div class="input-group">
              <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupPrepend"> <i class="fas fa-phone-square"></i> </span>
              </div>
              <input type="text" class="form-control" name="CelularAvisar" placeholder="Telefono" required>
              </div>
              </div>



            </div>
            <!-- fin del row -->


                
                
                </div>
                <!--fin del tab paciente  -->

                <div class="tab-pane fade" id="custom-tabs-three-aseguradora" role="tabpanel" aria-labelledby="custom-tabs-three-aseguradora-tab">
                  <h1>Aseguradora</h1>
                
                </div>
                <!-- fin de la aseguradora -->

                <div class="tab-pane fade" id="custom-tabs-three-causa" role="tabpanel" aria-labelledby="custom-tabs-three-causa-tab">
                  <h1>Causa</h1>
                
                </div>
                <!-- fin de la causa -->


                <div class="tab-pane fade" id="custom-tabs-three-antecedentes" role="tabpanel" aria-labelledby="custom-tabs-three-antecedentes-tab">
                  <h1>Antecedentes</h1>
                
                </div>
                <!-- fin de antecedentes -->


                <div class="tab-pane fade" id="custom-tabs-three-examen" role="tabpanel" aria-labelledby="custom-tabs-three-examen-tab">
                  <h1>Examen</h1>
                
                </div>
                <!-- fin de examen -->

                <div class="tab-pane fade" id="custom-tabs-three-procedimiento" role="tabpanel" aria-labelledby="custom-tabs-three-procedimiento-tab">
                  <h1>Procedimiento</h1>
                
                </div>
                <!-- fin de procedimiento -->


                <div class="tab-pane fade" id="custom-tabs-three-materiales" role="tabpanel" aria-labelledby="custom-tabs-three-materiales-tab">
                  <h1>Materiales</h1>
                
                </div>
                <!-- fin de procedimiento -->




                </div>
                <!-- fin del div que contiene los tabs -->
                

               

           


          

            

        
         
            
         
            

            


            
          </div>
          <!-- FINAL DEL MODAL BODY -->
          <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-secondary">Guardar formato</button>
            
          </div>

      </form>
    </div>
  </div>
</div>


