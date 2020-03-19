<?php
	require "session.php";
	require '../db.php';
	if($_SERVER['REQUEST_METHOD'] == "POST"){

		$name = $_POST['name'];
		$message = $_POST['message'];

		if($_FILES['image']['name']){
			$image = $_FILES['image']['name'];
			$explode = explode('.', $image);
			$ext = end($explode);
			$format = ['jpg', 'png', 'jpeg', 'JPEG'];
			$allow_format = in_array($ext, $format);

			if($allow_format){
				if($_FILES['image']['size'] < 5000000){
					$insert = "INSERT INTO testimonial (name, message) VALUES ('$name', '$message')";
					$query = mysqli_query($db, $insert);
					$last_id = mysqli_insert_id($db);
					$img = $last_id . '.' . $ext;

					$new_location = '../images/testimonial/' . $img;
					move_uploaded_file($_FILES['image']['tmp_name'], $new_location);
					$update = "UPDATE testimonial SET images = '$img' WHERE id = '$last_id'"; 
					mysqli_query($db, $update);
					header('location:testimonial.php');
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