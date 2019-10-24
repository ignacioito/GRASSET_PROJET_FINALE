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
    <title>Créer un plan BF21 - Conditionnement physique et mental</title>
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
                        <div class="col-sm-12">
                            <h1 class="m-0 text-dark">Créer un Plan pour : </h1>
                            <?php
                            include('../website/connexion.php');
                            $userCreatePlan = $_GET['clientCreatePlan'];
                            $sql = "SELECT * FROM `utilisateurs` WHERE nom = '$userCreatePlan'";
                            if ($res = $connexion->query($sql)) {
                                if ($res->num_rows > 0) {
                                    while ($row = $res->fetch_assoc()) { }
                                    $res->free();
                                } else {
                                    echo "<br>";
                                    echo "<h4 class='text-red'>";
                                    echo "ERREUR 3: Utilisateur non trouvé : ";
                                    echo "</h4>";
                                }
                            } else {
                                echo "ERREUR 2: Ne peut pas éxécuter $sql. "
                                    . $connexion->error;
                            }
                            echo "<br>";
                            echo "<h4>";
                            echo $userCreatePlan;
                            echo "</h4>";

                            ?>

                        </div><!-- /.col -->
                        <!-- <div class="col-sm-6">
                            <label for="clientName">Nom du Client:</label>
                            <input id="clientName" type="text" name="clientName" placeholder="">
                            <button type="submit" class="btn btn-success" onclick="()">Mettre à jour</button>
                        </div> -->
                    </div><!-- /.row -->
                    <hr>
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <div class="container">
                <!-- days nav-bar -->
                <ul class="nav nav-pills mb-3" role="tablist">
                    <li class="nav-item mx-4"><a class="nav-link active" data-toggle="pill" href="#day1">Jour 1</a></li>
                    <li class="nav-item mx-4"><a class="nav-link" data-toggle="pill" href="#day2">Jour 2</a></li>
                    <li class="nav-item mx-4"><a class="nav-link" data-toggle="pill" href="#day3">Jour 3</a></li>
                    <li class="nav-item mx-4"><a class="nav-link" data-toggle="pill" href="#day4">Jour 4</a></li>
                    <li class="nav-item mx-4"><a class="nav-link" data-toggle="pill" href="#day5">Jour 5</a></li>
                    <li class="nav-item mx-4"><a class="nav-link" data-toggle="pill" href="#day6">Jour 6</a></li>
                    <li class="nav-item mx-4"><a class="nav-link" data-toggle="pill" href="#day7">Jour 7</a></li>
                </ul>
                <!-- days -->
                <div class="tab-content" id="pills-tabContent">
                    <!-- day1 -->
                    <div id="HTMLtoPDF">
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
                                                <!-- <button class="btn btn-danger" onclick="removeLI()">Remove</button> -->
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                Calories :
                                                <p id="day1Calories">0</p>
                                            </div>
                                            <div class="col">
                                                Protéines :
                                                <p id="day1Proteins">0</p>
                                            </div>
                                            <div class="col">
                                                Lipides :
                                                <p id="day1Lipids">0</p>
                                            </div>
                                            <div class="col">
                                                Glucides :
                                                <p id="day1Carbohydrates">0</p>
                                            </div>
                                            <div class="col">
                                                Fibres :
                                                <p id="day1Fibers">0</p>
                                            </div>
                                            <div class="col">
                                                Glycémique :
                                                <p id="day1Glycemik">0</p>
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
                    </div>
                    <!-- day2 -->
                    <div id="day2" class="tab-pane fade">
                        <div class="form-group">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row mb-4">
                                        <div class="col-3">
                                            <div id="ingDiv">
                                                <!--Make sure the form has the autocomplete function switched off:-->
                                                <form autocomplete="off" action="/action_page.php">
                                                    <div class="autocomplete" style="width:200px;">
                                                        <label for="ingNameDay2">Aliment:</label>
                                                        <input id="ingNameDay2" type="text" name="ingNameDay2" placeholder="Aliment">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div id="qttDiv">
                                                <label for="foodQtt2">Quantite:</label>
                                                <select id="foodQtt2">
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
                                                <label for="mealNumbSelection2">Numéro du repas:</label>
                                                <select id="mealNumbSelection2">
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
                                            <button type="submit" class="btn btn-success" onclick="addDay2()">Ajouter</button>
                                            <!-- <button class="btn btn-danger" onclick="removeLI()">Remove</button> -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            Calories :
                                            <input id="day2Calories" value=0 disabled>
                                        </div>
                                        <div class="col">
                                            Protéines :
                                            <input id="day2Proteins" value=0 disabled>
                                        </div>
                                        <div class="col">
                                            Lipides :
                                            <input id="day2Lipids" value=0 disabled>
                                        </div>
                                        <div class="col">
                                            Glucides :
                                            <input id="day2Carbohydrates" value=0 disabled>
                                        </div>
                                        <div class="col">
                                            Fibres :
                                            <input id="day2Fibers" value=0 disabled>
                                        </div>
                                        <div class="col">
                                            Glycémique :
                                            <input id="day2Glycemik" value=0 disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="HTMLtoPDFday2">
                                <div class="col">
                                    <div id="meals">
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="showBorders">Repas 1:
                                                            <ul class="showBorders" id="day2meal1">
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="showBorders">Repas 2:
                                                            <ul class="showBorders" id="day2meal2">
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="showBorders">Repas 3:
                                                            <ul class="showBorders" id="day2meal3">
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
                                                            <ul class="showBorders" id="day2meal4">
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="showBorders">Repas 5:
                                                            <ul class="showBorders" id="day2meal5">
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="showBorders">Repas 6:
                                                            <ul class="showBorders" id="day2meal6">
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
                    </div>
                    <!-- day3 -->
                    <div id="day3" class="tab-pane fade">
                        <div class="form-group">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row mb-4">
                                        <div class="col-3">
                                            <div id="ingDiv">
                                                <!--Make sure the form has the autocomplete function switched off:-->
                                                <form autocomplete="off" action="/action_page.php">
                                                    <div class="autocomplete" style="width:200px;">
                                                        <label for="ingNameDay3">Aliment:</label>
                                                        <input id="ingNameDay3" type="text" name="ingNameDay3" placeholder="Aliment">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div id="qttDiv">
                                                <label for="foodQtt3">Quantite:</label>
                                                <select id="foodQtt3">
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
                                                <label for="mealNumbSelection3">Numéro du repas:</label>
                                                <select id="mealNumbSelection3">
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
                                            <button type="submit" class="btn btn-success" onclick="addDay3()">Ajouter</button>
                                            <!-- <button class="btn btn-danger" onclick="removeLI()">Remove</button> -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            Calories :
                                            <input id="day3Calories" value=0 disabled>
                                        </div>
                                        <div class="col">
                                            Protéines :
                                            <input id="day3Proteins" value=0 disabled>
                                        </div>
                                        <div class="col">
                                            Lipides :
                                            <input id="day3Lipids" value=0 disabled>
                                        </div>
                                        <div class="col">
                                            Glucides :
                                            <input id="day3Carbohydrates" value=0 disabled>
                                        </div>
                                        <div class="col">
                                            Fibres :
                                            <input id="day3Fibers" value=0 disabled>
                                        </div>
                                        <div class="col">
                                            Glycémique :
                                            <input id="day3Glycemik" value=0 disabled>
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
                                                        <ul class="showBorders" id="day3meal1">
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="showBorders">Repas 2:
                                                        <ul class="showBorders" id="day3meal2">
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="showBorders">Repas 3:
                                                        <ul class="showBorders" id="day3meal3">
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
                                                        <ul class="showBorders" id="day3meal4">
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="showBorders">Repas 5:
                                                        <ul class="showBorders" id="day3meal5">
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="showBorders">Repas 6:
                                                        <ul class="showBorders" id="day3meal6">
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
                    <!-- day4 -->
                    <div id="day4" class="tab-pane fade">
                        <div class="form-group">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row mb-4">
                                        <div class="col-3">
                                            <div id="ingDiv">
                                                <!--Make sure the form has the autocomplete function switched off:-->
                                                <form autocomplete="off" action="/action_page.php">
                                                    <div class="autocomplete" style="width:200px;">
                                                        <label for="ingNameDay4">Aliment:</label>
                                                        <input id="ingNameDay4" type="text" name="ingNameDay4" placeholder="Aliment">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div id="qttDiv">
                                                <label for="foodQtt4">Quantite:</label>
                                                <select id="foodQtt4">
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
                                                <label for="mealNumbSelection4">Numéro du repas:</label>
                                                <select id="mealNumbSelection4">
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
                                            <button type="submit" class="btn btn-success" onclick="addDay4()">Ajouter</button>
                                            <!-- <button class="btn btn-danger" onclick="removeLI()">Remove</button> -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            Calories :
                                            <input id="day4Calories" value=0 disabled>
                                        </div>
                                        <div class="col">
                                            Protéines :
                                            <input id="day4Proteins" value=0 disabled>
                                        </div>
                                        <div class="col">
                                            Lipides :
                                            <input id="day4Lipids" value=0 disabled>
                                        </div>
                                        <div class="col">
                                            Glucides :
                                            <input id="day4Carbohydrates" value=0 disabled>
                                        </div>
                                        <div class="col">
                                            Fibres :
                                            <input id="day4Fibers" value=0 disabled>
                                        </div>
                                        <div class="col">
                                            Glycémique :
                                            <input id="day4Glycemik" value=0 disabled>
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
                                                        <ul class="showBorders" id="day4meal1">
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="showBorders">Repas 2:
                                                        <ul class="showBorders" id="day4meal2">
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="showBorders">Repas 3:
                                                        <ul class="showBorders" id="day4meal3">
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
                                                        <ul class="showBorders" id="day4meal4">
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="showBorders">Repas 5:
                                                        <ul class="showBorders" id="day4meal5">
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="showBorders">Repas 6:
                                                        <ul class="showBorders" id="day4meal6">
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
                    <!-- day5 -->
                    <div id="day5" class="tab-pane fade">
                        <div class="form-group">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row mb-4">
                                        <div class="col-3">
                                            <div id="ingDiv">
                                                <!--Make sure the form has the autocomplete function switched off:-->
                                                <form autocomplete="off" action="/action_page.php">
                                                    <div class="autocomplete" style="width:200px;">
                                                        <label for="ingNameDay5">Aliment:</label>
                                                        <input id="ingNameDay5" type="text" name="ingNameDay5" placeholder="Aliment">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div id="qttDiv">
                                                <label for="foodQtt5">Quantite:</label>
                                                <select id="foodQtt5">
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
                                                <label for="mealNumbSelection5">Numéro du repas:</label>
                                                <select id="mealNumbSelection5">
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
                                            <button type="submit" class="btn btn-success" onclick="addDay5()">Ajouter</button>
                                            <!-- <button class="btn btn-danger" onclick="removeLI()">Remove</button> -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            Calories :
                                            <input id="day5Calories" value=0 disabled>
                                        </div>
                                        <div class="col">
                                            Protéines :
                                            <input id="day5Proteins" value=0 disabled>
                                        </div>
                                        <div class="col">
                                            Lipides :
                                            <input id="day5Lipids" value=0 disabled>
                                        </div>
                                        <div class="col">
                                            Glucides :
                                            <input id="day5Carbohydrates" value=0 disabled>
                                        </div>
                                        <div class="col">
                                            Fibres :
                                            <input id="day5Fibers" value=0 disabled>
                                        </div>
                                        <div class="col">
                                            Glycémique :
                                            <input id="day5Glycemik" value=0 disabled>
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
                                                        <ul class="showBorders" id="day5meal1">
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="showBorders">Repas 2:
                                                        <ul class="showBorders" id="day5meal2">
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="showBorders">Repas 3:
                                                        <ul class="showBorders" id="day5meal3">
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
                                                        <ul class="showBorders" id="day5meal4">
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="showBorders">Repas 5:
                                                        <ul class="showBorders" id="day5meal5">
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="showBorders">Repas 6:
                                                        <ul class="showBorders" id="day5meal6">
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
                    <!-- day6 -->
                    <div id="day6" class="tab-pane fade">
                        <div class="form-group">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row mb-4">
                                        <div class="col-3">
                                            <div id="ingDiv">
                                                <!--Make sure the form has the autocomplete function switched off:-->
                                                <form autocomplete="off" action="/action_page.php">
                                                    <div class="autocomplete" style="width:200px;">
                                                        <label for="ingNameDay6">Aliment:</label>
                                                        <input id="ingNameDay6" type="text" name="ingNameDay6" placeholder="Aliment">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div id="qttDiv">
                                                <label for="foodQtt6">Quantite:</label>
                                                <select id="foodQtt6">
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
                                                <label for="mealNumbSelection6">Numéro du repas:</label>
                                                <select id="mealNumbSelection6">
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
                                            <button type="submit" class="btn btn-success" onclick="addDay6()">Ajouter</button>
                                            <!-- <button class="btn btn-danger" onclick="removeLI()">Remove</button> -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            Calories :
                                            <input id="day6Calories" value=0 disabled>
                                        </div>
                                        <div class="col">
                                            Protéines :
                                            <input id="day6Proteins" value=0 disabled>
                                        </div>
                                        <div class="col">
                                            Lipides :
                                            <input id="day6Lipids" value=0 disabled>
                                        </div>
                                        <div class="col">
                                            Glucides :
                                            <input id="day6Carbohydrates" value=0 disabled>
                                        </div>
                                        <div class="col">
                                            Fibres :
                                            <input id="day6Fibers" value=0 disabled>
                                        </div>
                                        <div class="col">
                                            Glycémique :
                                            <input id="day6Glycemik" value=0 disabled>
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
                                                        <ul class="showBorders" id="day6meal1">
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="showBorders">Repas 2:
                                                        <ul class="showBorders" id="day6meal2">
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="showBorders">Repas 3:
                                                        <ul class="showBorders" id="day6meal3">
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
                                                        <ul class="showBorders" id="day6meal4">
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="showBorders">Repas 5:
                                                        <ul class="showBorders" id="day6meal5">
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="showBorders">Repas 6:
                                                        <ul class="showBorders" id="day6meal6">
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
                    <!-- day7 -->
                    <div id="day7" class="tab-pane fade">
                        <div class="form-group">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row mb-4">
                                        <div class="col-3">
                                            <div id="ingDiv">
                                                <!--Make sure the form has the autocomplete function switched off:-->
                                                <form autocomplete="off" action="/action_page.php">
                                                    <div class="autocomplete" style="width:200px;">
                                                        <label for="ingNameDay7">Aliment:</label>
                                                        <input id="ingNameDay7" type="text" name="ingNameDay7" placeholder="Aliment">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div id="qttDiv">
                                                <label for="foodQtt7">Quantite:</label>
                                                <select id="foodQtt7">
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
                                                <label for="mealNumbSelection7">Numéro du repas:</label>
                                                <select id="mealNumbSelection7">
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
                                            <button type="submit" class="btn btn-success" onclick="addDay7()">Ajouter</button>
                                            <!-- <button class="btn btn-danger" onclick="removeLI()">Remove</button> -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            Calories :
                                            <input id="day7Calories" value=0 disabled>
                                        </div>
                                        <div class="col">
                                            Protéines :
                                            <input id="day7Proteins" value=0 disabled>
                                        </div>
                                        <div class="col">
                                            Lipides :
                                            <input id="day7Lipids" value=0 disabled>
                                        </div>
                                        <div class="col">
                                            Glucides :
                                            <input id="day7Carbohydrates" value=0 disabled>
                                        </div>
                                        <div class="col">
                                            Fibres :
                                            <input id="day7Fibers" value=0 disabled>
                                        </div>
                                        <div class="col">
                                            Glycémique :
                                            <input id="day7Glycemik" value=0 disabled>
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
                                                        <ul class="showBorders" id="day7meal1">
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="showBorders">Repas 2:
                                                        <ul class="showBorders" id="day7meal2">
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="showBorders">Repas 3:
                                                        <ul class="showBorders" id="day7meal3">
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
                                                        <ul class="showBorders" id="day7meal4">
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="showBorders">Repas 5:
                                                        <ul class="showBorders" id="day7meal5">
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="showBorders">Repas 6:
                                                        <ul class="showBorders" id="day7meal6">
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
                </div>
            </div>
            <button type="submit" class="btn btn-danger text-center"><a href="#" onclick="HTMLtoPDF()">Download PDF</a></button>

        </div>


        <?php
        // Send plan to DB
        if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['sendPlan'])) {
            func($connexion);
        }
        function func($connexion)
        {
            $codUtilisateur = 2;
            $codAdministrateur = 2;
            $alimentNro = 4;
            $sql = "INSERT INTO `tablerepas` (`codUtilisateur`, `codAdministrateur`, `alimentNro`) VALUES ('$codUtilisateur', '$codAdministrateur' , '$alimentNro')";
            $result = mysqli_query($connexion, $sql);
            // echo ($result);
        }
        ?>

        <!-- /.content-wrapper -->
        <footer class=" main-footer">
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
    <!-- DataTables -->
    <script src="plugins/datatables/jquery.dataTables.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
    <!-- These are the scripts to make the PDF -->
    <script src="dist/js/jspdf.js"></script>
    <script src="dist/js/pdfFromHTML.js"></script>

    <!-- Retrieving ingredients form DB -->
    <?php
    $sqlIngName = "SELECT nomAliment, calorie, proteine, lipid, glucide, fibre, glycemique FROM `aliment`";
    $ingNames = array();
    if ($res = $connexion->query($sqlIngName)) {
        if ($res->num_rows > 0) {
            while ($row = $res->fetch_assoc()) {
                $ingNames[] = $row;
            }
            $res->free();
        } else {
            echo "ERROR 3: ";
        }
    } else {
        echo "ERROR 2: Impossible d'exécuter $sqlIngName. " . $connexion->error;
    }

    ?>

    <script>
        // Searchform
        var tempIng = <?php echo json_encode($ingNames); ?>;
        var arrIng = new Array();
        for (var i = 0; i < tempIng.length; i++) {
            arrIng[i] = tempIng[i].nomAliment;
        }
        console.log(arrIng);


        // var ingNames = new Array();
        // var ingCaloriesDay1 = new Array();
        // var ingProteinsDay1 = new Array();
        // var ingLipidsDay1 = new Array();
        // var ingCarbohydratesDay1 = new Array();
        // var ingFibersDay1 = new Array();
        // var ingGlycemikDay1s = new Array();
        // for (var i = 0; i < tempNameIng.length; i++) {
        //     ingNames[i] = tempNameIng[i].nomAliment;
        // ingCaloriesDay1[i] = tempNameIng[i].calorie;
        // ingProteinsDay1[i] = tempNameIng[i].proteine;
        // ingLipidsDay1[i] = tempNameIng[i].lipid;
        // ingCarbohydratesDay1[i] = tempNameIng[i].glucide;
        // ingFibersDay1[i] = tempNameIng[i].fibre;
        // ingGlycemikDay1s[i] = tempNameIng[i].glycemique;
        // }
        // console.log(tempNameIng);
        // console.log(ingNames);
        // console.log(ingCaloriesDay1);
        // console.log(ingProteinsDay1);
        // console.log(ingLipidsDay1);
        // console.log(ingCarbohydratesDay1);
        // console.log(ingFibersDay1);
        // console.log(ingGlycemikDay1s);




        function autocomplete(inp, arr) {
            /*the autocomplete function takes two arguments,
            the text field element and an array of possible autocompleted values:*/
            var currentFocus;
            /*execute a function when someone writes in the text field:*/
            inp.addEventListener("input", function(e) {
                var a,
                    b,
                    i,
                    val = this.value;
                /*close any already open lists of autocompleted values*/
                closeAllLists();
                if (!val) {
                    return false;
                }
                currentFocus = -1;
                /*create a DIV element that will contain the items (values):*/
                a = document.createElement("DIV");
                a.setAttribute("id", this.id + "autocomplete-list");
                a.setAttribute("class", "autocomplete-items");
                /*append the DIV element as a child of the autocomplete container:*/
                this.parentNode.appendChild(a);
                /*for each item in the array...*/
                for (i = 0; i < arr.length; i++) {
                    /*check if the item starts with the same letters as the text field value:*/
                    if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                        /*create a DIV element for each matching element:*/
                        b = document.createElement("DIV");
                        /*make the matching letters bold:*/
                        b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                        b.innerHTML += arr[i].substr(val.length);
                        /*insert a input field that will hold the current array item's value:*/
                        b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                        /*execute a function when someone clicks on the item value (DIV element):*/
                        b.addEventListener("click", function(e) {
                            /*insert the value for the autocomplete text field:*/
                            inp.value = this.getElementsByTagName("input")[0].value;
                            /*close the list of autocompleted values,
                                (or any other open lists of autocompleted values:*/
                            closeAllLists();
                        });
                        a.appendChild(b);
                    }
                }
            });
            /*execute a function presses a key on the keyboard:*/
            inp.addEventListener("keydown", function(e) {
                var x = document.getElementById(this.id + "autocomplete-list");
                if (x) x = x.getElementsByTagName("div");
                if (e.keyCode == 40) {
                    /*If the arrow DOWN key is pressed,
                      increase the currentFocus variable:*/
                    currentFocus++;
                    /*and and make the current item more visible:*/
                    addActive(x);
                } else if (e.keyCode == 38) {
                    //up
                    /*If the arrow UP key is pressed,
                      decrease the currentFocus variable:*/
                    currentFocus--;
                    /*and and make the current item more visible:*/
                    addActive(x);
                } else if (e.keyCode == 13) {
                    /*If the ENTER key is pressed, prevent the form from being submitted,*/
                    e.preventDefault();
                    if (currentFocus > -1) {
                        /*and simulate a click on the "active" item:*/
                        if (x) x[currentFocus].click();
                    }
                }
            });

            function addActive(x) {
                /*a function to classify an item as "active":*/
                if (!x) return false;
                /*start by removing the "active" class on all items:*/
                removeActive(x);
                if (currentFocus >= x.length) currentFocus = 0;
                if (currentFocus < 0) currentFocus = x.length - 1;
                /*add class "autocomplete-active":*/
                x[currentFocus].classList.add("autocomplete-active");
            }

            function removeActive(x) {
                /*a function to remove the "active" class from all autocomplete items:*/
                for (var i = 0; i < x.length; i++) {
                    x[i].classList.remove("autocomplete-active");
                }
            }

            function closeAllLists(elmnt) {
                /*close all autocomplete lists in the document,
                except the one passed as an argument:*/
                var x = document.getElementsByClassName("autocomplete-items");
                for (var i = 0; i < x.length; i++) {
                    if (elmnt != x[i] && elmnt != inp) {
                        x[i].parentNode.removeChild(x[i]);
                    }
                }
            }
            /*execute a function when someone clicks in the document:*/
            document.addEventListener("click", function(e) {
                closeAllLists(e.target);
            });
        }

        /*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/

        autocomplete(document.getElementById("ingNameDay1"), arrIng);
        autocomplete(document.getElementById("ingNameDay2"), arrIng);
        autocomplete(document.getElementById("ingNameDay3"), arrIng);
        autocomplete(document.getElementById("ingNameDay4"), arrIng);
        autocomplete(document.getElementById("ingNameDay5"), arrIng);
        autocomplete(document.getElementById("ingNameDay6"), arrIng);
        autocomplete(document.getElementById("ingNameDay7"), arrIng);


        // //Calculate Basal Metabolism Rate with Harris–Benedict equation and macronutrients
        // let bmr;
        // let gender = document.getElementById("gender").innerHTML;
        // let age = document.getElementById("age").innerHTML;
        // let height = document.getElementById("height").innerHTML;
        // let weight = document.getElementById("weight").innerHTML;

        // if (gender == "M") {
        //   bmr = Math.round(66.5 + 13.75 * weight + 5.003 * height - 6.755 * age);
        // } else {
        //   bmr = Math.round(655.1 + 9.563 * weight + 1.85 * height - 4.676 * age);
        // }

        // let day1Proteins = Math.round((bmr * 20) / 100);
        // let day1Lipids = Math.round((bmr * 20) / 100);
        // let day1Carbohydrates = Math.round((bmr * 60) / 100);
        // // Show in Info client
        // document.getElementById("day1Calories").innerHTML = bmr;
        // // Show in Day1
        // document.getElementById("day1Calories").innerHTML = bmr;
        // document.getElementById("day1Proteins").innerHTML = day1Proteins;
        // document.getElementById("day1Lipids").innerHTML = day1Lipids;
        // document.getElementById("day1Carbohydrates").innerHTML = day1Carbohydrates;

        // Day1
        // Variables for Day1
        let day1Calories = 0;
        let day1Proteins = 0;
        let day1Lipids = 0;
        let day1Carbohydrates = 0;
        let day1Fibers = 0;
        let day1Glycemik = 0;
        // Variables for Day1
        let day1CaloriesNum;
        let day1CarbohydratesNum;
        let day1LipidsNum;
        let day1ProteinsNum;
        let day1FibersNum;
        let day1GlycemikNum;
        // Variables for Day1
        let ingCaloriesDay1 = 0;
        let ingCarbohydratesDay1 = 0;
        let ingLipidsDay1 = 0;
        let ingProteinsDay1 = 0;
        let ingFibersDay1 = 0;
        let ingGlycemikDay1 = 0;

        // // Variables for delete for Day1Meal1
        // var items, tab, liIndex;


        function addDay1() {
            // Check if ingredient exists
            let ingredient = document.getElementById("ingNameDay1").value;
            console.log("Ingredient : " + ingredient);
            let ingExists = false;

            function isIngExisting() {
                for (var i = 0; i < arrIng.length; i++) {
                    if (ingredient.toUpperCase() == arrIng[i].toUpperCase()) {
                        ingExists = true;
                        break;
                    }
                }
            }
            isIngExisting();
            console.log("Is the ingredient existing : " + ingExists);
            if (ingExists) {
                // Find selected meal
                let ddownMeal = document.getElementById(
                    "mealNumbSelection1"
                );
                let mealNumber =
                    ddownMeal.options[ddownMeal.selectedIndex].value;
                console.log(mealNumber);
                // Assign selected day
                let dayNumber = "day1";
                // Find selected quantity
                let ddownQtt = document.getElementById("foodQtt1");
                let qtt = ddownQtt.options[ddownQtt.selectedIndex].value;
                // Add the ingredient
                console.log(ingredient);
                let ingToAdd = document.createElement("li");
                ingToAdd.textContent = ingredient + " x" + qtt;
                let ulID = dayNumber + mealNumber;
                console.log(ulID);
                document.getElementById(ulID).appendChild(ingToAdd);
                document.getElementById("ingNameDay1").value = "";
                ddownQtt.value = 1;

                // Compute left calories, Carbohydrates, Lipids and Proteins
                for (let i = 0; i < tempIng.length; i++) {
                    if (ingredient === tempIng[i].nomAliment) {
                        ingCaloriesDay1 = parseInt(tempIng[i].calorie, 10) * qtt;
                        ingCarbohydratesDay1 = parseInt(tempIng[i].glucide, 10) * qtt;
                        ingLipidsDay1 = parseInt(tempIng[i].lipid, 10) * qtt;
                        ingProteinsDay1 = parseInt(tempIng[i].proteine, 10) * qtt;
                        ingFibersDay1 = parseInt(tempIng[i].fibre, 10) * qtt;
                        ingGlycemikDay1 = parseInt(tempIng[i].glycemique, 10) * qtt;
                    }
                }
                //
                console.log("doc :" + parseInt(
                    document.getElementById("day1Calories").innerHTML,
                    10
                ));




                day1CaloriesNum = parseInt(
                    document.getElementById("day1Calories").innerHTML,
                    10
                );

                console.log(" Hellop World: " + day1CaloriesNum)
                day1CarbohydratesNum = parseInt(
                    document.getElementById("day1Carbohydrates").innerHTML,
                    10
                );
                day1LipidsNum = parseInt(
                    document.getElementById("day1Lipids").innerHTML,
                    10
                );
                day1ProteinsNum = parseInt(
                    document.getElementById("day1Proteins").innerHTML,
                    10
                );
                day1FibersNum = parseInt(
                    document.getElementById("day1Fibers").innerHTML,
                    10
                );
                day1GlycemikNum = parseInt(
                    document.getElementById("day1Glycemik").innerHTML,
                    10
                );

                day1CaloriesNum += ingCaloriesDay1;
                day1CarbohydratesNum += ingCarbohydratesDay1;
                day1LipidsNum += ingLipidsDay1;
                day1ProteinsNum += ingProteinsDay1;
                day1FibersNum += ingFibersDay1;
                day1GlycemikNum += ingGlycemikDay1;
                document.getElementById(ulID).appendChild(ingToAdd);

                document.getElementById("day1Calories").innerHTML = day1CaloriesNum;
                document.getElementById(
                    "day1Carbohydrates"
                ).innerHTML = day1CarbohydratesNum;
                document.getElementById("day1Lipids").innerHTML = day1LipidsNum;
                document.getElementById("day1Proteins").innerHTML = day1ProteinsNum;
                document.getElementById("day1Fibers").innerHTML = day1FibersNum;
                document.getElementById(
                    "day1Glycemik"
                ).innerHTML = day1GlycemikNum;
            } else if (ingredient == "") {
                alert("Veuillez insérer un ingrédient");
            } else {
                alert(
                    "L'ingrédient \"" +
                    ingredient +
                    "\" n'existe pas. Merci de choisir un des aliments proposés"
                );
                document.getElementById("ingNameDay1").innerHTML = "";
            }

            // //Delete for Day1Meal1
            // items = document.querySelectorAll("#day1meal1 li");
            // tab = [];
            // liIndex;
            // // populate tab with li data
            // for (var i = 0; i < items.length; i++) {
            //     tab.push(items[i].innerHTML);
            // }
            // // get li index using tab array on li click event
            // for (var i = 0; i < items.length; i++) {
            //     items[i].onclick = function() {
            //         liIndex = tab.indexOf(this.innerHTML);
            //         console.log(this.innerHTML + " INDEX = " + liIndex);
            //     };
            // }
        }


        // Day2
        // Variables for Day2
        let day2Calories = 0;
        let day2Proteins = 0;
        let day2Lipids = 0;
        let day2Carbohydrates = 0;
        let day2Fibers = 0;
        let day2Glycemik = 0;
        // Variables for Day2
        let day2CaloriesNum;
        let day2CarbohydratesNum;
        let day2LipidsNum;
        let day2ProteinsNum;
        let day2FibersNum;
        let day2GlycemikNum;
        // Variables for Day2
        let ingCaloriesDay2 = 0;
        let ingCarbohydratesDay2 = 0;
        let ingLipidsDay2 = 0;
        let ingProteinsDay2 = 0;
        let ingFibersDay2 = 0;
        let ingGlycemikDay2 = 0;

        // // Variables for delete for Day2
        // var items, tab, liIndex;


        function addDay2() {
            // Check if ingredient exists
            let ingredient = document.getElementById("ingNameDay2").value;
            console.log("Ingredient : " + ingredient);
            let ingExists = false;

            function isIngExisting() {
                for (var i = 0; i < arrIng.length; i++) {
                    if (ingredient.toUpperCase() == arrIng[i].toUpperCase()) {
                        ingExists = true;
                        break;
                    }
                }
            }
            isIngExisting();
            console.log("Is the ingredient existing : " + ingExists);
            if (ingExists) {
                // Find selected meal
                let ddownMeal = document.getElementById(
                    "mealNumbSelection2"
                );
                let mealNumber =
                    ddownMeal.options[ddownMeal.selectedIndex].value;
                console.log(mealNumber);
                // Assign selected day
                let dayNumber = "day2";
                // Find selected quantity
                let ddownQtt = document.getElementById("foodQtt2");
                let qtt = ddownQtt.options[ddownQtt.selectedIndex].value;
                // Add the ingredient
                console.log(ingredient);
                let ingToAdd = document.createElement("li");
                ingToAdd.textContent = ingredient + " x" + qtt;
                let ulID = dayNumber + mealNumber;
                console.log(ulID);
                document.getElementById(ulID).appendChild(ingToAdd);
                document.getElementById("ingNameDay2").value = "";
                ddownQtt.value = 1;
                // Compute left calories, Carbohydrates, Lipids and Proteins
                for (let i = 0; i < tempIng.length; i++) {
                    if (ingredient === tempIng[i].nomAliment) {
                        ingCaloriesDay2 = parseInt(tempIng[i].calorie, 10) * qtt;
                        ingCarbohydratesDay2 = parseInt(tempIng[i].glucide, 10) * qtt;
                        ingLipidsDay2 = parseInt(tempIng[i].lipid, 10) * qtt;
                        ingProteinsDay2 = parseInt(tempIng[i].proteine, 10) * qtt;
                        ingFibersDay2 = parseInt(tempIng[i].fibre, 10) * qtt;
                        ingGlycemikDay2 = parseInt(tempIng[i].glycemique, 10) * qtt;
                    }
                }

                //
                day2CaloriesNum = parseInt(
                    document.getElementById("day2Calories").value,
                    10
                );
                day2CarbohydratesNum = parseInt(
                    document.getElementById("day2Carbohydrates").value,
                    10
                );
                day2LipidsNum = parseInt(
                    document.getElementById("day2Lipids").value,
                    10
                );
                day2ProteinsNum = parseInt(
                    document.getElementById("day2Proteins").value,
                    10
                );
                day2FibersNum = parseInt(
                    document.getElementById("day2Fibers").value,
                    10
                );
                day2GlycemikNum = parseInt(
                    document.getElementById("day2Glycemik").value,
                    10
                );

                day2CaloriesNum += ingCaloriesDay2;
                day2CarbohydratesNum += ingCarbohydratesDay2;
                day2LipidsNum += ingLipidsDay2;
                day2ProteinsNum += ingProteinsDay2;
                day2FibersNum += ingFibersDay2;
                day2GlycemikNum += ingGlycemikDay2;
                document.getElementById(ulID).appendChild(ingToAdd);

                document.getElementById("day2Calories").value = day2CaloriesNum;
                document.getElementById(
                    "day2Carbohydrates"
                ).value = day2CarbohydratesNum;
                document.getElementById("day2Lipids").value = day2LipidsNum;
                document.getElementById("day2Proteins").value = day2ProteinsNum;
                document.getElementById("day2Fibers").value = day2FibersNum;
                document.getElementById(
                    "day2Glycemik"
                ).value = day2GlycemikNum;
            } else if (ingredient == "") {
                alert("Veuillez insérer un ingrédient");
            } else {
                alert(
                    "L'ingrédient \"" +
                    ingredient +
                    "\" n'existe pas. Merci de choisir un des aliments proposés"
                );
                document.getElementById("ingNameDay2").value = "";
            }

            // //Delete for Day2Meal2
            // items = document.querySelectorAll("#day2meal2 li");
            // tab = [];
            // liIndex;
            // // populate tab with li data
            // for (var i = 0; i < items.length; i++) {
            //     tab.push(items[i].innerHTML);
            // }
            // // get li index using tab array on li click event
            // for (var i = 0; i < items.length; i++) {
            //     items[i].onclick = function() {
            //         liIndex = tab.indexOf(this.innerHTML);
            //         console.log(this.innerHTML + " INDEX = " + liIndex);
            //     };
            // }
        }


























        // Day3
        // Variables for Day3
        let day3Calories = 0;
        let day3Proteins = 0;
        let day3Lipids = 0;
        let day3Carbohydrates = 0;
        let day3Fibers = 0;
        let day3Glycemik = 0;
        // Variables for Day3
        let day3CaloriesNum;
        let day3CarbohydratesNum;
        let day3LipidsNum;
        let day3ProteinsNum;
        let day3FibersNum;
        let day3GlycemikNum;
        // Variables for Day3
        let ingCaloriesDay3 = 0;
        let ingCarbohydratesDay3 = 0;
        let ingLipidsDay3 = 0;
        let ingProteinsDay3 = 0;
        let ingFibersDay3 = 0;
        let ingGlycemikDay3 = 0;

        // // Variables for delete for Day3
        // var items, tab, liIndex;


        function addDay3() {
            // Check if ingredient exists
            let ingredient = document.getElementById("ingNameDay3").value;
            console.log("Ingredient : " + ingredient);
            let ingExists = false;

            function isIngExisting() {
                for (var i = 0; i < arrIng.length; i++) {
                    if (ingredient.toUpperCase() == arrIng[i].toUpperCase()) {
                        ingExists = true;
                        break;
                    }
                }
            }
            isIngExisting();
            console.log("Is the ingredient existing : " + ingExists);
            if (ingExists) {
                // Find selected meal
                let ddownMeal = document.getElementById(
                    "mealNumbSelection3"
                );
                let mealNumber =
                    ddownMeal.options[ddownMeal.selectedIndex].value;
                console.log(mealNumber);
                // Assign selected day
                let dayNumber = "day3";
                // Find selected quantity
                let ddownQtt = document.getElementById("foodQtt3");
                let qtt = ddownQtt.options[ddownQtt.selectedIndex].value;
                // Add the ingredient
                console.log(ingredient);
                let ingToAdd = document.createElement("li");
                ingToAdd.textContent = ingredient + " x" + qtt;
                let ulID = dayNumber + mealNumber;
                console.log(ulID);
                document.getElementById(ulID).appendChild(ingToAdd);
                document.getElementById("ingNameDay3").value = "";
                ddownQtt.value = 1;
                // Compute left calories, Carbohydrates, Lipids and Proteins
                for (let i = 0; i < tempIng.length; i++) {
                    if (ingredient === tempIng[i].nomAliment) {
                        ingCaloriesDay3 = parseInt(tempIng[i].calorie, 10) * qtt;
                        ingCarbohydratesDay3 = parseInt(tempIng[i].glucide, 10) * qtt;
                        ingLipidsDay3 = parseInt(tempIng[i].lipid, 10) * qtt;
                        ingProteinsDay3 = parseInt(tempIng[i].proteine, 10) * qtt;
                        ingFibersDay3 = parseInt(tempIng[i].fibre, 10) * qtt;
                        ingGlycemikDay3 = parseInt(tempIng[i].glycemique, 10) * qtt;
                    }
                }

                //
                day3CaloriesNum = parseInt(
                    document.getElementById("day3Calories").value,
                    10
                );
                day3CarbohydratesNum = parseInt(
                    document.getElementById("day3Carbohydrates").value,
                    10
                );
                day3LipidsNum = parseInt(
                    document.getElementById("day3Lipids").value,
                    10
                );
                day3ProteinsNum = parseInt(
                    document.getElementById("day3Proteins").value,
                    10
                );
                day3FibersNum = parseInt(
                    document.getElementById("day3Fibers").value,
                    10
                );
                day3GlycemikNum = parseInt(
                    document.getElementById("day3Glycemik").value,
                    10
                );

                day3CaloriesNum += ingCaloriesDay3;
                day3CarbohydratesNum += ingCarbohydratesDay3;
                day3LipidsNum += ingLipidsDay3;
                day3ProteinsNum += ingProteinsDay3;
                day3FibersNum += ingFibersDay3;
                day3GlycemikNum += ingGlycemikDay3;
                document.getElementById(ulID).appendChild(ingToAdd);

                document.getElementById("day3Calories").value = day3CaloriesNum;
                document.getElementById(
                    "day3Carbohydrates"
                ).value = day3CarbohydratesNum;
                document.getElementById("day3Lipids").value = day3LipidsNum;
                document.getElementById("day3Proteins").value = day3ProteinsNum;
                document.getElementById("day3Fibers").value = day3FibersNum;
                document.getElementById(
                    "day3Glycemik"
                ).value = day3GlycemikNum;
            } else if (ingredient == "") {
                alert("Veuillez insérer un ingrédient");
            } else {
                alert(
                    "L'ingrédient \"" +
                    ingredient +
                    "\" n'existe pas. Merci de choisir un des aliments proposés"
                );
                document.getElementById("ingNameDay3").value = "";
            }

            // //Delete for Day3Meal2
            // items = document.querySelectorAll("#day3meal2 li");
            // tab = [];
            // liIndex;
            // // populate tab with li data
            // for (var i = 0; i < items.length; i++) {
            //     tab.push(items[i].innerHTML);
            // }
            // // get li index using tab array on li click event
            // for (var i = 0; i < items.length; i++) {
            //     items[i].onclick = function() {
            //         liIndex = tab.indexOf(this.innerHTML);
            //         console.log(this.innerHTML + " INDEX = " + liIndex);
            //     };
            // }
        }








        // Day4
        // Variables for Day4
        let day4Calories = 0;
        let day4Proteins = 0;
        let day4Lipids = 0;
        let day4Carbohydrates = 0;
        let day4Fibers = 0;
        let day4Glycemik = 0;
        // Variables for Day4
        let day4CaloriesNum;
        let day4CarbohydratesNum;
        let day4LipidsNum;
        let day4ProteinsNum;
        let day4FibersNum;
        let day4GlycemikNum;
        // Variables for Day4
        let ingCaloriesDay4 = 0;
        let ingCarbohydratesDay4 = 0;
        let ingLipidsDay4 = 0;
        let ingProteinsDay4 = 0;
        let ingFibersDay4 = 0;
        let ingGlycemikDay4 = 0;

        // // Variables for delete for Day4
        // var items, tab, liIndex;


        function addDay4() {
            // Check if ingredient exists
            let ingredient = document.getElementById("ingNameDay4").value;
            console.log("Ingredient : " + ingredient);
            let ingExists = false;

            function isIngExisting() {
                for (var i = 0; i < arrIng.length; i++) {
                    if (ingredient.toUpperCase() == arrIng[i].toUpperCase()) {
                        ingExists = true;
                        break;
                    }
                }
            }
            isIngExisting();
            console.log("Is the ingredient existing : " + ingExists);
            if (ingExists) {
                // Find selected meal
                let ddownMeal = document.getElementById(
                    "mealNumbSelection4"
                );
                let mealNumber =
                    ddownMeal.options[ddownMeal.selectedIndex].value;
                console.log(mealNumber);
                // Assign selected day
                let dayNumber = "day4";
                // Find selected quantity
                let ddownQtt = document.getElementById("foodQtt4");
                let qtt = ddownQtt.options[ddownQtt.selectedIndex].value;
                // Add the ingredient
                console.log(ingredient);
                let ingToAdd = document.createElement("li");
                ingToAdd.textContent = ingredient + " x" + qtt;
                let ulID = dayNumber + mealNumber;
                console.log(ulID);
                document.getElementById(ulID).appendChild(ingToAdd);
                document.getElementById("ingNameDay4").value = "";
                ddownQtt.value = 1;
                // Compute left calories, Carbohydrates, Lipids and Proteins
                for (let i = 0; i < tempIng.length; i++) {
                    if (ingredient === tempIng[i].nomAliment) {
                        ingCaloriesDay4 = parseInt(tempIng[i].calorie, 10) * qtt;
                        ingCarbohydratesDay4 = parseInt(tempIng[i].glucide, 10) * qtt;
                        ingLipidsDay4 = parseInt(tempIng[i].lipid, 10) * qtt;
                        ingProteinsDay4 = parseInt(tempIng[i].proteine, 10) * qtt;
                        ingFibersDay4 = parseInt(tempIng[i].fibre, 10) * qtt;
                        ingGlycemikDay4 = parseInt(tempIng[i].glycemique, 10) * qtt;
                    }
                }

                //
                day4CaloriesNum = parseInt(
                    document.getElementById("day4Calories").value,
                    10
                );
                day4CarbohydratesNum = parseInt(
                    document.getElementById("day4Carbohydrates").value,
                    10
                );
                day4LipidsNum = parseInt(
                    document.getElementById("day4Lipids").value,
                    10
                );
                day4ProteinsNum = parseInt(
                    document.getElementById("day4Proteins").value,
                    10
                );
                day4FibersNum = parseInt(
                    document.getElementById("day4Fibers").value,
                    10
                );
                day4GlycemikNum = parseInt(
                    document.getElementById("day4Glycemik").value,
                    10
                );

                day4CaloriesNum += ingCaloriesDay4;
                day4CarbohydratesNum += ingCarbohydratesDay4;
                day4LipidsNum += ingLipidsDay4;
                day4ProteinsNum += ingProteinsDay4;
                day4FibersNum += ingFibersDay4;
                day4GlycemikNum += ingGlycemikDay4;
                document.getElementById(ulID).appendChild(ingToAdd);

                document.getElementById("day4Calories").value = day4CaloriesNum;
                document.getElementById(
                    "day4Carbohydrates"
                ).value = day4CarbohydratesNum;
                document.getElementById("day4Lipids").value = day4LipidsNum;
                document.getElementById("day4Proteins").value = day4ProteinsNum;
                document.getElementById("day4Fibers").value = day4FibersNum;
                document.getElementById(
                    "day4Glycemik"
                ).value = day4GlycemikNum;
            } else if (ingredient == "") {
                alert("Veuillez insérer un ingrédient");
            } else {
                alert(
                    "L'ingrédient \"" +
                    ingredient +
                    "\" n'existe pas. Merci de choisir un des aliments proposés"
                );
                document.getElementById("ingNameDay4").value = "";
            }

            // //Delete for Day4Meal2
            // items = document.querySelectorAll("#day4meal2 li");
            // tab = [];
            // liIndex;
            // // populate tab with li data
            // for (var i = 0; i < items.length; i++) {
            //     tab.push(items[i].innerHTML);
            // }
            // // get li index using tab array on li click event
            // for (var i = 0; i < items.length; i++) {
            //     items[i].onclick = function() {
            //         liIndex = tab.indexOf(this.innerHTML);
            //         console.log(this.innerHTML + " INDEX = " + liIndex);
            //     };
            // }
        }










        // Day5
        // Variables for Day5
        let day5Calories = 0;
        let day5Proteins = 0;
        let day5Lipids = 0;
        let day5Carbohydrates = 0;
        let day5Fibers = 0;
        let day5Glycemik = 0;
        // Variables for Day5
        let day5CaloriesNum;
        let day5CarbohydratesNum;
        let day5LipidsNum;
        let day5ProteinsNum;
        let day5FibersNum;
        let day5GlycemikNum;
        // Variables for Day5
        let ingCaloriesDay5 = 0;
        let ingCarbohydratesDay5 = 0;
        let ingLipidsDay5 = 0;
        let ingProteinsDay5 = 0;
        let ingFibersDay5 = 0;
        let ingGlycemikDay5 = 0;

        // // Variables for delete for Day5
        // var items, tab, liIndex;


        function addDay5() {
            // Check if ingredient exists
            let ingredient = document.getElementById("ingNameDay5").value;
            console.log("Ingredient : " + ingredient);
            let ingExists = false;

            function isIngExisting() {
                for (var i = 0; i < arrIng.length; i++) {
                    if (ingredient.toUpperCase() == arrIng[i].toUpperCase()) {
                        ingExists = true;
                        break;
                    }
                }
            }
            isIngExisting();
            console.log("Is the ingredient existing : " + ingExists);
            if (ingExists) {
                // Find selected meal
                let ddownMeal = document.getElementById(
                    "mealNumbSelection5"
                );
                let mealNumber =
                    ddownMeal.options[ddownMeal.selectedIndex].value;
                console.log(mealNumber);
                // Assign selected day
                let dayNumber = "day5";
                // Find selected quantity
                let ddownQtt = document.getElementById("foodQtt5");
                let qtt = ddownQtt.options[ddownQtt.selectedIndex].value;
                // Add the ingredient
                console.log(ingredient);
                let ingToAdd = document.createElement("li");
                ingToAdd.textContent = ingredient + " x" + qtt;
                let ulID = dayNumber + mealNumber;
                console.log(ulID);
                document.getElementById(ulID).appendChild(ingToAdd);
                document.getElementById("ingNameDay5").value = "";
                ddownQtt.value = 1;
                // Compute left calories, Carbohydrates, Lipids and Proteins
                for (let i = 0; i < tempIng.length; i++) {
                    if (ingredient === tempIng[i].nomAliment) {
                        ingCaloriesDay5 = parseInt(tempIng[i].calorie, 10) * qtt;
                        ingCarbohydratesDay5 = parseInt(tempIng[i].glucide, 10) * qtt;
                        ingLipidsDay5 = parseInt(tempIng[i].lipid, 10) * qtt;
                        ingProteinsDay5 = parseInt(tempIng[i].proteine, 10) * qtt;
                        ingFibersDay5 = parseInt(tempIng[i].fibre, 10) * qtt;
                        ingGlycemikDay5 = parseInt(tempIng[i].glycemique, 10) * qtt;
                    }
                }

                //
                day5CaloriesNum = parseInt(
                    document.getElementById("day5Calories").value,
                    10
                );
                day5CarbohydratesNum = parseInt(
                    document.getElementById("day5Carbohydrates").value,
                    10
                );
                day5LipidsNum = parseInt(
                    document.getElementById("day5Lipids").value,
                    10
                );
                day5ProteinsNum = parseInt(
                    document.getElementById("day5Proteins").value,
                    10
                );
                day5FibersNum = parseInt(
                    document.getElementById("day5Fibers").value,
                    10
                );
                day5GlycemikNum = parseInt(
                    document.getElementById("day5Glycemik").value,
                    10
                );

                day5CaloriesNum += ingCaloriesDay5;
                day5CarbohydratesNum += ingCarbohydratesDay5;
                day5LipidsNum += ingLipidsDay5;
                day5ProteinsNum += ingProteinsDay5;
                day5FibersNum += ingFibersDay5;
                day5GlycemikNum += ingGlycemikDay5;
                document.getElementById(ulID).appendChild(ingToAdd);

                document.getElementById("day5Calories").value = day5CaloriesNum;
                document.getElementById(
                    "day5Carbohydrates"
                ).value = day5CarbohydratesNum;
                document.getElementById("day5Lipids").value = day5LipidsNum;
                document.getElementById("day5Proteins").value = day5ProteinsNum;
                document.getElementById("day5Fibers").value = day5FibersNum;
                document.getElementById(
                    "day5Glycemik"
                ).value = day5GlycemikNum;
            } else if (ingredient == "") {
                alert("Veuillez insérer un ingrédient");
            } else {
                alert(
                    "L'ingrédient \"" +
                    ingredient +
                    "\" n'existe pas. Merci de choisir un des aliments proposés"
                );
                document.getElementById("ingNameDay5").value = "";
            }

            // //Delete for Day5Meal2
            // items = document.querySelectorAll("#day5meal2 li");
            // tab = [];
            // liIndex;
            // // populate tab with li data
            // for (var i = 0; i < items.length; i++) {
            //     tab.push(items[i].innerHTML);
            // }
            // // get li index using tab array on li click event
            // for (var i = 0; i < items.length; i++) {
            //     items[i].onclick = function() {
            //         liIndex = tab.indexOf(this.innerHTML);
            //         console.log(this.innerHTML + " INDEX = " + liIndex);
            //     };
            // }
        }














        // Day 6
        // Variables for Day6
        let day6Calories = 0;
        let day6Proteins = 0;
        let day6Lipids = 0;
        let day6Carbohydrates = 0;
        let day6Fibers = 0;
        let day6Glycemik = 0;
        // Variables for Day6
        let day6CaloriesNum;
        let day6CarbohydratesNum;
        let day6LipidsNum;
        let day6ProteinsNum;
        let day6FibersNum;
        let day6GlycemikNum;
        // Variables for Day6
        let ingCaloriesDay6 = 0;
        let ingCarbohydratesDay6 = 0;
        let ingLipidsDay6 = 0;
        let ingProteinsDay6 = 0;
        let ingFibersDay6 = 0;
        let ingGlycemikDay6 = 0;

        // // Variables for delete for Day6
        // var items, tab, liIndex;


        function addDay6() {
            // Check if ingredient exists
            let ingredient = document.getElementById("ingNameDay6").value;
            console.log("Ingredient : " + ingredient);
            let ingExists = false;

            function isIngExisting() {
                for (var i = 0; i < arrIng.length; i++) {
                    if (ingredient.toUpperCase() == arrIng[i].toUpperCase()) {
                        ingExists = true;
                        break;
                    }
                }
            }
            isIngExisting();
            console.log("Is the ingredient existing : " + ingExists);
            if (ingExists) {
                // Find selected meal
                let ddownMeal = document.getElementById(
                    "mealNumbSelection6"
                );
                let mealNumber =
                    ddownMeal.options[ddownMeal.selectedIndex].value;
                console.log(mealNumber);
                // Assign selected day
                let dayNumber = "day6";
                // Find selected quantity
                let ddownQtt = document.getElementById("foodQtt6");
                let qtt = ddownQtt.options[ddownQtt.selectedIndex].value;
                // Add the ingredient
                console.log(ingredient);
                let ingToAdd = document.createElement("li");
                ingToAdd.textContent = ingredient + " x" + qtt;
                let ulID = dayNumber + mealNumber;
                console.log(ulID);
                document.getElementById(ulID).appendChild(ingToAdd);
                document.getElementById("ingNameDay6").value = "";
                ddownQtt.value = 1;
                // Compute left calories, Carbohydrates, Lipids and Proteins
                for (let i = 0; i < tempIng.length; i++) {
                    if (ingredient === tempIng[i].nomAliment) {
                        ingCaloriesDay6 = parseInt(tempIng[i].calorie, 10) * qtt;
                        ingCarbohydratesDay6 = parseInt(tempIng[i].glucide, 10) * qtt;
                        ingLipidsDay6 = parseInt(tempIng[i].lipid, 10) * qtt;
                        ingProteinsDay6 = parseInt(tempIng[i].proteine, 10) * qtt;
                        ingFibersDay6 = parseInt(tempIng[i].fibre, 10) * qtt;
                        ingGlycemikDay6 = parseInt(tempIng[i].glycemique, 10) * qtt;
                    }
                }

                //
                day6CaloriesNum = parseInt(
                    document.getElementById("day6Calories").value,
                    10
                );
                day6CarbohydratesNum = parseInt(
                    document.getElementById("day6Carbohydrates").value,
                    10
                );
                day6LipidsNum = parseInt(
                    document.getElementById("day6Lipids").value,
                    10
                );
                day6ProteinsNum = parseInt(
                    document.getElementById("day6Proteins").value,
                    10
                );
                day6FibersNum = parseInt(
                    document.getElementById("day6Fibers").value,
                    10
                );
                day6GlycemikNum = parseInt(
                    document.getElementById("day6Glycemik").value,
                    10
                );

                day6CaloriesNum += ingCaloriesDay6;
                day6CarbohydratesNum += ingCarbohydratesDay6;
                day6LipidsNum += ingLipidsDay6;
                day6ProteinsNum += ingProteinsDay6;
                day6FibersNum += ingFibersDay6;
                day6GlycemikNum += ingGlycemikDay6;
                document.getElementById(ulID).appendChild(ingToAdd);

                document.getElementById("day6Calories").value = day6CaloriesNum;
                document.getElementById(
                    "day6Carbohydrates"
                ).value = day6CarbohydratesNum;
                document.getElementById("day6Lipids").value = day6LipidsNum;
                document.getElementById("day6Proteins").value = day6ProteinsNum;
                document.getElementById("day6Fibers").value = day6FibersNum;
                document.getElementById(
                    "day6Glycemik"
                ).value = day6GlycemikNum;
            } else if (ingredient == "") {
                alert("Veuillez insérer un ingrédient");
            } else {
                alert(
                    "L'ingrédient \"" +
                    ingredient +
                    "\" n'existe pas. Merci de choisir un des aliments proposés"
                );
                document.getElementById("ingNameDay6").value = "";
            }

            // //Delete for Day6Meal2
            // items = document.querySelectorAll("#day6meal2 li");
            // tab = [];
            // liIndex;
            // // populate tab with li data
            // for (var i = 0; i < items.length; i++) {
            //     tab.push(items[i].innerHTML);
            // }
            // // get li index using tab array on li click event
            // for (var i = 0; i < items.length; i++) {
            //     items[i].onclick = function() {
            //         liIndex = tab.indexOf(this.innerHTML);
            //         console.log(this.innerHTML + " INDEX = " + liIndex);
            //     };
            // }
        }












        // Day 7
        // Variables for Day7
        let day7Calories = 0;
        let day7Proteins = 0;
        let day7Lipids = 0;
        let day7Carbohydrates = 0;
        let day7Fibers = 0;
        let day7Glycemik = 0;
        // Variables for Day7
        let day7CaloriesNum;
        let day7CarbohydratesNum;
        let day7LipidsNum;
        let day7ProteinsNum;
        let day7FibersNum;
        let day7GlycemikNum;
        // Variables for Day7
        let ingCaloriesDay7 = 0;
        let ingCarbohydratesDay7 = 0;
        let ingLipidsDay7 = 0;
        let ingProteinsDay7 = 0;
        let ingFibersDay7 = 0;
        let ingGlycemikDay7 = 0;

        // // Variables for delete for Day7
        // var items, tab, liIndex;


        function addDay7() {
            // Check if ingredient exists
            let ingredient = document.getElementById("ingNameDay7").value;
            console.log("Ingredient : " + ingredient);
            let ingExists = false;

            function isIngExisting() {
                for (var i = 0; i < arrIng.length; i++) {
                    if (ingredient.toUpperCase() == arrIng[i].toUpperCase()) {
                        ingExists = true;
                        break;
                    }
                }
            }
            isIngExisting();
            console.log("Is the ingredient existing : " + ingExists);
            if (ingExists) {
                // Find selected meal
                let ddownMeal = document.getElementById(
                    "mealNumbSelection7"
                );
                let mealNumber =
                    ddownMeal.options[ddownMeal.selectedIndex].value;
                console.log(mealNumber);
                // Assign selected day
                let dayNumber = "day7";
                // Find selected quantity
                let ddownQtt = document.getElementById("foodQtt7");
                let qtt = ddownQtt.options[ddownQtt.selectedIndex].value;
                // Add the ingredient
                console.log(ingredient);
                let ingToAdd = document.createElement("li");
                ingToAdd.textContent = ingredient + " x" + qtt;
                let ulID = dayNumber + mealNumber;
                console.log(ulID);
                document.getElementById(ulID).appendChild(ingToAdd);
                document.getElementById("ingNameDay7").value = "";
                ddownQtt.value = 1;
                // Compute left calories, Carbohydrates, Lipids and Proteins
                for (let i = 0; i < tempIng.length; i++) {
                    if (ingredient === tempIng[i].nomAliment) {
                        ingCaloriesDay7 = parseInt(tempIng[i].calorie, 10) * qtt;
                        ingCarbohydratesDay7 = parseInt(tempIng[i].glucide, 10) * qtt;
                        ingLipidsDay7 = parseInt(tempIng[i].lipid, 10) * qtt;
                        ingProteinsDay7 = parseInt(tempIng[i].proteine, 10) * qtt;
                        ingFibersDay7 = parseInt(tempIng[i].fibre, 10) * qtt;
                        ingGlycemikDay7 = parseInt(tempIng[i].glycemique, 10) * qtt;
                    }
                }

                //
                day7CaloriesNum = parseInt(
                    document.getElementById("day7Calories").value,
                    10
                );
                day7CarbohydratesNum = parseInt(
                    document.getElementById("day7Carbohydrates").value,
                    10
                );
                day7LipidsNum = parseInt(
                    document.getElementById("day7Lipids").value,
                    10
                );
                day7ProteinsNum = parseInt(
                    document.getElementById("day7Proteins").value,
                    10
                );
                day7FibersNum = parseInt(
                    document.getElementById("day7Fibers").value,
                    10
                );
                day7GlycemikNum = parseInt(
                    document.getElementById("day7Glycemik").value,
                    10
                );

                day7CaloriesNum += ingCaloriesDay7;
                day7CarbohydratesNum += ingCarbohydratesDay7;
                day7LipidsNum += ingLipidsDay7;
                day7ProteinsNum += ingProteinsDay7;
                day7FibersNum += ingFibersDay7;
                day7GlycemikNum += ingGlycemikDay7;
                document.getElementById(ulID).appendChild(ingToAdd);

                document.getElementById("day7Calories").value = day7CaloriesNum;
                document.getElementById(
                    "day7Carbohydrates"
                ).value = day7CarbohydratesNum;
                document.getElementById("day7Lipids").value = day7LipidsNum;
                document.getElementById("day7Proteins").value = day7ProteinsNum;
                document.getElementById("day7Fibers").value = day7FibersNum;
                document.getElementById(
                    "day7Glycemik"
                ).value = day7GlycemikNum;
            } else if (ingredient == "") {
                alert("Veuillez insérer un ingrédient");
            } else {
                alert(
                    "L'ingrédient \"" +
                    ingredient +
                    "\" n'existe pas. Merci de choisir un des aliments proposés"
                );
                document.getElementById("ingNameDay7").value = "";
            }

            // //Delete for Day7Meal2
            // items = document.querySelectorAll("#day7meal2 li");
            // tab = [];
            // liIndex;
            // // populate tab with li data
            // for (var i = 0; i < items.length; i++) {
            //     tab.push(items[i].innerHTML);
            // }
            // // get li index using tab array on li click event
            // for (var i = 0; i < items.length; i++) {
            //     items[i].onclick = function() {
            //         liIndex = tab.indexOf(this.innerHTML);
            //         console.log(this.innerHTML + " INDEX = " + liIndex);
            //     };
            // }
        }









        // function removeLI() {
        //     items[liIndex].parentNode.removeChild(items[liIndex]);
        //     day1CaloriesNum -= ingCaloriesDay1;
        //     day1CarbohydratesNum -= ingCarbohydratesDay1;
        //     document.getElementById("day1Calories").value = day1CaloriesNum;
        //     document.getElementById("day1Carbohydrates").value = day1CarbohydratesNum;
        // }
    </script>





    <?php
    $connexion->close();
    ?>

</body>

</html>