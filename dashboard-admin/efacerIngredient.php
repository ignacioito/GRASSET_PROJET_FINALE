<?php
$msg = ' ';

if ($_POST) {
  include('../website/connexion.php');

  $nomAliment = $_POST['alimentEfaccer'];
  
  $sql = "select * from aliment where nomAliment = '$nomAliment';";

  $resultado = mysqli_query($connexion, $sql);

  $numRegistros = mysqli_num_rows($resultado);

  if($numRegistros > 0 ){

      $sql = "delete from aliment where nomAliment = '$nomAliment';";

      $resultado = mysqli_query($connexion, $sql);
  } 

  $connexion->close();

  }
$var = "<script>javascript:history.back(-1)</script>";
echo $var;

?>

