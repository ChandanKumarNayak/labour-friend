<?php
session_start();
if (isset($_SESSION['hirer_username'])!=""){
	header("Location:index.php");
	exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Find Your Required Labours Within Your Locality Easily In One Step.Edit Details And Change Username & Password.">
    <meta name="keywords" content="LabourFriend,labour friend,hire labour,find labour,labours near me,hire construction labour,hire plumber,hire mason,hire painter,hire carpenter,hire electrician,hire tite setter,labours in odisha,hire labour in odisha,plumber near me,electrician near me,mason near me,tile setter near me,painter near me,carpenter near me,find labours in odisha,nayak groups ">
    <meta name="owner" content="Chandan Kumar Nayak">
  <title>Membership | LabourFriend</title>
    <link rel="shortcut icon" type="image/jpg" href="../image/lf.jpg">
	
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">


 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>

.header {
   max-width: 500px;
    max-height: 700px;
 
  margin: auto;
  color: white;
  background: red;
  text-align: center;
  border: 2px solid #B0C4DE;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
}
form, .content {
  max-width: 500px;
   
 
  margin: auto;
  
  padding: 20px;
  border: 2px solid #B0C4DE;
  background: #004B8D;
  box-shadow: 0 8px 36px 0 rgba(0,0,0,0.2);
  border-radius: 0px 0px 10px 10px;
}

input.MyButton {
width: 240px;
height: 55px;
padding: 0px;
margin: 2px 1px;
cursor: pointer;
font-weight: bold;
font-size: 120%;
color: #ffff00;
background: #000;
border: 1px solid #3366cc;
border-radius: 10px;
}
input.MyButton:hover {
background: #3366cc;
color: #fff;
border: 1px solid #fff;
}
</style>

</head>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="../index.html" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="../about.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">ABOUT US</a>
	<a href="../follow.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">FOLLOW US</a>
	<a href="../map.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">FIND US</a>
    
  </div>
</div>
<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="../about.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">ABOUT US</a>
   <a href="../follow.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">FOLLOW US</a>
    <a href="../find.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">FIND US</a>
</div>
<br><br><br>
<div class="header">
  	<h2>Buy Membership</h2>
  </div>
<form>

<center><p style="color:white;font-size:20px">Create a hirer account in LabourFriend.</p></center>

<center><input class="MyButton" type="button" value="Pay Rs.49" onclick="window.location.href='pay.php'" /></center>
<br>
	<b>Already a Member?</b> <a href="hirer_login.php" style="color:white">Sign in</a>
</div>
</form>
<br>
<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <p class="w3-medium">Copyright © 2019 LabourFriend.in (a NAYAK GROUPS Venture) All Rights Reserved.</p>
</footer>

<script>

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>