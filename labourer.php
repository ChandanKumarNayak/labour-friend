<!----Session----->
<?php
include ("db.php");
session_start();
if (isset($_SESSION['labour_username'])!=""){
	header("Location:index.php");
	exit;
}
?>

<!DOCTYPE html>
<html lang="en-US">
   <head>
	<!---Meta Tags--->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="LabourFriend.in - We Help Labours To Get Work In Their Locality Easily And Hirers To Find Their Required Labours Within Their Locality In Less Time.">
		<meta name="keywords" content="LabourFriend,labour friend,labour in my panchayat,find labour in odisha,construction labours in my panchayat,plumbers in my panchayat,masons in my panchayat,wall painter in my panchayat,carpenters in my panchayat,electricians in my panchayat,tite setters in my panchayat,labours in odisha,hire labour in odisha,plumbers in our area,electricians in our area,masons in our area,tile setters in our area,painters in our area,carpenters in our area,find labours in our area,nayak groups,chandan,chandan kumar nayak">
		<meta name="owner" content="Chandan Kumar Nayak">
		<!---logo--->
		<link rel="icon" type="image/png" href="image/lf.jpg"/>
		
	<title>Labourer | LabourFriend</title>
	
	<style>
	body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
	</style>	
	</head>
	<body>
<h2>Modal Login Form</h2>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


	</body>
</html>


<!---Server Part--->


<?php


$labour_username = "";
$password = "";

if(isset($_POST['login'])){
  
  $labour_username = $_POST['labour_username'];
  
   $sqluser="SELECT labour_username FROM daily_labour WHERE labour_username='$labour_username' ";
  $qresult=mysqli_query($db, $sqluser);
  $count=mysqli_num_rows($qresult);
  if($count == 0)
  {echo '<script language="javascript">alert("You entered a wrong username.");</script>';}
  else
  { 

  $password = $_POST['password'];
  
  $sqluser="SELECT password FROM daily_labour WHERE password='$password' ";
  $qresult=mysqli_query($db, $sqluser);
  $count=mysqli_num_rows($qresult);
  if($count == 0)
  {echo '<script language="javascript">alert("You entered a wrong password.");</script>';}

  $query = "SELECT * FROM daily_labour WHERE labour_username = '$labour_username' AND password = '$password' AND form_status = '1'";
  $results = mysqli_query($db,$query);
  if(mysqli_num_rows($results) == 1){
                $_SESSION['labour_username'] = $labour_username;
    
  echo '<meta http-equiv="refresh" content="0;index.php" />';          
}
else
{
$query1 = "SELECT * FROM daily_labour WHERE labour_username = '$labour_username' AND password = '$password' AND form_status = '0'";
  $results1 = mysqli_query($db,$query1);
  if(mysqli_num_rows($results1) == 1){
                $_SESSION['labour_username'] = $labour_username;
    
  echo '<meta http-equiv="refresh" content="0;labour_details.php" />';
  }
  else
  {
	 echo '<meta http-equiv="refresh" content="0;labour_login.php" />';  
  }
}
}
}

?>
