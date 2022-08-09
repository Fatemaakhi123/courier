<?php
session_start();
if (isset($_SESSION['SESSION_EMAIL'])) {
    header("Location: Home.php");
}

require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

include 'config.php';
$msg = "";

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $psw = mysqli_real_escape_string($conn, md5($_POST['psw']));
    $con_psw = mysqli_real_escape_string($conn, md5($_POST['con_psw']));
    $code = mysqli_real_escape_string($conn, md5(rand()));

    if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM customer WHERE email='{$email}'")) > 0 && ($psw== $con_psw)) {
        $query = mysqli_query($conn, "UPDATE customer SET code='{$code}',psw='{$psw}' WHERE email='{$email}'");

        if ($query) {        
            echo "<div style='display: none;'>";
            $mail = new PHPMailer(true);

            try {
               
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'akhikhan56717110@gmail.com';                     //SMTP username
                $mail->Password   = 'owcbpgeuoxbnkwvh';                               //SMTP password
                $mail->SMTPSecure = "tls";            //Enable implicit TLS encryption
                $mail->Port       = "587";                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                $mail->setFrom('akhikhan56717110@gmail.com');
                $mail->addAddress('akhikhan56717110@gmail.com');

                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Password Change';
                $mail->Body    = 'Verification Link <br><button type="button" style="padding:1rem; margin-left:12rem;border-radius:1rem;"><a style="text-decoration:none;font-weight:bold; color:black;" href="http://localhost/courier/signln.php?verification='.$code.'">Change Password</a></button>';
                $mail->send();
                echo 'Message has been sent';
            } catch (Exception $e) {
                $msg= "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
            echo "</div>";        
            $msg = "<span style='color:green;'>verification link to confirm the password.</span>";
        }
    } else {
        $msg = "<div class='alert alert-danger'>$email - This email address do not found.</div>";
    }
}

?>