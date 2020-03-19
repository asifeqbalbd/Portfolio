<?php

	require_once '../db.php';
	$id = $_GET['id'];

	$select = "SELECT * FROM portfolio  WHERE id = '$id'";
	$query = mysqli_query($db, $select);
	$assoc = mysqli_fetch_assoc($query);

	if(file_exists("../images/portfolio/".$assoc['images'])){
		unlink("../images/portfolio/".$assoc['images']);

		$delete = "DELETE FROM portfolio  WHERE id = '$id'";
		if(mysqli_query($db, $delete)){
			header("location:portfolio-view.php");
		}
	}
	else{
		echo "This picture is not in the file !";
	}

?>