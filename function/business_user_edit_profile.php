<?php
	session_start();
	if(count($_POST)>0){
		$name=$_POST['name'];
		$bio=$_POST['bio'];
		$address=$_POST['address'];
		$phNo=$_POST['phno'];
		$website=$_POST['website'];
		
		$location = '../dbimages/';
		
		 include("config.php");
		
		if(empty($_FILES['profilephoto']['tmp_name']) AND empty($_FILES['coverphoto']['tmp_name'])){
			
			$query="UPDATE bussiness_users SET name=?, bio=?, address=?, phNo=?, website=? WHERE email='".$_SESSION['email']."'";
			$stmt=$con->prepare($query);
			$stmt->bind_param('sssss',$name,$bio,$address,$phNo,$website);

			$result=$stmt->execute();

			if($result){
				$_SESSION['name']=$name;
				$_SESSION['bio']=$bio;
				echo "<script type='text/javascript'>alert('Profile Update Successful.');
					window.location='../business_user_profile.php';
					</script>";
			}
			else{
				echo "<script type='text/javascript'>alert('Something went wrong.');
					window.location='../business_user_profile.php';
					</script>";
			}
		}
		else if(empty($_FILES['profilephoto']['tmp_name'])){
		
			$cover=$_FILES['coverphoto']['name'];
			$cover_temp_name=$_FILES['coverphoto']['tmp_name'];
		
			$query="UPDATE bussiness_users SET name=?, bio=?, coverpic=? WHERE email='".$_SESSION['email']."'";
			$stmt=$con->prepare($query);
			$stmt->bind_param('sss',$name,$bio,$cover);

			$result=$stmt->execute();

			if($result && move_uploaded_file($cover_temp_name,$location.$cover)){
				$_SESSION['name']=$name;
				$_SESSION['bio']=$bio;
				echo "<script type='text/javascript'>alert('Profile Update Successful.');
					window.location='../business_user_profile.php';
					</script>";
			}
			else{
				echo "<script type='text/javascript'>alert('Something went wrong.');
					window.location='../business_user_profile.php';
					</script>";
			}
		}
		else if(empty($_FILES['coverphoto']['tmp_name'])){
			
			$profile=$_FILES['profilephoto']['name'];
			$profile_temp_name=$_FILES['profilephoto']['tmp_name'];

			$query="UPDATE bussiness_users SET name=?, bio=?, profilepic=?,address=?, phNo=?, website=? WHERE email='".$_SESSION['email']."'";
			$stmt=$con->prepare($query);
			$stmt->bind_param('ssssss',$name,$bio,$profile,$address,$phNo,$website);

			$result=$stmt->execute();

			if($result && move_uploaded_file($profile_temp_name,$location.$profile)){
				$_SESSION['name']=$name;
				$_SESSION['bio']=$bio;

				echo "<script type='text/javascript'>alert('Profile Update Successful.');
					window.location='../business_user_profile.php';
					</script>";
			}
			else{
				echo "<script type='text/javascript'>alert('Something went wrong.');
					window.location='../business_user_profile.php';
					</script>";
			}
		}
		else{
			$profile=$_FILES['profilephoto']['name'];
			$profile_temp_name=$_FILES['profilephoto']['tmp_name'];
			
			$cover=$_FILES['coverphoto']['name'];
			$cover_temp_name=$_FILES['coverphoto']['tmp_name'];

			$query="UPDATE bussiness_users SET name=?, bio=?, coverpic=?, profilepic=?, address=?, website=?, phNo=? WHERE email='".$_SESSION['email']."'";
			$stmt=$con->prepare($query);
			$stmt->bind_param('sssssss',$name,$bio,$cover,$profile,$address,$website,$phNo);

			$result=$stmt->execute();
			
			if($result && move_uploaded_file($profile_temp_name,$location.$profile) && move_uploaded_file($cover_temp_name,$location.$cover)){
				$_SESSION['name']=$name;
				$_SESSION['bio']=$bio;
				echo "<script type='text/javascript'>alert('Profile Update Successful.');
					window.location='../business_user_profile.php';
					</script>";
			}
			else{
				echo "<script type='text/javascript'>alert('Something went wrong.');
					window.location='../business_user_profile.php';
					</script>";
			}
		}
	}
?> 