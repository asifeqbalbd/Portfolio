<?php
	require "session.php";
	require '../db.php';
	if($_SERVER['REQUEST_METHOD'] == "POST"){

		$id = $_POST['id'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$password = $_POST['passwrd'];
		$passd = password_hash("$password", PASSWORD_DEFAULT);

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
						$select_user = "SELECT * FROM dbtable  WHERE id = '$id'";
						$query_user = mysqli_query($db, $select_user);
						$assoc_user = mysqli_fetch_assoc($query_user);
						if(file_exists("../images/user/".$assoc_user['images'])){
							unlink("../images/user/".$assoc_user['images']);
						}
						$img = $id . '.' . $ext;

						$new_location = '../images/user/' . $img;
						move_uploaded_file($_FILES['image']['tmp_name'], $new_location);
						$update_user = "UPDATE dbtable SET images = '$img', name = '$name', email = '$email', phone = '$phone', passwrd = '$passd' WHERE id = '$id'"; 
						mysqli_query($db, $update_user);
						header('location:reg_view.php');
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