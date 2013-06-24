<?php
session_start();
try{
	$PDO = new PDO('mysql:host=localhost;dbname=tfs1','root',''); 
}catch(PDOException $e){
	echo 'Connexion impossible';
}
require('class/Teamforspeak.class.php');
require('class/Auth.class.php');
?>