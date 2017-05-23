<?php
	session_start();
	$_SESSION['login'] = "";
	unset($_SESSION['login']);
	unset($_SESSION['user']);
	header("Location:index.php");
	die;