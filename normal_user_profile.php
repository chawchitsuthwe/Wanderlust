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

    <script>         
        $(document).ready(function(){
        $('.modal').modal();
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
                
                $query="SELECT coverpic FROM normal_users WHERE email='".$_SESSION['email']."'";
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
                
            $query="SELECT profilepic FROM normal_users WHERE email='".$_SESSION['email']."'";
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
			if(empty($_SESSION['name'])){
		?>
            <h4 style='padding-bottom: 30px;'>Your Name</h4>
		<?php }else{ ?>
			<h4 style='padding-bottom: 30px;'><?php echo $_SESSION['name'];?></h4>
		<?php } ?>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col l12 m12 s12" align="center" style="margin-bottom: 50px;">

                <!-- Modal Trigger -->
                <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Edit Profile</a>

                <!-- Modal Structure -->
                <div id="modal1" class="modal">
                    <div class="modal-content">  
                     <h4>Edit Profile</h4>
                      <div class="row">
                        <form method="POST" action="function/normal_user_edit_profile.php" enctype="multipart/form-data" class="col s12" id="edit_profile">
                          <div class="row">
                            <div class="input-field col s12">
								<?php
                                    if(empty($_SESSION['name']))
										echo '<input value="Your Name" id="name" type="text" class="validate" name="name">';
                                    else
                                        echo '<input value="'.$_SESSION['name'].'" id="name" type="text" class="validate" name="name">';
                                        
                                ?>
                              <label class="active" for="name">Name</label>
                            </div>
                          </div>
                            <div class="row">
                                <div class="input-field col s12">
                                  <?php
                                    if(empty($_SESSION['name']))
										echo '<textarea id="textarea1" class="materialize-textarea" name="bio"></textarea>';
                                    else
                                        echo '<textarea id="textarea1" class="materialize-textarea" name="bio">'.$_SESSION['bio'].'</textarea>';
                                        
                                ?>
                                  <label for="Bio">Bio</label>
                                </div>
                            </div>
                          <div class="row">
                            <h5>Profile Photo</h5>
                            <div class="input-field col s12">  
                                <div class="file-field input-field">
                                  <div class="btn">
                                    <span>File</span>
                                    <input type="file" name="profilephoto" accept="image/*">
                                  </div>
                                  <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text">
                                  </div>
                                </div>
                            </div>
                          </div>
                          <div class="row">
                            <h5>Cover Photo</h5>
                            <div class="input-field col s12">  
                                <div class="file-field input-field">
                                  <div class="btn">
                                    <span>File</span>
                                    <input type="file" name="coverphoto" accept="image/*">
                                  </div>
                                  <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text">
                                  </div>
                                </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <a href="" class="modal-close waves-effect waves-green btn-flat">Close</a>
                      <button class="modal-close waves-effect waves-green btn-flat" type="submit" form="edit_profile">Save</button>
                    </div>
                </div>


                <!-- Modal Trigger -->
                <a class="waves-effect waves-light btn modal-trigger" href="#modal2">Account Setting</a>

                <!-- Modal Structure -->
                <div id="modal2" class="modal">
                    <div class="modal-content">  
                     <h4>Account Setting</h4>
                      <div class="row">
                        <form method="POST" action="function/normal_user_account_setting.php" id="account_setting" class="col s12">
                          <div class="row">
                            <div class="input-field col s12">
								 <label><?php echo $_SESSION['email']; ?></label>
                            </div>
                          </div>
                            <div class="row">
                                <div class="input-field col s12">
                                  <input id="password1" type="password" class="validate" name="cpwd">
                                  <label for="password1">Current Password</label>
                                </div>
                            </div>
							<div class="row">
                                <div class="input-field col s12">
                                  <input id="password2" type="password" class="validate" name="newpwd">
                                  <label for="password2">New Password</label>
                                </div>
                            </div>
                         
                        </form>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <a href="" class="modal-close waves-effect waves-green btn-flat">Close</a>
                      <button class="modal-close waves-effect waves-green btn-flat" type="submit" form="account_setting">Save</button>
                    </div>
                </div>
				
                <div class="col l12 m12 s12">
                    <h3>Bio</h3>
					<?php
						if(empty($_SESSION['bio'])){
					?>
					<p style='padding-bottom: 5px;'></p>
					<?php }else{ ?>
					<p style='padding-bottom: 5px;'><?php echo $_SESSION['bio']; ?></p>
					<?php } ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Trigger -->
        <a class="waves-effect waves-light btn modal-trigger" href="#modal3" id="fixedbutton2"><img src="images/saved.png" style="padding: 5px;"></a>

        <!-- Modal Structure -->
        <div id="modal3" class="modal bottom-sheet">
            <div class="modal-content">
              <h4>Saved</h4>
			  
	<div class="row">
		<div class="col l1 m0 s0 "></div>
		
		<?php
		$saver_email=$_SESSION['email'];
		
		$query="SELECT bussiness_users.email,name,profilepic,location,bio,AVG(rating) as avg FROM bussiness_users,saved,rating_review WHERE rating_review.business_email=bussiness_users.email AND saver_email='$saver_email' AND saved_email=bussiness_users.email GROUP BY rating_review.business_email";
		$result=mysqli_query($con,$query);
		$count=0;
		if(mysqli_num_rows($result)>=1){
			while($row=mysqli_fetch_array($result)){ 
		?>
		<div class="col l2 m4 s12 ">
           <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
				<?php 
				if($row['profilepic']==NULL)
					echo '<img class="activator" src="images/gradientbg.png" height=150px>';
				else
					echo '<img class="activator" src="dbimages/'.$row['profilepic'].'" height=150px>';
				?>
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4"><h5><a href="business_page.php?email=<?php echo $row['email']; ?>" class="purple-text text-lighten-3"><?php echo $row['name']; ?></a></h5><i class="material-icons right">more_vert</i></span>
              <p>Yangon</p>
            </div>
            <div class="card-reveal">
			    <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
               <span class="card-title grey-text text-darken-4"><?php echo $row['name']; ?></span>
              <p><?php echo $row['bio']; ?></p>
              <h5>Rating</h5>
			  <?php
				$rcount=round($row['avg']);
				while($rcount>0){
					echo '<span class="fa fa-star checked"></span>';
					$rcount--;
				}
			  ?>
               <h5>Location</h5>
               <p><?php echo $row['location']; ?></p>
               <div style="margin-bottom: 15px"></div>
            </div>
          </div>
        </div>
		  <?php
				$count++;
				if($count%5==0){
			?>
			<div class="col l1 m0 s0 "></div>
			</div>
			<div class="row">
			<div class="col l1 m0 s0 "></div>
			<?php	}
				}	
			} else{
			?>
			<div class="container">
			<p><br><br>No result found.<br><br></p>
			</div>
			<?php } ?>
        </div>
            </div>
        </div>

    <!-- FOOTER --> 
    <?php include("footer.php"); ?>
</body>
</html>