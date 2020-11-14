<!DOCTYPE html>
<html>
<head>
	<title>Business User Login</title>
    <link rel="stylesheet" type="text/css" href="Link Files/materialize.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <script src="Link Files/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> 
    <link rel="stylesheet" type="text/css" href="Link Files/style3.css" />
	<link rel="stylesheet" type="text/css" href="Link Files/wanderlustcss.css">
  <script src="Link Files/modal.js"></script>
	
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
			<button class="btn waves-effect waves-light black-text purple lighten-3" type="submit" name="getstarted_submit">Submit
    			<i class="material-icons right">send</i>
 			</button>
 			<p class="black-text"><br>Does not have a business user account yet ?
 				<a href="#modal">Contact Us</a>
					<div id="modal" class="modal">
    					<div class="modal-content">
   						   <h4>Contact Us</h4>
   						   <p>Please contact to our email for further processes. Email: wanderlust.mm@gmail.com</p>
  						  </div>
   					 <div class="modal-footer">
    					  <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
    				</div>
 			</p> 
 			<p class="black-text">Want to log in as a normal user ? <a href="normal_user_login.php">Log in as a normal user</a> </p> 
		</form>
		</div>
	</div>
	
		<?php
			session_start();

			if(count($_POST)>0){
				include("function/config.php");

				$email=$_POST['email'];
				$pwd=$_POST['pwd'];

				$query="SELECT email, pwd, name, bio, typeName
						FROM bussiness_users, bussiness_types
						WHERE email = '$email'
						AND pwd = '$pwd' AND bussiness_users.typeID=bussiness_types.typeID";
				$result=mysqli_query($con,$query);
				$row=mysqli_fetch_array($result);

				if(is_array($row)){
					$_SESSION['email']=$row['email'];
					$_SESSION['pwd']=$row['pwd'];;
					$_SESSION['name']=$row['name'];
					$_SESSION['bio']=$row['bio'];
					$_SESSION['user_type']='business_user';
					$_SESSION['businessType']=$row['typeName'];
				}
				else
					echo "<script>alert('Invalid email or password.')</script>";

				if(isset($_SESSION['email'])){
					header("Location:index.php");
				}
			}
		?>
	
</body>
</html>