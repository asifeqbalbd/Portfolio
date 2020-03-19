<?php

	require "db.php";
	require "session.php";

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$email=$_POST['email'];
		$password=$_POST['passwrd'];

		$select = "SELECT * FROM dbtable WHERE email = '$email'";
		$query = mysqli_query($db, $select);
		$assoc = mysqli_fetch_assoc($query);

		if($assoc['email'] == $email){
			if(password_verify($password, $assoc['passwrd'])){
				$_SESSION['email'] = $assoc['email'];
				$_SESSION['name'] = $assoc['name'];
				$_SESSION['user_role'] = $assoc['user_role'];
				$_SESSION['images'] = $assoc['images'];
				header("location:backend/dashbord.php");
			}
			else{
				echo "Your Email is no match";
			}
		}
		else{
			header("location:reg.php");
		}
	}

?>