<?php
	session_start();
	if(count($_POST)>0){
		include("config.php");
		
		$starttime=$_POST['starttime'];
		$endtime=$_POST['endtime'];
		$cuisine=$_POST['cuisine'];
		$meal_type=$_POST['meal'];
		
		$query="SELECT * FROM restaurant_details WHERE email='".$_SESSION['email']."'";
		$result=mysqli_query($con,$query);
		
		if(mysqli_num_rows($result)>0){
		$query="UPDATE restaurant_details SET starttime=?, endtime=?, cuisine=?, meal_type=? WHERE email=?";
		$stmt=$con->prepare($query);
		$stmt->bind_param('sssss',$starttime, $endtime, $cuisine, $meal_type, $_SESSION['email']);
		
		$result=$stmt->execute();
	
		if($result){
			echo "<script type='text/javascript'>
					window.location='../business_user_profile.php';
					</script>";
		}
		else{
			echo "<script type='text/javascript'>alert('Somethine went wrong.');
					window.location='../business_user_profile.php';
					</script>";
		}
		}
		else{
		$query="INSERT INTO restaurant_details(email,starttime,endtime,cuisine,meal_type) VALUES(?,?,?,?,?)";
		$stmt=$con->prepare($query);
		$stmt->bind_param('sssss',$_SESSION['email'],$starttime, $endtime, $cuisine, $meal_type);
		
		$result=$stmt->execute();
	
		if($result){
			echo "<script type='text/javascript'>
					window.location='../business_user_profile.php';
					</script>";
		}
		else{
			echo "<script type='text/javascript'>alert('Somethine went wrong.');
					window.location='../business_user_profile.php';
					</script>";
		}
				
		}
	}
?>