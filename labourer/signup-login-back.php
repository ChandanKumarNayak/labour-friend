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
    
  echo '<meta http-equiv="refresh" content="0;index.php" />';          
}
else
{
$query1 = "SELECT * FROM labourer WHERE labourer_username = '$labourer_username' AND labourer_password = '$labourer_password' AND form_status = '0'";
  $results1 = mysqli_query($db,$query1);
  if(mysqli_num_rows($results1) == 1){
                $_SESSION['labourer_username'] = $labourer_username;
    
  echo '<meta http-equiv="refresh" content="0;labourer_details.php" />';
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

