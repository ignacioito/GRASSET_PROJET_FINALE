<?php
try{
	$pdo = new PDO("mysql:host=localhost;dbname=BF21","instit43_bf21_admin","@bfnutri21");
	}catch(PDOException $e){
		echo $e -> getMessage();		
		}
?>