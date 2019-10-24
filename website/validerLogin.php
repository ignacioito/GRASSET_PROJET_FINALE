<?php
session_start();
include('connexion.php');

if(empty($_POST['user']) || empty($_POST['password'])) {
	header('Location: login.php');
	exit();
}

$utilisateur = mysqli_real_escape_string($connexion, $_POST['user']);
$motDePasse = mysqli_real_escape_string($connexion, $_POST['password']);


$query = "select codUtilisateur, type, nom, eMail from utilisateurs where eMail = '{$utilisateur}' and motDePasse = '{$motDePasse}'";

$result = mysqli_query($connexion, $query);
$row = mysqli_num_rows($result);
$profil = mysqli_fetch_array($result);
$nomUtilisateur = $profil['nom'];
$emailUtilisateur = $profil['eMail'];



if(($row == 1) && ($profil[1] == 1)) {
	$_SESSION['utilisateur'] = $nomUtilisateur;
	header('Location: ../dashboard-admin/dashboard.php');
	exit();
} 
if(($row == 1) && ($profil[1] == 2)) {
	$_SESSION['utilisateur'] = $nomUtilisateur;
	header('Location: ../dashboard-user/dashboard.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: login.php');
	exit();
}