<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Checkout Form</title>
	<link rel="stylesheet" type="text/css" href="CheckOut.css">
</head>
<body>
	<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="payscript.php" method="POST">

        <div class="row">
          <div class="col-50">
            <h3>Checkout Form</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="name" placeholder="John M. Doe">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com">
            
            <label for="phone"><i class="fa fa-institution"></i> Phone</label>
            <input type="text" id="phone" name="PhoneNo">
          </div>

        <input type="submit" value="Continue to checkout" class="btn">
      </form>
    </div>
  </div>

</div>

</body>
</html>