<!DOCTYPE html>
<html>
<head>
	<title>Normal User Login</title>
    <link rel="stylesheet" type="text/css" href="Link Files/materialize.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="Link Files/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> 
    <link rel="stylesheet" type="text/css" href="Link Files/style2.css" />
	<link rel="stylesheet" type="text/css" href="Link Files/wanderlustcss.css">
	
</head>
<body>
 		<ul class="cb-slideshow">
            <li><span>Image 01</span><div><h3>yan.gon</h3></div></li>
            <li><span>Image 02</span><div><h3>man.da.lay</h3></div></li>
            <li><span>Image 03</span><div><h3>ba.gan</h3></div></li>
            <li><span>Image 04</span><div><h3>in.lay</h3></div></li>
            <li><span>Image 05</span><div><h3>nga.pa.li</h3></div></li>
        </ul>
	  	 <div class="middle">
	   		<img src="images/logo.png" width="450" class="responsive">
	   		<div class="row">
	    		<form method="POST">
	    			<div class="row">
	    				<div class="input-field col s12">
	    					<label for="email" class="black-text">Email</label>
	    					<input id="email" type="email" name="email" class="validate black-text">
         				</div>
         			</div>
         			<div class="row">	
         				<div class="input-field col s12">
	    					<label for="password" class="black-text">Password</label>
         					<input id="password" type="password" name="pwd" class="validate black-text	">
          				</div>
          			</div>
          			<button class="btn waves-effect waves-light black-text purple lighten-3" type="submit" name="getstarted_submit">Submit<i class="material-icons right">send</i>
 							</button>
          			<p class="black-text"><br>Does not have an account yet?  <a href="getstarted.php<?php if(isset($_GET['location'])) echo "?location=".urlencode($_GET['location']); ?>">Get Started</a></p> 
 					<p class="black-text">Want to log in as a business user?  <a href="business_user_login.php">Log in as a business user</a> </p>
					</form>
	    	</div>			
	  </div>
	
		<?php
			session_start();

			if(count($_POST)>0){
				 include("function/config.php");

				$email=$_POST['email'];
				$pwd=$_POST['pwd'];

				$result=mysqli_query($con,"SELECT * FROM normal_users WHERE email='$email' AND pwd='$pwd'");
				$row=mysqli_fetch_array($result);

				if(is_array($row)){
					$_SESSION['email']=$row['email'];
					$_SESSION['pwd']=$row['pwd'];;
					$_SESSION['name']=$row['name'];
					$_SESSION['bio']=$row['bio'];
					$_SESSION['user_type']='normal_user';
				}
				else
					echo "<script>alert('Invalid email or password.')</script>";

				if(isset($_SESSION['email'])){
					if(!isset($_GET['location']))
						header("Location:index.php");
					else
						header("Location:" . urldecode($_GET['location']));
				}
			}
		?>
	
</body>
</html>