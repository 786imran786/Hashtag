<?php
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
require 'config.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
function send_otp($email, $subject, $otp) {
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'errror119@gmail.com';
    $mail->Password = 'fvktgjatboacnmgl';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->setFrom('errror119@gmail.com');
    $mail->addAddress($email);
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = "Thank you for joining the Error-119 community!<br>
    Your One Time Password is: <b>$otp<b><br>
    We are excited to have you on board! <br>Lets learn new things and achieve new heights together!!<br>
    Note that this is system generated email.<br> <i>Please do not reply to this.</i>";
    try {
        $mail->send();
        echo "Sent successfully";
    } catch (Exception $e) {
        echo "Error sending email: {$mail->ErrorInfo}";
    }
}
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $sql = "SELECT * FROM er1 WHERE email='$email'";
    $rs = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    if (mysqli_num_rows($rs) > 0) {
        $_SESSION['email'] = $email;
        $otp = rand(11111, 99999);
        $sql = "UPDATE er1 SET user_otp='$otp' WHERE email='$email'";
        $rs = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        send_otp($email, 'PHP OTP LOGIN', $otp);
        header("location:verify.php?msg=Please check your email for OTP and verify");
        exit();
        header("location:verify.php?msg=Email id is invalid");
        exit();
}
}
?>
