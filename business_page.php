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
    
	<div class="parallax-container">
      <div class="parallax">
		<?php

				 include("function/config.php");
                
                $query="SELECT coverpic FROM bussiness_users WHERE email='".$_GET['email']."'";
                $result=mysqli_query($con,$query);
                $row=mysqli_fetch_array($result);
                if (is_array($row)) {
                    if($row['coverpic']==NULL)
                        echo "<img src='images/gradientbg.png'>";
                    else
                       echo "<img src='dbimages/".$row['coverpic']."'>";
                }
                  
            ?>
	  </div>
          
        <div class="profile responsive-image" align="center">
		<?php
                
            $query="SELECT profilepic FROM bussiness_users WHERE email='".$_GET['email']."'";
            $result=mysqli_query($con,$query);
            $row=mysqli_fetch_array($result);
            if (is_array($row)) {
                if($row['profilepic']==NULL)
                    echo '<img src="images/profile.png" height="150px">';
                else
                    echo '<img src="dbimages/'.$row['profilepic'].'" width="150px" height="150px">';
            }
                  
        ?>
        
		<?php
                
            $query="SELECT name FROM bussiness_users WHERE email='".$_GET['email']."'";
            $result=mysqli_query($con,$query);
            $row=mysqli_fetch_array($result);
            if (is_array($row)) {
                if($row['name']==NULL)
                    echo "<h4 style='padding-bottom: 30px;'>Your Name</h4>";
                else
                    echo "<h4 style='padding-bottom: 30px;'>".$row['name']."</h4>";
            }
                  
        ?>
		</div>

      </div>
	<?php
		$row=business_basic_info();
	?>
	
 <div class="container">
    <div class="row">
        <div class="col s12 l6">
            <h3>About</h3>
            <div class="brief-info"><?php echo $row['bio']; ?></div>	
			<p class="container-fluid">
				<div class="row m-1">
					<div class="col-md-4 basic-info">Address</div>
					<div class="col-md-4"><?php echo $row['address']; ?></div>
				</div>
				<div class="row m-1">
					<div class="col-md-4 basic-info">Phone Number</div>
					<div class="col-md-4"><?php echo $row['phNo']; ?></div>
				</div>
				<div class="row m-1">
					<div class="col-md-4 basic-info">Website</div>
					<div class="col-md-4"><?php echo $row['website']; ?></div>
				</div>
				</p>
        </div>
        <div class="col s12 l6">
            	<h3>Gallery</h3>
            	<div class="carousel center-align">
    				<?php echo photo_slide_show(); ?>
  				</div>
        </div>
    </div>    
	
	<?php	
			$query="SELECT typeName FROM bussiness_users,bussiness_types WHERE bussiness_users.typeID=bussiness_types.typeID AND email='".$_GET['email']."'";
            $result=mysqli_query($con,$query);
            $row=mysqli_fetch_array($result);

			switch($row['typeName']){
				case "hotel" : include("business_page_view/hotel_profile.php"); break;
				case "restaurant" : include("business_page_view/restaurant_profile.php"); break;
				case "transport" : include("business_page_view/transport_profile.php");break;
				default: echo "something wrong.";
			}
	?>

</div>
<hr class="fade-2">

<?php
		include("function/config.php");
		
		if(isset($_SESSION['email'])){
		$normal_email=$_SESSION['email'];
		
		$business_email=$_GET['email'];
	
		$query="SELECT * FROM rating_review WHERE normal_email='$normal_email' AND business_email='$business_email'";
		$result=mysqli_query($con,$query);
		
		$row=mysqli_fetch_array($result);
		}
?>
	
<div class="container">
    <h3>Rating & Reviews</h3>
	<div class="row">
	<form method="POST" id="rating_btn">
		<div class="row">
			<div class="col s12">
				<div class="stars">
					<input type="radio" name="rating" class="star-1" value=1 id="star-1" />
					<label class="star-1" for="star-1">1</label>
					<input type="radio" name="rating" class="star-2" value=2 id="star-2" />
					<label class="star-2" for="star-2">2</label>
					<input type="radio" name="rating" class="star-3" value=3 id="star-3" />
					<label class="star-3" for="star-3">3</label>
					<input type="radio" name="rating" class="star-4" value=4 id="star-4" />
					<label class="star-4" for="star-4">4</label>
					<input type="radio" name="rating" class="star-5" value=5 id="star-5" />
					<label class="star-5" for="star-5">5</label>
					<span></span>
				</div>
				<?php
				if(isset($_SESSION['email'])){
				switch($row['rating']){
					case 1: echo '<script>$( "#star-1" ).prop( "checked", true );</script>';break;
					case 2: echo '<script>$( "#star-2" ).prop( "checked", true );</script>';break;
					case 3: echo '<script>$( "#star-3" ).prop( "checked", true );</script>';break;
					case 4: echo '<script>$( "#star-4" ).prop( "checked", true );</script>';break;
					case 5: echo '<script>$( "#star-5" ).prop( "checked", true );</script>';break;
				}}
				?>
			</div>
			<div class="row">
				<div class="input-field col s12">
         			<input id="review_title" type="text" name="title" class="validate" value="<?php if(isset($_SESSION['email'])) echo $row['review_title']; ?>">
         			<label for="review_title">Review Title</label>
         		</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
         			<textarea id="textarea1" class="materialize-textarea" name="review" ><?php if(isset($_SESSION['email'])) echo $row['review']; ?></textarea>
					 <label class="active" for="textarea1">Review</label>
         		</div>
			</div>
			<div class="row">
				<div class="input-field col s12 center-align">
         			<button class="btn waves-effect waves-light black-text purple lighten-3" type="submit" name="rating_btn">Send
						<i class="material-icons right">send</i>
					</button>
         		</div>
			</div>
		</div>
	</form>
	</div>
	
	<div class="row">
	<?php
	$count=0;
	$rate_result=rating_review_view();
	if(mysqli_num_rows($rate_result)>=1){
		while($rate_row=mysqli_fetch_array($rate_result)){
	?>
    <div class="col s12 m6">
      <div class="card purple lighten-4">
        <div class="card-content white-text">
          <span class="card-title"><?php echo $rate_row['review_title']; ?></span>
		  <?php
			$count=1;
			$rating=round($rate_row['rating']);
						
			for($i=1;$i<=5;$i++){
				if($rating>=$count){
					echo '<i class="small material-icons star m-0" style="color:pink;">star</i>';
				}
				else{
					echo '<i class="small material-icons star m-0" style="color:grey;">star</i>';
				}
				$count++;
			}
		?>
          <p><?php echo $rate_row['review']; ?></p>
        </div>
		<div class="card-action white-text">
			<p>By <?php echo $rate_row['norm_name']; ?></p>
        </div>
      </div>
		
    </div>
	<?php
		$count++;
		if($count%2==0){
	?>
	</div><div class="row">
	<?php } } }else{?>
	<p>No rating and review yet.</p>
	<?php } ?>
  </div>
 
