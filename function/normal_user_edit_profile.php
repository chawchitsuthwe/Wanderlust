<?php
	session_start();
	if(count($_POST)>0){
		$name=$_POST['name'];
		$bio=$_POST['bio'];
		
		$location = '../dbimages/';
		
		 include("config.php");
		
		if(empty($_FILES['profilephoto']['tmp_name']) AND empty($_FILES['coverphoto']['tmp_name'])){
			
			$query="UPDATE normal_users SET name=?, bio=? WHERE email='".$_SESSION['email']."'";
			$stmt=$con->prepare($query);
			$stmt->bind_param('ss',$name,$bio);

			$result=$stmt->execute();

			if($result){
				$_SESSION['name']=$name;
				$_SESSION['bio']=$bio;
				echo "<script type='text/javascript'>alert('Profile Update Successful.');
					window.location='../normal_user_profile.php';
					</script>";
			}
			else{
				//header("Location:normal_user_profile.php");
				echo "<script type='text/javascript'>alert('Something went wrong.');
					window.location='../normal_user_profile.php';
					</script>";
			}
		}
		else if(empty($_FILES['profilephoto']['tmp_name'])){
		
			$cover=$_FILES['coverphoto']['name'];
			$cover_temp_name=$_FILES['coverphoto']['tmp_name'];
		
			$query="UPDATE normal_users SET name=?, bio=?, coverpic=? WHERE email='".$_SESSION['email']."'";
			$stmt=$con->prepare($query);
			$stmt->bind_param('sss',$name,$bio,$cover);

			$result=$stmt->execute();

			if($result && move_uploaded_file($cover_temp_name,$location.$cover)){
				$_SESSION['name']=$name;
				$_SESSION['bio']=$bio;
				echo "<script type='text/javascript'>alert('Profile Update Successful.');
					window.location='../normal_user_profile.php';
					</script>";
			}
			else{
				echo "<script>alert('Error editing your profile.')</script>";
				echo "<script type='text/javascript'>alert('Something went wrong.');
					window.location='../normal_user_profile.php';
					</script>";
			}
		}
		else if(empty($_FILES['coverphoto']['tmp_name'])){
			
			$profile=$_FILES['profilephoto']['name'];
			$profile_temp_name=$_FILES['profilephoto']['tmp_name'];

			$query="UPDATE normal_users SET name=?, bio=?, profilepic=? WHERE email='".$_SESSION['email']."'";
			$stmt=$con->prepare($query);
			$stmt->bind_param('sss',$name,$bio,$profile);

			$result=$stmt->execute();

			if($result && move_uploaded_file($profile_temp_name,$location.$profile)){
				$_SESSION['name']=$name;
				$_SESSION['bio']=$bio;

				echo "<script type='text/javascript'>alert('Profile Update Successful.');
					window.location='../normal_user_profile.php';
					</script>";
			}
			else{
				echo "<script>alert('Error editing your profile.')</script>";
				echo "<script type='text/javascript'>alert('Something went wrong.');
					window.location='../normal_user_profile.php';
					</script>";
			}
		}
		else{
			$profile=$_FILES['profilephoto']['name'];
			$profile_temp_name=$_FILES['profilephoto']['tmp_name'];
			
			$cover=$_FILES['coverphoto']['name'];
			$cover_temp_name=$_FILES['coverphoto']['tmp_name'];

			$query="UPDATE normal_users SET name=?, bio=?, coverpic=?, profilepic=? WHERE email='".$_SESSION['email']."'";
			$stmt=$con->prepare($query);
			$stmt->bind_param('ssss',$name,$bio,$cover,$profile);

			$result=$stmt->execute();
			
			if($result && move_uploaded_file($profile_temp_name,$location.$profile) && move_uploaded_file($cover_temp_name,$location.$cover)){
				$_SESSION['name']=$name;
				$_SESSION['bio']=$bio;
				echo "<script type='text/javascript'>alert('Profile Update Successful.');
					window.location='../normal_user_profile.php';
					</script>";
			}
			else{
				echo "<script type='text/javascript'>alert('Something went wrong.');
					window.location='../normal_user_profile.php';
					</script>";
			}
		}
	}
?>