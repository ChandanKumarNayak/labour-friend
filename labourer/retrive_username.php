<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="LabourFriend,labour friend,hire labour,find labour,labours near me,hire construction labour,hire plumber,hire mason,hire painter,hire carpenter,hire electrician,hire tite setter,labours in odisha,hire labour in odisha,plumber near me,electrician near me,mason near me,tile setter near me,painter near me,carpenter near me,find labours in odisha,nayak groups ">
    <meta name="owner" content="Chandan Kumar Nayak">
<title>Retrive Username | LabourFriend</title>
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
	/* Coded with love by Mutiullah Samim */
		body,
		html {
			margin: 0;
			padding: 0;
			height: 100%;
			background: white;
		}
		.user_card {
			height: 400px;
			width: 350px;
			margin-top: auto;
			margin-bottom: auto;
			background: #E47A2E;
			border: 1px solid white;
			position: relative;
			display: flex;
			justify-content: center;
			flex-direction: column;
			padding: 10px;
			border-radius: 7px;

		}
		.brand_logo_container {
			position: absolute;
			height: 170px;
			width: 170px;
			top: -75px;
			border-radius: 50%;
			background: red;
			padding: 10px;
			text-align: center;
			
		}
		.brand_logo {
			height: 150px;
			width: 150px;
			border-radius: 50%;
			border: 2px solid white;
		}
		.form_container {
			margin-top: 100px;
		}
		.login_btn {
			width: 100%;
			background: #c0392b !important;
			color: white !important;
		}
		.login_btn:focus {
			box-shadow: none !important;
			outline: 0px !important;
		}
		.login_container {
			padding: 0 2rem;
		}
		.input-group-text {
			background: #c0392b !important;
			color: white !important;
			border: 0 !important;
			border-radius: 0.25rem 0 0 0.25rem !important;
		}
		.input_user,
		.input_pass:focus {
			box-shadow: none !important;
			outline: 0px !important;
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
<br>

<?php
include "db.php";

$adhar_no="";
$phone="";

if(isset($_POST['find']))
	
$adhar_no = $_POST['adhar_no'];
$phone = $_POST['phone'];

$getdata = ("SELECT labour_username FROM daily_labour WHERE adhar_no = '$adhar_no' AND phone = '$phone'");
if($result = mysqli_query($db, $getdata))
if(mysqli_num_rows($result) >0)
while($row = mysqli_fetch_array($result))
{?>

<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="../image/lf.jpg" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form method="post" action="">
					<center><h1 style="color:white">Your Username</h1></center><br>
						<div class="input-group mb-1">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="labour_username" class="form-control input_user" value="<?php echo $row['labour_username']; ?>" readonly>
						</div>
						<?php	}
	?>
						</form>
				</div>
			</div>
		</div>
	</div>



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