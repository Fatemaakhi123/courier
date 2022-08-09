<?php
include('config.php');

	$sql = "select * from offer";
	$result = ($conn->query($sql));
	$row = [];

	if ($result->num_rows > 0)
	{
		$row = $result->fetch_all(MYSQLI_ASSOC);
	}
?>

<!DOCTYPE html>
<html>
	<head>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

<style>
button{

font-size:1rem;
padding:0.3rem 0.7rem;
border-radius:2rem;

background-color: rgb(74, 74, 74);
border: none;

}
.back{
        
		background-image:linear-gradient(to bottom, rgba(251, 250, 252, 0.1), rgba(251, 250, 252,0.1)),url(./images/christmas-tree-g7276a2668_1920.jpg); 
		background-repeat: no-repeat;
		background-position: center center;
		background-size: cover;
	
		height: 100vh;
		
	
	}
	img{
		width:60%;
	}
	.colum{
			
		text-align: center;
			width: 35%;
			padding:5.6rem 3rem;
			background-color: white;
			margin: auto;
			font-weight: bold;
			
			
		}

		.part{
	font-size: 1.3rem;
	padding-top: 0.5rem;
}



</style>
	</head>
	<body>
		<div class="container-fluid back">
<div class="colum">
			<?php
			if(!empty($row)){
			foreach($row as $rows)
			{
			?>
			
<img src="./images/sale-g4ff9f81a4_640.png" alt="nothing"><br>
<div class="part">
				<?php echo $rows['name']; ?>
				<br>
				<?php echo $rows['des']; ?>
				<br>
				<?php echo $rows['sale']; ?>%
				<br><button type="button"><a href="offer_order.php" style="text-decoration:none;color: white;">Confirm</a></button>	
				<hr>
<?php }}
else
{
	echo "No offers available!!!!!";
}


?>

</div>	
      
</div>
</div>
</body>
</html>

<?php
	mysqli_close($conn);
?>
