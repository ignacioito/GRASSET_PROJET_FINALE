<?php

//if (!defined('HOST')){
//    define('HOST', '23.235.197.135');
//}
//
//if (!defined('USUARIO')){
//    define('USUARIO', 'instit43_bf21_admin');
//}
//
//if (!defined('SENHA')){
//    define('SENHA', '@bfnutri21');
//}
//
//if (!defined('DB')){
//    define('DB', 'instit43_bf21_test');
//}

if (!defined('HOST')){
    define('HOST', '127.0.0.1');
}

if (!defined('USUARIO')){
    define('USUARIO', 'root');
}

if (!defined('SENHA')){
    define('SENHA', '');
}

if (!defined('DB')){
    define('DB', 'bf21');
}

#teste commit
$connexion = mysqli_connect(HOST, USUARIO, SENHA, DB) or die('Ne possible pas connecter!');
