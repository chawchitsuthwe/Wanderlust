<?php
	session_start();
	if(count($_POST)>0){
		include("config.php");
			
		$service_name=$_POST['service_name'];
		
		$query="INSERT INTO hotel_transport_service(email,serviceName) VALUES(?,?)";
		$stmt=$con->prepare($query);
		$stmt->bind_param('ss',$_SESSION['email'],$service_name);
		
		$result=$stmt->execute();
		
		if($result){
			echo "<script type='text/javascript'>alert('New service added successfully.');
					window.location='../business_user_profile.php';
					</script>";
		}
		else{
			echo "<script type='text/javascript'>alert('Something went wrong.');
					window.location='../business_user_profile.php';
					</script>";
		}
	}
?>