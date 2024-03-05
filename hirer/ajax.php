<?php $db= new mysqli("localhost", "chandan_134", "chandan134021", "chandan_labour"); 
extract($_POST);
$user_id=$db->real_escape_string($id);
$status=$db->real_escape_string($status);
$sql=$db->query("UPDATE outside SET status='$status' WHERE id='$id'");
echo $sql;
//echo 1;
?>
