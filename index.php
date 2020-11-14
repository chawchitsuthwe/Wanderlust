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
      <div class="parallax"><img src="images/index/index-bg.jpg"></div>
          
        <!-- SEARCH BOXES  -->
        <div class="container search">
            <div class="row">
                <div class="col l12 s12 offset-0">
                        <form action="searchresult.php" id="index_search">
                            <div class="input-field">
                                <input id="search_index" type="text" name="destination" class="validate" required>
                                <label for="search_index" class="black-text">WHERE TO</label>
                            </div>
                        </form>
                </div>
            </div>
                
            <div class="row">
                <div class="col l12 s12 offset-0">
                    <button class="btn waves-effect waves-light w-text purple lighten-3"  form="index_search" type="submit" name="index_search">Search<i class="material-icons right">search</i>
                    </button>
                </div>
            </div>
        </div>
      </div>
    </div>
 
<!-- IMAGE CARDS  -->
	<div class="container-fluid center-align">
    <div class="row">
    <h3 align="center">Top Searches</h3>
    <hr class="fade-2">
        <div class="col l1 m0 s0 "></div>
        <div class="col l2 m4 s12 ">
          <div class="card">
            <div class="card-image">
              <img src="ImageForWanderlust/1.jpg" height="150px">
            </div>
            <div class="card-action">
              <a href="yangon.php">Yangon</a>
            </div>
          </div>
        </div>
        <div class="col l2 m4 s12">
          <div class="card">
            <div class="card-image">
              <img src="ImageForWanderlust/22.jpg" height="150px">
            </div>
            <div class="card-action">
              <a href="mandalay.php">Mandalay</a>
            </div>
          </div>
        </div>
        <div class="col l2 m4 s12">
          <div class="card">
            <div class="card-image">
              <img src="ImageForWanderlust/555.jpg" height="150px">
            </div>
            <div class="card-action">
              <a href="inlay.php">Inlay</a>
            </div>
          </div>
        </div>
        <div class="col l2 m4 s12">
          <div class="card">
            <div class="card-image">
              <img src="ImageForWanderlust/66.jpg" height="150px">
            </div>
            <div class="card-action">
              <a href="ngapali.php">Ngapali</a>
            </div>
          </div>
        </div>
        <div class="col l2 m4 s12">
          <div class="card">
            <div class="card-image">
              <img src="ImageForWanderlust/111.jpg" height="150px">
            </div>
            <div class="card-action">
              <a href="bagan.php">Bagan</a>
            </div>
          </div>
        </div>
        <div class="col l1 m0 s0 "></div>
    </div>
    </div>


<!-- FOOTER -->	
	<?php include("footer.php"); ?>

</body>
</html>