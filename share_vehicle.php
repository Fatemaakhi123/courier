<?php 
include 'share_backend.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Place order</title>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

<style>


.backphoto{

background-image:linear-gradient(to bottom, rgba(251, 250, 252, 0.1), rgba(251, 250, 252,0.1)),url(./images/pexels-scott-webb-532566.jpg);
background-position: center;
background-repeat: no-repeat;
background-size: cover;
height: 100vh;
padding-top: 2rem;

}
.size{
  background-color: rgb(224, 205, 184);
  width: 35%;
  margin: auto;
  font-size: 0.9rem;
  padding: 2.5rem 0rem;
}
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
  
<div class="container-fluid backphoto">

<div class="row text-center size">
<h1 style="font-size:1.5rem;">Order Place</h1>
<?php  echo $show;?><br>
<br>

<form action="" method="post">
<label for="name"><b>Owner's Name:</b></label>
        <input type="text" placeholder="name" name="name"  required><br>
        <label for="phone"><b>Phone-Number:</b></label>
        <input type="tel" placeholder="Enter your number" name="phone" pattern="[0-9]{10}" required><br>
        <label for="nid"><b>NID:</b></label>
        <input type="text" placeholder="enter your NID" name="nid" ><br> 
        <label for="city"><b>Location:</b></label>
        <input type="text" placeholder="Details address" name="location" ><br>
        <label for="type"><b>Vehicle type:</b></label>
      <select name="type" required>
         <option>Truck</option>
         <option>Private Car</option>
         <option>Pick up van</option>
</select><br>

        <label for="license"><b>License Number:</b></label>
        <input type="text" placeholder="Enter License Number" name="license" required><br>
        <label for="duration"><b>Duration:</b></label>
        <input type="text" placeholder="Duration" name="duration" required><br>
        <label for="Date"><b>Date:</b></label>
        <input type="date" placeholder="date" name="date" required><br>
        <label for="photo"><b>Photo:</b></label>
        <input type="file" placeholder="photo"
                        name="my_image">
        <br>
        
       <button type="submit" name="submit" style="margin-top:1rem;">Submit</button><br>
    </form>

      

</div>
</div>
    
  <script src="new.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>