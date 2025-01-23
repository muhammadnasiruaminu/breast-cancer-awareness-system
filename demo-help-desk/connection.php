<?php 
	$host = 'localhost';
	$username = 'root';
	$password = '';
	$db = 'breast-cancer';

	$conn = mysqli_connect($host, $username, $password, $db);
	if (!$conn) {
		die('Connection failure').mysqli_connect_error();
	}
?>