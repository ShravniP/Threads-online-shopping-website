<?php
session_start();
// To Remove unwanted errors
error_reporting(0);

// Add your connection Code
include "config.php";

if(isset($_POST['register']))
       {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        // $password = $_POST['password'];
        //$cpassword = $_POST['cpassword'];
        $pnumber = $_POST['pnumber'];
        $otp=$_POST['otp'];
        $_SESSION['email']=$email;
        // Check if email already exists
        $check_query = "SELECT * FROM registration WHERE email='$email'";
        $check_result = mysqli_query($conn, $check_query);
        if (mysqli_num_rows($check_result) > 0) {
            //die("Email already exists.");
            echo "<script> alert('Email already exists.');window.location.href = 'index.php';</script>";
        }
        // Check if password meets complexity requirements
        // $password_regex = "/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{6,}$/";
        // if(!preg_match($password_regex, $pass)) {
        //     die("<script>alert('Password must be at least 6 characters long and contain at least one uppercase letter, one lowercase letter, one digit, and one symbol.'); window.location.href='register1.php';</script>");
        // }
           
        // Check if password and confirm password match
        // elseif($password !== $cpassword) {
        //     echo "<script>alert('Passwords do not match. Please re-enter your password.');window.location.href = 'register1.php';</script>";
        //     exit();
        // } 

        // Validate mobile number
        // if (!preg_match("/^[0-9]{10}$/", $mobile)) {
        //     exit();
        //     echo"<script>
        // }


        // Insert new user into database
        $insert_query = "INSERT INTO registration (fname, lname, email, pnumber) VALUES ('$fname', '$lname', '$email', '$pnumber')";
        if (mysqli_query($conn, $insert_query)) {

            // Generate Random 6-Digit OTP
            $verification_otp = random_int(100000, 999999);
            $_SESSION['verification_otp'] = $verification_otp;
            
            echo "<script> alert('Registration successful.');window.location.href = 'otp.php';</script>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }



        $result=mysqli_fetch_row($check_result);
    $_SESSION['fname']=$result[0];
    $_SESSION['lname']=$result[1];
     

    }

    

// Important Files (Please check your file path according to your folder structure)
require "phpmailer/src/Exception.php";
require "phpmailer/src/PHPMailer.php";
require "phpmailer/src/SMTP.php";


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Email From Form Input
//$send_to_email = $_POST["email"];

// Generate Random 6-Digit OTP
// $verification_otp = random_int(100000, 999999);
// $_SESSION['verification_otp'] = $verification_otp;

// Full Name of User
//$send_to_name = $_POST["username"];

function sendMail($send_to, $otp, $name) {
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "tls";
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Enter your email ID
    $mail->Username = "Threads0mail@gmail.com";
    $mail->Password = "qmez spep wrxy brat";

    // Your email ID and Email Title
    $mail->setFrom("Threads0mail@gmail.com", "Threads");

    $mail->addAddress($send_to);

    // You can change the subject according to your requirement!
    $mail->Subject = "Account Verification";

    // You can change the Body Message according to your requirement!
    $mail->Body = "Hello, {$name}\nYour account registration is Processing! Now activate your account with OTP {$otp}.";
    $mail->send();

    
}
sendMail($email, $_SESSION['verification_otp'], $fname);
?>