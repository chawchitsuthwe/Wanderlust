<?php
	session_start();
	if(count($_POST)>0){
		include("config.php");
		if(isset($_POST['journey_id'])){
			$journey_id=$_POST['journey_id'];
			foreach($journey_id as $value){
				$query="DELETE FROM journey WHERE journey_id=? AND email=?";
				$stmt=$con->prepare($query);
				$stmt->bind_param('ss',$value,$_SESSION['email']);
		
				$result=$stmt->execute();
			}
			echo "<script type='text/javascript'>
					window.location='../business_user_profile.php';
					</script>";
		}
		else
			echo "<script type='text/javascript'>alert('Select one to delete.');
					window.location='../business_user_profile.php';
					</script>";
	}
?>