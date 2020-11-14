<?php
	session_start();
	if(count($_POST)>0){
		include("config.php");
		if(isset($_POST['service_id'])){
			$service_id=$_POST['service_id'];
			foreach($service_id as $value){
				$query="DELETE FROM hotel_transport_service WHERE hotel_transport_service_id=? AND email=?";
				$stmt=$con->prepare($query);
				$stmt->bind_param('ss',$value,$_SESSION['email']);
		
				$result=$stmt->execute();
			}
			echo "<script type='text/javascript'>
					window.location='../business_user_profile.php';
					</script>";
		}
		else{
			echo "<script type='text/javascript'>alert('Something wrong.');
					window.location='../business_user_profile.php';
					</script>";
		}
	}
	else{
		echo "<script type='text/javascript'>alert('Select one to delete.');
				window.location='../business_user_profile.php';
				</script>";
	}
	
?>