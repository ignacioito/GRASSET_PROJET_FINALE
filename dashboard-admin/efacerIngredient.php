<?php
$msg = ' ';

if ($_POST) {
    include('../website/connexion.php');

    $nomAlimentEfaccer = $_POST['alimentEfaccer'];

    if(!empty($nomAlimentEfaccer)){
      $sql = "select * from aliment where nomAliment = '$nomAlimentEfaccer';";

      $resultado = mysqli_query($connexion, $sql);

      $numRegistros = mysqli_num_rows($resultado);

      if($numRegistros > 0 ){

          $sql = "delete from aliment where nomAliment = '$nomAlimentEfaccer';";

          $resultado = mysqli_query($connexion, $sql);

      } 
    }
  
    $nomAliment = $_POST['nomAliment'];
    $uniteMesure = $_POST['uniteMesure'];
    $calorie = $_POST['calorie'];
    $lipid = $_POST['lipid'];
    $glucide = $_POST['glucide'];
    $proteine = $_POST['proteine'];
    $fibre = $_POST['fibre'];
    $glycemique = $_POST['glycemique'];

    if(!empty($nomAliment)){

          $sql = "select * from aliment where nomAliment = '$nomAliment';";

          $resultado = mysqli_query($connexion, $sql);

          $numRegistros = mysqli_num_rows($resultado);

          if($numRegistros > 0 ){

              $sql = "UPDATE aliment
                      SET uniteMesure = '$uniteMesure', calorie = $calorie, lipid = '$lipid', "
                      . "glucide = '$glucide', proteine = '$proteine', fibre = '$fibre', glycemique = '$glycemique' "
                      . "WHERE nomAliment = '$nomAliment';";

              $resultado = mysqli_query($connexion, $sql);

          } else {
                  $sql = "INSERT INTO aliment (nomAliment, uniteMesure, calorie, lipid, glucide, proteine, fibre, glycemique) Values " .
                    "('" . $nomAliment . "', '" . $uniteMesure . "', '" . $calorie . "', '" . $lipid . "', '" . $glucide . "', '" . $proteine . "', '" . $fibre . "', '" . $glycemique . "');";

                  $resultado = mysqli_query($connexion, $sql);

                  if ($resultado == 1) {
                    $msg = '<h1>Aliment crée avec sucess</h1>';
                  } else {
                    $msg = 'Error';
                  }
              }

          }
  
  $connexion->close();

  }
$var = "<script>javascript:history.back(-1)</script>";
echo $var;

?>

      <?php if ($msg) : ?>
        <p><?php echo $msg; ?></p>
      <?php endif; ?>
        


