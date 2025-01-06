 

<?php 

include 'connection.php';

if(isset($_POST['feedback-btn'])){
  $full_name = $_POST['full-name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

 
  $sql = "INSERT INTO contact_us (full_name,email,phone,message) values('$full_name','$email','$phone','$message')";

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
		<meta name="viewport" width="device-width, initial-scale=1.0">
		<title>eatlunchbox.infy.uk</title>
		<link rel="icon" href="img/favicon-icon.png" type="image/png">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	 
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
		<!-- End of header -->
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<h2>Contact us</h2>
					<form action="contact.php" method="POST">
						<div class="form-group">
					   	 <label for="name">Name</label>
					    <input type="text" class="form-control" id="name" placeholder="Name" name="full-name">
					  </div>
					  <div class="form-group">
					    <label for="email">Email address</label>
					    <input type="email" class="form-control" id="email" placeholder="Email" name="email">
					  </div>
					  <div class="form-group">
					    <label for="phone">Phone Number</label>
					    <input type="number" class="form-control" id="phone" placeholder="Phone Number" name="phone">
					   </div>
					   <div class="from-group">
					   	<label for="message">Message</label>
					   	<textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
					   </div>
					   <br>
					   <button type="submit" class="btn btn-success btn-lg btn-block" name="feedback-btn" value="submit">Submit</button>
					</form>
				</div>
				<div class="col-md-5">
					<div class="aside">
						<h2 class="ifc no-margin" style="color:red;margin:0; ">eatlunchbox.infy.uk</h2>
						<em style="color: #9c5e5e;font-size: 14px;">Online lunch ordering service</em><br/><br/>
						 <ul class="contact">
							<li><i class="fa fa-map-marker"></i> &nbsp;<strong>Address:</strong> &nbsp; Magadi Main Road, East West College, Anjananagar, Bangalore, 560091</li>
							<li><i class="fa fa-phone"></i> &nbsp;<strong>Phone:</strong> &nbsp; 9123456789</li>
							<li><i class="fa fa-envelope-o"></i> &nbsp;<strong>Email:</strong> &nbsp; eatlunchboxexample@gmail.com</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h2>Find on map</h2>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1219.887079036441!2d77.48431559097621!3d12.981928719687755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae3c13d15d879b%3A0x65f8a941a28bedd!2sE%20W%20College%20Main%20Rd%2C%20Bhagat%20Nagar%2C%20Bengaluru%2C%20Karnataka%20560091!5e0!3m2!1sen!2sin!4v1570177312505!5m2!1sen!2sin" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
				</div>
			</div>
		</div>
		<!-- footer -->
<?php 	include 'footer.php'; ?>

<!-- javascript files -->
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.js"></script>
</body>
</html>