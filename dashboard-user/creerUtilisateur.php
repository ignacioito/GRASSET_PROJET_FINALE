<?php

include ('../website/connexion.php');

if ($_POST) {

        $email = $_POST['email'];
        $motDePass = $_POST['motDePass'];
        
        
        $sql =  "INSERT INTO `utilisateurs` (`type`, `eMail`, `motDePasse`) "
          .  "VALUES (2, '$email', '$motDePass')";

        $resultado = mysqli_query($connexion, $sql);
        
       echo($resultado);
    
    }
    
    $connexion->close();
    
   header('Location: ../dashboard-admin/manageclient.php');
#    $var = "<script>javascript:history.back(-1)</script>";
#    echo $var;
?>
