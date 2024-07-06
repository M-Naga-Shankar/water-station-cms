<?php 
session_start();
$status=11;
include './include/config.php';
if(!empty($_POST))
{
    $userId=$_POST['user_id'];
    $out_time=$_POST['out_time'];
    $quantity=$_POST['quantity'];
    $amount=$_POST['amount'];
    $out_by=$_POST['out_by'];

    $sql=mysqli_query($conn,"insert into `log`(`user_id`,`quantity`,`amount`,`out_by`,`out_time`) values('$userId','$quantity','$amount','$out_by','$out_time')");
    
if($sql){
  header("location:profile.php?id=$userId");
}
else{
     
  $status=0;
  echo "error";
}
  }
?>