</div> 

	<!--Saved Button-->
	<?php
			include("function/config.php");
			
			if(!isset($_SESSION['email'])){
		?>
		<form method="POST" id="save_btn">
			<input type="hidden" name="save_con" value="saved">
			<button class="waves-effect waves-light btn modal-trigger black-text purple lighten-5" name="save_btn" type="submit" id="fixedbutton1"><i class="material-icons left">save</i>Save</button>
			
		</form>
		<?php	}else{
			$saver_email=$_SESSION['email'];
			$saved_email=$_GET['email']; //$_GET['b_email'];
	
			$query="SELECT * FROM saved WHERE saver_email='$saver_email' AND saved_email='$saved_email'";
			$result=mysqli_query($con,$query);
			if (mysqli_num_rows($result)>0){
		?>
		<form method="POST">
			<input type="hidden" name="save_con" value="saved">
			<button class="waves-effect waves-light btn modal-trigger black-text" type="submit" name="save_btn" id="fixedbutton1"><i class="material-icons left">save</i>Saved</button>
			
		</form>
		<?php }else{ ?>
		<form method="POST">
			<input type="hidden" name="save_con" value="not saved">
			<button class="waves-effect waves-light btn modal-trigger black-text purple lighten-5" type="submit" name="save_btn" id="fixedbutton1"><i class="material-icons left">save</i>Save</button>
			
		</form>
		<?php } }?>
		<a class="waves-effect waves-light btn modal-trigger black-text" href="report.php?email=<?php echo $_GET['email']; ?>" id="fixedbutton2">REPORT</a>
        
    <!-- FOOTER --> 
    <?php  include("footer.php"); ?>
<?php
if(isset($_POST['save_btn'])){	
	
	if(!isset($_SESSION['email']))
		echo '<script>window.location.replace("getstarted.php?location='.urlencode($_SERVER['REQUEST_URI']).'");</script>';
	else{
		
	
	$save_con=$_POST['save_con'];
		
	if ($save_con=="not saved"){
		$query="INSERT INTO saved(saver_email,saved_email) VALUES('$saver_email','$saved_email')";
		$result=mysqli_query($con,$query);
		if($result){
			echo "<script>window.location.replace('business_page.php?email=".$saved_email."'); </script>";
		}
	}
	else if($save_con=="saved"){
		$query="DELETE FROM saved WHERE saver_email='$saver_email' AND saved_email='$saved_email'";
		$result=mysqli_query($con,$query);
		if($result){
			echo "<script>window.location.replace('business_page.php?email=".$saved_email."'); </script>";
		}
	}
	}
	
}
else if(isset($_POST['rating_btn'])){	
	if(!isset($_SESSION['email']))
		echo '<script>window.location.replace("getstarted.php?location='.urlencode($_SERVER['REQUEST_URI']).'");</script>';
	else if(isset($_SESSION['email']) && $_SESSION['user_type']=="normal_user"){
	
	$normal_email=$_SESSION['email'];
	$business_email=$_GET['email'];
	
	$title=$_POST['title'];
	$review=$_POST['review'];
	$rating=$_POST['rating'];
	
	$query="SELECT * FROM rating_review WHERE normal_email='$normal_email' AND business_email='$business_email'";
	$result=mysqli_query($con,$query);
		
	if (mysqli_num_rows($result)==0){
		$query="INSERT INTO rating_review(normal_email,business_email,review_title,rating,review) VALUES('$normal_email','$business_email','$title',$rating,'$review')";
		$result=mysqli_query($con,$query);
		if($result)
			echo "<script type='text/javascript'>alert('Review uploaded successfully.');
				window.location.replace('business_page.php?email=".$saved_email."');</script>";
	}
	else{
		$query="UPDATE rating_review SET review_title='$title',rating=$rating,review='$review' WHERE normal_email='$normal_email' AND business_email='$business_email'";
		$result=mysqli_query($con,$query);
		if($result)
			echo "<script type='text/javascript'>alert('Review updated successfully.');
				window.location.replace('business_page.php?email=".$saved_email."');</script>";
	}
	}
	else if(isset($_SESSION['email']) && $_SESSION['user_type']=="business_user"){
		echo "<script type='text/javascript'>alert('You can't give rating and review.');</script>";
	}
}

?>

</body>
</html>