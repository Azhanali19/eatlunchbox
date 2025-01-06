 

<?php 
session_start();	
include '../connection.php';

 $username = $_SESSION["username"];
 $password = $_SESSION["password"];
 if(!isset($username) || !(isset($password))){
 	header("location:admin-login.php");
 }

 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>eatlunchbox.in</title>
	<link rel="icon" href="../img/favicon-icon.png" type="image/png">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="">
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	
<!-- main contents -->
<div class="container-fulid">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="index.php">
          <img src="../img/logo1.png" alt="" height="60px" width="100px">
        </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../index.php" id="menu"><i class="fa fa-home"></i> Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="add_item.php" id="menu"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add Items</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="catering-service.php" id="menu"><i class="fas fa-boxes"></i> All Orders</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="contact.php" id="menu"><i class="fas fa-phone"></i> Catering Enquiry</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="feedback.php" id="menu"><i class="fas fa-cloud"></i> View Feedback</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php" id="menu"><i class="fas fa-lock"></i> logout </a>
      </li>
    </ul>
  </div>
</nav>

<div class="container">

	<div class="row" style="margin-bottom: 0">
         <div class="col-lg-12 col-md-12 text-center">
            <h2 class="section-heading"> All Orders  </h2>
            <hr class="primary"></hr>
    	</div>
	</div>
	<br/><br/>
	<?php 
		$sql = "SELECT * FROM orders";
		$result = $conn->query($sql);
		if($result->num_rows > 0){ 
			echo '<table class="table table-hover table-dark">
		  		<thead>
		    	<tr>
		      		<th scope="col">Order ID</th>
		      		<th scope="col">Customer Name</th>
		      		<th scope="col">Email</th>
		      		<th scope="col">Phone</th>
		      		<th scope="col">Address</th>
		      		<th scope="col">Item Name</th>
		      		<th scope="col">Quantity</th>
		      		<th scope="col">Total</th>
		    	</tr>
		  		</thead>';
		  echo '<tbody>';
		  while($row = $result -> fetch_assoc()){	    
		    echo '<tr>';
		    echo '<th scope="row">'.$row['order_id'].'</th>';
		    echo '<td scope="row">'.$row['customer_name'].'</td>';
		    echo '<td>'.$row['email'].'</td>';
		    echo '<td>'.$row['phone'].'</td>';
		    echo '<td>'.$row['address'].'</td>';
		    echo '<td>'.$row['item_name'].'</td>';
		    echo '<td>'.$row['quantity'].'</td>';
		    echo '<td>'.$row['total'].'</td>';
		    echo '</tr>';
		    
			}
		}
		echo '</tbody>';
		echo '</table>';
	 ?>
	 

</div>

<!-- footer -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h4>Contact Us</h4>
				 <ul class="contact">
					<li><i class="fa fa-map-marker" style="margin-right: 8px; color: #6c757d;"></i><strong>Address:</strong> Magadi Main Road, East West College, Anjananagar, Bangalore, 560091</li>
                    <li><i class="fa fa-phone" style="margin-right: 8px; color: #6c757d;"></i><strong>Phone:</strong> 9123456789</li>
                    <li><i class="fa fa-envelope" style="margin-right: 8px; color: #6c757d;"></i><strong>Email:</strong> eatlunchboxexample@gmail.com</li>
                </ul>
			</div>
			<div class="col-md-6">
				 <h4>Follow Us</h4>
                <p style="color: #6c757d; font-size: 16px; margin-bottom: 10px;">Stay connected through our social channels:</p>
                <a href="https://github.com/Azhanali19" target="_blank" style="color: #007bff; text-decoration: none; margin-right: 15px;">GitHub</a>
                <a href="https://www.linkedin.com/in/mohammad-azhan-ali-709828201/" target="_blank" style="color: #007bff; text-decoration: none;">LinkedIn</a>
			</div>
		</div>
		
	</div>
	<!-- End of footer -->
	<!-- Bottom footer -->
	  <nav class="navbar navbar-inverse no-margin">
		<div class="container">
			<div class="footer-bottom">
				<center><h6 style="color: red;font-size: 25px;margin:0;">eatlunchbox.infy.uk</h6> 
				<em style="color: #9c5e5e;font-size: 14px;">Online lunch ordering service</em>
				<p>&copy; 2025 Azhaan Ali. All rights reserved.</p></center>
			</div>
		</div>
		 
	</nav>
	<!-- End of bottom fotter -->
</footer>

<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.js"></script>
</body>