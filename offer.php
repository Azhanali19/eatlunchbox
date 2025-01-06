<?php

$customer_name = $_GET['customer_name'];
$phone = $_GET['phone'];
$item_name = $_GET['item_name'];
//Mobile Notification for orders

//Your authentication key
$authKey = "300995A5HFmi1KJmS5db446cb";

//Multiple mobiles numbers separated by comma
$mobileNumber = "7996648943,6265999142,7677240504";

//Sender ID,While using route4 sender id should be 6 characters long.
$senderId = "EALBOX";

//Your message to send, Add URL encoding here.
$message = urlencode("vv");

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