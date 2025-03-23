<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit;
    }

    // Generate a 6-digit OTP
    $otp = rand(100000, 999999);
    $_SESSION['otp'] = $otp; // Store OTP in session for verification

    // Email details
    $subject = "Your OTP Code";
    $message = "Your OTP is: " . $otp;
    $headers = "From: no-reply@yourwebsite.com\r\n";
    $headers .= "Reply-To: no-reply@yourwebsite.com\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Send email
    if (mail($email, $subject, $message, $headers)) {
        echo "OTP sent to your email.";
    } else {
        echo "Failed to send OTP. Try again.";
    }
}
?>
