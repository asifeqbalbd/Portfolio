<?php

	require_once '../db.php';
	$id = $_GET['id'];

	$select = "SELECT * FROM testimonial  WHERE id = '$id'";
	$query = mysqli_query($db, $select);
	$assoc = mysqli_fetch_assoc($query);

	if(file_exists("../images/testimonial/".$assoc['images'])){
		unlink("../images/testimonial/".$assoc['images']);

		$delete = "DELETE FROM testimonial  WHERE id = '$id'";
		if(mysqli_query($db, $delete)){
			header("location:testimonial-view.php");
		}
	}
	else{
		echo "This picture is not in the file !";
	}

?>