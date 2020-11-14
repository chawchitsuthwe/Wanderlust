<?php
	session_start();
	if(count($_POST)>0){
		
		$newpwd=$_POST['newpwd'];
		$cpwd=$_POST['cpwd'];
		$pwdmatch=FALSE;
		
		include("config.php");
		
		$query="SELECT pwd FROM bussiness_users WHERE email='".$_SESSION['email']."' LIMIT 1";
        $result=mysqli_query($con,$query);
        $row=mysqli_fetch_array($result);
        if (is_array($row)) {
            if($cpwd==$row['pwd']){
				$pwdmatch=TRUE;
			}
        }
		
				
		if($pwdmatch==TRUE){
			$query="UPDATE bussiness_users SET pwd=? WHERE email='".$_SESSION['email']."'";
			$stmt=$con->prepare($query);
			$stmt->bind_param('s',$newpwd);

			$result=$stmt->execute();

			if($result){
				echo "<script type='text/javascript'>alert('Password changed');
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
				echo "<script type='text/javascript'>alert('The current password is wrong.');
					window.location='../business_user_profile.php';
					</script>";
			}

		
	}
?>