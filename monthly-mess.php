 

<?php 
include 'connection.php';

if(isset($_POST['monthly-mess-btn'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $reference_email = $_POST['reference-email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
 
 
  $sql = "INSERT INTO monthly_mess (name,address,phone,email,reference_email) values('$name','$address','$phone','$email','$reference_email')";

  $result = $conn->query($sql);
  if($result){
    header("location:notification.php?customer_name='$customer_name' && phone='$phone'");
  }
  else{
    echo "not submitted";
  }
}

?>
<!-- HTML -->
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

<div class="container"> 
	<div class="row" style="margin-bottom: 0">
                <div class="col-lg-12 col-md-12 text-center">
                    <h2 class="section-heading">Make Your Monthly Mess!</h2>
                    <hr class="primary"></hr>
    	</div>
	</div>
	<marquee><p class="blink"><span>We are providing single as well as double time monthly mess with no delivery charges at your doorstep.</span></p></marquee>
	<form action="monthly-mess.php" method="POST">
  <div class="form-row">
     <div class="form-group col-md-6">
      <label for="name"> Name </label>
      <input type="name" class="form-control" id="name" placeholder="Name" name="name" required/>
    </div>
    
    <div class="form-group col-md-6">
      <label for="phone">Phone </label>
      <input type="number" class="form-control" id="phone" placeholder="Number" name="phone" required/>
    </div>
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" id="address" placeholder="1234 Main St" name="address">
  </div>
  <div class="form-row">
   <div class="form-group col-md-12">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Email" name="email" required/>
    </div>
   <div class="form-group col-md-12">
      <label for="reference-email">Email (reference)</label>
      <input type="email" class="form-control" id="reference-email" placeholder="Email" name="reference-email">
    </div> 
  </div>
  <br/>
  <button type="submit" class="btn btn-danger btn-lg btn-block" name="monthly-mess-btn">Book monthly slot</button>
</form>
<br/><br/>

</div>
 
 <!-- footer -->
 <?php  include 'footer.php'; ?>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>

