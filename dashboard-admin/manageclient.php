<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Gestion des Clients BF21 - Conditionnement physique et mental</title>
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
            <p class="d-block text-white">Ignacio Ito</p>
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
                  Gestion des Clients
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

            <!-- Sidebar Paramètres -->
            <li class="nav-item">
              <a href="parameters.php" class="nav-link">
                <i class="nav-icon fas fa-cog"></i>
                <p>
                  Paramètres
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
              <h1 class="m-0 text-dark">Gestion des Clients</h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
          <hr>
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <a href="createclient.php" class="nav-link"><button type="button" class="btn btn-primary btn-sm">Nouveau Client</button></a>
            <div class="card-header">
              <h3 class="card-title">Tableau des Clients</h3>
              <div class="card-tools">

                <div class="input-group input-group-sm" style="width: 150px;">

                  <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 900px;">
              <table class="table table-head-fixed">
                <thead>
                  <tr>
                    <!-- <th>ID</th> -->
                    <th>User</th>
                    <th>Couriel</th>
                    <th>Telephone</th>
                  </tr>
                </thead>
                <tbody id="tableBodyClient">
                  <!-- <tr>
                                        
                                        <td>John Doe</td>
                                        <td>joedoe@gmail.com</td>
                                        <td><span class="tag tag-success">15143462333</span></td>
                                    </tr>
                                    <tr>
                                        
                                        <td>Alexander Pierce</td>
                                        <td>joedoe@gmail.com</td>
                                        <td><span class="tag tag-warning">15143462333</span></td>
                                    </tr>
                                    <tr>
                                        
                                        <td>Bob Doe</td>
                                        <td>joedoe@gmail.com</td>
                                        <td><span class="tag tag-primary">15143462333</span></td>
                                    </tr>
                                    <tr>
                                       
                                        <td>Mike Doe</td>
                                        <td>joedoe@gmail.com</td>
                                        <td><span class="tag tag-danger">15143462333</span></td>
                                    </tr> -->

                </tbody>
              </table>
              <div class="text-center">





              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>

      </div>

      <?php
  // $msg = ' ';
  // if ($_POST) {
  //   define('HOST', '127.0.0.1');
  //   define('USUARIO', 'root');
  //   define('SENHA', '');
  //   define('DB', 'BF21');
  //   $conection = new mysqli(HOST, USUARIO, SENHA, DB) or die('Ne Pas Conectée!');
  //   // if ($conection->query($query) === TRUE) {
  //   //   $msg = 'Aliment crée avec sucess';
  //   // } else { 
  //   //   $msg = 'Error' . $conection->error;
  //   // }
  //   $conection->close();
  // }

  // $servername = "127.0.0.1";
  // $username = "root";
  // $password = "";
  // $db = "BF21";
  // // Create connection
  // $conn = mysqli_connect($servername, $username, $password, $db);
  // // Check connection
  // if (!$conn) {
  //   die("Connection failed: " . mysqli_connect_error());
  // }
  // echo "yh878yygyugugttugutgutyguygiuguyguyuyguiygyugyuuyguyytf7tft7gf7tg7tg7tg7tg7gyg7ty  Connected successfully";

  // $sql = "SELECT codtypeUtlilisateur, nomType, estAdm, estActif, motDePass FROM typeUtilisateur";
  // $result = $conn->query($sql);

  // if ($result->num_rows > 0) {
  //   // output data of each row
  //   while ($row = $result->fetch_assoc()) {
  //     echo "<br> codtypeUtlilisateur: " . $row["codtypeUtlilisateur"] . " - nomType: " . $row["nomType"] . " - estAdm: " . $row["estAdm"] . " - estActif: " . $row["estActif"] . " - motDePass: " . $row["motDePass"] . "<br>";
  //   }
  // } else {
  //   echo "0 results";
  // }

  // $conn->close();

  $mysqli = new mysqli("127.0.0.1", "root", "", "BF21");

  if ($mysqli === false) {
    die("------------------------------------------------------ERROR 1: Could not connect. "
      . $mysqli->connect_error);
  }

  $sql = "SELECT * FROM `typeUtilisateurs`";
  // $res = $mysqli->query($sql);

  if ($res = $mysqli->query($sql)) {
    if ($res->num_rows > 0) {
      echo "<table>";
      echo "<tr>";
      echo "<th>codtypeutilisateur</th>";
      echo "<th>nomType</th>";
      echo "<th>estAdm</th>";
      echo "<th>estActif</th>";
      echo "<th>motDePass</th>";
      echo "</tr>";
      while ($row = $res->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['codtypeutilisateur'] . "</td>";
        echo "<td>" . $row['nomType'] . "</td>";
        echo "<td>" . $row['estAdm'] . "</td>";
        echo "<td>" . $row['estActif'] . "</td>";
        echo "<td>" . $row['motDePass'] . "</td>";
        echo "</tr>";
      }
      echo "</table>";
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

      <!-- Creer un nouveau client -->


      <!-- /.content -->
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

  



  <!-- javascript custom -->
  <script src="dist/js/manageclient.js"></script>
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
</body>

</html>