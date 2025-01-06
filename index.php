 
<?php 
//database connection
include "connection.php";
$sql = "SELECT * FROM food_items order by id desc";
$result = $conn->query($sql);

if(isset($_GET['filter-btn'])){
	$filter = $_GET['filter'];
	if($filter == "all"){
		$query = "SELECT * FROM food_items";
		$result = $conn->query($query);
	}
	else{
		$query = "SELECT * FROM food_items WHERE category = '$filter'";
		$result = $conn->query($query);
	}
	//var_dump($result);
}

?>
<!-- HTML -->
<!DOCTYPE html>
<html>
<head><title>eatlunchbox | Online Food Delivery Service | Monthly Tiffin System | Catering (Birthday party, Marriage Party, Aniversary Party)</br>Get your Food at your doorstep</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>eatlunchbox.in</title>
	<link rel="icon" href="img/favicon-icon.png" type="image/png">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0"></script>
	
<!-- main contents -->
<div class="container-fulid">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="index.php">
          <img src="img/logo1.png" alt="" height="60px" width="100px">
        </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<!-- menu button -->
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php" id="menu"><i class="fa fa-home"></i> Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="monthly-mess.php" id="menu"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Monthly Mess</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="catering-service.php" id="menu"><i class="fas fa-boxes"></i> E-Catering</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="contact.php" id="menu"><i class="fas fa-phone"></i> Contact Us</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="feedback.php" id="menu"><i class="fas fa-cloud"></i> Feedback</a>
      </li>
    </ul>
  </div>
</nav>
<!-- slider images -->
  <div id="carouselCaptions" class="carousel slide" data-ride="carousel" data-interval="5000">
    <ol class="carousel-indicators">
      <li data-target="#carouselCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselCaptions" data-slide-to="1"></li>
      <li data-target="#carouselCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/slider3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Veg and Non-Veg  Items.</h5>
          <p>We serve fresh veg and non veg food.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/slider2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h4>Monthly Mess.</h4>
          <p>Good taste with good food.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/slider1.jpeg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h4>Catering Services.</h4>
          <p>Delicious and Healthy food.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

<!-- 
	<div class="trending-div">
		<h3 id="heading"> Trending this week </h3>
		<p id="grab-text">Grab the most trending items in this week and tast a new flavour.</p>

	</div> 
  -->
 	<div class="row">
		<form action="index.php" metho="GET">
		  <div class="form-row align-items-center">
		    <div class="col-auto my-1">
		      	<select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="filter">
		        	<option value="all">ALL</option>
		        	<option value="veg">Veg</option>
		        	<option value="nonveg">Non-Veg</option>
		        			        	<option value="chinese">Chinese</option>

		      	</select>
		    </div>
		    <div class="col-auto my-1">
		      <button type="submit" class="btn btn-warning" name="filter-btn">Apply</button>
		    </div>
			</div>
		</form>
	</div>

	<div class="row">

	<?php

			if($result->num_rows > 0){ 
	        while($row = $result -> fetch_assoc()){	     		
				echo '<div class="col-md-3 col-sm-6">';
				echo '<div class="items">';
				echo '<div class="item-img">';
				echo '<img src="'.$row['image'].'" alt="food item" class="image">';
				echo '</div>';						 
				echo '<p id="item-name">'.$row['name'].'</p>';
				if($row['category'] == 'nonveg'){
					echo '<img src="img/nonveg-icon.png" alt="" height="20px" width="20px">  &nbsp; | <span id="sub-title"> &nbsp;'.$row['category'].'</span>';  
					echo '<br/><br/>';
				}
				else{
					echo '<img src="img/veg-icon.png" alt="" height="20px" width="20px">  &nbsp; | <span id="sub-title"> &nbsp;'.$row['category'].'</span>';  
					echo '<br/><br/>';
				}
				echo '<p id="price-text">Marked price : <span id="price" style="text-decoration:line-through;">Rs:'.$row['market_price'].'</p>';
				echo '<p id="price-text">Our price : <span id="price">Rs:'.$row['price'].' </span></p>';
				echo '<p><center><a href="order.php?name='.$row['name'].'&&category='.$row['category'].'&&price='.$row['price'].'&&image='.$row['image'].'"><button type="button" class="btn btn-outline-warning" name="order-btn">Order Now</button></a></center></p></div></div>';
		        }
		    }
		?>
	</div>
</div>
</div>
<?php include 'footer.php'; ?>
<!-- javascript files -->
<!-- <script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script> -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
</body>
</html>