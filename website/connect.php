<?php
try{
	$pdo = new PDO("mysql:host=localhost;dbname=BF21","admin@bf21.qc.ca","teste123");
	}catch(PDOException $e){
		echo $e -> getMessage();		
		}
?>