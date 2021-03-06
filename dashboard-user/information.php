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
  <title>Profil BF21 - Conditionnement physique et mental</title>
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
  <!-- Bootstrap -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  <!-- css custom -->
  <link rel="stylesheet" href="css/profileStyle.css">
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
        <span class="brand-text font-weight-light">Utilisateur BF21</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/user160.png" class="img-circle elevation-2" alt="User Image">
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
            <!-- Sidebar Renseigner ses informations -->
            <li class="nav-item">
              <a href="createtrainingform.php" class="nav-link">
                <i class="nav-icon fas fa-calendar-plus"></i>
                <p>
                  Remplir informations
                </p>
              </a>
            </li>
            <!-- Sidebar Consulter informations -->
            <li class="nav-item">
              <a href="information.php" class="nav-link">
                <i class="nav-icon fas fa-cog"></i>
                <p>
                  Consulter informations
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
              <h1 class="m-0 text-dark">Mes informations</h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
          <hr>
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->

         <?php
    $name = $_SESSION['utilisateur'];
    echo "<br>";
    echo "<div class='container text-center'>";
    include('../website/connexion.php');
    $sql = "SELECT * FROM `utilisateurs` WHERE nom = '$name'";

    if ($res = $connexion->query($sql)) {
        if ($res->num_rows > 0) {
            while ($row = $res->fetch_assoc()) {
                $locCodUtil = $row['codUtilisateur'];
                echo "<b><p>" . "Email : </b>" . $row['eMail'] . "</p>";
                echo "<b><p>" . "Poids : </b>" . $row['poid'] . "</p>";
                echo "<b><p>" . "Taille : </b>" . $row['taille'] . "</p>";
                echo "<b><p>" . "Date de Naissance : </b>" . $row['dateNaissance'] . "</p>";
                echo "<b><p>" . "Genre : </b>" . $row['genre'] . "</p>";
                echo "<b><p>" . "Adresse : </b>" . $row['adresse'] . "</p>";
                echo "<b><p>" . "Telephone : </b>" . $row['telephone'] . "</p>";
            }
            $res->free();
        } else {
            echo "ERROR 3: Nom non trouvé";
        }
    } else {
        echo "ERROR 2: Impossible d'exécuter $sql. " . $connexion->error;
    }

        $sql = "SELECT * FROM `habitudesdevie` WHERE codUtilisateur = '$locCodUtil'";
   
    if ($res = $connexion->query($sql)) {
        if ($res->num_rows > 0) {
            echo ("<h2>Habitudes de Vie</h2></br>");
            while ($row = $res->fetch_assoc()) {
                echo "<b><p>" . "Pression sanguine : </b>" . $row['pressionSanguine'] . "</p>";
                echo "<b><p>" . "Fumeur : </b>" . $row['fume'] . "</p>";
                echo "<b><p>" . "Si Oui combien par jour : </b>" . $row['fumeurParJour'] . "</p>";
                echo "<b><p>" . "Alcool (verres par session) : </b>" . $row['alcoolVerParSemaine'] . "</p>";
                echo "<b><p>" . "Type d'emplois : </b>" . $row['employPhisPass'] . "</p>";
                echo "<b><p>" . "Style de vie : </b>" . $row['styleVie'] . "</p>";
                echo "<b><p>" . "Activité(s) physiques : </b>" . $row['descriptionSport'] . "</p>";
                echo "<b><p>" . "Nombre de fois par session : </b>" . $row['sportParSemaine'] . "</p>";
                echo "<b><p>" . "Expérience antérieure : </b>" . $row['nombreAneesExpAnterieur'] . "</p>";
                echo "<b><p>" . "Nombre d'années : </b>" . $row['nombreAneesExpAnterieur'] . "</p>";
                echo "<b><p>" . "Disponibilités pour entrainement X/sem : </b>" . $row['disponEntreinemenSemaine'] . "</p>";
                echo "<b><p>" . "Nombre d'heures : </b>" . $row['nombreHeures'] . "</p>";
                echo "<b><p>" . "Ce que vous aimez ou n'aimez pas faire (cardio, machines, poids libre...) : </b>" . $row['preferences'] . "</p>";
                echo ("<h2>Objectifs présents</h2></br>");
                echo "<b><p>" . "Objectif : </b>" . $row['pertePoids'] . "</p>";
                echo "<b><p>" . "Si perte de poids (lbs) : </b>" . $row['priseDeMasse'] . "</p>";
                echo "<b><p>" . "Si préparation pour une compétition : </b>" . $row['competition'] . "</p>";
            }
            $res->free();
        } else {
            echo "ERROR 3: Nom non trouvé";
        }
    } else {
        echo "ERROR 2: Impossible d'exécuter $sql. " . $connexion->error;
    }

    
        $sql = "SELECT * FROM `reseignementsmedicaux` WHERE codUtilisateur = '$locCodUtil'";
   
    if ($res = $connexion->query($sql)) {
        if ($res->num_rows > 0) {
            echo ("<h2>Renseignements médicaux</h2></br>");
            while ($row = $res->fetch_assoc()) {
                echo "<b><p>" . "1) Votre médecin vous a-t-il déjà dit que vous souffriez d’un problème cardiaque et que vous ne devriez participer qu’aux activités prescrites et approuvées par un médecin? : </b>" . $row['q01'] . "</p>";
                echo "<b><p>" . "2) Ressentez-vous une douleur à la poitrine lorsque vous faites de l’activité physique? : </b>" . $row['q02'] . "</p>";
                echo "<b><p>" . "3) Au cours du dernier mois, avez-vous ressenti des douleurs à la poitrine lors de périodes autres que celles où vous participiez à une activité physique? : </b>" . $row['q03'] . "</p>";
                echo "<b><p>" . "4) Éprouvez-vous des problèmes d’équilibre reliés à un étourdissement ou vous arrive-t-il de perdre connaissance? : </b>" . $row['q04'] . "</p>";
                echo "<b><p>" . "5) Avez-vous des problèmes osseux ou articulaires (par exemple, au dos, au genoux ou à la hanche) qui pourraient s’aggraver par une modification de votre niveau de participation à une activité physique? : </b>" . $row['q05'] . "</p>";
                echo "<b><p>" . "6) Des médicaments vous sont-ils actuellement prescrits pour contrôler votre tension artérielle ou un problème cardiaque (par exemple, des diurétiques)? : </b>" . $row['q06'] . "</p>";
                echo "<b><p>" . "7) Connaissez-vous une autre raison pour laquelle vous ne devriez pas faire de l’activité physique? : </b>" . $row['q07'] . "</p>";

            }
            $res->free();
        } else {
            echo "ERROR 3: Nom non trouvé";
        }
    } else {
        echo "ERROR 2: Impossible d'exécuter $sql. " . $connexion->error;
    }

            $sql = "SELECT * FROM `questionaireplanalimentaire` WHERE codUtilisateur = '$locCodUtil'";
   
    if ($res = $connexion->query($sql)) {
        if ($res->num_rows > 0) {
            echo ("<h2>Questionnaire pour plan alimentaire</h2></br>");
            while ($row = $res->fetch_assoc()) {
                echo "<b><p>" . "1) Avez-vous des allergies ou intolérances alimentaires? </b>" . $row['q01'] . "</p>";
                echo "<b><p>" . "Si Oui indiquez lesquels : </b>" . $row['q01R'] . "</p>";
                echo "<b><p>" . "2) Combien de fois par semaine pratiquez-vous du sport et à quelle intensité? </b>" . $row['q02'] . "</p>";
                echo "<b><p>" . "Si Oui sélectionner l'intensité : </b>" . $row['q02R'] . "</p>";
                echo "<b><p>" . "3) Consommez-vous des produits laitiers? </b>" . $row['q03'] . "</p>";
                echo "<b><p>" . "Si Oui indiquez lesquels : </b>" . $row['q03R'] . "</p>";
                echo "<b><p>" . "4) Quels sont les légumes que vous consommez et que vous aimez? </b>" . $row['q04'] . "</p>";
                echo "<b><p>" . "5) Quels sont les légumes que vous n’aimez pas? </b>" . $row['q05'] . "</p>";
                echo "<b><p>" . "6) Quels sont les fruits que vous consommez et que vous aimez? </b>" . $row['q06'] . "</p>";
                echo "<b><p>" . "7) Quels sont les fruits que vous n’aimez pas? </b>" . $row['q07'] . "</p>";
                echo "<b><p>" . "8) Quels types de protéines consommez-vous? Et lesquels vous préférez? </b>" . $row['q08'] . "</p>";
                echo "<b><p>" . "9) Quels sont les types de protéines que vous n’aimez pas? </b>" . $row['q09'] . "</p>";
                echo "<b><p>" . "10) Consommez-vous des protéines en poudre ou en barre? Lesquels et à quel moment? </b>" . $row['q10'] . "</p>";
                echo "<b><p>" . "Si Oui indiquez lesquels : </b>" . $row['q10R'] . "</p>";
                echo "<b><p>" . "11) Consommez-vous des suppléments alimentaires et si oui lesquels? </b>" . $row['q11'] . "</p>";
                echo "<b><p>" . "Si Oui indiquez lesquels :</b>" . $row['q11R'] . "</p>";
            }
            $res->free();
        } else {
            echo "ERROR 3: Nom non trouvé";
        }
    } else {
        echo "ERROR 2: Impossible d'exécuter $sql. " . $connexion->error;
    }

    $connexion->close();


    echo "</div>";
    ?>




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