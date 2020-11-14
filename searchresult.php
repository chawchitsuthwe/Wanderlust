<?php
	include("function/config.php");
	$query="";
	$search="";
	if(isset($_GET['index_search'])){

		$search=$_GET['destination'];
		
		$query="SELECT email,name,bio,profilepic,location,AVG(rating) as avg FROM bussiness_users, bussiness_types,rating_review WHERE bussiness_users.email=rating_review.business_email AND bussiness_users.typeID=bussiness_types.typeID AND location LIKE '%$search%' GROUP BY rating_review.business_email;";
	}
	else if(isset($_GET['hotel_search'])){

		$search=$_GET['hotel'];
		
		$query="SELECT email,name,bio,profilepic,location,AVG(rating) as avg FROM bussiness_users, bussiness_types,rating_review WHERE bussiness_users.email=rating_review.business_email AND bussiness_users.typeID=bussiness_types.typeID AND typeName='hotel' AND (location LIKE '%$search%' OR name LIKE '%$search%') GROUP BY rating_review.business_email;";
	}
	else if(isset($_GET['restaurant_search'])){

		$search=$_GET['restaurant'];
		
		$query="SELECT bussiness_users.email,name,bio,profilepic,location,AVG(rating) as avg FROM bussiness_users, bussiness_types,restaurant_details, rating_review WHERE bussiness_users.email=rating_review.business_email AND bussiness_users.typeID=bussiness_types.typeID AND typeName='restaurant' AND (location LIKE '%$search%' OR name LIKE '%$search%' OR cuisine LIKE '%$search%') GROUP BY rating_review.business_email;";
	}
	else if(isset($_GET['transport_search'])){
		
		$search=$_GET['transport'];

		$query="SELECT bussiness_users.email,name,bio,profilepic,location,AVG(rating) as avg FROM bussiness_users, bussiness_types,journey,rating_review WHERE bussiness_users.email=rating_review.business_email AND bussiness_users.typeID=bussiness_types.typeID AND typeName='transport' AND (name LIKE '%$search%' OR journey_name LIKE '%$search%') GROUP BY rating_review.business_email;";
	}
	else{
		$type=$_GET['type'];
		$location=$_GET['location'];
		$query="SELECT bussiness_users.email,name,bio,profilepic,location,AVG(rating) as avg FROM bussiness_users, bussiness_types,journey,rating_review WHERE bussiness_users.email=rating_review.business_email AND bussiness_users.typeID=bussiness_types.typeID AND typeName='$type' AND location LIKE '%$location%' GROUP BY rating_review.business_email;";
	}
	
	$result=mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Wanderlast - Search Results</title>
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
    <?php include("nav.php"); ?>

    <!--CARD -->
    <div class="container-fluid">
    <div class="row">
    <h3 align="center">Search Results of <?php echo $search; ?></h3>
    <hr class="fade-2">
	
	<div class="row">
		<div class="col l1 m0 s0 "></div>
		
		<?php
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
              <p><?php echo $row['location']; ?></p>
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