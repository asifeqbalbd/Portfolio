<?php

	require_once '../db.php';
	$id = $_GET['id'];

	$delete = "DELETE FROM contact WHERE id = '$id'";

	if(mysqli_query($db, $delete)){
		header("location:massage.php");
	}

?>