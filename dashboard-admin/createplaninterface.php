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
        <img src="dist/img/bf21.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-4"
          style="opacity: .8;">
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
                            <h1 class="m-0 text-dark">Créer un Plan Interface</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                    <hr>
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->


            <div class="container">
                <h2>Plan alimentaire de John Doe</h2>
                <!-- days nav-bar -->
                <ul class="nav nav-pills" role="tablist">
                    <li class="nav-item"><a class="nav-link active" data-toggle="pill" href="#day1">Jour 1</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="pill" href="#day2">Jour 2</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="pill" href="#day3">Jour 3</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="pill" href="#day4">Jour 4</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="pill" href="#day5">Jour 5</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="pill" href="#day6">Jour 6</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="pill" href="#day7">Jour 7</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="pill" href="#user">Info client</a></li>
                </ul>
                <!-- days -->
                <div class="tab-content showBorders">
                    <!-- day1 -->
                    <div id="day1" class="tab-pane container active">
                        <h2>Jour 1</h2>
                        <div class="form-group">
                            <div id="ingDiv">
                                <!--Make sure the form has the autocomplete function switched off:-->
                                <form autocomplete="off" action="/action_page.php">
                                    <label for="ingNameDay1">Aliment:</label>
                                    <div class="autocomplete">
                                        <input id="ingNameDay1" type="text" name="ingNameDay1" placeholder="Aliment">
                                    </div>
                                </form>
                            </div>
                            <div id="qttDiv">
                                <label for="foodQtt">Quantite:</label>
                                <input type="text" name="foodQtt" class="qttInp">
                                <select>
                                    <option value="g">g</option>
                                    <option value="lb">lb</option>
                                    <option value="L">L</option>
                                    <option value="unit">Unité</option>
                                </select>
                            </div>
                            <div id="mealNumberDiv">
                                <label>Numéro du repas:</label>
                                <select id="mealNumbSelection1">
                                    <option value="meal1">1</option>
                                    <option value="meal2">2</option>
                                    <option value="meal3">3</option>
                                    <option value="meal4">4</option>
                                    <option value="meal5">5</option>
                                    <option value="meal6">6</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success" onclick="addDay1()">Ajouter</button>
                        </div>
                        <div id="meals">
                            <div class="showBorders">Repas 1:
                                <ul class="showBorders" id="day1meal1">
                                    <li>Poulet 200g</li>
                                    <li>Haricots 100g</li>
                                </ul>
                            </div>
                            <div class="showBorders">Repas 2:
                                <ul class="showBorders" id="day1meal2">
                                </ul>
                            </div>
                            <div class="showBorders">Repas 3:
                                <ul class="showBorders" id="day1meal3">
                                </ul>
                            </div>
                            <div class="showBorders">Repas 4:
                                <ul class="showBorders" id="day1meal4">
                                </ul>
                            </div>
                            <div class="showBorders">Repas 5:
                                <ul class="showBorders" id="day1meal5">
                                </ul>
                            </div>
                            <div class="showBorders">Repas 6:
                                <ul class="showBorders" id="day1meal6">
                                </ul>
                            </div>
                            <div>Calories restantes:
                                <div id="day1Calories"></div>
                            </div>
                            <div>Protéines restants:
                                <div id="day1Proteins"></div>
                            </div>
                            <div>Lipides restants:
                                <div id="day1Lipids"></div>
                            </div>
                            <div>Glucides restants:
                                <div id="day1Carbohydrates"></div>
                            </div>
                        </div>
                    </div>
                    <!-- day2 -->
                    <div id="day2" class="tab-pane container">
                        <h2>Jour 2</h2>
                        <div class="form-group">
                            <!--Make sure the form has the autocomplete function switched off:-->
                            <form autocomplete="off" action="/action_page.php">
                                <label for="ingNameDay2">Aliment:</label>
                                <div class="autocomplete">
                                    <input id="ingNameDay2" type="text" name="ingNameDay2" placeholder="Aliment">
                                </div>
                            </form>
                            <div id="qttDiv">
                                <label for="foodQtt">Quantite:</label>
                                <input type="text" name="foodQtt" class="qttInp">
                                <select>
                                    <option value="g">g</option>
                                    <option value="lb">lb</option>
                                    <option value="L">L</option>
                                    <option value="unit">Unité</option>
                                </select>
                            </div>
                            <div id="mealNumberDiv">
                                <label>Numéro du repas:</label>
                                <select id="mealNumbSelection2">
                                    <option value="meal1">1</option>
                                    <option value="meal2">2</option>
                                    <option value="meal3">3</option>
                                    <option value="meal4">4</option>
                                    <option value="meal5">5</option>
                                    <option value="meal6">6</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success" onclick="addDay2()">Ajouter</button>
                        </div>
                        <div id="meals">
                            <div class="showBorders">Repas 1:
                                <ul class="showBorders" id="day2meal1">
                                    <li>Poulet 200g</li>
                                    <li>Haricots 100g</li>
                                </ul>
                            </div>
                            <div class="showBorders">Repas 2:
                                <ul class="showBorders" id="day2meal2">
                                </ul>
                            </div>
                            <div class="showBorders">Repas 3:
                                <ul class="showBorders" id="day2meal3">
                                </ul>
                            </div>
                            <div class="showBorders">Repas 4:
                                <ul class="showBorders" id="day2meal4">
                                </ul>
                            </div>
                            <div class="showBorders">Repas 5:
                                <ul class="showBorders" id="day2meal5">
                                </ul>
                            </div>
                            <div class="showBorders">Repas 6:
                                <ul class="showBorders" id="day2meal6">
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- day3 -->
                    <div id="day3" class="tab-pane fade">
                        <h2>Jour 3</h2>
                    </div>
                    <!-- day4 -->
                    <div id="day4" class="tab-pane fade">
                        <h2>Jour 4</h2>
                    </div>
                    <!-- day5 -->
                    <div id="day5" class="tab-pane fade">
                        <h2>Jour 5</h2>
                    </div>
                    <!-- day6 -->
                    <div id="day6" class="tab-pane fade">
                        <h2>Jour 6</h2>
                    </div>
                    <!-- day7 -->
                    <div id="day7" class="tab-pane fade">
                        <h2>Jour 7</h2>
                    </div>
                    <!-- user -->
                    <div id="user" class="tab-pane fade container">
                        <h2>Info du client</h2>
                        <div>
                            Sexe : <p id="gender">M</p>
                            <br>
                            Âge : <p id="age">40</p>
                            <br>
                            Taille en cm : <p id="height">180</p>
                            <br>
                            Poids en kg : <p id="weight">75</p>
                            <br>
                            Calories par jour : <p id="dayCalories">0</p>
                        </div>
                    </div>
                </div>
            </div>
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


    <!-- Admin interface javascript -->
    <script src="dist/js/createplaninterface.js"></script>
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
    <!-- DataTables -->
    <script src="plugins/datatables/jquery.dataTables.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
</body>

</html>