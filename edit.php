

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
    <title>Edit</title>
    <style>

.size{
    padding-top:4rem;
   background-image: url(./images/pexels-alena-koval-961402.jpg) ;
   background-position: center;
 background-repeat: no-repeat;
 background-size: cover;
 height: 41rem;


}
button{

font-size:1rem;
padding:0.3rem 0.7rem;
border-radius:2rem;
color: white;
background-color: rgb(74, 74, 74);
border: none;

}
#edit{
    font-size: 1rem;
}
</style>
</head>
<body>
<div class="container-fluid size">
<div class="row text-center  bor">
    <h1 style="font-size: 2rem;">Edit Profile</h1>
    <?php 
    if(isset($_SESSION['status']))
    {
        echo "<p>".$_SESSION['status']."</p>";
        unset($_SESSION['status']);
    }
    
    
    ?>
    <form action="update.php" method="post" id="edit">
        
        <label for="username"><b>Username:</b></label>
        <input type="text" placeholder="Username" name="user" value="<?php if (isset($_POST['submit'])) { echo $user; } ?>"  required><br>
        <label for="phonenumber"><b>Phone-Number:</b></label>
        <input type="tel" placeholder="Phonenumber" name="phone" value="<?php if (isset($_POST['submit'])) { echo $phone; }?>" required ><br> 
        <label for="city"><b>City:</b></label>
        <input type="text" placeholder="City Name" name="city" value="<?php if (isset($_POST['submit'])) { echo $city; } ?>" ><br>
       

 
        <button type="submit" name="update">Update</button><br>
       
      </form>
      
</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>