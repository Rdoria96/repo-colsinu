<div class="content-login">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-success">
    <div class="card-header text-center">
      <a href="#" class="h1"><b>Colsinú</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Inicia sesión para ingresar al sistema</p>

      <form  method="post">

        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Usuario" name="ingUsuario">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Contraseña" name="ingPassword">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-key"></span>
            </div>
          </div>
        </div>

        <div class="row m-2">
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-success btn-block mb-3">Iniciar sesión</button>
          </div>
          <!-- /.col -->
        </div>
        <?php

                  
          $login = new ControladorUsuarios();
          $login -> ctrIngresoUsuario();
                  
        ?>

      </form>

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->
</div>
