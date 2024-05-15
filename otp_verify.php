<?php
session_start();

// if (isset($_GET['email']) && isset($_GET['otp'])) {
//     $email = $_GET['email'];
//     $verification_otp = $_GET['otp'];
// } else {
//     // Handle case where email or OTP is not provided in the URL
//     echo "<script>alert('Email or OTP not provided.');window.location.href = 'register.php';</script>";
//     exit;
// }

if (isset($_POST['verify_otp'])) {
    //$email = $_POST['email'];
    $entered_otp = $_POST['otp'];

    // Check if OTP matches
    if ($entered_otp == $_SESSION['verification_otp']) {
        // OTP is valid, redirect to home page
        echo "<script> alert('OTP verified.Happy shopping with threads.');window.location.href = 'home.php';</script>";
    } else {
        echo "<script> alert('Invalid OTP. Please try again.');window.location.href = 'otp.php';</script>";
    }


    // Clear OTP session variables
    //unset($_SESSION['verification_otp']);
} else {
    // Redirect to the registration page if the user tries to access the OTP page directly
    header("Location: register.php");
    exit;
}
?>