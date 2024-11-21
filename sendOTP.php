<?php
include "database.php";

use PHPMailer\PHPMailer\PHPMailer;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
session_start();

$otpCode = rand(100000, 999999);
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $email = $_POST['email'];
    // echo $otpCode . $email . $username;
    $_SESSION['OTP'] = $otpCode;
    $htmlContent = "

        OTP is $otpCode

    ";

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "utsargam44@gmail.com";
    $mail->Password = "vzlomkjmqhdyfkgl";
    $mail->SMTPSecure = "ssl";
    $mail->Port = 465;

    $mail->setFrom("utsargam44@gmail.com");
    $mail->addAddress($email);
    $mail->isHTML(true);
    $mail->Subject = "Gaidim";
    $mail->Body = $htmlContent;

    if ($mail->send()) {
        echo "success";
        header("Location: verifyOTP.php");
    } else {
        echo "Error occured" . $mail->ErrorInfo;
    }
}
?>
<form method="POST" action="sendOTP.php">
    <input type="email" name="email">
    <button type="submit">Send</button>
</form>