<?php 
session_start();
$status=11;
include './include/config.php';
date_default_timezone_set("Asia/Kolkata");
if(!empty($_POST))
{
    $recordId=$_POST['id'];
    $userId=$_POST['user_id'];
    $out_time=date("Y-m-d H:i:s");
    $quantity=$_POST['quantity'];
    $amount=$_POST['amount'];
    $out_by=$_POST['out_by'];

    $sql=mysqli_query($conn,"update `log` set `user_id`='$userId',`quantity`='$quantity' , `amount`='$amount' , `in_by`='$out_by' , `in_time`='$out_time' where id='$recordId'");
  
if($sql){
  header("location:profile.php?id=$userId");
}
else{
     
  $status=0;
  echo "error";
}
  }
?>