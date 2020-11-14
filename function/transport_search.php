<?php
	include("config.php");
	
	if(count($_POST)>0){
		
		$property=$_POST['property'];
		$location=$_POST['location'];
		
		if(isset($property) && $location=="SELECT LOCATION"){
			$query="SELECT email,name,profilepic,location FROM bussiness_users WHERE name='$property'";
		}
		else if(isset($property) && $location!="SELECT LOCATION"){
			$query="SELECT email,name,profilepic,location, FROM bussiness_users WHERE name='$property' AND location='$location'";
		}
		
		$result=mysqli_query($con,$query);
		$row=mysqli_fetch_array($result);
		return $row;
	}
?>