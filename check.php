<?php
include("config.php");
$email=$_SESSION['email'];
$otp=$_POST['user_otp'];
$sql="Select * from er1 where email='$email' and user_otp='$otp'";
$rs=mysqli_query($conn,$sql)or die(mysqli_error($conn));
if(mysqli_num_rows($rs)>0){
    $sql="update er1 set user_otp='' where email='$email'";
    $rs=mysqli_query($conn,$sql)or die(mysqli_error($conn));
    header("location:pick.php?msg=Welcome User:".$email."Login Success!!");
}
else{
    $sqll=mysqli_query($conn,"DELETE FROM er1 WHERE email='$email'");
    header("location:check.php ?msg=OTP is Invalid Plz try Again!!");
}
?>