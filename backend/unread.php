<?php
	require_once '../db.php';
	$id = $_GET['id'];
	$update = "UPDATE contact SET status = '1' WHERE id = $id";
	$query = mysqli_query($db, $update);
	if($query){
		header('location:massage.php');
	}
	else{
		echo "failed";
	}
?>