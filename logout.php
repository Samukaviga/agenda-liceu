<?php
	session_start(); 
	unset($_SESSION['LOGIN']);
	unset($_SESSION['SENHA']);
	
	header("Location: ./login.php"); exit;
?>
