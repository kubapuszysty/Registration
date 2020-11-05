<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'crud');

	// initialize variables
	$email = "";
	$password = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$email = $_POST['email'];
		$password = $_POST['password'];

		mysqli_query($db, "INSERT INTO info (email, password) VALUES ('$email', '$password')"); 
		mail('jankowalski478@yahoo.com','Rejestracja','Rejestracja zakonczona pomyslnie! Link do aktywacji konta: http://localhost/Frontend/confirm.php','From: jankowalski478@yahoo.com');
		header('location: index.php');
	}
	
	if (isset($_POST['delete'])) {
	$id = $_POST['delete'];
	mysqli_query($db, "DELETE FROM info WHERE id=$id");
	header('location: index.php');
	}
	
	
	
?>