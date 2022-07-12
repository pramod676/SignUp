<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Welcome</title>

</head>
<body style="background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(background.jpg);; background-size: cover;">

    <!-- Tab to Manage the bus details -->
     <div class="card">
            <h2>Manage Details</h2>
            <p><button > <a href = "route.php"  style="text-decoration: none; color : white;">Bus Details</a></button></p>  
            
      </div>
          <br>

    <!-- Tab to showcase routes of the bus to travel -->
      <div class="card1">
            <h2>Services</h2>
            <p><button > <a href = "Services/service.php"  style="text-decoration: none; color : white;">Travelling Services</a></button></p>  
            <div class="icon">
                
            </div>
      </div>


 <h1 style="color: white; text-align: center; margin-top: 10px">Welcome <?php echo $_SESSION['username'] ; ?>
</h1>


    <!--- Logout session --->
    <a href="logout.php" style="margin-left: 1220px; color: white; font-size: 25px; text-decoration: none;">Logout</a>


    <a href="index1.php" style="margin-left:30px; color: white; font-size: 25px; text-decoration: none;">About Us</a>

         
    
</body>
</html>