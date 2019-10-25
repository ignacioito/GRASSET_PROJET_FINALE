<?php

session_start();

include('../website/connexion.php');

if ($_POST) {
        $name = $_POST['name'];
        $birthdate = $_POST['birthdate'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $telephone = $_POST['telephone'];
        $weight = $_POST['weight'];
        $height = $_POST['height'];
        $bloodpressure = $_POST['bloodpressure'];
        $smoke = $_POST['smoke'];
        $smokePerDay = $_POST['smokePerDay'];
        $alcoolHabitude = $_POST['alcoolHabitude'];
        $typeEmploi = $_POST['typeEmploi'];
        $styleDeVie = $_POST['styleDeVie'];
        $activitePhysique = $_POST['activitePhysique'];
        $foisParSession = $_POST['foisParSession'];
        $experAnterieure = $_POST['experAnterieure'];
        $nbrAnnées = $_POST['nbrAnnées'];
        $dispEntrainement = $_POST['dispEntrainement'];
        $nbrHeures = $_POST['nbrHeures'];
        $excercAime = $_POST['excercAime'];
        $objectif = $_POST['objectif'];
        $perdrePoids = $_POST['perdrePoids'];
        $tripStart = $_POST['trip-start'];
        $question01 = $_POST['question01'];
        $question02 = $_POST['question02'];
        $question03 = $_POST['question03'];
        $question04 = $_POST['question04'];
        $question05 = $_POST['question05'];
        $question06 = $_POST['question06'];
        $question07 = $_POST['question07'];
        $questAlim01 = $_POST['questAlim01'];
        $indiq01 = $_POST['indiq01'];
        $questAlim02 = $_POST['questAlim02'];
        $indiq02 = $_POST['indiq02'];
        $questAlim03 = $_POST['questAlim03'];
        $indiq03 = $_POST['indiq03'];
        $questAlim04 = $_POST['questAlim04'];
        $questAlim05 = $_POST['questAlim05'];
        $questAlim06 = $_POST['questAlim06'];
        $questAlim07 = $_POST['questAlim07'];
        $questAlim08 = $_POST['questAlim08'];
        $questAlim09 = $_POST['questAlim09'];
        $questAlim10 = $_POST['questAlim10'];
        $indiq10 = $_POST['indiq10'];
        $questAlim11 = $_POST['questAlim11'];
        $indiq11 = $_POST['indiq11'];


        $idUtilisateur = $_SESSION['idUtilisateur'];

        $sql = "delete from questionaireplanalimentaire where codUtilisateur = '{$idUtilisateur}';";
        $resultado = mysqli_query($connexion, $sql);

        echo ($resultado);

        $sql = "delete from reseignementsmedicaux where codUtilisateur = '{$idUtilisateur}';";
        $resultado = mysqli_query($connexion, $sql);

        echo ($resultado);

        $sql = "delete from habitudesdevie where codUtilisateur = '{$idUtilisateur}';";
        $resultado = mysqli_query($connexion, $sql);

        echo ($resultado);

        $sql = "UPDATE utilisateurs
                SET nom = '$name', type = '2',  poid = '$weight', taille = '$height', dateNaissance = '$birthdate', "
                . "genre = '$gender', adresse = '$address', telephone = '$telephone' "
                . "WHERE codUtilisateur = '{$idUtilisateur}';";

        $resultado = mysqli_query($connexion, $sql);

        echo ($resultado);


        $sql = "INSERT INTO habitudesdevie (codUtilisateur, codAdministrateur)
                VALUES ('$idUtilisateur', '1');";
        $resultado = mysqli_query($connexion, $sql);
        echo ($resultado);

        $sql = "UPDATE habitudesdevie
                SET codUtilisateur = '$idUtilisateur', codAdministrateur = '1', date = curdate(), poidsActuel = '$weight', "
                . "poidsObjectif = '$perdrePoids', pressionSanguine = '$bloodpressure', fume = '$smoke', fumeurParJour = '$smokePerDay', "
                . "alcoolVerParSemaine = '$alcoolHabitude', employPhisPass = '$typeEmploi', styleVie = '$styleDeVie', "
                . "descriptionSport = '$activitePhysique', sportParSemaine = '$foisParSession', nombreAneesExpAnterieur = '$experAnterieure', "
                . "disponEntreinemenSemaine = '$dispEntrainement', nombreHeures = '$nbrHeures', preferences = '$excercAime', "
                . "pertePoids = '$objectif', priseDeMasse = '$perdrePoids', competition = '$tripStart' "
                . "WHERE codUtilisateur = '{$idUtilisateur}';";


        $resultado = mysqli_query($connexion, $sql);

        $sql = "INSERT INTO reseignementsmedicaux (codUtilisateur, codAdministrateur)
                VALUES ('$idUtilisateur', '1');";
        $resultado = mysqli_query($connexion, $sql);
        echo ($resultado);

        $sql = "UPDATE reseignementsmedicaux
                SET codUtilisateur = '$idUtilisateur', codAdministrateur = '1', date = curdate(), q01 = '$question01', "
                . "q02 = '$question02', q03 = '$question03', q04 = '$question04', q05 = '$question05', "
                . "q06 = '$question06', q07 = '$question07' "
                . "WHERE codUtilisateur = '{$idUtilisateur}';";


        $resultado = mysqli_query($connexion, $sql);

        echo ($resultado);

        $sql = "INSERT INTO questionaireplanalimentaire (codUtilisateur, codAdministrateur)
                VALUES ('$idUtilisateur', '1');";
        $resultado = mysqli_query($connexion, $sql);
        echo ($resultado);

        $sql = "UPDATE questionaireplanalimentaire
                SET codUtilisateur = '$idUtilisateur', codAdministrateur = '1', date = curdate(), q01 = '$questAlim01', "
                . "q01R = '$indiq01', q02 = '$questAlim02', q02R = '$indiq02', q03 = '$questAlim03', "
                . "q03R = '$indiq03', q04 = '$questAlim04', q05 = '$questAlim05',q06 = '$questAlim06', "
                . "q07 = '$questAlim07', q08 = '$questAlim08', q09 = '$questAlim09',q10 = '$questAlim10', "
                . "q10R = '$indiq10', q11 = '$questAlim11', q11R = '$indiq11' "
                . "WHERE codUtilisateur = '{$idUtilisateur}';";


        $resultado = mysqli_query($connexion, $sql);

        echo ($resultado);
}


$connexion->close();

//header('Location: ../website/index.php');
$var = "<script>javascript:history.back(-1)</script>";
echo $var;
