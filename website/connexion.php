<?php
//define('HOST', '23.235.197.135');
//define('USUARIO', 'instit43_bf21_admin');
//define('SENHA', '@bfnutri21');
//define('DB', 'instit43_bf21_test');

define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'bf21');

#teste commit
$connexion = mysqli_connect(HOST, USUARIO, SENHA, DB) or die('Ne possible pas connecter!');
