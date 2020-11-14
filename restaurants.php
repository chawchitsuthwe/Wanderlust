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
	
	<div class="parallax-container">
      <div class="parallax"><img src="images/restaurants/bg.jpeg"></div>
          
        <!-- SEARCH BOXES  -->
        <div class="container search">
            <div class="row">
                <div class="col l12 s12 offset-0">
                        <form action="searchresult.php" id="restaurant_search">
                            <div class="input-field">
                                <input id="search_restaurant" type="text" name="restaurant" class="validate" required>
                                <label for="search_restaurant" class="black-text">CITY OR RESTAURANT NAME OR CUISINE</label>
                            </div>
                        </form>
                </div>
            </div>
                
            <div class="row">
                <div class="col l12 s12 offset-0">
                    <button class="btn waves-effect waves-light white-text purple lighten-3"  form="restaurant_search" type="submit" name="restaurant_search">Search<i class="material-icons right">search</i>
                    </button>
                </div>
            </div>
        </div>
      </div>
    </div>
 
<!-- IMAGE CARDS  -->
<?php
	include("function/config.php");
	
	$query="SELECT email,name,profilepic,location FROM bussiness_users,rating_review,bussiness_types WHERE bussiness_users.email=rating_review.business_email AND bussiness_types.typeID=bussiness_users.typeID AND typeName='restaurant' GROUP BY business_email ORDER BY AVG(rating) DESC LIMIT 5";
	$result=mysqli_query($con,$query);
?>
	<div class="container-fluid">
    <div class="row">
    <h3 align="center">Most Rated Restaurants</h3>
    <hr class="fade-2">
        <div class="col l1 m0 s0 "></div>
		<?php
		if(mysqli_num_rows($result)>=1){
			while($row=mysqli_fetch_array($result)){ 
		?>
        <div class="col l2 m4 s12 ">
          <div class="card">
            <div class="card-image">
            <?php 
				if($row['profilepic']==NULL)
					echo '<img src="images/gradientbg.png" height=150px>';
				else
					echo '<img src="dbimages/'.$row['profilepic'].'" height=150px>';
			?>
            </div>
            <div class="card-action">
              <a href="business_page.php?email=<?php echo $row['email']; ?>"><?php echo $row['name']; ?></a>
			  <p><?php echo $row['location']; ?></p>
            </div>
          </div>
        </div>
		<?php } }?>
        <div class="col l1 m0 s0 "></div>
    </div>
    </div>


<!-- FOOTER -->	
	<?php include("footer.php"); ?>

</body>
</html>