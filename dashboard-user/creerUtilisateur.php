<?php

include ('../website/connexion.php');

if ($_POST) {

    $email = $_POST['email'];
    $motDePass = $_POST['motDePass'];

    $sql = "select * from utilisateurs where eMail = '$email';";

    $resultado = mysqli_query($connexion, $sql);

    $numRegistros = mysqli_num_rows($resultado);

    if($numRegistros > 0 ){

        $sql = "UPDATE utilisateurs
                SET eMail = '$email', motDePasse = $motDePass "
                . "WHERE eMail = '$email';";

        $resultado = mysqli_query($connexion, $sql);
        
//        echo($sql);
        
//        echo 'Cheguei aqui';

    } else {
            $sql =  "INSERT INTO `utilisateurs` (`type`, `eMail`, `nom`, `motDePasse`) "
              .  "VALUES (2, '$email', '$email', '$motDePass')";

            $resultado = mysqli_query($connexion, $sql);

            if ($resultado == 1) {
              $msg = '<h1>Utilisateur crée avec sucess</h1>';
            } else {
              $msg = 'Error';
            }
        }

    $connexion->close();            
}
  
   
    
   header('Location: ../dashboard-admin/manageclient.php');
    $var = "<script>javascript:history.back(-1)</script>";
#    echo $var;
?>
