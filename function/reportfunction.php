<?php
if(count($_POST)>0){

	if(!isset($_SESSION['email']))
		echo '<script>window.location.replace("../getstarted.php?location='.urlencode($_SERVER['REQUEST_URI']).'");</script>';
	else{
		$subject = $_POST['subject'];
		$report_email=$_POST['email'];
		// use wordwrap() if lines are longer than 70 characters
		$msg= "The user I want to report is ".$report_email."<br>";
		$msg .= $_POST['msg'];
		$msg= wordwrap($msg,200);

		// send email
		mail("chawchitsuthwe.99@gmail.com",$subject,$msg);
	}

}
?> 