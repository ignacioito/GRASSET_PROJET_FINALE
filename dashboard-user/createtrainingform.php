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
            <a href="dashboard.html" class="brand-link">
                <img src="dist/img/bf21.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-4"
                    style="opacity: .8;">
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
                        <p class="d-block text-white">John Doe</p>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                               with font-awesome or any other icon font library -->
                        <!-- Dashboard -->
                        <li class="nav-item">
                            <a href="dashboard.html" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <!-- Sidebar Renseigner ses informations -->
                        <li class="nav-item">
                            <a href="createtrainingform.html" class="nav-link">
                                <i class="nav-icon fas fa-calendar-plus"></i>
                                <p>
                                    Renseigner ses informations
                                </p>
                            </a>
                        </li>
                        <!-- Sidebar Profil -->
                        <li class="nav-item">
                            <a href="profile.html" class="nav-link">
                                <i class="nav-icon fas fa-cog"></i>
                                <p>
                                    Profil
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
                            <h1 class="m-0 text-dark">Renseigner ses informations 1</h1>
                            <a href="createtrainingform.html">(lien temp)Fiche Client et évaluation</a>
                            |||||||
                            <a href="createplanform.html">(lien temp)Questionnaires plan alimentaire</a>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                    <hr>
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="container">
                <h4 class="m-0 text-dark">Fiche client et évaluation</h4>
                <br>
                <form>
                    <div class="form-row">
                        <div class="col-md-3 mb-3">
                            <label for="validationDefault01">Prénom</label>
                            <input type="text" class="form-control" id="validationDefault01" placeholder="Prénom"
                                required>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="validationDefault02">Nom</label>
                            <input type="text" class="form-control" id="validationDefault02" placeholder="Nom" required>
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="age">Âge</label>
                            <!-- class="1-100" is called by jQuery and used by javascript in dist/js/trainingform.js -->
                            <select id="age" class="1-100 form-control">
                                <option selected>Sélectionner</option>
                            </select>
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="validationDefault03">Sexe</label>
                            <select id="age" class="form-control">
                                <option selected>Sélectionner</option>
                                <option>Masculin</option>
                                <option>Féminin</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault04">Adresse</label>
                            <input type="text" class="form-control" id="validationDefault04" placeholder="Adresse"
                                required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationDefault05">Adresse courriel (email)</label>
                            <input type="text" class="form-control" id="validationDefault05"
                                placeholder="example@mail.com" required>
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="validationDefault05">Téléphone</label>
                            <input type="text" class="form-control" id="validationDefault05" placeholder="XXX-XXX-XXXX"
                                required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-2 mb-3">
                            <label for="validationDefault05">Poids (lbs)</label>
                            <input type="text" class="form-control" id="validationDefault06" required>
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="validationDefault06">Grandeur (pieds)</label>
                            <input type="text" class="form-control" id="validationDefault06" required>
                        </div>
                    </div>
                    <!-- <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                            <label class="form-check-label" for="invalidCheck2">
                                Agree to terms and conditions
                            </label>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Submit form</button> -->
                </form>
                <br>

                <!-- Habitudes de vie -->
                <h4 class="m-0 text-dark">Habitudes de vie</h4>
                <br>
                <form>
                    <div class="form-row">
                        <div class="col-md-2 mb-3">
                            <label for="validationDefault07">Pression sanguine</label>
                            <select id="bloodFlow" class="form-control">
                                <option selected>Sélectionner</option>
                                <option>Basse</option>
                                <option>Normale</option>
                                <option>Haute</option>
                            </select>
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="validationDefault08">Fumeur</label>
                            <select id="smoke" class="form-control">
                                <option selected>Sélectionner</option>
                                <option>Oui</option>
                                <option>Non</option>
                            </select>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="validationDefault09">Si Oui combien par jour</label>
                            <input type="number" min="0" class="form-control" id="validationDefault09" required>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="validationDefault10">Alcool (verres par session)</label>
                            <input type="number" min="0" class="form-control" id="validationDefault10" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-2 mb-3">
                            <label for="validationDefault11">Type d'emplois</label>
                            <select id="jobType" class="form-control">
                                <option selected>Sélectionner</option>
                                <option>Physique</option>
                                <option>Passif</option>
                            </select>
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="validationDefault12">Style de vie</label>
                            <select id="lifestyle" class="form-control">
                                <option selected>Sélectionner</option>
                                <option>Sédentaire</option>
                                <option>Actif</option>
                                <option>Sportif</option>
                                <option>Athlète</option>
                            </select>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="validationDefault13">Activité(s) physiques</label>
                            <textarea type="textarea" min="0" class="form-control" id="validationDefault13"
                                required></textarea>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="validationDefault14">Nbre de fois par session</label>
                            <input type="number" min="0" class="form-control" id="validationDefault14" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-3 mb-3">
                            <label for="validationDefault15">Expériences antérieures</label>
                            <select id="previousExperience" class="form-control">
                                <option selected>Sélectionner</option>
                                <option>Oui</option>
                                <option>Non</option>
                            </select>
                        </div>
                    </div>
                </form>
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
    <script src="dist/js/trainingform.js"></script>
</body>

</html>