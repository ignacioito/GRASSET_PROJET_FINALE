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
    <!-- Searchfrom/Autocomplete CSS -->
    <link href="dist/css/searchform.css" rel="stylesheet">
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
                <ul class="nav nav-pills mb-3" role="tablist">
                    <li class="nav-item mx-4"><a class="nav-link active" data-toggle="pill" href="#day1">Jour 1</a></li>
                    <li class="nav-item mx-4"><a class="nav-link" data-toggle="pill" href="#day2">Jour 2</a></li>
                    <li class="nav-item mx-4"><a class="nav-link" data-toggle="pill" href="#day3">Jour 3</a></li>
                    <li class="nav-item mx-4"><a class="nav-link" data-toggle="pill" href="#day4">Jour 4</a></li>
                    <li class="nav-item mx-4"><a class="nav-link" data-toggle="pill" href="#day5">Jour 5</a></li>
                    <li class="nav-item mx-4"><a class="nav-link" data-toggle="pill" href="#day6">Jour 6</a></li>
                    <li class="nav-item mx-4"><a class="nav-link" data-toggle="pill" href="#day7">Jour 7</a></li>
                    <li class="nav-item mx-4"><a class="nav-link" data-toggle="pill" href="#user">Info client</a></li>
                </ul>
                <!-- days -->
                <div class="tab-content" id="pills-tabContent">
                    <!-- day1 -->
                    <div id="day1" class="tab-pane fade show active">
                        <div class="form-group">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row mb-4">
                                        <div class="col-3">
                                            <div id="ingDiv">
                                                <!--Make sure the form has the autocomplete function switched off:-->
                                                <form autocomplete="off" action="/action_page.php">
                                                    <div class="autocomplete" style="width:200px;">
                                                        <label for="ingNameDay1">Aliment:</label>
                                                        <input id="ingNameDay1" type="text" name="ingNameDay1" placeholder="Aliment">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div id="qttDiv">
                                                <label for="foodQtt1">Quantite:</label>
                                                <select id="foodQtt1">
                                                    <option value="1">x1</option>
                                                    <option value="2">x2</option>
                                                    <option value="3">x3</option>
                                                    <option value="4">x4</option>
                                                    <option value="5">x5</option>
                                                    <option value="6">x6</option>
                                                    <option value="7">x7</option>
                                                    <option value="8">x8</option>
                                                    <option value="9">x9</option>
                                                    <option value="10">x10</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div id="mealNumberDiv">
                                                <label for="mealNumbSelection1">Numéro du repas:</label>
                                                <select id="mealNumbSelection1">
                                                    <option value="meal1">1</option>
                                                    <option value="meal2">2</option>
                                                    <option value="meal3">3</option>
                                                    <option value="meal4">4</option>
                                                    <option value="meal5">5</option>
                                                    <option value="meal6">6</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <button type="submit" class="btn btn-success" onclick="addDay1()">Ajouter</button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            Calories restantes:
                                            <div id="day1Calories"></div>
                                        </div>
                                        <div class="col">
                                            Protéines restants:
                                            <div id="day1Proteins"></div>
                                        </div>
                                        <div class="col">
                                            Lipides restants:
                                            <div id="day1Lipids"></div>
                                        </div>
                                        <div class="col">
                                            Glucides restants:
                                            <div id="day1Carbohydrates"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div id="meals">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="showBorders">Repas 1:
                                                        <ul class="showBorders" id="day1meal1">
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="showBorders">Repas 2:
                                                        <ul class="showBorders" id="day1meal2">
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="showBorders">Repas 3:
                                                        <ul class="showBorders" id="day1meal3">
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="showBorders">Repas 4:
                                                        <ul class="showBorders" id="day1meal4">
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="showBorders">Repas 5:
                                                        <ul class="showBorders" id="day1meal5">
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="showBorders">Repas 6:
                                                        <ul class="showBorders" id="day1meal6">
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- day2 -->
                    <div id="day2" class="tab-pane container fade">
                    </div>
                    <!-- day3 -->
                    <div id="day3" class="tab-pane fade">
                    </div>
                    <!-- day4 -->
                    <div id="day4" class="tab-pane fade">
                    </div>
                    <!-- day5 -->
                    <div id="day5" class="tab-pane fade">
                    </div>
                    <!-- day6 -->
                    <div id="day6" class="tab-pane fade">
                    </div>
                    <!-- day7 -->
                    <div id="day7" class="tab-pane fade">
                    </div>
                    <!-- user -->
                    <div id="user" class="tab-pane fade container">
                        <h2>Info du client</h2>

                    <div class="container">
                            Sexe : <p id="gender">M</p>
                            <br>
                            Âge : <p id="age">40</p>
                            <br>
                            Taille en cm : <p id="height">180</p>
                            <br>
                            Poids en kg : <p id="weight">75</p>
                            <br>
                            Calories par jour : <p id="dayCalories">0</p>
                            
                            
                    <div class="form-row my-5">
                    <!-- Questionnaire pour plan alimentaire -->
                    <h4 class="m-0 text-dark font-weight-bold"><span>Questionnaire pour plan alimentaire</span></h4>
                    </div>    

                    <div class="container">
                        <!--  -->
                        <label for="formValidation38">
                            1) Avez-vous des allergies ou intolérances alimentaires?
                        </label>
                        <br>
                        <p id="dayCalories">0</p>
                        <br>
                        <label for="formValidation39">
                            Si Oui indiquez lesquels :
                        </label>
                        <br>
                        <p id="dayCalories">0</p>
                        <br>
                        <!--  -->
                        <label for="formValidation40">
                            2) Combien de fois par semaine pratiquez-vous du sport et à quelle intensité?
                        </label>
                        <br>
                        <p id="dayCalories">0</p>
                        <br>

                        <label for="formValidation41">
                            Si Oui sélectionner l'intensité :
                        </label>
                        <br>
                        <p id="dayCalories">0</p>
                        <br>

                        <!--  -->
                        <label for="formValidation42">
                            3) Consommez-vous des produits laitiers?
                        </label>
                        <br>
                        <p id="dayCalories">0</p>
                        <br>

                        <label for="formValidation43">
                            Si Oui indiquez lesquels :
                        </label>
                        <br>
                        <p id="dayCalories">0</p>
                        <br>

                        <!--  -->
                        <label for="formValidation44">
                            4) Quels sont les légumes que vous consommez et que vous aimez?
                        </label>
                        <br>
                        <p id="dayCalories">0</p>
                        <br>
                        <!--  -->
                        <label for="formValidation45">
                            5) Quels sont les légumes que vous n’aimez pas?
                        </label>
                        <br>
                        <p id="dayCalories">0</p>
                        <br>
                        <!--  -->
                        <label for="formValidation46">
                            6) Quels sont les fruits que vous consommez et que vous aimez?
                        </label>
                        <br>
                        <p id="dayCalories">0</p>
                        <br>
                        <!--  -->
                        <label for="formValidation47">
                            7) Quels sont les fruits que vous n’aimez pas?
                        </label>
                        <br>
                        <p id="dayCalories">0</p>
                        <br>
                        <!--  -->
                        <label for="formValidation48">
                            8) Quels types de protéines consommez-vous? Et lesquels vous préférez?
                        </label>
                        <br>
                        <p id="dayCalories">0</p>
                        <br>
                        <!--  -->
                        <label for="formValidation49">
                            9) Quels sont les types de protéines que vous n’aimez pas?
                        </label>
                        <br>
                        <p id="dayCalories">0</p>
                        <br>
                        <!--  -->
                        <label for="formValidation50">
                            10) Consommez-vous des protéines en poudre ou en barre? Lesquels et à quel
                            moment?
                        </label>
                        <br>
                        <p id="dayCalories">0</p>
                        <br>

                        <label for="formValidation51">
                            Si Oui indiquez lesquels :
                        </label>
                        <br>
                        <p id="dayCalories">0</p>
                        <br>
                        <!--  -->
                        <label for="formValidation52">
                            11) Consommez-vous des suppléments alimentaires et si oui lesquels?
                        </label>
                        <br>
                        <p id="dayCalories">0</p>
                        <br>

                        <label for="formValidation53">
                            Si Oui indiquez lesquels :
                        </label>
                        <br>
                        <p id="dayCalories">0</p>
                        <br>
                    </div>
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