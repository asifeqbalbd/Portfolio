<?php
	require "session.php";
	require '../db.php';
	if($_SERVER['REQUEST_METHOD'] == "POST"){

		$id = $_POST['id'];
		$title = $_POST['title'];
		$description = $_POST['description'];

		if($_FILES['image']['name']){
			$image = $_FILES['image']['name'];
			$explode = explode('.', $image);
			$ext = end($explode);
			$format = ['jpg', 'png', 'jpeg', 'JPEG'];
			$allow_format = in_array($ext, $format);

			if($allow_format){
				if($_FILES['image']['size'] < 5000000){
					$select_uportfoly = "SELECT * FROM portfolio  WHERE id = '$id'";
					$query_uportfoly = mysqli_query($db, $select_uportfoly);
					$assoc_uportfoly = mysqli_fetch_assoc($query_uportfoly);
					if(file_exists("../images/portfolio/".$assoc_uportfoly['images'])){
						unlink("../images/portfolio/".$assoc_uportfoly['images']);
					}
					$img = $id . '.' . $ext;

					$new_location = '../images/portfolio/' . $img;
					move_uploaded_file($_FILES['image']['tmp_name'], $new_location);
					$update_uportfoly = "UPDATE portfolio SET images = '$img', title = '$title', description = '$description' WHERE id = '$id'"; 
					mysqli_query($db, $update_uportfoly);
					header('location:portfolio-view.php');
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