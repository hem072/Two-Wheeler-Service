<?php


include_once 'database_connect.php';
session_start();

unset($_SESSION['user']);


	session_destroy();
	setcookie(PHPSESSID,session_id(),time()-1);


header("location:Home-Page.html");

?>