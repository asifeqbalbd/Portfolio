<?php
	require "session.php";
	require '../db.php';
	if($_SERVER['REQUEST_METHOD'] == "POST"){

		$institute = $_POST['institute'];
		$course = $_POST['course'];
		$passing_year = $_POST['passing_year'];
		$experience = $_POST['experience'];
		

		$insert = "INSERT INTO education (institute, course, passing_year, experience) VALUES ('$institute', '$course', '$passing_year', '$experience')";
		$QUERY = mysqli_query($db, $insert);
		header("location:education-add.php");

	}
?>