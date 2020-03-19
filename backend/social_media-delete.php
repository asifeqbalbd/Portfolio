<?php

	require_once '../db.php';
	$id = $_GET['id'];

	$delete = "DELETE FROM social_media WHERE id = '$id'";

	if(mysqli_query($db, $delete)){
		header("location:social-m-view.php");
	}

?>