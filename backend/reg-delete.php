<?php 

	require_once '../db.php';
	$id = $_GET['id'];

	$select = "SELECT * FROM dbtable  WHERE id = '$id'";
	$query = mysqli_query($db, $select);
	$assoc = mysqli_fetch_assoc($query);

	if(file_exists("../images/user/".$assoc['images'])){
		unlink("../images/user/".$assoc['images']); 

		$delete = "DELETE FROM dbtable  WHERE id = '$id'";
		if(mysqli_query($db, $delete)){
			header("location:reg_view.php");
		}
	}
	else{
		echo "This picture is not in the file !";
	}

?>