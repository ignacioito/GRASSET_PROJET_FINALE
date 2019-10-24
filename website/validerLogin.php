<?php
session_start();

$jaExiste = false;


include('connexion.php');

if(empty($_POST['user']) || empty($_POST['password'])) {
	header('Location: login.php');
	exit();
}

$utilisateur = mysqli_real_escape_string($connexion, $_POST['user']);
$motDePasse = mysqli_real_escape_string($connexion, $_POST['password']);

#$_login = $_POST['email'];


$query = "select codUtilisateur, nom, type, eMail from utilisateurs where eMail = '{$utilisateur}' and motDePasse = '{$motDePasse}'";

$result = mysqli_query($connexion, $query);
#$row = mysqli_num_rows($result);
#$profil = mysqli_fetch_array($result);


 while ($row = mysqli_fetch_array($result)){
    if ($utilisateur == $row['eMail']){   
        
        $nomeUsrLogado = $row['nom'];
        $profil = $row['type'];
        $jaExiste = true;
      
    }else {
        
        $jaExiste = false;
        $nomeUsrLogado = '';

    }
}
//
//if($nomeUsrLogado == ''){
//    $jaExiste = false;
//} else {
//    $jaExiste = true;
//}

if( ($profil == 1)) {
	$_SESSION['utilisateur'] = $nomeUsrLogado;
	header('Location: ../dashboard-admin/dashboard.php');
	exit();
} 
if( ($profil == 2)) {
	$_SESSION['utilisateur'] = $nomeUsrLogado;
	header('Location: ../dashboard-user/dashboard.php');
	exit();
} else {
	header('Location: ../website/login.php');
	exit();
}