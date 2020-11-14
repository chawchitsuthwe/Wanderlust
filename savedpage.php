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
			
			if(!isset($_SESSION['email'])){
		?>
		<form method="POST">
			<button class="waves-effect waves-light purple lighten-5 btn" type="submit"><i class="material-icons left">save</i>Saved</button>
			<input type="hidden" name="save_con" value="saved">
		</form>
		<?php	}else{
			$saver_email=$_SESSION['email'];
			$saved_email='zinnwe@gmail.com'; //$_GET['b_email'];
	
			$query="SELECT * FROM saved WHERE saver_email='$saver_email' AND saved_email='$saved_email'";
			$result=mysqli_query($con,$query);
			if (mysqli_num_rows($result)>0){
		?>
		<form method="POST">
			<button class="waves-effect waves-light purple btn" type="submit"><i class="material-icons left">save</i>Saved</button>
			<input type="hidden" name="save_con" value="saved">
		</form>
		<?php }else{ ?>
		<form method="POST">
			<button class="waves-effect waves-light purple lighten-5 btn" type="submit"><i class="material-icons left">save</i>Saved</button>
			<input type="hidden" name="save_con" value="not saved">
		</form>
		<?php } }?>
	</body>
</html>
<?php
if(count($_POST)>0){	
	
	if(!isset($_SESSION['email']))
		header("Location:getstarted.php?location=" . urlencode($_SERVER['REQUEST_URI']));
	else{
	include("function/config.php");
	
	$saver_email=$_SESSION['email'];
	$saved_email='zinnwe@gmail.com'; //$_GET['b_email'];
	$save_con=$_POST['save_con'];
		
	if ($save_con=="not saved"){
		$query="INSERT INTO saved(saver_email,saved_email) VALUES('$saver_email','$saved_email')";
		$result=mysqli_query($con,$query);
		if($result){
			header("Refresh:0");
		}
	}
	else if($save_con=="saved"){
		$query="DELETE FROM saved WHERE saver_email='$saver_email' AND saved_email='$saved_email'";
		$result=mysqli_query($con,$query);
		if($result){
			header("Refresh:0");
		}
	}
	}
	
}
?>