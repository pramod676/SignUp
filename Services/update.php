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
	<?php $i = $_GET['i']; ?>
	
<div style="width : 50%; margin: 0 auto; border: none;">
	
	<h1 align="center" style="color: greenyellow;">Change Route</h1>
	<form action="" method="POST">
		<fieldset>
			<div style="padding: 10px; text-align: center;">
				<input type="hidden" name="id" value = "<?php echo $i; ?>">
				<input type="text" name="current" value="" placeholder="FROM" style="padding : 5px; width: 90%;">
			</div>

			<div style="padding: 10px; text-align: center;">
				<input type="text" name="destination" value="" placeholder="TO" style="padding : 5px; width: 90%;">
			</div>

			<div style="padding: 10px; text-align: center;">
				<input type="text" name="Price" value="" placeholder="PRICE" style="padding : 5px; width: 90%;">
			</div>

			<div style="padding: 10px; text-align: center;">
				<input type="submit" name="up" value="Change Now " style="padding : 5px; width: 50%;">
			</div>
		</fieldset>
	</form>

<?php
	if (isset($_POST['up']))
	{
		//connection
		$con = mysqli_connect("localhost","root","","route1");

		//variable and value passing
		$id = $_POST['id'];
		$curr = $_POST['current'];
		$des = $_POST['destination'];
		$pr = $_POST['Price'];


		//insert data
		mysqli_query($con,"update routechange set current = '$curr', destination = '$des', Price = '$pr' where id = '$id'");
		//id not applied cause that autoincreamenet

		header("location:route.php");
	}
	
?>

</div>
</body>
</html>
