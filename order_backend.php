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

   
    $show = "";

    if (isset($_POST['sub'])) {
       
        $select1=mysqli_real_escape_string($conn,$_POST['select1']);
        $element=mysqli_real_escape_string($conn,$_POST['element']);
        $address = mysqli_real_escape_string($conn, $_POST['address']);
        $pickup = mysqli_real_escape_string($conn, $_POST['pickup']);
        $delivery = mysqli_real_escape_string($conn, $_POST['delivery']);
        $code = mysqli_real_escape_string($conn, md5(rand()));

        
                $sql = "INSERT INTO details(select1,element,address,pickup,delivery,code) VALUES ('{$select1}', '{$element}','{$address}','{$pickup}','{$delivery}','{$code}')";
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
                        $mail->Subject = 'Order Confirmation';
                        $mail->Body    = ' Confirmation Id <br><button type="button" style="padding:1rem; margin-left:12rem;border-radius:1rem;"><a style="text-decoration:none;font-weight:bold; color:black;" href="http://localhost/courier/confirm.php?verification='.$code.'">Confirm</a></button>';

                        $mail->send();
                        $show= 'Message has been sent';
                    } catch (Exception $e) {
                        $show= "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                    }
                    echo "</div>";
                    $show = "<span style='color:green;'>verification link to Confirm Order.</span>";
                } else {
                    $show = "<span style='color:red;'>Something wrong went.</span>";
                }
           
    }
?>







