<!DOCTYPE html>
<html>
<head>
	<title>Get Started</title>
    <link rel="stylesheet" type="text/css" href="Link Files/materialize.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="Link Files/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> 
    <link rel="stylesheet" type="text/css" href="Link Files/style1.css" />
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
		        <form method="POST" class="col s12">
		          <div class="row">
				        <div class="input-field col s12">
         			    <input id="email" type="email" name="email" class="validate black-text">
         			    <label for="email" class="black-text">Email</label>
                </div>
         	  </div>
			      <div class="row">
				      <div class="input-field col s12">
          			<input id="password" type="password" name="pwd" class="validate black-text	">
          			<label for="password" class="black-text">Password</label>
          		</div>
		      	</div>
			       <button class="btn waves-effect waves-light black-text purple lighten-3" type="submit" name="getstarted_submit">Submit<i class="material-icons right">send</i>
 			        </button>
 		         	<p class="black-text"><br>Already have an account ? <a href="normal_user_login.php<?php if(isset($_GET['location'])) echo "?location=".urlencode($_GET['location']); ?>">Log In</a> </p> 
	       	</form>
		    </div>
	 </div>
	<?php
			session_start();
			if(count($_POST)>0){
				include("function/config.php");

				$email=$_POST['email'];
				$pwd=$_POST['pwd'];

				$result=mysqli_query($con,"SELECT email FROM normal_users WHERE email='$email'");
				$row=mysqli_fetch_array($result);

				if(is_array($row))
					echo "<script>alert('Email is already used.')</script>";
				else{
					$query="INSERT INTO normal_users VALUES('$email','$pwd',NULL,NULL,NULL,NULL)";
					$result=mysqli_query($con,$query);
			
					if($result){
						$_SESSION['email']=$email;
						$_SESSION['pwd']=$pwd;
						$_SESSION['user_type']='normal_user';
						if(!isset($_GET['location']))
							header("Location:index.php");
						else
							header("Location:" . urldecode($_GET['location']));
					}
				}

			}
		?>
</body>
</html>