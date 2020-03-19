<?php
	require "session.php";
	require '../db.php';
	if($_SERVER['REQUEST_METHOD'] == "POST"){

		$icon = $_POST['icon'];
		$title = $_POST['title'];
		$summary = $_POST['summary'];
		

		$insert = "INSERT INTO service (icon, title, summary) VALUES ('$icon', '$title', '$summary')";
		$QUERY = mysqli_query($db, $insert);
		header("location:service-add.php");

	}
?>