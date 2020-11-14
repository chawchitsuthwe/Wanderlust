<?php

	session_start();
	if(isset($_POST)){
		include("config.php");
		
		$location = '../dbimages/';
		$fileList = glob('../dbimages/*');
	
		$photo_name=$_POST['photo_name'];
		$image=$_FILES['image']['name'];
		$temp_name=$_FILES['image']['tmp_name'];

		$existed=false;
		
		foreach($fileList as $filename){
			if(is_file($filename)){
				$fbasename=basename($filename);
			}
			
			if($fbasename==$image){
				$existed=true;
				break;
			}
			else{
				$existed=false;
			}
		}
		
		if($existed){
			echo "<script type='text/javascript'>alert('The filename is existed.');
					window.location='../business_user_profile.php';
					</script>";
		}
		else{
			$query="INSERT INTO photos_storage(email,photofile,photo_name) VALUES('".$_SESSION["email"]."', '$image', '$photo_name')";
			$result=mysqli_query($con,$query);

			if($result && move_uploaded_file($temp_name,$location.$image))
				echo "<script type='text/javascript'>alert('Photo uploaded successfully.');
					window.location='../business_user_profile.php';
					</script>";
			else
				echo "<script type='text/javascript'>alert('Something went wrong.');
					window.location='../business_user_profile.php';
					</script>";
		}
		
	}
?>