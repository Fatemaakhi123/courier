<?php 


include 'offerorder_backend.php';

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

background-image:linear-gradient(to bottom, rgba(251, 250, 252, 0.1), rgba(251, 250, 252,0.1)),url(./images/pexels-scott-webb-1903963.jpg);
background-position: center;
background-repeat: no-repeat;
background-size: cover;
height: 100vh;
padding-top: 2rem;

}
button{

font-size:1rem;
padding:0.3rem 0.7rem;
border-radius:2rem;
color: white;
background-color: rgb(74, 74, 74);
border: none;

}
.size{
  background-color: white;
  width: 35%;
  margin: auto;
  font-size: 1rem;
  padding: 2.5rem 0rem;
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
<label for="weight"><b>Your Coupon Code is:</b></label>
<?php echo $coup; ?><br><br>

<label for="weight"><b>Aproximate Weight:</b></label>
    <select name="select1">
        <option value="80tk">2kg</option>
        <option value="150tk">5kg</option>
        <option value="200tk">10kg</option>
        <option value="250tk">20kg</option>
        <option value="350tk">upto 20kg</option>
    </select>
   <br><br>
<label for="element"><b>Element type:</b></label>
      <select name="element" required>
         <option>documents</option>
         <option>elements</option>
         <option>cloths</option>
         <option>metals</option>
         <option>others</option>
</select><br>
                                                                                                                                 
        <label for="address"><b>Details address:</b></label>
        <input type="text"  placeholder="details address" name="address" value="<?php if (isset($_POST['sub'])) { echo $address; } ?>" required><br>
        <label for="pick"><b>Pickup area:</b></label>
        <select name="pickup"  required>
    <option  disabled selected>select pickup area</option>
    <option>Show all category A & B</option>
    <option>Show all category A</option>
    <option>Show all category B</option>
    <optgroup label="Category A">
        <option disabled>ub category A.1</option>
            <option>Item 1</option>
            <option>Item 2</option>
        <option disabled>Sub category A.2</option>
            <option>Item 3</option>
            <option>Item 4</option>
    </optgroup>
    <optgroup label="Category B">
        <option disabled>Sub category B.1</option>
        <option>Item 5</option>
    </optgroup>
    <optgroup label="Category C">
        <option>Item 6</option>
    </optgroup>
</select><br>
<br>
<label for="delivery"><b>Delivery area:</b></label>
        <select name="delivery"  required>
<option disabled selected>select delivery area</option>
    <option>Show all category A & B</option>
    <option>Show all category A</option>
    <option>Show all category B</option>
    <optgroup label="Category A">
        <option disabled>ub category A.1</option>
            <option>Item 1</option>
            <option>Item 2</option>
        <option disabled>Sub category A.2</option>
            <option>Item 3</option>
            <option>Item 4</option>
    </optgroup>
    <optgroup label="Category B">
        <option disabled>Sub category B.1</option>
        <option>Item 5</option>
    </optgroup>
    <optgroup label="Category C">
        <option>Item 6</option>
    </optgroup>
</select><br>
<label for="Coupon Code"><b>Coupon Code:</b></label>
          <input type="text" placeholder="Coupon Code" name="Coupon_Code" required><br>

        <button type="submit" name="sub" style="margin-top:1rem;">Confirm</button><br>
       
      </form>



</div>
</div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>