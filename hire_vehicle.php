<?php
include('config.php');

	$sql2 = "select * from company";

	$result2 = ($conn->query($sql2));

	$row2 = [];

	if ($result2->num_rows > 0)
	{
		$row2 = $result2->fetch_all(MYSQLI_ASSOC);
	}
?>

<!DOCTYPE html>
<html>

<body>
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
	    .back{
        
		background-image:linear-gradient(to bottom, rgba(251, 250, 252, 0.6), rgba(251, 250, 252,0.6)),url(./images/pexels-asya-vlasova-2575379.jpg); 
		background-repeat: no-repeat;
		background-position: center center;
		background-size: cover;
		width: 100%;
		height: auto;
		
	
	}
		
		.colum{
			float:left;
			margin: auto;
			width: 40%;
			padding: 3rem;
			background-color: white;
			
			
		}
		button{

font-size:1rem;
padding:0.3rem 0.7rem;
border-radius:2rem;

background-color: rgb(74, 74, 74);
border: none;

}
.part{
	font-size: 1rem;
	padding: 0.3rem;
}
	</style>
</head>
		<div class="container-fluid back">
<div class="container">
	<div class="row">
		<div class="colum ">
		<?php
if(!empty($row2))
foreach($row2 as $rows2)
{
?>
	<img src="images/<?=$rows2['image']?>">
	<div class="part">
	<label for="vehicle-type"><b>Vehicle-type: </b></label>
	<?php
echo $rows2['type'];?>
<br> <label for="License-Number"><b>License-Number: </b></label><?php
echo $rows2['license'];?>
<br> <label for="Vehicle-Code"><b>Vehicle-Code: </b></label><?php
echo $rows2['code'];
?>
<br> <label for="Company Property"><b>Company Property: </b></label><?php
echo 'Company property';
?><br><button type="button"><a href="hire_order.php" style="text-decoration:none;color: white;">Order</a></button>	
<hr>

<?php
} ?>

</div>


	</div>
	</div>	
	</div>
</body>
</html>

<?php
	mysqli_close($conn);
?>
