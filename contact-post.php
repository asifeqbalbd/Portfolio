<?php
	session_start();
	require 'db.php';
	if($_SERVER['REQUEST_METHOD'] == "POST"){

		$name = $_POST['name'];
		$email = $_POST['email'];
		$massage = $_POST['message'];

		$insart ="INSERT INTO contact(name, email, massage) VALUES ('$name', '$email', '$massage')";
		$query = mysqli_query($db, $insart);
		header("location:index.php#contact");
	}
?>