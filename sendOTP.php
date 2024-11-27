
<form method="POST" action="sendOTP.php">
    Enter your username:<br><input type="text" name="username" required>
    <button type="submit">Send</button>
</form>

<?php
include "database.php";

use PHPMailer\PHPMailer\PHPMailer;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
session_start();

$otpCode = rand(100000, 999999);
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $username = $_POST['username'];
    $sql = "SELECT * FROM login WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $email = $row['email'];
        $_SESSION['OTP'] = $otpCode;

        $htmlContent = "Your OTP is: $otpCode";

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
            header("Location: verifyOTP.php");
            exit();
        } else {
            echo "Error occurred: " . $mail->ErrorInfo;
        }
    } else {
        echo '
        <div id="dialog" style="border: 1px solid #ccc; padding: 20px; width: 300px; background: #f9f9f9; border-radius: 8px; text-align: center;">
            <h2>🔍 Username Not Found</h2>
            <p>We couldn\'t find an account with the username you entered. Please double-check the spelling or try again.</p>
            <div style="margin-top: 20px;">
                <button onclick="window.location.reload();">Retry</button>
                <button><a href="signup.php">Create an Account</a></button>
            </div>
        </div>
        ';
    }
}
?>