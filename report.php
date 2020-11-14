<?php	
include("function/business_page_view.php");
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Your Profile</title>

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
    <link rel="stylesheet" type="text/css" href="Link Files/normal_user_profile.css">
	<link rel="stylesheet" type="text/css" href="Link Files/star_rating.css">
	
    <!-- Materialize icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Livvic&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nixie+One&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
    <style>
     .checked {
      color: orange;
    }
    </style>

    <script type="text/javascript">
          $(document).ready(function(){
            $('.sidenav').sidenav();
          }); 
    </script>

    <script>
         $(document).ready(function(){
            $('.parallax').parallax();
          });
    </script>

    <script>    
        $(document).ready(function(){
        $('.tooltipped').tooltip();
      });              
    </script>

    <script>         
        $(document).ready(function(){
        $('.modal').modal();
      });          
    </script>

    <script>
    	$(document).ready(function(){
   	 	$('.carousel').carousel();
  	});
    </script>

    <script>
    	$(document).ready(function(){
    	$('.materialboxed').materialbox();
  	});
    </script>

</head>
<body>
    <!--NAVIGATION-->
    <?php include("nav.php"); ?>

<div class="container center-align">
    <h3>REPORT FORM</h3>
	<hr class="fade-2">
	<div class="row">
	<div class="col s3"></div>
	<div class="col s6">
	<form method="POST" >
		<div class="row">
			<div class="row">
				<div class="input-field col s12">
         			<input id="review_title" type="text" name="subject" class="validate">
         			<label for="review_title">Subject</label>
         		</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
         			<textarea id="textarea1" class="materialize-textarea" name="msg" ></textarea>
					 <label class="active" for="textarea1">Message</label>
         		</div>
			</div>
			<input type="hidden" name="email" class="validate" value="<?php echo $_GET['email']; ?>">
			<div class="row">
				<div class="input-field col s12 center-align">
         			<button class="btn waves-effect waves-light black-text purple lighten-3" type="submit" name="rating_btn">REPORT
						<i class="material-icons right">send</i>
					</button>
         		</div>
			</div>
		</div>
	</form>
	</div>
	<div class="col s3"></div>
	</div>
 
</div> 
        
    <!-- FOOTER --> 
    <?php  include("footer.php"); ?>
</body>
</html>
<?php
if(count($_POST)>0){

	if(!isset($_SESSION['email']))
		echo '<script>window.location.replace("getstarted.php?location='.urlencode($_SERVER['REQUEST_URI']).'");</script>';
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