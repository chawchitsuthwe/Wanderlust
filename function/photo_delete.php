<?php
	session_start();
	if(count($_POST)>0){
		include("config.php");
		
		if(isset($_POST['photo_id'])){
			$deleteimage=$_POST['photo_id'];
			foreach($deleteimage as $value){
				$query="SELECT photofile FROM photos_storage WHERE photo_id=".$value;
				$result=mysqli_query($con,$query);	
				
				$row=mysqli_fetch_array($result);
			
				if(is_array($row)){
					$image=$row['photofile'];
				}

				$query="DELETE FROM photos_storage WHERE photo_id=".$value;
				$result=mysqli_query($con,$query);	
			}
			if($result && unlink('../dbimages/'.$image)){
				echo "<script type='text/javascript'>alert('Photo deleted successfully.');
					window.location='../business_user_profile.php';
					</script>";
			}
			else{
				echo "<script type='text/javascript'>alert('Something wrong.');
					window.location='../business_user_profile.php';
					</script>";
			}
		}
	}
	else{
		echo "<script type='text/javascript'>alert('Select one to delete.');
				window.location='../business_user_profile.php';
				</script>";
	}
?>