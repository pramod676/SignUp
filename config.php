<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "login";

// connecting the database to the website
$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>