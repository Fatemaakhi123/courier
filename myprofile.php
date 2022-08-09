<?php  
include 'config.php';

    $sql="SELECT * FROM customer";

    if ($result = mysqli_query($conn, $sql)) {
      while ($row = mysqli_fetch_assoc($result)) {
          
          $id=$row['id'];
          $field1name = $row["email"];  
          $field2name = $row["user"]; 
          $field3name = $row["phone"];
          $field4name = $row["city"];
        
      }
      $result->free();
    } 


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Customer</title>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    <style>

.bac{

  border: 0.1rem solid black;
  background-image: url(./images/pexels-daria-shevtsova-1831256.jpg) ;
   background-position: center;
 background-repeat: no-repeat;
 background-size: cover;
 font-family: 'Oswald', sans-serif;
 font-size: 1.2rem;
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
<div class="container-fluid p-5  ">


      <div class="row p-2  bac" style="font-weight:bolder;">
   
      <h1><b>Profile</b></h1>
      <img src="./images/blank-profile-picture-ga8fae7b2c_640.png"style="width:270px;" alt="nothing">
      <div class="aside p-2">
      <th><b>Email:</b></th>
      
        <td><?php  echo $field1name;  ?></td><br>
      </div>
      <div class="aside p-2">
      <th><b>Name:</b></th>
        <td><?php  echo $field2name;  ?></td><br>
      </div><br>
      <div class="aside p-2">
      <th><b> Phone-Number:</b></th>
        <td><?php  echo $field3name;  ?></td><br>
      </div>
      <div class="aside p-2">
      <th><b> City:</b></th
        <td><?php  echo $field4name;  ?></td><br>
      </div><br>
      
    
      <div class="aside p-2">

<button type="submit" name="submit"><a href="edit.php" style="text-decoration:none;color:white;">Edit Profile</a></button>

      </div>
      </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>









