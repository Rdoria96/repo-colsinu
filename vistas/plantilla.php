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

   <!-- DataTables -->
   <link rel="stylesheet" href="vistas/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="vistas/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="vistas/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/dist/css/adminlte.css">

    <!-- SWEET ALERT 2 CSS -->
    <link rel="stylesheet" href="vistas/plugins/sweetalert2/sweetalert2.min.css">

 

  <!-- jQuery -->
<script src="vistas/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap 4 -->
<script src="vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="vistas/dist/js/adminlte.js"></script>

<!-- DataTables  & Plugins -->
<script src="vistas/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="vistas/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="vistas/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="vistas/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="vistas/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="vistas/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="vistas/plugins/jszip/jszip.min.js"></script>
<script src="vistas/plugins/pdfmake/pdfmake.min.js"></script>
<script src="vistas/plugins/pdfmake/vfs_fonts.js"></script>
<script src="vistas/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="vistas/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="vistas/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- SWEET ALERT2 -->
<script src="vistas/plugins/sweetalert2/sweetalert2.all.min.js"></script>



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
        $_GET["ruta"] == "aph" ||
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

<!-- js propios del proyecto -->
<script src="vistas/js/index.js"></script>
<script src="vistas/js/usuarios.js"></script>


</body>
</html>
