<!--NAVIGATION-->
    <nav class="grey darken-3">
    <div class="nav-wrapper">
      <a href="index.php"><img class="logo" src="ImageForWanderlust/logo.png" width="200px"/></a>
      <a href="index.php" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="hotels.php" class="text">Hotels</a></li>
        <li><a href="restaurants.php" class="text">Restaurants</a></li>
        <li><a href="transportation.php" class="text">Transportation</a></li>
		<?php

            session_start();

            if(isset($_SESSION['email'])){
                if($_SESSION['user_type']=='normal_user')
                	echo '<li><a href="normal_user_profile.php" class="tooltipped" data-position="bottom" data-tooltip="Profile"><i class="material-icons">account_circle</i></a></li>';
                else
					echo '<li><a href="business_user_profile.php" class="tooltipped" data-position="bottom" data-tooltip="Profile"><i class="material-icons">account_circle</i></a></li>';
					
                echo '<li><a href="logout.php" class="waves-effect waves-light btn btn purple lighten-3" >Log Out</a></li>';
            }
            else{
				echo '<li><a href="getstarted.php" class="waves-effect waves-light btn btn purple lighten-3" >Log In</a></li>';
            }
        ?>
      </ul>
        </div>
    <!-- SIDE NAVIGATION -->
    <ul class="sidenav" id="mobile-demo">
        <li><a href="hotels.php">Hotels</a></li>
        <li><a href="restaurants.php">Restaurants</a></li>
        <li><a href="transportation.php">Transportation</a></li>
		<?php

            if(isset($_SESSION['email'])){
                if($_SESSION['user_type']=='normal_user')
                	echo '<li><a href="normal_user_profile.php" class="tooltipped" data-position="bottom" data-tooltip="Profile">My Profile<i class="material-icons">account_circle</i></a></li>';
                else
					echo '<li><a href="business_user_profile.php" class="tooltipped" data-position="bottom" data-tooltip="Profile">My Profile<i class="material-icons">account_circle</i></a></li>';
					
                echo '<li><a href="logout.php" class="waves-effect waves-light btn btn purple lighten-3" >Log Out</a></li>';
            }
            else{
				echo '<li><a href="getstarted.php" class="waves-effect waves-light btn btn purple lighten-3" >Log In</a></li>';
            }
        ?>
    </ul>
  </nav>