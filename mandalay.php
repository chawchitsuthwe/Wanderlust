<!DOCTYPE html>
<html>
<head>
    <title>Wanderlast - Mandalay</title>
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
      <div class="parallax"><img src="images/mandalay.jpg"></div>
      </div>
    </div>
 
  <!-- about mandalay-->	
<div class="container">
    <div class="row">
		<h3 align="center">Mandalay</h3>
		<hr class="fade-2">
	</div>
	<div class="row">
		<div class="col s12">
			<p>Mandalay is a city and former royal capital in northern Myanmar (formerly Burma) on the Irrawaddy River. In its center is the restored Mandalay Palace 
			from the Konbaung Dynasty, surrounded by a moat. Mandalay Hill provides views of the city from its summit, 
			which is reached by covered stairway. At its foot, the Kuthodaw Pagoda houses hundreds of Buddhist-scripture-inscribed marble slabs.</p>
		</div>
	</div>
	<div class="row">
		<div class="col s12">
			<div class="mapouter"><div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=mandalay&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>Google Maps Generator by <a href="https://www.embedgooglemap.net">embedgooglemap.net</a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style></div></div>
		</div>
	</div>
</div>

<!--Activities-->
<div class="container">
    <div class="row">
		<h3 align="center">Places to Visist in Mandalay</h3>
		<hr class="fade-2">
	</div>
	<div class="row">
		
		<div class="col s12 m6">
			<h4>Amarapura</h4>
			<p>Some 11km south of Mandalay. It became the capital of the Konbaung Dynasty in 1783 during the reign of King Bodawpaya. Places of interest are Pahtodawgyi Pagoda,
				U Bein Bridge across the Taungthaman Lake, Kyauktawgyi Pagoda, Nagayon Pagoda, Mahagandayone Monastery and cotton and silkweaving cottage industries.
			</p>
		</div>
		<div class="col s12 m6">
			<img src="images/mandalay/ubein.jpg" width=100% class="materialboxed">
		</div>
	</div>
	<div class="row">
		<div class="col s12 m6">
			<img src="images/mandalay/palace.jpg" width=100% class="materialboxed">
		</div>
		<div class="col s12 m6">
			<h4>Mandalay Palace </h4>
			<p>The Myan Nan San Kyaw, or Royal Palace, was the first palace to be built in Mandalay. Constructed by King Mindon,
				who moved his capital from Amarapura to Mandalay, the location was chosen because of astronomical calculations and favourable omens. 
				The entire palace complex was destroyed by fire during World War II, but it has been restored.
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col s12 m6">
			<h4>Atumashi Kyaung</h4>
			<p>Built in 1857, the Atumashi Kyaung was one of the last religious construction projects of King Mindon. The name means 'Incomparable Monastery'. 
			The Atumashi is an example of traditional Burmese monastic construction: 
			it features a masonry base with a wooden building on top. However, instead of a multi-roofed design, it has graduated rectangular terraces. 
			</p>
		</div>
		<div class="col s12 m6">
			<img src="images/mandalay/atumashi.jpg" width=100% class="materialboxed">
		</div>
	</div>
	<div class="row">
		<div class="col s12 m6">
			<img src="images/mandalay/mahamyat.jpg" width=100% class="materialboxed">
		</div>
		<div class="col s12 m6">
			<h4>Atumashi Kyaung</h4>
			<p>Built in 1857, the Atumashi Kyaung was one of the last religious construction projects of King Mindon. The name means 'Incomparable Monastery'. 
				The Atumashi is an example of traditional Burmese monastic construction: 
				it features a masonry base with a wooden building on top. However, instead of a multi-roofed design, it has graduated rectangular terraces. 
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col s12 m6">
			<h4>Mandalay Hill</h4>
			<p>Mandalay Hill is a 240 metres hill that is located to the northeast of the city centre of Mandalay in Myanmar. The city took its name from the hill.
			Mandalay Hill is known for its abundance of pagodas and monasteries, and 
			has been a major pilgrimage site for Burmese Buddhists for nearly two centuries.
			</p>
		</div>
		<div class="col s12 m6">
			<img src="images/mandalay/mandalayhill.jpg" width=100% class="materialboxed">
		</div>
	</div>
</div>

<!-- Best Hotels  -->
	<?php
		include("function/config.php");
		$query="SELECT bussiness_users.email as busi_email,bussiness_users.name as busi_name,normal_users.name as norm_name,bussiness_users.profilepic,AVG(rating) as avg, review FROM normal_users,bussiness_users, bussiness_types,rating_review 
		WHERE normal_users.email=rating_review.normal_email AND bussiness_users.email=rating_review.business_email AND bussiness_users.typeID=bussiness_types.typeID 
		AND typeName='hotel' AND location LIKE '%Mandalay%' GROUP BY rating_review.business_email ORDER BY avg DESC LIMIT 3";
		$result=mysqli_query($con,$query);
	?>
	<div class="container">
	
    <div class="row">
    <h3 align="center">Best Hotels in Mandalay</h3>
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
            <a class="waves-effect waves-light btn" href="searchresult.php?type=hotel&location=mandalay">See More</a>
        </div>
    </div>
  
  </div>
 
<!-- Best Restaurants  -->
	<?php
		include("function/config.php");
		$query="SELECT bussiness_users.email as busi_email,bussiness_users.name as busi_name,normal_users.name as norm_name,bussiness_users.profilepic,AVG(rating) as avg, review FROM normal_users,bussiness_users, bussiness_types,rating_review 
		WHERE normal_users.email=rating_review.normal_email AND bussiness_users.email=rating_review.business_email AND bussiness_users.typeID=bussiness_types.typeID 
		AND typeName='restaurant' AND location LIKE '%Mandalay%' GROUP BY rating_review.business_email ORDER BY avg DESC LIMIT 3";
		$result=mysqli_query($con,$query);
	?>
	<div class="container">
	
    <div class="row">
    <h3 align="center">Best Restaurants in Mandalay</h3>
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
            <a class="waves-effect waves-light btn" href="searchresult.php?type=restaurant&location=mandalay">See More</a>
        </div>
    </div>
  
  </div>
	
<!-- FOOTER -->	
	<?php include("footer.php"); ?>

</body>
</html>