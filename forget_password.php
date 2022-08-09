<?php 
include 'forget_password_backend.php';

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Sign In</title>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <style>
        button{

font-size:1rem;
padding:0.3rem 0.7rem;
border-radius:2rem;
color: white;
background-color: rgb(74, 74, 74);
border: none;

}
    </style>
</head>
<body>
<div class="container-fluid backphoto ">
<div class="row text-center size">
    <h1 style="font-size: 2rem;">Forget Password</h1>
    <?php echo $msg ?>;
    <form action="" method="post" id="signup">
          <label for="email"><b>Email:</b></label>
          <input type="email" class="email" name="email" placeholder="Enter Your Email" required><br>
          <label for="psw"><b>Password:</b></label>
        <input type="password" placeholder="Password" name="psw" required><br>
        <label for="psw"><b>Confirm Password:</b></label>
        <input type="password" placeholder="Confirm Password" name="con_psw" required><br>
          <button type="submit" name="submit" style="margin:1rem;">Change password</button><br>
                            
                            <p>Back to! <a href="signln.php">Login</a>.</p>
           
      </form>
</div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>