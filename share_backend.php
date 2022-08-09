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
    if (isset($_POST['submit']) ) {
       
        $name=mysqli_real_escape_string($conn,$_POST['name']);
        $phone=mysqli_real_escape_string($conn,$_POST['phone']);
        $nid = mysqli_real_escape_string($conn, $_POST['nid']);
        $location = mysqli_real_escape_string($conn, $_POST['location']);
        $type = mysqli_real_escape_string($conn, $_POST['type']);
        $license = mysqli_real_escape_string($conn, $_POST['license']);
        $duration = mysqli_real_escape_string($conn, $_POST['duration']);
        $date = mysqli_real_escape_string($conn, $_POST['date']);
        $photo = mysqli_real_escape_string($conn, $_POST['photo']);
        $code = mysqli_real_escape_string($conn, md5(rand()));
        

        
                $sql1 = "INSERT INTO share(name,phone,nid,location,type,license,duration,date,photo,code) VALUES ('{$name}', '{$phone}','{$nid}','{$location}','{$type}','{$license}','{$duration}','{$date}','{$photo}','{$code}')";
                $result = mysqli_query($conn, $sql1);

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
                        $mail->Subject = 'Details Confirmation';
                        $mail->Body    = ' Confirmation Id <br><button type="button" style="padding:1rem; margin-left:12rem;border-radius:1rem;"><a style="text-decoration:none;font-weight:bold; color:black;" href="http://localhost/courier/share_reciet.php?verification='.$code.'">Confirm</a></button>';

                        $mail->send();
                        $show= 'Message has been sent';
                    } catch (Exception $e) {
                        $show= "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                    }
                    echo "</div>";
                    $show = "<span style='color:green;'>verification link to Confirm.</span>";
                } else {
                    $show = "<span style='color:red;'>Something wrong went.</span>";
                }
           
    }
?>







