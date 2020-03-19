<?php

	require_once '../db.php';
	$id = $_GET['id'];

	$select = "SELECT * FROM myself  WHERE id = '$id'";
	$query = mysqli_query($db, $select);
	$assoc = mysqli_fetch_assoc($query);

	if(file_exists("../images/myself/".$assoc['images'])){
		unlink("../images/myself/".$assoc['images']);

		$delete = "DELETE FROM myself  WHERE id = '$id'";
		if(mysqli_query($db, $delete)){
			header("location:myself-view.php");
		}
	}
	else{
		echo "This picture is not in the file !";
	}

?>