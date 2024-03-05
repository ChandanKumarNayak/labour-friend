<?php 
   session_start(); 
   include('db.php'); 
 
  if (!isset($_SESSION['labour_username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: labour_login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['labour_username']);
  	header("location: ../index.html");
  }
  
?>

<!DOCTYPE html>
<html>
<head>
  <title>Settings | LabourFriend</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="keywords" content="LabourFriend,labour friend,hire labour,find labour,labours near me,hire construction labour,hire plumber,hire mason,hire painter,hire carpenter,hire electrician,hire tite setter,labours in odisha,hire labour in odisha,plumber near me,electrician near me,mason near me,tile setter near me,painter near me,carpenter near me,find labours in odisha,nayak groups ">
    <meta name="owner" content="Chandan Kumar Nayak">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="shortcut icon" type="image/jpg" href="../image/lf.jpg">
    <link rel="stylesheet" type="text/css" href="form.css">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<style type="text/css">
	body{
		background: #eeeeee;
		font-family: 'Varela Round', sans-serif;
	}
    .form-inline {
        display: inline-block;
    }
	.navbar-header.col {
		padding: 0 !important;
	}	
	.navbar {
		color: #fff;
		background: #926dde;
		padding: 5px 16px;
		border-radius: 0;
		border: none;
		box-shadow: 0 0 4px rgba(0,0,0,.1);
	}
	.navbar img {
		border-radius: 50%;
		width: 36px;
		height: 36px;
		margin-right: 10px;
	}
	.navbar .navbar-brand {
		color: #efe5ff;
		padding-left: 0;
		padding-right: 50px;
		font-size: 24px;		
	}
	.navbar .navbar-brand:hover, .navbar .navbar-brand:focus {
		color: #fff;
	}
	.navbar .navbar-brand i {
		font-size: 25px;
		margin-right: 5px;
	}
	.navbar .nav-item i {
		font-size: 18px;
	}
	.navbar .nav-item span {
		position: relative;
		top: 3px;
	}
	.navbar .nav > li a {
		color: #efe5ff;
		padding: 8px 15px;
		font-size: 14px;		
	}
	.navbar .nav > li a:hover, .navbar .nav > li a:focus {
		color: #fff;
		text-shadow: 0 0 4px rgba(255,255,255,0.3);
	}
	.navbar .nav > li > a > i {
		display: block;
		text-align: center;
	}
	.navbar .dropdown-item i {
		font-size: 16px;
		min-width: 22px;
	}
    .navbar .dropdown-item .material-icons {
        font-size: 21px;
        line-height: 16px;
        vertical-align: middle;
        margin-top: -2px;
    }
	.navbar .nav-item.open > a, .navbar .nav-item.open > a:hover, .navbar .nav-item.open > a:focus {
		color: #fff;
		background: none !important;
	}
	.navbar .dropdown-menu {
		border-radius: 1px;
		border-color: #e5e5e5;
		box-shadow: 0 2px 8px rgba(0,0,0,.05);
	}
	.navbar .dropdown-menu li a {
		color: #777 !important;
		padding: 8px 20px;
		line-height: normal;
	}
	.navbar .dropdown-menu li a:hover, .navbar .dropdown-menu li a:focus {
		color: #333 !important;
		background: transparent !important;
	}
	.navbar .nav .active a, .navbar .nav .active a:hover, .navbar .nav .active a:focus {
		color: #fff;
		text-shadow: 0 0 4px rgba(255,255,255,0.2);
		background: transparent !important;
	}
	.navbar .nav .user-action {
		padding: 9px 15px;
	}
	.navbar .navbar-toggle {
		border-color: #fff;
	}
	.navbar .navbar-toggle .icon-bar {
		background: #fff;
	}
	.navbar .navbar-toggle:focus, .navbar .navbar-toggle:hover {
		background: transparent;
	}
	.navbar .navbar-nav .open .dropdown-menu {
		background: #faf7fd;
		border-radius: 1px;
		border-color: #faf7fd;
		box-shadow: 0 2px 8px rgba(0,0,0,.05);
	}
	.navbar .divider {
		background-color: #e9ecef !important;
	}
	@media (min-width: 1200px){
		.form-inline .input-group {
			width: 350px;
			margin-left: 30px;
		}
	}
	@media (max-width: 1199px){
		.navbar .nav > li > a > i {
			display: inline-block;			
			text-align: left;
			min-width: 30px;
			position: relative;
			top: 4px;
		}
		.navbar .navbar-collapse {
			border: none;
			box-shadow: none;
			padding: 0;
		}
		.navbar .navbar-form {
			border: none;			
			display: block;
			margin: 10px 0;
			padding: 0;
		}
		.navbar .navbar-nav {
			margin: 8px 0;
		}
		.navbar .navbar-toggle {
			margin-right: 0;
		}
		.input-group {
			width: 100%;
		}
	}
</style>
</head> 
<body>


<nav class="navbar navbar-inverse navbar-expand-xl navbar-dark">
	<div class="navbar-header d-flex col">
		<a class="navbar-brand" href="../index.html"><b>LabourFriend</b></a>  		
		<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle navbar-toggler ml-auto">
			<span class="navbar-toggler-icon"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>
	<!-- Collection of nav links, forms, and other content for toggling -->
	
	<?php
include('db.php');

$getdata=("SELECT * FROM daily_labour WHERE labour_username='".$_SESSION['labour_username']."' ");
if($result = mysqli_query($db, $getdata))
if(mysqli_num_rows($result) > 0)
while($row = mysqli_fetch_array($result))

{
?>	

	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">		
		
		<ul class="nav navbar-nav navbar-right ml-auto">
			<li class="nav-item"><a href="index.php" class="nav-link"><i class="fa fa-home"></i><span>Home</span></a></li>
					
			<li class="nav-item"><a href="edit.php?id=<?php echo $row['id']?>" class="nav-link"><i class="fa fa-edit"></i><span>Edit Details</span></a></li>

           <li class="nav-item"><a href="mailto:labourfriend134@gmail.com" class="nav-link"><i class="fa fa-envelope"></i><span>Contact Us</span></a></li>	
			 
            <li class="nav-item"><a href="change-password.php" class="nav-link"><i class="fa fa-key" aria-hidden="true"></i><span>Change Password</span></a></li>
			
			<li class="nav-item"><a href="delete-account.php" class="nav-link"><i class="fa fa-trash" aria-hidden="true"></i><span>Delete Account</span></a></li>
			
			<li class="nav-item"><a href="change-username.php?logout='1'" class="nav-link"><i class="material-icons">&#xE8AC;</i><span>Logout</span></a></li>
				</ul>
			</li>
		</ul>
	</div>
</nav>
	
<?php

}
?>
<!-- Username -->

<div class="header">
  	<h2>Change Username</h2>
  </div>
	
  <form method="post" action="" enctype="multipart/form-data">

        <div class="input-group">
        <table cellpadding="5" cellspacing="5">
		
		 <?php if (isset($_SESSION['labour_username'])) : ?>
    	<center><h3 style="color:yellow;font-size:0px;">Hello, <strong><?php echo $_SESSION['labour_username']; ?>!</strong></h3></center>
    <?php endif ?>
					
		<tr><td>Current Username:</td></tr> 
        <tr><td><input type="text" name="username_1" placeholder="Enter current username" style="height:45px;color:black" required></td></tr>
        <tr><td>New Username:</td></tr> 
        <tr><td><input type="text" name="username_2" placeholder="Enter new username" style="height:45px;color:black" required></td></tr>
        <tr><td>Confirm New Username:</td></tr> 
        <tr><td><input type="password" name="username_3" placeholder="Confirm new username" style="height:45px;color:black" required></td></tr>
 

<input type="hidden" name="id" value="<?php echo $eid ?>" />
  <tr><td><center><input class="MyButton" type="submit" name="update2" value="Update" /><input type="reset" class="MyButton" value="Reset"></center></td></tr>
     
</table>
  </div>	
  </form>
  

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <p class="w3-medium">Copyright © 2019 LabourFriend.in (a NAYAK GROUPS Venture) All Rights Reserved.</p>
</footer>
</body>
</html>


<!--===============================================Server Username================================================-->


<?php
include('db.php'); 
   
$arr ="";
$row = "";
$errors = array();
$sql = "";
$username    = "";
$username_1    = "";
$username_2    = "";
$username_3    = "";
 if(isset($_POST['update2']))
{
 
 $username_1 = $_POST['username_1'];

  $sqluser="SELECT labour_username FROM daily_labour WHERE labour_username='$username_1' ";
  $qresult=mysqli_query($db, $sqluser);
  $count=mysqli_num_rows($qresult);
  if($count == 0)
{echo '<script language="javascript">alert("Current username is wrong.");</script>';}
  else
  { 

 $username_2 = $_POST['username_2'];

  $sqluser="SELECT labour_username FROM daily_labour WHERE labour_username='$username_2' ";
  $qresult=mysqli_query($db, $sqluser);
  $count=mysqli_num_rows($qresult);
  if($count > 0)
  {
  echo '<script language="javascript">alert("This username already exist.");</script>';
  }
  else
  
  {
  $username_3 = $_POST['username_3'];
  
  if (empty($username_1)) { array_push($errors, "Current username is required"); }
  if (empty($username_2)) { array_push($errors, "New username is required"); }
  if (empty($username_3)) { array_push($errors, "Confirm username is required"); }
if ($username_2 != $username_3) {
	 array_push($errors, "The two username do not match");
   
{echo '<script language="javascript">alert("New username & confirm new username did not match.");</script>';}
  }
   if(count($errors) == 0){
  
$sql="UPDATE `daily_labour` SET labour_username='$username_2' WHERE labour_username='".$_SESSION['labour_username']."' AND labour_username = '$username_1'";
if($result = mysqli_query($db, $sql))
if(($result) > 0)
    session_destroy();
  	unset($_SESSION['labour_username']);
 echo '<meta http-equiv ="refresh" content ="0 ;index.php">';
    
}
}
}
}
?>
