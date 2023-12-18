<?php
session_start();
if(empty($_SESSION['usuario'])){
	header('Location:/FinalQuique/Login.php');
  }
?>