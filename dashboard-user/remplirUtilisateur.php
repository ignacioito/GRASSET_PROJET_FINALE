<?php

include ('../website/connexion.php');

if ($_POST) {

        $name = $_POST['name'];
        $birthdate = $_POST['birthdate'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $email = $_POST['email'];
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
        
#        echo $name;
        
        
        $sql =  "INSERT INTO `utilisateurs` (`type`, `eMail`, `nom`, `poid`, `taille`, `dateNaissance`, `genre`, `adresse`, `telephone`) "
          .  "VALUES (2, '$email', '$name', '$weight', '$height', '$birthdate', '$gender', '$address', '$telephone')";

        $resultado = mysqli_query($connexion, $sql);
        
       echo($resultado);
        
    }
    
    
    $connexion->close();
    
#    header('Location: ../website/index.php');
    $var = "<script>javascript:history.back(-1)</script>";
    echo $var;
?>
