<?php
	session_start();
	if(count($_POST)>0){
		include("config.php");
			
		$first_route=$_POST['first_route'];
		$second_route=$_POST['second_route'];
		
		$journey_name=$first_route.' to '.$second_route;
		
		$query="INSERT INTO journey(email,journey_name) VALUES(?,?)";
		$stmt=$con->prepare($query);
		$stmt->bind_param('ss',$_SESSION['email'],$journey_name);
		
		$result=$stmt->execute();
		
		if($result){
			echo "<script type='text/javascript'>alert('New route added successfully.');
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