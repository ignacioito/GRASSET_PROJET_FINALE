<?php
session_start();
include('../website/verifierLogin.php');
$current = $_SESSION['utilisateur'];
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Gestion des Aliments BF21 - Conditionnement physique et mental</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- cdn datatables -->
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/js/datatables.">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="dashboard.php" class="brand-link">
        <img src="dist/img/bf21.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-4" style="opacity: .8;">
        <span class="brand-text font-weight-light">Admin BF21</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/user2-160x160.jpeg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <p class="d-block text-white"><?php echo $_SESSION['utilisateur']; ?></p>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                       with font-awesome or any other icon font library -->
            <!-- Dashboard -->
            <li class="nav-item">
              <a href="dashboard.php" class="nav-link">
                <i class="nav-icon fas fa-home"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <!-- Sidebar create plan -->
            <li class="nav-item">
              <a href="createplan.php" class="nav-link">
                <i class="nav-icon fas fa-calendar-plus"></i>
                <p>
                  Créer un Plan
                </p>
              </a>
            </li>
            <!-- Sidebar Gestion des Clients -->
            <li class="nav-item">
              <a href="manageclient.php" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Gestion des Utilisateurs
                </p>
              </a>
            </li>

            <!-- Sidebar Gestion des Aliments -->
            <li class="nav-item">
              <a href="manageingredients.php" class="nav-link">
                <i class="nav-icon fas fa-utensils"></i>
                <p>
                  Gestion des Aliments
                </p>
              </a>
            </li>

            <!-- Logout -->
            <li class="nav-item">
              <a href="logout.php" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                  Logout
                </p>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </aside>
    

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Gestion des Aliments</h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
          <hr>
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      
          
    <div class="container">
        <form method="post" action="efacerIngredient.php">
        <label> Aliments
          <br>
          <input type="text" name="alimentEfaccer" />
        </label>

          <input  type="submit" class="btn btn-danger"  value="Effacer">
        <br>
        <br>
    </div>
                
      <div class="container">
        <form method="post" action="manageingredients.php">
          <label> Aliments
            <br>
            <input type="text" name="nomAliment" />
          </label>

          <label> Unite de Mesure
            <br>
            <input type="text" name="uniteMesure" />
          </label>

          <label> Calories
            <br>
            <input type="text" name="calorie" />
          </label>

          <label> Lipides
            <br>
            <input type="text" name="lipid" />
          </label>

          <label> Glucides
            <br>
            <input type="text" name="glucide" />
          </label>

          <label> Proteines
            <br>
            <input type="text" name="proteine" />
          </label>

          <label> Fibres
            <br>
            <input type="text" name="fibre" />
          </label>

          <label> Glycemique
            <br>
            <input type="text" name="glycemique" />
          </label>
          <br>
          <br>
          <input type="submit" class="btn btn-success" value="Mettre à Jour">
          <br>
          <br>
      </div>
      <!-- Content Wrapper. Contains page content -->

      <div class="container">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Aliments</h1>
              </div>

            </div>
          </div><!-- /.container-fluid -->
        </section>





        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-12">
              <div class="card">
<!--                <div class="card-header">
                  <nav class="navbar navbar-light bg-light justify-content-right">
                    <form class="form-inline">
                      <input class="form-control col" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-success my-2 col col-lg-2" type="submit">Search</button>
                    </form>
                  </nav>
                </div>-->
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example" class="table table-bordered table-hover">
                    <?php
                    include('../website/connexion.php');
                    $mysqli = $connexion;// new mysqli("23.235.197.135", "instit43_bf21_admin", "@bfnutri21", "instit43_bf21_test");

                    if ($mysqli === false) {
                      die("------------------------------------------------------ERROR 1: Could not connect. "
                        . $mysqli->connect_error);
                    }

                    $sql = "SELECT * FROM `aliment`";
                    // $res = $mysqli->query($sql);

                    if ($res = $mysqli->query($sql)) {
                      if ($res->num_rows > 0) {
                        echo "<thead>";
                        echo "<tr>";
                        echo "<th>Aliments</th>";
                        echo "<th>Unite de Mesure</th>";
                        #echo "<th>Type d'Aliment</th>";
                        echo "<th>Calories</th>";
                        echo "<th>Lipides</th>";
                        echo "<th>Glucides</th>";
                        echo "<th>Proteins</th>";
                        echo "<th>Fibres</th>";
                        echo "<th>Glycemique</th>";
                        echo "</tr>";
                        echo "</thead>";
                        while ($row = $res->fetch_assoc()) {
                          echo "<tbody>";
                          echo "<tr>";
                          echo "<td>" . $row['nomAliment'] . "</td>";
                          echo "<td>" . $row['uniteMesure'] . "</td>";
                          #echo "<td>" . $row['typeAliment'] . "</td>";
                          echo "<td>" . $row['calorie'] . "</td>";
                          echo "<td>" . $row['lipid'] . "</td>";
                          echo "<td>" . $row['glucide'] . "</td>";
                          echo "<td>" . $row['proteine'] . "</td>";
                          echo "<td>" . $row['fibre'] . "</td>";
                          echo "<td>" . $row['glycemique'] . "</td>";
                          echo "</tr>";
                          echo "</tbody>";
                        }
                        $res->free();
                      } else {
                        echo "------------------------------------------------------ERROR 3: No matching records are found. ";
                      }
                    } else {
                      echo "------------------------------------------------------ERROR 2: Could not able to execute $sql. "
                        . $mysqli->error;
                    }
                    $mysqli->close();
                    ?>
                    <!-- <tfoot>
                      <tr>
                        <th>Aliments</th>
                        <th>Unite de Mesure</th>
                        <th>Type d'Aliment</th>
                        <th>Calories</th>
                        <th>Lipides</th>
                        <th>Glucides</th>
                        <th>Proteins</th>
                        <th>Fibres</th>
                        <th>Glycemique</th>
                      </tr>
                    </tfoot> -->
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
    </div>
    
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.0.0-rc.1
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="plugins/jqvmap/maps/jquery.vmap.world.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!--Data Tables-->
  <script src="plugins/datatables/jquery.dataTables.js"></script>

  <!-- page script -->
  <script>
    $(function() {
      $("#example1").DataTable();
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,
      });
    });
  </script>
</body>

</html>
