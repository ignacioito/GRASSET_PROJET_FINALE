<?php

session_start();
include('validerLogin.php');
if (!$jaExiste) {
        echo('Erro segue aqui!');
#	header('Location: login.php');
#	exit();
}
