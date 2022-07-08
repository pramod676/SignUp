<!-- Connection to the database -->
<?php

    $con = mysqli_connect("localhost","root","","route1");

    $s = mysqli_query($con,"select * from routechange");

?>

<!-- Table to show details of the ongoing route -->
<table border = 1 align="center">
    <tr>
        <th>Current</th>
        <th>Destination</th>
        <th>Price</th>
        <th>Edit</th>
        <th>Remove</th>
        <th>Pay</th>
    </tr>
<?php
    //fetching the details from the database -->
    while($r = mysqli_fetch_array($s))
{
?>
    <tr>

        <td><?php echo $r['current']; ?></td>
        <td><?php echo $r['destination']; ?></td>
        <td><?php echo $r['Price']; ?></td>

        <!-- linking page to perform the operation -->
       <td><a href="update.php?i=<?php echo $r['id'];?>">Update</a></td>
        <td><a href="delete.php?i=<?php echo $r['id'];?>">Delete</a></td>
         <td><a href="https://rzp.io/l/I8eRcJ5">Click Here</td> 
    </tr>

<?php 
}
?>      

</table>

 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title></title>
     <style type="text/css">
         body{
            background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(background.jpg);
            background-size: cover;
         }

         tr{
            color: whitesmoke;
            text-align: center;
            font-size: 30px;
         }
         td{
            color: greenyellow;
            text-align: center;
            font-size: 30px;
         }
         button{
            margin-left: 240px;
            padding: 15px;
            font-size: 20px;
            border-radius: 10px;
            cursor: pointer;
            text-decoration: none;
         }
         button a{
            text-decoration: none;
            color: black;
         }
         button a:hover{
            transition: 0.5s;
            color: crimson;
         }

     </style>
 </head>
 <body>
   
 </body>
 </html>