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


$msg="";
if (isset($_POST['submit']))
  {
    
    $email = mysqli_real_escape_string($conn, $_POST['email']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);
     
        $sql = "INSERT INTO mes(email, message) VALUES ('{$email}', '{$message}')";
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
                $mail->Subject = 'Question';
                $mail->Body    = '<b style="font-family: monospace;font-size:1rem;">Here '.$email.' has asked a question:<br><p style="font-size:1.2rem; ">'.$message.'</p></b>';

                $mail->send();
                $msg= 'Message has been sent';
            } catch (Exception $e) {
                $msg= "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
            echo "</div>";
            $msg = "<span style='color:green;'>Mail Sent</span>";
        } 
  else
    {
       $msg="something went wrong";
    }

  
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Contact</title>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
   

    <style>
        .backphoto{
    background-image:linear-gradient(to bottom, rgba(251, 250, 252, 0.6), rgba(251, 250, 252,0.6)),url(./images/pexels-karolina-grabowska-4466553.jpg); 
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    padding-top:4rem;
    
    height: 48rem;

    text-align: center;
    font-size: 1rem;

}
button{

font-size:1rem;
padding:0.3rem 0.7rem;
border-radius:2rem;
color: white;
background-color: rgb(74, 74, 74);
border: none;

}
h5{
    font-weight: lighter;
}
    </style>
</head>
<body>
    <div class="container-fluid backphoto">
        <div class="container">
        <div class="row ">

    <h1>Contact Us</h1>
    <h5 style="font-weight:300;">We only send emails when we have something important to share and to notify.<br>It only occurs when you have valid questions including this website.</h5>
    <form action="" method="post" >
        <?php echo $msg; ?><br>
        <label for="email"><b>Email:</b></label>
            <input type="text" placeholder="Enter email" name="email" value="<?php if (isset($_POST['send'])) { echo $email; } ?>"><br>  
           <br> <label for="msg"><b>Message:</b></label><br>
            <textarea style="padding:0.5rem;" placeholder="Enter message" name="message" value="<?php if (isset($_POST['send'])) { echo $message; } ?>"></textarea>
               <br>
               <button type="submit" name="submit" style="color:white; background:black">send</button>
               <br>
               <br>
               <br>  
               <br>
               <br>
               <br>
               <br> 
            </form> 
              
               <h3>Address:<br></h3><br>
               </div>
               <p>
                Silvano Appointment,2nd Floor,Building no 26<br>
               1no Road,Nasirabad Housing Society
               <br>2 no gate,Chittagong
               </p>
               <div clas="col-md-8 col-sm-12">
</div>

               </div>
    </div>
  
    </div>
        

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>