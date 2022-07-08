<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Change route</title>

	<style type="text/css">
		
		body{
			background-color: whitesmoke;
			background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(background.jpg);
			background-size: cover;
		}
	</style>
</head>
<body>

	<!--- Change route and price authority to admi --->
<div style="width : 50%; margin: 0 auto; border: none;">
	
	<h1 align="center" style="color: greenyellow;">Change Route</h1>
	<form action="" method="POST">
		<fieldset>

			<!-- input text for inserting the current location -->
			<div style="padding: 10px; text-align: center;">
				<input type="text" name="current" value="" placeholder="FROM" style="padding : 5px; width: 90%;">
			</div>

			<!-- input text for inserting the destination location -->
			<div style="padding: 10px; text-align: center;">
				<input type="text" name="destination" value="" placeholder="TO" style="padding : 5px; width: 90%;">
			</div>

			<div style="padding: 10px; text-align: center;">
				<input type="text" name="Price" value="" placeholder="PRICE" style="padding : 5px; width: 90%;">
			</div>

			<!-- input text for inserting the price -->	
			<div style="padding: 10px; text-align: center;">
				<input type="submit" name="ins" value="SUBMIT " style="padding : 5px; width: 50%;">
			</div>
		</fieldset>
	</form>


<!--- Connecting web page to the database --->
<?php
	if (isset($_POST['ins']))
	{
		//connection
		$con = mysqli_connect("localhost","root","","route1");

		//variable and value passing
		$curr = $_POST['current'];
		$des = $_POST['destination'];
		$pr = $_POST['Price'];

		//insert data
		mysqli_query($con,"insert into routechange(current, destination, Price) values('$curr','$des', '$pr')");
		//id not applied cause that autoincreamenet

		echo "<div style = 'box-shadow: 1px 1px 5px 1px rgb(255, 90, 40);'> Data Added Successfully<div>";
	}
	
?>

</div>
</body>
</html>
