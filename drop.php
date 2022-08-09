<?php 
include 'drop_backend.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Drag and Drop</title>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <style>
      .bac{


      }
      button{

font-size:1rem;
padding:0.3rem 0.7rem;
border-radius:2rem;
color: white;
background-color: rgb(74, 74, 74);
border: none;

}
.bac{
        
        background-image:linear-gradient(to bottom, rgba(251, 250, 252, 0.5), rgba(251, 250, 252,0.5)),url(./images/pexels-andrea-piacquadio-3760072.jpg); 
        background-repeat: no-repeat;
        background-position:left;
        background-size: cover;
        padding-top:4rem;
        font-family: 'Roboto Condensed', sans-serif;
        
        height:100vh;
        font-weight: bolder;
    
    }
    p{
      font-size: 1rem;
    }
    .block{

      text-align: center;
			width: 35%;
			padding:5.2rem 3rem;
			background-color: white;
			margin: auto;
			font-weight: bold;
			
    }
    </style>
</head>
<body>
<div class="container-fluid p-5 bac">
<div class="container">
      <div class="row block" style="font-weight:bolder;">
      <h3 style="font-weight: bolder;">Drop your CV</h3>
      <p>Pick your working place and Drop your CV in pdf,docx or zip format.If any position in available on that location ,we will contact you shortly.</p>
      <?php echo $msg ?>;
        <form action="drop.php" method="post" enctype="multipart/form-data" >
          
         
          <label for="place"">Choose Your interested workplace:</label>
          <br>

<select id="place">
  <option value="Dhaka" selected>Dhaka</option>
  <option value="Chittagong">Chittagong</option>
  <option value="Mymensingh">Mymensingh</option>
  <option value="Rajshahi" >Rajshahi</option>
  <option value="Barisal" >Barisal</option>
  <option value="Sylhet" >Sylhet</option>
</select><br><br>
<br>
<label for="place"">Drop your CV below:</label>
          <input type="file" name="myfile"> <br>
          <button type="submit" name="save">upload</button>
        </form>
      </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>