<?php
	require "session.php";
	require '../db.php';
	if($_SERVER['REQUEST_METHOD'] == "POST"){

		$id = $_POST['id'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$summary = $_POST['summary'];
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
					$select_uportfoly = "SELECT * FROM myself  WHERE id = '$id'";
					$query_uportfoly = mysqli_query($db, $select_uportfoly);
					$assoc_uportfoly = mysqli_fetch_assoc($query_uportfoly);
					if(file_exists("../images/myself/".$assoc_uportfoly['images'])){
						unlink("../images/myself/".$assoc_uportfoly['images']);
					}
					$img = $id . '.' . $ext;

					$new_location = '../images/myself/' . $img;
					move_uploaded_file($_FILES['image']['tmp_name'], $new_location);
					$update_uportfoly = "UPDATE myself SET images = '$img', name = '$name', email = '$email', summary = '$summary', address = '$address', country = '$country', phone = '$phone' WHERE id = '$id'"; 
					mysqli_query($db, $update_uportfoly);
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