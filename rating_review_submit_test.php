<!DOCTYPE html>
<html>
<head>
    <title>Wanderlust</title>
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" 
    crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" 
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" 
    crossorigin="anonymous"></script>

    <script src="Link Files/jquery-3.4.1.min.js"></script>

    <!-- Materialize -->
    <link rel="stylesheet" type="text/css" href="Link Files/materialize.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- Wanderlast css file -->
    <link rel="stylesheet" type="text/css" href="Link Files/wanderlustcss.css"/>
    <link rel="stylesheet" type="text/css" href="Link Files/hotels.css"/>

    <!-- Materialize icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Livvic&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nixie+One&display=swap" rel="stylesheet"> 
    <style>
        .logo{
            padding-top: 6px;
        }
		.search{
			margin-top: 160px;
		}
    </style>
    <script type="text/javascript">
          $(document).ready(function(){
            $('.sidenav').sidenav();
          }); 
		  $(document).ready(function(){
            $('.parallax').parallax();
          });
    </script>
</head>
<body>
    <header></header>

	<?php include("nav.php"); ?>

	<?php
		include("function/config.php");
		
		if(isset($_SESSION['email'])){
		$normal_email=$_SESSION['email'];
		
		$business_email='zinnwe@gmail.com';
	
		$query="SELECT * FROM rating_review WHERE normal_email='$normal_email' AND business_email='$business_email'";
		$result=mysqli_query($con,$query);
		
		$row=mysqli_fetch_array($result);
		}
	?>
	<div class="container" style="margin-top: 20%;">
		 <form method="POST">
			<input type="number" class="rating" id="test" name="rating" data-min="1" data-max="5" value="<?php if(isset($_SESSION['email'])) echo $row['rating']; ?>">
			
			<input type="text" class="form-control" name="title" placeholder="Title" value="<?php if(isset($_SESSION['email'])) echo $row['review_title']; ?>" required>
			<input type="text" class="form-control" name="review" placeholder="Review" value="<?php if(isset($_SESSION['email'])) echo $row['review']; ?>" required>
			<input type="submit" class="btn" value="submit">
		</form>
	</div>
<?php
//if(isset($_POST)){
if(count($_POST)>0){	
	
	if(!isset($_SESSION['email']))
		header("Location:getstarted.php?location=" . urlencode($_SERVER['REQUEST_URI']));
	else{
	
		include("function/config.php");
	
		$normal_email=$_SESSION['email'];
		$business_email='zinnwe@gmail.com';
		$rating= $_POST['rating'];
		$title=$_POST['title'];
		$review=$_POST['review'];
	
		$query="SELECT * FROM rating_review WHERE normal_email='$normal_email' AND business_email='$business_email'";
		$result=mysqli_query($con,$query);
		
		if (mysqli_num_rows($result)==0){
			$query="INSERT INTO rating_review(normal_email,business_email,review_title,rating,review) VALUES('$normal_email','$business_email','$title',$rating,'$review')";
			$result=mysqli_query($con,$query);
			if($result)
				echo "<script type='text/javascript'>alert('Review uploaded successfully.')</script>";
		}
		else{
			$query="UPDATE rating_review SET review_title='$title',rating=$rating,review='$review' WHERE normal_email='$normal_email' AND business_email='$business_email'";
			$result=mysqli_query($con,$query);
			if($result)
				echo "<script type='text/javascript'>alert('Review updated successfully.')</script>";
		}
	}
	
}
?>
?>
</body>
</html>