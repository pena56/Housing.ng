<?php

	include_once '../php-files/users.php';
	$user = User::find($_POST['username']);
	echo ($user) ? "Username '{$user->username}' already in use" : "Available";

 ?>