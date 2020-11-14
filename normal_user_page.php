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

    <!-- Materialize icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Font Awesome Icon Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css?family=Livvic&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nixie+One&display=swap" rel="stylesheet"> 
    <style>
		#modal3{
			max-height: 85%;
		}
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

</head>
<body>
    <!--NAVIGATION-->
	<?php include("nav.php"); ?>
    <?php

		include("function/config.php");
        
		if(isset($_GET['email']))
			$email=$_GET['email'];
		else
			header("Location:404");
		
		if($email==NULL){
			header("Location:index.php");
		}
				
        $query="SELECT name,bio,profilepic,coverpic FROM normal_users WHERE email='".$email."'";
        $result=mysqli_query($con,$query);
        $row=mysqli_fetch_array($result);
    ?>
    <div class="parallax-container">
      <div class="parallax">
		<?php
            if($row['coverpic']==NULL)
                 echo "<img src='images/gradientbg.png'>";
            else
                 echo "<img src='dbimages/".$row['coverpic']."'>";
                  
            ?>
	  </div>
          
        <div class="profile responsive-image" align="center">
		<?php

            if($row['profilepic']==NULL)
                echo '<img src="images/profile.png" height="150px">';
            else
                echo '<img src="dbimages/'.$row['profilepic'].'" width="150px" height="150px">';
                  
        ?>
		<?php
			if(empty($row['name'])){
		?>
            <h4 style='padding-bottom: 30px;'>Your Name</h4>
		<?php }else{ ?>
			<h4 style='padding-bottom: 30px;'><?php echo $row['name'];?></h4>
		<?php } ?>
        </div>

      </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col l12 m12 s12" align="center" style="margin-bottom: 50px;">
                <div class="col l12 m12 s12">
                    <h3>Bio</h3>
					<?php
						if(empty($row['bio'])){
					?>
					<p style='padding-bottom: 5px;'></p>
					<?php }else{ ?>
					<p style='padding-bottom: 5px;'><?php echo $row['bio']; ?></p>
					<?php } ?>
                </div>
            </div>
        </div>
    </div>
    <!-- FOOTER --> 
     <?php include("footer.php"); ?>
</body>
</html>