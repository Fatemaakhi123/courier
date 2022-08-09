<?php
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    session_start();
    include 'config.php';
    
    require 'vendor/autoload.php';

   
    $msg = "";

    if (isset($_POST['submit'])) {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $user = mysqli_real_escape_string($conn, $_POST['user']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        $city = mysqli_real_escape_string($conn, $_POST['city']);
        $psw = mysqli_real_escape_string($conn, md5($_POST['psw']));
        $con_psw = mysqli_real_escape_string($conn, md5($_POST['con_psw']));
        $code = mysqli_real_escape_string($conn, md5(rand()));

        if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM customer WHERE email='{$email}'")) > 0) {
            $msg = "<span style='color:red;'>This email address has been already exists.</span>";
        } else {
            if ($psw === $con_psw) {
                $sql = "INSERT INTO customer (email, user, phone,city,psw, code) VALUES ('{$email}', '{$user}', '{$phone}', '{$city}','{$psw}','{$code}')";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    echo "<div style='display: none;'>";
                    //Create an instance; passing `true` enables exceptions
                    $mail = new PHPMailer(true);

                    try {
                        //Server settings
                        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
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
                        $mail->Subject = 'Account Verification';
                        $mail->Body    = 'Here is the Verification Link <br><button type="button" style="padding:1rem; margin-left:12rem;border-radius:1rem;"><a style="text-decoration:none;font-weight:bold; color:black;" href="http://localhost/courier/signln.php?verification='.$code.'">Verify Account</a></button>';

                        $mail->send();
                        $msg= 'Message has been sent';
                    } catch (Exception $e) {
                        $msg= "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                    }
                    echo "</div>";
                    $msg = "<span style='color:green;'>We've send a verification link on your email address.</span>";
                } else {
                    $msg = "<span style='color:red;'>Something wrong went.</span>";
                }
            } else {
                $msg = "<span style='color:red;'>Password and Confirm Password do not match</span>";
            }
        }
    }
?>