<?php $db= new mysqli("localhost","id8492135_chandan_134","chandan134021","id8492135_labourfriend"); 
extract($_POST);
$user_id=$db->real_escape_string($id);
$status=$db->real_escape_string($status);
$sql=$db->query("UPDATE daily_labour SET status='$status' WHERE id='$id'");
echo $sql;
//echo 1;
?>
