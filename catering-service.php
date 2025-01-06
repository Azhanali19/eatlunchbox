 

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
</head>

<style>
  
  #catering-img{
    width: 100%;
    height:450px;
  } 
  .service-desc{
    background: #ef8920;
    padding: 16px;
  }
  .display-6{
    text-align: center;
    color: #fff;
  }
#service-text{
  color:#fff;
  padding: 5px;
  line-height: 30px;
  text-align: center;
  font-family: 12px;
  font-family: sans-serif;
}
 hr {
    max-width: 50px;
    border-color: #f05f40;
    border-width: 3px;
  } 
</style>
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

<div class="container"> 
  <div class="row" style="margin-bottom: 0">
    <div class="col-lg-12 col-md-12 text-center">
        <h2 class="section-heading">Our Catering Servie </h2>
        <hr class="primary"></hr>                 
    </div>
  </div>

  <!-- catering service description -->
  <div class="row">
    <div class="col-md-8">
    <img src="img/catering-services.jpg" alt="catering servie image" id="catering-img"/>
    <!-- <div class="container">
      <h1 class="display-4">Our Catering Service...!!</h1>
      <p class="lead">We also provide our catering service  that helps to make the service .........</p>
    </div> -->
  </div>
  <div class="col-md-4">
    <div class="service-desc">
      <h2 class="display-6">Our Servie :</h2>
      <hr style="border-color: #fff;border-width: 1px;margin:5px;">
       <p id="service-text"> We also provide our catering service. We take order for parties like <b>Birthday Celebration, Marriage Celebration, Aniversary Celebration, etc.</b></p>
    </div>
  </div>
  </div>
  <div class="row" style="margin-bottom: 0">
      <div class="col-lg-12 col-md-12 text-center">
          <h4 class="section-heading">Submit Your Enquiry </h4> 
           <hr class="primary"></hr>                  
      </div>
  </div>
  <div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8"> 

<!-- catering service enquiry -->
<form method="POST" action="catering-service.php">
  <div class="form-row">
     <div class="form-group col-md-12">
      <label for="name"> Name </label>
      <input type="name" class="form-control" id="name" placeholder="Name" name="name" required>
    </div>
    <div class="form-group col-md-12">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
    </div>
    <div class="form-group col-md-12">
      <label for="phone">Phone </label>
      <input type="number" class="form-control" id="inputNumber4" placeholder="Number" name="phone"  required>
    </div>
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address">
  </div>
  
  <br/>
  <button type="submit" class="btn btn-success btn-lg btn-block" name="catering-service">Submit</button>
</form>

</div>
</div>
</div>
<!-- footer -->
 <?php  include 'footer.php'; ?>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>


<?php 

$name ="";
$email="";
$phone="";
$address="";
  

include 'connection.php';
$name="";
$email="";
$phone="";
$address="";

if(isset($_POST['catering-service'])){


  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];

 
  $sql = "INSERT INTO catering_inquery (name,email,phone,address) values('$name','$email','$phone','$address')";

  $result = $conn->query($sql);
  if($result){
    echo "enquiry submitted";
  }
  else{
    echo "not submitted";
  }

}


// mail service

$to = "eatlunchboxexample@gmail.com";
$subject = "Catering Service";
$txt = "your query has been send to us. we will notify you back...!!!";
$headers = "From: ". $email . "\r\n" . "CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);


 ?>