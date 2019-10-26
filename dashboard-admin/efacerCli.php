<?php
$msg = ' ';

if ($_POST) {
  include('../website/connexion.php');

  $nom = $_POST['cliEfaccer'];
  
  $sql = "select * from utilisateurs where nom = '$nom';";

  $resultado = mysqli_query($connexion, $sql);

  $numRegistros = mysqli_num_rows($resultado);

  if($numRegistros > 0 ){
      
    $sql = "SET foreign_key_checks = 0";
    $resultado = mysqli_query($connexion, $sql);
    
    $sql = "delete from utilisateurs where nom = '$nom' and type != '1'";
    $resultado = mysqli_query($connexion, $sql);
    
    $sql = "SET foreign_key_checks = 1";
    $resultado = mysqli_query($connexion, $sql);

    
  } 

  $connexion->close();

  }
$var = "<script>javascript:history.back(-1)</script>";
echo $var;

?>

