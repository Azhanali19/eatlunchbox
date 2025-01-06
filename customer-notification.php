 

<?php

$customer_name = $_GET['customer_name'];
$phone = $_GET['phone'];
//Mobile Notification for orders

//Your authentication key
$authKey = "300995A5HFmi1KJmS5db446cb";

//Multiple mobiles numbers separated by comma
$mobileNumber = $phone;

//Sender ID,While using route4 sender id should be 6 characters long.
$senderId = "EALBOX";

//Your message to send, Add URL encoding here.
$message = urlencode("Your Query is send to us. We will call back you soon...");

//Define route 
$route = "4";
//Prepare you post parameters
$postData = array(
    'authkey' => $authKey,
    'mobiles' => $mobileNumber,
    'message' => $message,
    'sender' => $senderId,
    'route' => $route
);

//API URL
$url="http://api.msg91.com/api/sendhttp.php";

// init the resource
$ch = curl_init();
curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $postData
    //,CURLOPT_FOLLOWLOCATION => true
));


//Ignore SSL certificate verification
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


//get response
$output = curl_exec($ch);


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
    <form class="form-inline my-2 my-lg-0">
       <i class="fa fa-filter"></i>
        <a class="nav-link" href="#">Filter</a>
      </li>
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<?php 

//Print error if any
if(curl_errno($ch))
{
?>

<!-- main contents -->
<div class="container"> 
  <div class="row" style="margin-bottom: 0">
    <div class="col-lg-12 col-md-12 text-center">
      <h2 class="section-heading">Something Went Wrong..!</h2>
        <hr class="primary"></hr>
        <br/><br/>
        <p><?php echo 'error:' . curl_error($ch); ?></p>
      </div>
  </div>
 
</div>

<?php 
  }
  else{
?>
<div class="container"> 
  <div class="row" style="margin-bottom: 0">
                <div class="col-lg-12 col-md-12 text-center">
                    <h2 class="section-heading">Your Order is Made Successful..!</h2>
                    <hr class="primary"></hr>
      </div>
  </div>
 
</div>
  
<?php 

}
curl_close($ch);

?>
<?php  include 'footer.php'; ?>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>