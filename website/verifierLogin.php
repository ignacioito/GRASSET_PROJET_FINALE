<?php
#session_start();
if(!$_SESSION['utilisateur']) {
	header('Location: login.php');
	exit();
}