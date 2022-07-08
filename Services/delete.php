<?php
	$id = $_GET['i'];


	 $con = mysqli_connect("localhost","root","","route1");

    mysqli_query($con,"delete from routechange where id='$id'");

	//after delete record, the call service.php
	header("location:service.php");
?>