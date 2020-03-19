<?php
	require "session.php";
	require '../db.php';
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$facebook = $_POST['facebook'];
		$twitter = $_POST['twitter'];
		$instagram = $_POST['instagram'];
		$github = $_POST['github'];
		$Pinterest = $_POST['Pinterest'];
		$plus = $_POST['plus'];

		$insert = "INSERT INTO social_media (facebook, twitter, instagram, github, Pinterest, plus) VALUES ('facebook', 'twitter', 'instagram', 'github', 'Pinterest', 'plus')";
		$query = mysqli_query($db, $insert);
		header("location:social-media.php");
	}
?>