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
                                            Calories :
                                            <input id="day1Calories" value=0 disabled>
                                        </div>
                                        <div class="col">
                                            Protéines :
                                            <input id="day1Proteins" value=0 disabled>
                                        </div>
                                        <div class="col">
                                            Lipides :
                                            <input id="day1Lipids" value=0 disabled>
                                        </div>
                                        <div class="col">
                                            Glucides :
                                            <input id="day1Carbohydrates" value=0 disabled>
                                        </div>
                                        <div class="col">
                                            Fibres :
                                            <input id="day1Fibers" value=0 disabled>
                                        </div>
                                        <div class="col">
                                            Glycémique :
                                            <input id="day1Glycemik" value=0 disabled>
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
        // var ingCalories = new Array();
        // var ingProteins = new Array();
        // var ingLipids = new Array();
        // var ingCarbohydrates = new Array();
        // var ingFibers = new Array();
        // var ingGlycemiks = new Array();
        // for (var i = 0; i < tempNameIng.length; i++) {
        //     ingNames[i] = tempNameIng[i].nomAliment;
        // ingCalories[i] = tempNameIng[i].calorie;
        // ingProteins[i] = tempNameIng[i].proteine;
        // ingLipids[i] = tempNameIng[i].lipid;
        // ingCarbohydrates[i] = tempNameIng[i].glucide;
        // ingFibers[i] = tempNameIng[i].fibre;
        // ingGlycemiks[i] = tempNameIng[i].glycemique;
        // }
        // console.log(tempNameIng);
        // console.log(ingNames);
        // console.log(ingCalories);
        // console.log(ingProteins);
        // console.log(ingLipids);
        // console.log(ingCarbohydrates);
        // console.log(ingFibers);
        // console.log(ingGlycemiks);




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

        // let dayProteins = Math.round((bmr * 20) / 100);
        // let dayLipids = Math.round((bmr * 20) / 100);
        // let dayCarbohydrates = Math.round((bmr * 60) / 100);
        // // Show in Info client
        // document.getElementById("dayCalories").innerHTML = bmr;
        // // Show in Day1
        // document.getElementById("day1Calories").innerHTML = bmr;
        // document.getElementById("day1Proteins").innerHTML = dayProteins;
        // document.getElementById("day1Lipids").innerHTML = dayLipids;
        // document.getElementById("day1Carbohydrates").innerHTML = dayCarbohydrates;

        let dayCalories = 0;
        let dayProteins = 0;
        let dayLipids = 0;
        let dayCarbohydrates = 0;
        let dayFibers = 0;
        let dayGlycemik = 0;

        // Day1
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
                let ingCalories = 0;
                let ingCarbohydrates = 0;
                let ingLipids = 0;
                let ingProteins = 0;
                let ingFibers = 0;
                let ingGlycemik = 0;
                for (let i = 0; i < tempIng.length; i++) {
                    if (ingredient === tempIng[i].nomAliment) {
                        ingCalories = parseInt(tempIng[i].calorie, 10) * qtt;
                        ingCarbohydrates = parseInt(tempIng[i].glucide, 10) * qtt;
                        ingLipids = parseInt(tempIng[i].lipid, 10) * qtt;
                        ingProteins = parseInt(tempIng[i].proteine, 10) * qtt;
                        ingFibers = parseInt(tempIng[i].fibre, 10) * qtt;
                        ingGlycemik = parseInt(tempIng[i].glycemique, 10) * qtt;
                    }
                }


                //
                let day1CaloriesNum = parseInt(
                    document.getElementById("day1Calories").value,
                    10
                );
                let day1CarbohydratesNum = parseInt(
                    document.getElementById("day1Carbohydrates").value,
                    10
                );
                let day1LipidsNum = parseInt(
                    document.getElementById("day1Lipids").value,
                    10
                );
                let day1ProteinsNum = parseInt(
                    document.getElementById("day1Proteins").value,
                    10
                );
                let day1FibersNum = parseInt(
                    document.getElementById("day1Fibers").value,
                    10
                );
                let day1GlycemikNum = parseInt(
                    document.getElementById("day1Glycemik").value,
                    10
                );

                day1CaloriesNum += ingCalories;
                day1CarbohydratesNum += ingCarbohydrates;
                day1LipidsNum += ingLipids;
                day1ProteinsNum += ingProteins;
                day1FibersNum += ingFibers;
                day1GlycemikNum += ingGlycemik;
                document.getElementById(ulID).appendChild(ingToAdd);

                document.getElementById("day1Calories").value = day1CaloriesNum;
                document.getElementById(
                    "day1Carbohydrates"
                ).value = day1CarbohydratesNum;
                document.getElementById("day1Lipids").value = day1LipidsNum;
                document.getElementById("day1Proteins").value = day1ProteinsNum;
                document.getElementById("day1Fibers").value = day1FibersNum;
                document.getElementById(
                    "day1Glycemik"
                ).value = day1GlycemikNum;
            } else if (ingredient == "") {
                alert("Veuillez insérer un ingrédient");
            } else {
                alert(
                    "L'ingrédient \"" +
                    ingredient +
                    "\" n'existe pas. Merci de choisir un des aliments proposés"
                );
                document.getElementById("ingNameDay1").value = "";
            }
        }

        // // Day2
        // function addDay2() {
        //   // Find selected meal
        //   let ddown = document.getElementById("mealNumbSelection2");
        //   let mealNumber = ddown.options[ddown.selectedIndex].value;
        //   console.log(mealNumber);
        //   // Assign selected day
        //   let dayNumber = "day2";
        //   // Add the ingredient
        //   let ingredient = document.getElementById("ingNameDay2").value;
        //   console.log(ingredient);
        //   let ingToAdd = document.createElement("li");
        //   ingToAdd.textContent = ingredient;
        //   let ulID = dayNumber + mealNumber;
        //   console.log(ulID);
        //   document.getElementById(ulID).appendChild(ingToAdd);
        // }
    </script>



    <?php
    $connexion->close();
    ?>

</body>

</html>