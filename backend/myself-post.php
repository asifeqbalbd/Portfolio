<?php
	require "session.php";
	require '../db.php';
	if($_SERVER['REQUEST_METHOD'] == "POST"){

		$name = $_POST['name'];
		$email = $_POST['email'];
		$myself = $_POST['myself'];
		$address = $_POST['address'];
		$country = $_POST['country'];
		$phone = $_POST['phone'];

		if($_FILES['image']['name']){
			$image = $_FILES['image']['name'];
			$explode = explode('.', $image);
			$ext = end($explode);
			$format = ['jpg', 'png', 'jpeg', 'JPEG'];
			$allow_format = in_array($ext, $format);

			if($allow_format){
				if($_FILES['image']['size'] < 5000000){
					$insert = "INSERT INTO myself (name, address, summary, phone, email, country) VALUES ('$name', '$address', '$myself', '$phone', '$email', '$country')";
					$query = mysqli_query($db, $insert);
					$last_id = mysqli_insert_id($db);
					$img = $last_id . '.' . $ext;

					$new_location = '../images/myself/' . $img;
					move_uploaded_file($_FILES['image']['tmp_name'], $new_location);
					$update = "UPDATE myself SET images = '$img' WHERE id = '$last_id'"; 
					mysqli_query($db, $update);
					header('location:myself.php');
				}
				else{
					echo "Youe Image size Not Match.";
				}
			}
			else{
				echo "Your Image not Allow .";
			}
		}
		else{
			echo "Please ! Enter your Image...";
		}
		
	}
	else{
		echo "This  is not sappod.";
	}
?>