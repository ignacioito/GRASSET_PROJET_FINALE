<?php
$host = "localhost";
$usuario = "root";
$senha = " ";
$bd = "BF21";

$msqli = new msqli($host, $usuario, $senha, $bd);

if($msqli->connect_errno)
    echo "Falha na conexão: (".$msqli->connect_errno.") ".$msqli->connect_error;

?>