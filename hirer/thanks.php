<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Find Your Required Labours Within Your Locality Easily.">
     <meta name="keywords" content="LabourFriend,labour friend,hire labour,find labour,labours near me,hire construction labour,hire plumber,hire mason,hire painter,hire carpenter,hire electrician,hire tite setter,labours in odisha,hire labour in odisha,plumber near me,electrician near me,mason near me,tile setter near me,painter near me,carpenter near me,find labours in odisha,nayak groups ">
    <meta name="owner" content="Chandan Kumar Nayak">
  <title>Success | LabourFriend</title>
    <link rel="shortcut icon" type="image/jpg" href="../image/lf.jpg">

<style>
body {
  border: 3px solid blue;
}
</style>
</head>
<body style="background-color:white;margin:10px;padding:10px">
  <center> <h1 style="color:blue">Thank You!</h1></center>
<?php 
  
  include 'instamojo/Instamojo.php';
$api = new Instamojo\Instamojo('454923d74cf382d2623f8d6f2d48ad18', '606b8583d43c649ca5bb3170cb83882f', 'https://www.instamojo.com/api/1.1/');
$payid=$_GET['payment_request_id'];
  try {
    $response = $api->paymentRequestStatus($payid);
    echo "<h4>Payment ID : ".$response['payments'][0]['payment_id']."</h4>";
   
     echo "<p style='color:red'><b>NOTE:</b> Copy your Payment ID for signup. </p>";
     echo "<p><b>IMPORTANT:</b> Do not share your Payment ID with anyone.</p>";
  }
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}
  ?>
   <p style="color:red"> <span class="psw">Click To Complete <a href="hirer_register.php">Sign Up</a></span> </p>
</body>
</html>