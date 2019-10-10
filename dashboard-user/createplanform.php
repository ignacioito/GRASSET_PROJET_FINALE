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
                        <p class="d-block text-white">John Doe</p>
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
                            <h1 class="m-0 text-dark">Questionnaire pour plan alimentaire (2/2)</h1>
                            <a href="createtrainingform.html">(1/2)</a>
                            -
                            <a href="createplanform.html">(2/2)</a>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                    <hr>
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="container">
                <!-- Questionnaire pour plan alimentaire -->
                <h4 class="m-0 text-dark">Questionnaire pour plan alimentaire</h4>
                <br>
                <form>
                    <div class="form-row">
                        <!--  -->
                        <label for="formValidation38">
                            1) Avez-vous des allergies ou intolérances alimentaires?
                        </label>
                        <select id="formValidation38" class="form-control">
                            <option selected>Sélectionner</option>
                            <option>Oui</option>
                            <option>Non</option>
                        </select>
                        <label for="formValidation39">
                            Si Oui indiquez lesquels :
                        </label>
                        <textarea type="textarea" min="0" class="form-control" id="formValidation39" required></textarea>
                        <!--  -->
                        <label for="formValidation40">
                            2) Combien de fois par semaine pratiquez-vous du sport et à quelle intensité?
                        </label>
                        <select id="formValidation40" class="form-control">
                            <option selected>Sélectionner</option>
                            <option>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                        <label for="formValidation41">
                            Si Oui sélectionner l'intensité :
                        </label>
                        <select id="formValidation41" class="form-control">
                            <option selected>Sélectionner</option>
                            <option>Légère</option>
                            <option>Moyenne</option>
                            <option>Élevée (gym)</option>
                        </select>
                        <!--  -->
                        <label for="formValidation42">
                            3) Consommez-vous des produits laitiers?
                        </label>
                        <select id="formValidation42" class="form-control">
                            <option selected>Sélectionner</option>
                            <option>Oui</option>
                            <option>Non</option>
                        </select>
                        <label for="formValidation43">
                            Si Oui indiquez lesquels :
                        </label>
                        <textarea type="textarea" min="0" class="form-control" id="formValidation43" required></textarea>
                        <!--  -->
                        <label for="formValidation44">
                            4) Quels sont les légumes que vous consommez et que vous aimez?
                        </label>
                        <textarea type="textarea" min="0" class="form-control" id="formValidation44" required></textarea>
                        <!--  -->
                        <label for="formValidation45">
                            5) Quels sont les légumes que vous n’aimez pas?
                        </label>
                        <textarea type="textarea" min="0" class="form-control" id="formValidation45" required></textarea>
                        <!--  -->
                        <label for="formValidation46">
                            6) Quels sont les fruits que vous consommez et que vous aimez?
                        </label>
                        <textarea type="textarea" min="0" class="form-control" id="formValidation46" required></textarea>
                        <!--  -->
                        <label for="formValidation47">
                            7) Quels sont les fruits que vous n’aimez pas?
                        </label>
                        <textarea type="textarea" min="0" class="form-control" id="formValidation47" required></textarea>
                        <!--  -->
                        <label for="formValidation48">
                            8) Quels types de protéines consommez-vous? Et lesquels vous préférez?
                        </label>
                        <textarea type="textarea" min="0" class="form-control" id="formValidation48" required></textarea>
                        <!--  -->
                        <label for="formValidation49">
                            9) Quels sont les types de protéines que vous n’aimez pas?
                        </label>
                        <textarea type="textarea" min="0" class="form-control" id="formValidation49" required></textarea>
                        <!--  -->
                        <label for="formValidation50">
                            10) Consommez-vous des protéines en poudre ou en barre? Lesquels et à quel
                            moment?
                        </label>
                        <select id="formValidation50" class="form-control">
                            <option selected>Sélectionner</option>
                            <option>Oui</option>
                            <option>Non</option>
                        </select>
                        <label for="formValidation51">
                            Si Oui indiquez lesquels :
                        </label>
                        <textarea type="textarea" min="0" class="form-control" id="formValidation51" required></textarea>
                        <!--  -->
                        <label for="formValidation52">
                            11) Consommez-vous des suppléments alimentaires et si oui lesquels?
                        </label>
                        <select id="formValidation52" class="form-control">
                            <option selected>Sélectionner</option>
                            <option>Oui</option>
                            <option>Non</option>
                        </select>
                        <label for="formValidation53">
                            Si Oui indiquez lesquels :
                        </label>
                        <textarea type="textarea" min="0" class="form-control" id="formValidation53" required></textarea>
                    </div>
                </form>
                <br>
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
</body>

</html>