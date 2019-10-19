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
                            <label for="alcoolHabitude">Alcool (verres par session)</label>
                            <input type="number" min="0" class="form-control" id="alcoolHabitude" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-2 mb-3">
                            <label for="typeEmploi">Type d'emplois</label>
                            <select id="typeEmploi" class="form-control">
                                <option value="" selected>Sélectionner</option>
                                <option>Physique</option>
                                <option>Passif</option>
                            </select>
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="styleDeVie">Style de vie</label>
                            <select id="styleDeVie" class="form-control">
                                <option selected>Sélectionner</option>
                                <option>Sédentaire</option>
                                <option>Actif</option>
                                <option>Sportif</option>
                                <option>Athlète</option>
                            </select>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="activitePhysique">Activité(s) physiques</label>
                            <textarea type="textarea" min="0" class="form-control" id="activitePhysique" required></textarea>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="foisParSession">Nombre de fois par session</label>
                            <input type="number" min="0" class="form-control" id="foisParSession" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-2 mb-3">
                            <label for="experAnterieure">Expérience antérieure</label>
                            <select id="experAnterieure" class="form-control">
                                <option selected>Sélectionner</option>
                                <option>Oui</option>
                                <option>Non</option>
                            </select>
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="nbrAnnées">Nombre d'années</label>
                            <input type="number" min="0" class="form-control" id="nbrAnnées" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="dispEntrainement">Disponibilités pour entrainement X/sem</label>
                            <input type="number" min="0" class="form-control" id="dispEntrainement" required>
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="nbrHeures">Nombre d'heures</label>
                            <input type="number" min="0" class="form-control" id="nbrHeures" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="excercAime">Ce que vous aimez ou n'aimez pas faire (cardio, machines,
                                poids libre...)</label>
                            <textarea type="textarea" min="0" class="form-control" id="excercAime" required></textarea>
                        </div>
                    </div>
                    <br>
                    <h4 class="m-0 text-dark">Objectifs présents</h4>
                    <br>
                    <div class="form-row">
                        <div class="col-md-2 mb-3">
                            <label for="objectif">Objectif</label>
                            <select id="objectif" class="form-control">
                                <option selected>Sélectionner</option>
                                <option>Perte de poids</option>
                                <option>Remise en forme</option>
                                <option>Préparation pour une compétition</option>
                                <option>Prise de masse</option>
                            </select>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="perdrePoids">Si perte de poids (lbs)</label>
                            <input type="number" min="0" class="form-control" id="perdrePoids" required>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="competition">Si préparation pour une compétition</label>
                            <input type="date" id="competition" name="trip-start" value="2019-10-01" min="2019-10-01" max="2035-10-01">
                        </div>
                    </div>
                    <br>
                    <!-- Renseignements médicaux -->
                    <h4 class="m-0 text-dark">Renseignements médicaux</h4>
                    <br>
                    <div class="form-row">
                        <!-- Medical formValidation26 -->
                        <label for="question01">
                            1) Votre médecin vous a-t-il déjà dit que vous souffriez d’un
                            problème cardiaque et que vous
                            ne devriez participer qu’aux activités prescrites et approuvées par un médecin?
                        </label>
                        <select id="question01" class="form-control">
                            <option selected>Sélectionner</option>
                            <option>Oui</option>
                            <option>Non</option>
                        </select>
                        <!-- Medical formValidation27 -->
                        <label for="question02">
                            2) Ressentez-vous une douleur à la poitrine lorsque vous faites de l’activité physique?
                        </label>
                        <select id="question02" class="form-control">
                            <option selected>Sélectionner</option>
                            <option>Oui</option>
                            <option>Non</option>
                        </select>
                        <!-- Medical formValidation28 -->
                        <label for="question03">
                            3) Au cours du dernier mois, avez-vous ressenti des douleurs à la poitrine lors de périodes
                            autres que celles où vous participiez à une activité physique?
                        </label>
                        <select id="question03" class="form-control">
                            <option selected>Sélectionner</option>
                            <option>Oui</option>
                            <option>Non</option>
                        </select>
                        <!-- Medical formValidation29 -->
                        <label for="question04">
                            4) Éprouvez-vous des problèmes d’équilibre reliés à un étourdissement ou vous arrive-t-il de
                            perdre connaissance?
                        </label>
                        <select id="question04" class="form-control">
                            <option selected>Sélectionner</option>
                            <option>Oui</option>
                            <option>Non</option>
                        </select>
                        <!-- Medical formValidation30 -->
                        <label for="question05">
                            5) Avez-vous des problèmes osseux ou articulaires (par exemple, au dos, au genoux ou à la
                            hanche) qui pourraient s’aggraver par une modification de votre niveau de participation à
                            une activité physique?
                        </label>
                        <select id="question05" class="form-control">
                            <option selected>Sélectionner</option>
                            <option>Oui</option>
                            <option>Non</option>
                        </select>
                        <!-- Medical formValidation31 -->
                        <label for="question06">
                            6) Des médicaments vous sont-ils actuellement prescrits pour contrôler votre tension
                            artérielle ou un problème cardiaque (par exemple, des diurétiques)?
                        </label>
                        <select id="question06" class="form-control">
                            <option selected>Sélectionner</option>
                            <option>Oui</option>
                            <option>Non</option>
                        </select>
                        <!-- Medical formValidation32 -->
                        <label for="question07">
                            7) Connaissez-vous une autre raison pour laquelle vous ne devriez pas faire de l’activité
                            physique?
                        </label>
                        <select id="question07" class="form-control">
                            <option selected>Sélectionner</option>
                            <option>Oui</option>
                            <option>Non</option>
                        </select>
                    </div>
                    <br>
                    <h3> Si vous avez répondu Oui à une ou plusieurs questions :</h3>
                    <h5>
                        Consulter votre médecin AVANT d’augmenter votre niveau de participation à une activité
                        physique et AVANT de faire évaluer votre condition physique, dites à votre médecin que vous
                        avez complété le questionnaire sur l’aptitude à l’activité physique et expliquez-lui précisément
                        à quelles questions vous avez répondu « Oui » il se peut que vous n’avez aucune restrictions à
                        y aller lentement et progressivement. Par ailleurs, il est possible que vous ne puissiez faire que
                        certains types d’efforts adaptés à votre état de santé. Indiquez à votre médecin le
                        type d’activité physique que vous comptiez faire et suivez ses recommandations.
                        Informez-vous quant aux programmes d’activités spécialisés les mieux adaptés à
                        vos besoins, offerts dans votre localité.
                    </h5>
                    <h3> Non à toutes ces questions :</h3>
                    <h5>
                        Si, en toute honnêteté, vous avez répondu « Non » à toutes les questions, vous êtes dans un
                        certaines mesure, assuré (e) que:
                        Vous pouvez augmenter votre pratique régulière d’activités physiques en commençant
                        lentement et en augmentant progressivement l’intensité des activités pratiques c’est le moyen
                        le plus simple et le plus sécuritaire d’y arriver. Vous pouvez faire évaluer votre condition
                        physique. C’est le meilleur moyen de connaitre votre niveau de condition physique de base
                        afin de mieux planifier votre participation à un programme d’activités physiques.
                    </h5>
                    <div class="container">
                        <div class="form-row my-5">
                            <!-- Questionnaire pour plan alimentaire -->
                            <h4 class="m-0 text-dark font-weight-bold"><span>Questionnaire pour plan alimentaire</span></h4>
                        </div>

                        <div class="form-row">
                            <!--  -->
                            <label for="questAlim01">
                                1) Avez-vous des allergies ou intolérances alimentaires?
                            </label>
                            <select id="questAlim01" class="form-control">
                                <option selected>Sélectionner</option>
                                <option>Oui</option>
                                <option>Non</option>
                            </select>
                            <label for="indiq01">
                                Si Oui indiquez lesquels :
                            </label>
                            <textarea type="textarea" min="0" class="form-control" id="indiq01" required></textarea>
                            <!--  -->
                            <label for="questAlim02">
                                2) Combien de fois par semaine pratiquez-vous du sport et à quelle intensité?
                            </label>
                            <select id="questAlim02" class="form-control">
                                <option selected>Sélectionner</option>
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                            <label for="indiq02">
                                Si Oui sélectionner l'intensité :
                            </label>
                            <select id="indiq02" class="form-control">
                                <option selected>Sélectionner</option>
                                <option>Légère</option>
                                <option>Moyenne</option>
                                <option>Élevée (gym)</option>
                            </select>
                            <!--  -->
                            <label for="questAlim03">
                                3) Consommez-vous des produits laitiers?
                            </label>
                            <select id="questAlim03" class="form-control">
                                <option selected>Sélectionner</option>
                                <option>Oui</option>
                                <option>Non</option>
                            </select>
                            <label for="indiq03">
                                Si Oui indiquez lesquels :
                            </label>
                            <textarea type="textarea" min="0" class="form-control" id="indiq03" required></textarea>
                            <!--  -->
                            <label for="questAlim04">
                                4) Quels sont les légumes que vous consommez et que vous aimez?
                            </label>
                            <textarea type="textarea" min="0" class="form-control" id="questAlim04" required></textarea>
                            <!--  -->
                            <label for="questAlim05">
                                5) Quels sont les légumes que vous n’aimez pas?
                            </label>
                            <textarea type="textarea" min="0" class="form-control" id="questAlim05" required></textarea>
                            <!--  -->
                            <label for="questAlim06">
                                6) Quels sont les fruits que vous consommez et que vous aimez?
                            </label>
                            <textarea type="textarea" min="0" class="form-control" id="questAlim06" required></textarea>
                            <!--  -->
                            <label for="questAlim07">
                                7) Quels sont les fruits que vous n’aimez pas?
                            </label>
                            <textarea type="textarea" min="0" class="form-control" id="questAlim07" required></textarea>
                            <!--  -->
                            <label for="questAlim08">
                                8) Quels types de protéines consommez-vous? Et lesquels vous préférez?
                            </label>
                            <textarea type="textarea" min="0" class="form-control" id="questAlim08" required></textarea>
                            <!--  -->
                            <label for="questAlim09">
                                9) Quels sont les types de protéines que vous n’aimez pas?
                            </label>
                            <textarea type="textarea" min="0" class="form-control" id="questAlim09" required></textarea>
                            <!--  -->
                            <label for="questAlim10">
                                10) Consommez-vous des protéines en poudre ou en barre? Lesquels et à quel
                                moment?
                            </label>
                            <select id="questAlim10" class="form-control">
                                <option selected>Sélectionner</option>
                                <option>Oui</option>
                                <option>Non</option>
                            </select>
                            <label for="indiq10">
                                Si Oui indiquez lesquels :
                            </label>
                            <textarea type="textarea" min="0" class="form-control" id="indiq10" required></textarea>
                            <!--  -->
                            <label for="questAlim11">
                                11) Consommez-vous des suppléments alimentaires et si oui lesquels?
                            </label>
                            <select id="questAlim11" class="form-control">
                                <option selected>Sélectionner</option>
                                <option>Oui</option>
                                <option>Non</option>
                            </select>
                            <label for="indiq11">
                                Si Oui indiquez lesquels :
                            </label>
                            <textarea type="textarea" min="0" class="form-control" id="indiq11" required></textarea>
                        </div>
                    </div>
                    <br>
                    <label for="trainingFormSignature">
                        « J'affirme avoir lu, compris et complété le questionnaire et avoir reçu une
                        réponse satisfaisante à chacune de mes questions. »
                    </label>
            </div>
            <br>

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