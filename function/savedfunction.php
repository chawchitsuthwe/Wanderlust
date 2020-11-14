<?php
if(count($_POST)>0){	
	
	if(!isset($_SESSION['email']))
		header("Location:../getstarted.php?location=" . urlencode($_SERVER['REQUEST_URI']));
	else{
		
	include("function/config.php");
	
	$saver_email=$_SESSION['email'];
	$saved_email=$_POST['saved_email']; //$_GET['b_email'];
	$save_con=$_POST['save_con'];
		
	if ($save_con=="not saved"){
		$query="INSERT INTO saved(saver_email,saved_email) VALUES('$saver_email','$saved_email')";
		$result=mysqli_query($con,$query);
		if($result){
			header("Location: ../business_page.php?email=".$saved_email);
		}
	}
	else if($save_con=="saved"){
		$query="DELETE FROM saved WHERE saver_email='$saver_email' AND saved_email='$saved_email'";
		$result=mysqli_query($con,$query);
		if($result){
			header("Location: ../business_page.php?email=".$saved_email);
		}
	}
	}
	
}
?>