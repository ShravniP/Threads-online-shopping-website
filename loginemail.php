<?php
session_start();
// To Remove unwanted errors
error_reporting(0);

// Add your connection Code
include "config.php";

if(isset($_POST['sendotp']))
       {
       // $fname = $_POST['fname'];
        // $lname = $_POST['lname'];
        $email = $_POST['email'];
        $_SESSION['email']=$email;
        /* Code by abhay <singh></singh>*/

            

        /* cody by abhay*/
        // $password = $_POST['password'];
        // //$cpassword = $_POST['cpassword'];
        // $pnumber = $_POST['pnumber'];
        $otp=$_GET['otp'];

        // Check if email already exists
        $check_query = "SELECT * FROM registration WHERE email='$email'";
        $check_result = mysqli_query($conn, $check_query);
        if (mysqli_num_rows($check_result) > 0) {
            
            // Generate Random 6-Digit OTP
            $verification_otp = random_int(100000, 999999);
            $_SESSION['verification_otp'] = $verification_otp;
           
            echo "<script> alert('OTP sent to registered account');window.location.href = 'otp.php';</script>";
        } else {
            echo "<script> alert('Email ID is not registered. Please Register or use another Email ID');window.location.href = 'index.php';</script>";
        }
        /* code by abhay */
                $result=mysqli_fetch_row($check_result);
                $_SESSION['fname']=$result[0];
                $_SESSION['lname']=$result[1];

        /* code by abhay*/
    }
    



// Important Files (Please check your file path according to your folder structure)
require "phpmailer2/src/Exception.php";
require "phpmailer2/src/PHPMailer.php";
require "phpmailer2/src/SMTP.php";


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
    $mail->Body = "Hello, {$name}\nWelcome back! Please login with OTP {$otp}.";
    $mail->send();

    
}
sendMail($email, $_SESSION['verification_otp'], $fname);
?>







