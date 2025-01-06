<?php 

 
$name =$_GET['name'];
$category = $_GET['category'];
$price = $_GET['price'];
$item_image = $_GET['image'];
 ?>

<!-- HTML -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>eatlunchbox.in</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
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

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php" id="menu"><i class="fa fa-home"></i> Home <span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="monthly-mess.php" id="menu"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Monthly Mess</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="order.php" id="menu"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Orders</a>
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

<!-- main contents -->

<div class="container">
  
  <div class="row">
    <div class="col-md-6 col-sm-6">
        <div class="items">
          <div class="item-img">
            <img src="<?php   echo $item_image; ?>" alt="food item">
          </div>
        <p id="item-name">Name : <?php  echo $name;?></p>
        <?php 
          if($category == 'nonveg'){
          echo '<img src="img/nonveg-icon.png" alt="" height="20px" width="20px">  &nbsp; | <span id="sub-title"> &nbsp;'.$category.'</span>';  
          echo '<br/><br/>';
        }
        else{
          echo '<img src="img/veg-icon.png" alt="" height="20px" width="20px">  &nbsp; | <span id="sub-title"> &nbsp;'.$category.'</span>';  
          echo '<br/><br/>';
        }
         ?>
        <p> Price: &nbsp;<span style="font-size: 15px;font-style:italic;font-weight: 600;color: red;">Rs: <?php  echo $price; ?></span></p>
        </div>
    </div>

  <div class="col-md-6 col-sm-6">
    <form action="order-placed.php" method="POST">
  <div class="form-row">
     <div class="form-group col-md-12">
      <label for="name"> Name </label>
      <input type="name" class="form-control" id="name" placeholder="Name" name="name" required/>
    </div>
    <div class="form-group col-md-12">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Email" name="email" required/>
    </div>
    <div class="form-group col-md-12">
      <label for="number">Phone </label>
      <input type="number" class="form-control" id="number" placeholder="Number" name="phone" required/>
    </div>
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" id="address" placeholder="1234 Main St" name="address" required/>
  </div>
  
    <div class="form-group col-md-4">
      <label for="quantity">Quantity </label>
      <input type="number" name="quantity" class="form-control" id="quantity" min="0" value="1" oninput="calcTotal()" required/>
    </div>
    <div class="form-group col-md-2">
      <label for="total">Total:</label>
      <input type="text" class="form-control" id="total" value="<?php echo $price; ?>" name="price">
    </div>
  </div>
  <!-- Items details  -->
   <div class="form-group col-md-2">
      <input type="hidden" class="form-control" id="inputZip" value="<?php echo $name; ?>" name="item_name">
  </div>

  <div class="form-group col-md-2">
      <input type="hidden" class="form-control" id="inputZip" value="<?php echo $category; ?>" name="category">
  </div>
  
  <button type="submit" class="btn btn-danger btn-lg btn-block" name="order-btn">Order Now </button>
</form>
  </div>    
</div>
 <!-- footer -->
 <?php  include 'footer.php'; ?>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">

  var total = "<?php  echo $price; ?>";
 $("#total").val(total);
  function calcTotal(){

                var price = parseFloat("<?php echo $price; ?>");
                var Qnt = $("#quantity").val();
                if(Qnt == "")
                   $("#total").val(0);
                else{
                  Qnt = parseFloat($("#quantity").val());
                  var total = parseFloat(price * Qnt);
                  $("#total").val(total);
                }
             
  }
 // $(function () {
 //            $("#quantity").change(function () {
 //                // debugger;
 //                var price = parseFloat("<?php echo $price; ?>");
 //                var Qnt = parseFloat($("#quantity").val());
 //                var total = parseFloat(price * Qnt);
 //                $("#total").val(total);
 //            });
 //        });
</script>
</body>
</html>