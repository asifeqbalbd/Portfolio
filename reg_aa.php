<?php
	require "session.php";
	require 'db.php';
	if($_SERVER['REQUEST_METHOD'] == "POST"){

		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$password = $_POST['passwrd'];
		$Confirm_pass = $_POST['confame_passwrd'];

		if($_FILES['image']['name']){
			$image = $_FILES['image']['name'];
			$explode = explode('.', $image);
			$ext = end($explode);
			$format = ['jpg', 'png', 'jpeg', 'JPEG'];
			$allow_format = in_array($ext, $format);

			if($allow_format){
				if($_FILES['image']['size'] < 5000000){
					$select = "SELECT COUNT(*) as total FROM  dbtable WHERE email='$email'";
					$sql = mysqli_query($db,$select);

					$data = mysqli_fetch_assoc($sql);
					if($data['total']>0){
						$_SESSION['email']='email already used';
						header('location:reg.php');
					}
					else{
						$passd = password_hash("$password", PASSWORD_DEFAULT);
						$insert ="INSERT INTO  dbtable(name,email,phone,passwrd,confame_passwrd) VALUES ('$name','$email','$phone','$passd','$Confirm_pass')";
						$query =mysqli_query($db,$insert);
						$last_id = mysqli_insert_id($db);
						$img = $last_id . '.' . $ext;
						$new_location = 'images/user/' . $img;
						move_uploaded_file($_FILES['image']['tmp_name'], $new_location);
						$update = "UPDATE dbtable SET images = '$img' WHERE id = '$last_id'"; 
						mysqli_query($db, $update);
						header('location:backend/dashbord.php');
					}
					
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