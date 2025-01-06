 

<?php 

include 'connection.php';

if(isset($_POST['feedback-btn'])){
  $full_name = $_POST['full-name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

 
  $sql = "INSERT INTO feedback (full_name,email,phone,message) values('$full_name','$email','$phone','$message')";

  $result = $conn->query($sql);
  if($result){
    echo "feedback is submitted";
        
  }
  else{
    echo "not submitted";
  }



}

 ?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>eatlunchbox.in</title>
	<link rel="icon" href="img/favicon-icon.png" type="image/png">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	 
		<style type="text/css" media="screen">
		body{
			background: #fff;
		}

		.blink{
		/*width:200px;
		height: 50px;*/
	   /* background-color: magenta;*/
		padding: 15px;	
		text-align: center;
		line-height: 50px;
	}
	span{
		font-size: 25px;
		font-family: cursive;
		color: red;
		/*animation: blink .1s linear infinite;*/
	}
	@keyframes blink{
	0%{opacity: 0;}
	50%{opacity: .5;}
	100%{opacity: 1;}
	}
	hr {
    max-width: 50px;
    border-color: #f05f40;
    border-width: 3px;
	}	
	</style>
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

 	 <div class="collapse navbar-collapse" id="navbarSupportedContent">
    	<ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="index.php" id="menu"><i class="fa fa-home"></i> Home <span class="sr-only">(current)</span></a>
	      </li>
	       <li class="nav-item">
	        <a class="nav-link" href="monthly-mess.php" id="menu"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Monthly Mess</a>
	      </li>
	     <!--  <li class="nav-item">
	        <a class="nav-link" href="order.php" id="menu"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Orders</a>
	      </li> -->
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
</div>

<!-- main contents -->
<!-- body -->
<div class="container">
			<div class="row">
				<div class="col-md-12">
					 <center><h2 class="section-heading">Give Us Feedback...!</h2></center>
					 <hr class="primary">
					<form action="feedback.php" method="POST">
						<div class="form-group">
					   	 <label for="name">Full Name</label>
					    <input type="name" class="form-control" id="name" placeholder="Name" name="full-name" required/>
					  </div>
					  <div class="form-group">
					    <label for="email">Email address</label>
					    <input type="email" class="form-control" id="email" placeholder="Email" name="email" required/>
					  </div>
					  <div class="form-group">
					    <label for="phone">Phone Number</label>
					    <input type="number" class="form-control" id="phone" placeholder="Phone Number" name="phone" required/>
					   </div>
					   <div class="from-group">
					   	<label for="message">Your Feedback</label>
					   	<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Note:Please give positive feedback to improve our service...." name="message" required/></textarea>
					   </div>
					   <br>
					  <button type="submit" class="btn btn-success btn-lg btn-block" name="feedback-btn" value="submit">Submit</button>
					</form>
				</div>
				 
			</div>
		</div>
 <!-- footer -->
 <?php 	include 'footer.php'; ?>

<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.js"></script>
</body>
</html>