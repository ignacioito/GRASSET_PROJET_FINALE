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
    <title>Renseigner ses informations BF21 - Conditionnement physique et mental</title>
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
                <span class="brand-text font-weight-light">User BF21</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/user160.png" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <p class="d-block text-white"><?php echo $_SESSION['utilisateur'];?></p>
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
                        <!-- Sidebar Renseigner ses informations -->
                        <li class="nav-item">
                            <a href="createtrainingform.php" class="nav-link">
                                <i class="nav-icon fas fa-calendar-plus"></i>
                                <p>
                                    Remplir informations
                                </p>
                            </a>
                        </li>
                        <!-- Sidebar Profil -->
                        <li class="nav-item">
                            <a href="profile.php" class="nav-link">
                                <i class="nav-icon fas fa-cog"></i>
                                <p>
                                    Profil
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
                            <h1 class="m-0 text-dark">Fiche client et évaluation</h1>

                        </div><!-- /.col -->
                    </div><!-- /.row -->
                    <hr>
                </div><!-- /.container-fluid -->
            </div>
            <!-- Main content -->
            <div class="container">
                <form action="formsubmit.php" method="post">

                    <h4 class="m-0 text-dark">Renseignements personnels</h4>
                    <br>
                    <div class="form-row">
                        <div class="col-md-3 mb-3">
                            <label for="name">Nom</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Nom" required>
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="birthdate">Date de Naissance</label>
                            <input type="date" id="birthdate" name="birthdate" value="2000-01-01" min="1920-01-01" max="2035-10-01">
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="gender">Sexe</label>
                            <select id="gender" name="gender" class="form-control" required>
                                <option value="" selected>Sélectionner</option>
                                <option value="M">M</option>
                                <option value="F">F</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="address">Adresse</label>
                            <input type="text" class="form-control" name="address" id="address" placeholder="Adresse" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="email">Adresse courriel (email)</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="example@mail.com" required>
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="telephone">Téléphone</label>
                            <input type="tel" class="form-control" name="telephone" id="telephone" placeholder="XXX-XXX-XXXX" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-2 mb-3">
                            <label for="weight">Poids (kg)</label>
                            <input type="number" class="form-control" name="weight" id="weight" required>
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="height">Taille (cm)</label>
                            <input type="number" class="form-control" name="height" id="height" required>
                        </div>
                    </div>
                    <br>

                    <h4 class="m-0 text-dark">Habitudes de vie</h4>
                    <br>
                    <div class="form-row">
                        <div class="col-md-2 mb-3">
                            <label for="bloodpressure">Pression sanguine</label>
                            <select name="bloodpressure" id="bloodpressure" class="form-control">
                                <option value="" selected>Sélectionner</option>
                                <option>Basse</option>
                                <option>Normale</option>
                                <option>Haute</option>
                            </select>
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="smoke">Fumeur</label>
                            <select name="smoke" id="smoke" class="form-control">
                                <option selected>Sélectionner</option>
                                <option>Oui</option>
                                <option>Non</option>
                            </select>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="smokePerDay">Si Oui combien par jour</label>
                            <input type="number" min="0" class="form-control" name="smokePerDay" id="smokePerDay" required>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="formValidation13">Alcool (verres par session)</label>
                            <input type="number" min="0" class="form-control" id="formValidation13" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-2 mb-3">
                            <label for="formValidation14">Type d'emplois</label>
                            <select id="formValidation14" class="form-control">
                                <option value="" selected>Sélectionner</option>
                                <option>Physique</option>
                                <option>Passif</option>
                            </select>
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="formValidation15">Style de vie</label>
                            <select id="formValidation15" class="form-control">
                                <option selected>Sélectionner</option>
                                <option>Sédentaire</option>
                                <option>Actif</option>
                                <option>Sportif</option>
                                <option>Athlète</option>
                            </select>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="formValidation16">Activité(s) physiques</label>
                            <textarea type="textarea" min="0" class="form-control" id="formValidation16" required></textarea>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="formValidation17">Nbre de fois par session</label>
                            <input type="number" min="0" class="form-control" id="formValidation17" required>
                        </div>
                    </div>





                    <input class="btn btn-large btn-primary col-md-2 text-center" type="submit" value="Soumettre">
                </form>
                <br>
                <br>
            </div>

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
    <!-- JS for the form -->
    <script src="dist/js/createtrainingform.js"></script>
</body>

</html>