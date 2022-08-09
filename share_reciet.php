<?php  
include 'config.php';

$sql = "SELECT * FROM share";
 

if ($result = mysqli_query($conn, $sql)) {
  while ($row = mysqli_fetch_assoc($result)) {
      
      
      $field1name = $row["name"];  
      $field2name = $row["phone"]; 
      $field3name = $row["nid"];
      $field4name = $row["location"];
      $field5name = $row["type"];
      $field6name = $row["license"];
      $field7name = $row["duration"];
      $field8name = $row["date"];
      $field9name = $field7name*800;
      $field10name = $row["code"];
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
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
</head>
<body>
<div class="container-fluid p-5 bac ">
<div class="container text-center">
    <h1>Order Confirmed</h1>
    <p>Keep this Reciet to show at the picking-time to ensure that you are that person.Code number is unique here so don't lose the reciet.</p>
      <div class="row p-5" style="font-weight:bolder;">
      <div class="aside p-2">
      <b><th>Owner's Name:</th></b>
        <td><?php  echo $field1name;  ?></td>
      </div>
      <div class="aside p-2">
      <b><th>Phone Number:</th></b>
        <td><?php  echo $field2name;  ?></td>
      </div>
      <div class="aside p-2">
      <b><th>NID:</th></b>
        <td><?php  echo $field3name;  ?></td>
      </div>
      <div class="aside p-2">
      <th><b>Location:</b></th>
        <td><?php  echo $field4name;  ?></td>
      </div>
      <div class="aside p-2">
      <th><b>Vehicle-type:</b></th
        <td><?php  echo $field5name;  ?></td>
      </div>
      <div class="aside p-2">
      <th><b>License Number:</b></th>
        <td><?php  echo $field6name;  ?></td>
      </div>
      <div class="aside p-2">
      <th><b>Duration:</b></th>
        <td><?php  echo $field7name;  ?></td>
      </div>
      <div class="aside p-2">
      <th><b>Date:</b></th>
        <td><?php  echo $field8name;  ?></td>
      </div>
      <div class="aside p-2">
      <th><b>Total payable amount of money:</b></th>
        <td><?php  echo $field9name;  ?></td>
      </div>
      <div class="aside p-2">
      <th><b>Car Code:</b></th>
        <td><?php  echo $field10name;  ?></td>
      </div>
      
     
      <button onclick="window.print()" style="width:15%;margin:auto;color:white;">Download Reciet</button>
      </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>









