<!-----Labourer----->

<?php

include "db.php";

$labourer_username = "";
$labourer_password = "";

if(isset($_POST['labourer_login'])){
  
  $labourer_username = $_POST['labourer_username'];
  
   $sqluser="SELECT labourer_username FROM labourer WHERE labourer_username='$labourer_username' ";
  $qresult=mysqli_query($db, $sqluser);
  $count=mysqli_num_rows($qresult);
  if($count == 0)
  {echo '<script language="javascript">alert("You entered a wrong username.");</script>';
  echo '<meta http-equiv="refresh" content="0;../index.php" />';} 
  else
  { 

  $labourer_password = $_POST['labourer_password'];
  
  $sqluser="SELECT labourer_password FROM labourer WHERE labourer_password='$labourer_password' ";
  $qresult=mysqli_query($db, $sqluser);
  $count=mysqli_num_rows($qresult);
  if($count == 0)
  {echo '<script language="javascript">alert("You entered a wrong password.");</script>';
  echo '<meta http-equiv="refresh" content="0;../index.php" />';} 
  else
  {	
  $query = "SELECT * FROM labourer WHERE labourer_username = '$labourer_username' AND labourer_password = '$labourer_password' AND form_status = '1'";
  $results = mysqli_query($db,$query);
  if(mysqli_num_rows($results) == 1){
                $_SESSION['labourer_username'] = $labourer_username;
    
  echo '<meta http-equiv="refresh" content="0;../labourer/index.php" />';          
}
else
{
$query1 = "SELECT * FROM labourer WHERE labourer_username = '$labourer_username' AND labourer_password = '$labourer_password' AND form_status = '0'";
  $results1 = mysqli_query($db,$query1);
  if(mysqli_num_rows($results1) == 1){
                $_SESSION['labourer_username'] = $labourer_username;
    
  echo '<meta http-equiv="refresh" content="0;../labourer/details.php" />';
  }
  else
  {
	 echo '<meta http-equiv="refresh" content="0;../index.php" />';  
  }
}
}
}
}
?>

<!-------------Hirer--------->

<?php

include "db.php";

$hirer_username = "";
$hirer_password = "";

if(isset($_POST['hirer_login'])){
  
  $hirer_username = $_POST['hirer_username'];
  
   $sqluser="SELECT hirer_username FROM hirer WHERE hirer_username='$hirer_username' ";
  $qresult=mysqli_query($db, $sqluser);
  $count=mysqli_num_rows($qresult);
  if($count == 0)
  {echo '<script language="javascript">alert("You entered a wrong username.");</script>';
  echo '<meta http-equiv="refresh" content="0;../index.php" />';} 
  else
  { 

  $hirer_password = $_POST['hirer_password'];
  
  $sqluser="SELECT hirer_password FROM hirer WHERE hirer_password='$hirer_password' ";
  $qresult=mysqli_query($db, $sqluser);
  $count=mysqli_num_rows($qresult);
  if($count == 0)
  {echo '<script language="javascript">alert("You entered a wrong password.");</script>';
  echo '<meta http-equiv="refresh" content="0;../index.php" />';} 
  else
  {	
  $query = "SELECT * FROM hirer WHERE hirer_username = '$hirer_username' AND hirer_password = '$hirer_password' AND status = 'Credit'";
  $results = mysqli_query($db,$query);
  if(mysqli_num_rows($results) == 1){
                $_SESSION['hirer_username'] = $hirer_username;
    
  echo '<meta http-equiv="refresh" content="0;../hirer/index.php" />';          
}
else
{
$query1 = "SELECT * FROM hirer WHERE hirer_username = '$hirer_username' AND hirer_password = '$hirer_password' AND form_status = '0'";
  $results1 = mysqli_query($db,$query1);
  if(mysqli_num_rows($results1) == 1){
                $_SESSION['hirer_username'] = $hirer_username;
    
  echo '<meta http-equiv="refresh" content="0;../hirer/details.php" />';
  }
  else
  {
	 echo '<meta http-equiv="refresh" content="0;../about.php" />';  
  }
}
}
}
}
?>