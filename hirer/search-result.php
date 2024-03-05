<?php 
   session_start(); 
   include('db.php'); 
 
  if (!isset($_SESSION['hirer_username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: hirer_login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['hirer_username']);
  	header("location: ../index.html");
  }
	  
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Find Your Required Labours Within Your Locality Easily.">
     <meta name="keywords" content="LabourFriend,labour friend,hire labour,find labour,labours near me,hire construction labour,hire plumber,hire mason,hire painter,hire carpenter,hire electrician,hire tite setter,labours in odisha,hire labour in odisha,plumber near me,electrician near me,mason near me,tile setter near me,painter near me,carpenter near me,find labours in odisha,nayak groups ">
    <meta name="owner" content="Chandan Kumar Nayak">
  <title>Search Result | LabourFriend</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="shortcut icon" type="image/jpg" href="../image/lf.jpg">
	
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="table-search.css">
  
  
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

.MyButton {
width: 100px;
height: 45px;
padding: 0px;
margin: 2px 1px;
cursor: pointer;
font-weight: bold;
background: white;
border: 1px solid white;
border-radius: 10px;
}
.MyButton:hover {
background: white;
color: white;
border: 1px solid white;
}

.MyButton1 {
width: 115px;
padding: 5px;
cursor: pointer;
font-weight: bold;
font-size: 115%;
color: #ffff00;
background: #000;
border: 1px solid #3366cc;
border-radius: 10px;
}
.MyButton1:hover {
background: #3366cc;
color: #fff;
border: 1px solid #fff;
}

@media screen and (max-width: 650px){
  .column {
    width: 100%;
    display: block;
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

$getdata=("SELECT * FROM outside WHERE hirer_username='".$_SESSION['hirer_username']."' ");
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
			
			<li class="nav-item"><a href="setting.php" class="nav-link"><i class="fa fa-gears"></i><span>Settings</span></a></li>
			<li class="nav-item"><a href="index.php?logout='1'" class="nav-link"><i class="material-icons">&#xE8AC;</i><span>Logout</span></a></li>
				</ul>
			</li>
		</ul>
	</div>
</nav>  
<?php

}
?>
<center><input type="search" id="myInput" onkeyup="myFunction()" class="light-table-filter" placeholder="Type a panchayat name" /></center><br>
<!--===============================================Server Part================================================-->
   
<?php

include('db.php');

$row="";
$work="";
$district="";
$city="";

if(isset($_POST['search']))
	
  $work = $_POST['work'];
  $district = $_POST['district'];
  $city = $_POST['city']; 

$getdata=("SELECT * FROM daily_labour WHERE work = '$work' AND district = '$district' AND city = '$city' AND status = '1'");
if($result = mysqli_query($db, $getdata))
if(mysqli_num_rows($result) > 0)
echo "<center>";
echo "<div style='overflow-x:auto;'>";
echo "<table id='myTable'>";


echo "<tr>

<th>Avatar</th>
<th>Name</th>
<th style='display:none'>Panchayat</th>
<th>Contact</th>

</tr>";

while($row = mysqli_fetch_array($result))

{
echo "<tr>";

echo "<td><img src='../dbimg/".$row['myimage']."' style='width:100px;height:100px;border-radius:5px;margin:5px'></td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td style='display:none'>" . $row['panchayat'] . "</td>";
echo '<td>'; echo '<a href="tel:' . $row['phone'] . '">'; echo '<input type="button" class="MyButton" value="Call Now" />'; echo '</a>'; echo '</td>';

echo "</tr>";

}
echo "</table>";
echo "</div>";
echo "</center>";
?>
 
<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>   


<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <p class="w3-medium">Copyright © 2019 LabourFriend.in (a NAYAK GROUPS Venture) All Rights Reserved.</p>
</footer>
</body>
</html>