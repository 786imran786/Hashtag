<?php
include("config.php");
$email=$userData['email'];
$otp=$_POST['user_otp'];
$sql="Select * from er1 where email='$email' and user_otp='$otp'";
$rs=mysqli_query($conn,$sql)or die(mysqli_error($conn));
if(mysqli_num_rows($rs)>0){
    $sql="update er1 set user_otp='' where email='$email'";
    $rs=mysqli_query($conn,$sql)or die(mysqli_error($conn));
    header("location:changepass.php?msg=Welcome User:".$email."Login Success!!");
}
else{
    header("location:check.php?msg=OTP is Invalid Plz try Again!!");
}
?>