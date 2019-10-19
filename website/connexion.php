<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'bf21');

$connexion = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Ne possible pas connecter!');

