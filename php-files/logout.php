<?php 

	include_once 'session.php';
	include_once 'generalClass.php';

	$session->logout();
	header("Location: ../general-section/signin.php");

?>