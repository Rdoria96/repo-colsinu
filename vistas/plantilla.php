<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Colsinú</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="vistas/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/dist/css/adminlte.css">

<!-- toastr -->
  <link rel="stylesheet" href="vistas/plugins/toastr/toastr.css">
</head>

<body class="hold-transition sidebar-mini sidebar-collapse">
<!-- Site wrapper -->

    <?php

    if(isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok"){

    echo '<div class="wrapper">';

    include "modulos/cabezote.php";
    include "modulos/menu.php";
    if(isset($_GET["ruta"])){
      if($_GET["ruta"] == "inicio" ||
        $_GET["ruta"] == "usuarios" ||
        $_GET["ruta"] == "salir"){

          include "modulos/".$_GET["ruta"].".php";
        

      }else{
        include "modulos/404.php";
      }

    }else{

      include "modulos/inicio.php";

    }

    
    
    include "modulos/footer.php";
    echo '</div>';
    
  }else{
    include "modulos/login.php";
  }
    
    ?>
  

  
  <!-- /.control-sidebar -->

<!-- ./wrapper -->

<!-- jQuery -->
<script src="vistas/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap 4 -->
<script src="vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="vistas/dist/js/adminlte.min.js"></script>

<!-- tosast -->
<script src="vistas/plugins/toastr/toastr.min.js"></script>

</body>
</html>
