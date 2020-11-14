<!DOCTYPE html>
<html>
<head>
    <title>Wanderlast - Yangon</title>
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


    <!-- Font Awesome Icon Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css?family=Livvic&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nixie+One&display=swap" rel="stylesheet"> 
    <style>
        .search{
            margin-top: 140px;
        }
        .checked {
          color: orange;
        }
    </style>

    <script type="text/javascript">
          $(document).ready(function(){
            $('.sidenav').sidenav();
          }); 
		  $(document).ready(function(){
			$('.materialboxed').materialbox();
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
    <header></header>

	<?php include("nav.php"); ?>
	
	<div class="parallax-container">
      <div class="parallax"><img src="images/yangon.jpg"></div>
      </div>
    </div>
   <!-- about mandalay-->	
<div class="container">
    <div class="row">
		<h3 align="center">Yangon</h3>
		<hr class="fade-2">
	</div>
	<div class="row">
		<div class="col s12">
			<p>Yangon (formerly known as Rangoon) is the largest city in Myanmar (formerly Burma). A mix of British colonial architecture,
			modern high-rises and gilded Buddhist pagodas define its skyline. Its famed Shwedagon Paya, a huge, shimmering pagoda complex, draws thousands of pilgrims annually.
			The city's other notable religious sites include the Botataung and Sule pagodas, both housing Buddhist relics.</p>
		</div>
	</div>
	<div class="row">
		<div class="col s12">
		<div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=yangon&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>Google Maps Generator by <a href="https://www.embedgooglemap.net">embedgooglemap.net</a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style></div>
		</div>
	</div>
</div>

<!--Activities-->
<div class="container">
    <div class="row">
		<h3 align="center">Activities to Do in Yangon</h3>
		<hr class="fade-2">
	</div>
	<div class="row">
		
		<div class="col s12 m6">
			<h4>Watch the sunrise over the Shwedagon Pagoda</h4>
			<p>Watching the sunrise over one of the most famous and beautiful Pagodas in the world is most definitely a Yangon bucket list moment. 
			The Shwedagon Pagoda is one of Buddhism’s most sacred sights and the golden Pagoda glistens in the morning sunshine. 
			The gold leaf pagoda is adorned with thousands of diamonds and rubies and a 76 carat diamond crowns the sacred sight which dominates the Yangon skyline.
			</p>
		</div>
		<div class="col s12 m6">
			<img src="images/yangon/shwedagon.jpg" width=100% class="materialboxed">
		</div>
	</div>
	<div class="row">
		<div class="col s12 m6">
			<img src="images/yangon/chinatown.jpg" width=100% class="materialboxed">
		</div>
		<div class="col s12 m6">
			<h4>Stroll through China Town </h4>
			<p>Bustling and vibrant, Yangon’s China Town is full to the brim of market stalls, 
			street food and barbecue stands and an evening stroll down 19th street at night should be high on any Myanmar itinerary. 
			By day, China Town gives a fascinating glimpse into the life of some of Yangon’s residents as well as the architecture of the city.
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col s12 m6">
			<h4>Feel the history at the Sule Pagoda </h4>
			<p>In contrast with its newly constructed surroundings, the 2,500 year old Sule Pagoda is the oldest in Yangon and its prominent location 
			meant it was the scene of protests during some of the most significant moments in Myanmar history.
			</p>
		</div>
		<div class="col s12 m6">
			<img src="images/yangon/sule.jpg" width=100% class="materialboxed">
		</div>
	</div>
	<div class="row">
		<div class="col s12 m6">
			<img src="images/yangon/chaytawyar.jpg" width=100% class="materialboxed">
		</div>
		<div class="col s12 m6">
			<h4>Feel tiny at the Chaukhtatgyi Buddha Temple</h4>
			<p>Chaukhtatgyi Buddha Temple houses the incredible 217 foot reclining Buddha which is among the largest in Myanmar 
			and is easily one of the most beautiful we’ve ever seen: this is probably attributed to the fact that the Buddha’s face was 
			reconstructed after initially being considered as having too severe an expression. 
			The details on the Buddha, from the long eyelashes to the inscribed feet, make it worth the jaunt from downtown Yangon.
			</p>
		</div>
	</div>
</div>

<!-- Best Hotels  -->
	<?php
		include("function/config.php");
		$query="SELECT bussiness_users.email as busi_email,bussiness_users.name as busi_name,normal_users.name as norm_name,bussiness_users.profilepic,AVG(rating) as avg, review FROM normal_users,bussiness_users, bussiness_types,rating_review 
		WHERE normal_users.email=rating_review.normal_email AND bussiness_users.email=rating_review.business_email AND bussiness_users.typeID=bussiness_types.typeID 
		AND typeName='hotel' AND location LIKE '%Yangon%' GROUP BY rating_review.business_email ORDER BY avg DESC LIMIT 3";
		$result=mysqli_query($con,$query);
	?>
	<div class="container">
	
    <div class="row">
    <h3 align="center">Best Hotels in Yangon</h3>
    <hr class="fade-2">
    </div>
	
	<div class="row">
	<?php
		$count=0;
		if(mysqli_num_rows($result)>=1){
			while($row=mysqli_fetch_array($result)){ 
	?>
		<div class="col s12 l4 m6">
			<a href="business_page.php?email=<?php echo $row['busi_email']; ?>" class="card-link"><div class="card">
				<div class="card-image">
				<?php 
				if($row['profilepic']==NULL)
					echo '<img class="activator" src="images/gradientbg.png" height=150px>';
				else
					echo '<img class="activator" src="dbimages/'.$row['profilepic'].'" height=150px>';
				?>
				</div>
				<div class="card-content">
					<h5><?php echo $row['busi_name']; ?></h5>
					<?php
						$rcount=round($row['avg']);
						while($rcount>0){
							echo '<span class="fa fa-star checked"></span>';
							$rcount--;
						}
					?>

					<hr class="fade-2">
					<p style="font-size: 13px">
					<?php 
						$str=substr($row['review'],0,250).'...';
						echo $str.'<br>';
					?>
					<?php echo '<span style="font-weight: bold;">'.$row['norm_name'].'</span>'; ?>
					</p>
				</div>
			</div></a>
		</div>
		<?php
		} }
		?>
	</div>
	<div class="row center-align">
        <div class="col l12 s12">
            <a class="waves-effect waves-light btn" href="searchresult.php?type=hotel&location=yangon">See More</a>
        </div>
    </div>
  
  </div>
 
<!-- Best Restaurants  -->
	<?php
		include("function/config.php");
		$query="SELECT bussiness_users.email as busi_email,bussiness_users.name as busi_name,normal_users.name as norm_name,bussiness_users.profilepic,AVG(rating) as avg, review FROM normal_users,bussiness_users, bussiness_types,rating_review 
		WHERE normal_users.email=rating_review.normal_email AND bussiness_users.email=rating_review.business_email AND bussiness_users.typeID=bussiness_types.typeID 
		AND typeName='restaurant' AND location LIKE '%Yangon%' GROUP BY rating_review.business_email ORDER BY avg DESC LIMIT 3";
		$result=mysqli_query($con,$query);
	?>
	<div class="container">
	
    <div class="row">
    <h3 align="center">Best Restaurants in Yangon</h3>
    <hr class="fade-2">
    </div>
	
	<div class="row">
	<?php
		$count=0;
		if(mysqli_num_rows($result)>=1){
			while($row=mysqli_fetch_array($result)){ 
	?>
		<div class="col s12 l4 m6">
			<a href="business_page.php?email=<?php echo $row['busi_email']; ?>" class="card-link"><div class="card">
				<div class="card-image">
				<?php 
				if($row['profilepic']==NULL)
					echo '<img class="activator" src="images/gradientbg.png" height=150px>';
				else
					echo '<img class="activator" src="dbimages/'.$row['profilepic'].'" height=150px>';
				?>
				</div>
				<div class="card-content">
					<h5><?php echo $row['busi_name']; ?></h5>
					<?php
						$rcount=round($row['avg']);
						while($rcount>0){
							echo '<span class="fa fa-star checked"></span>';
							$rcount--;
						}
					?>

					<hr class="fade-2">
					<p style="font-size: 13px">
					<?php 
						$str=substr($row['review'],0,250).'...';
						echo $str.'<br>';
					?>
					<?php echo '<span style="font-weight: bold;">'.$row['norm_name'].'</span>'; ?>
					</p>
				</div>
			</div></a>
		</div>
		<?php
		} }
		?>
	</div>
	<div class="row center-align">
        <div class="col l12 s12">
            <a class="waves-effect waves-light btn" href="searchresult.php?type=restaurant&location=yangon">See More</a>
        </div>
    </div>
  
  </div>
	
<!-- FOOTER -->	
	<?php include("footer.php"); ?>

</body>
</html>