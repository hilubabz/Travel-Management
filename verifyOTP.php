<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $otp = $_POST['OTP'];
    if ($otp == $_SESSION['OTP']) {
        echo "Correct";
    } else {
        echo "Milena";
    }
}
?>

<form method='POST' action='verifyOTP.php'>
    <input type="number" name="OTP">
    <button type="submit">Send</button>

</form>