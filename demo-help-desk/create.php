<?php 
	session_start();
	$_SESSION['emailAddress'] = $_POST['emailAddress'];
	
	include 'connection.php';

	if (isset($_POST['signUp'])) {
		$firstName = $_POST['firstName'];
		$otherName = $_POST['otherName'];
		$emailAddress = $_POST['emailAddress'];
		$phoneNumber = $_POST['phoneNumber'];
		$age = $_POST['age'];
		$gender = $_POST['gender'];
		$password = $_POST['password'];

		$sql = "INSERT INTO users(surname, othername, email, address, username,  password) VALUES('$firstName', '$otherName', '$emailAddress', '$phoneNumber', '$age',  '$password')";
		$result = mysqli_query($conn, $sql);

		if ($result) {
			header('Location: login.php');
		} else{
			echo 'error';
		}
	}
?>