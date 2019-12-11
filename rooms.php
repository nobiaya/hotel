<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="hotel.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
  

<nav class="topnav">
   <h1 class="head">Lily's Royal Hotel</h1>
  <a href="reserv.php">Reservation</a>
  <a href="rooms.php">Rooms</a>
  <a href="contact us.php">Contact us</a>
  <a href="about us.php">About us</a>
  <a href="index.php">Home</a>
</nav>


   <img src ="images/1.jpg"  width="100%vw" height="100%vh">


 <h1 style="text-align:center;color:green;" >ALL ROOMS</h1>
<table class="img">
  <tr>
  <td><a href="single.php"><img src="images/hero_2.jpg" width="400px" height="200px"style="margin:20px;"></a>
  <h2  style="text-align:center;color:green;">Single room</h2></td>

  <td><a href="family room.php"><img src="images/slider-2.jpg" width="400px" height="200px"style="margin:20px;"></a>
  <h2  style="text-align:center;color:green;">Family room</h2></td>

  <td><a href="presidential.php"><img src="images/services.jpg" width="400px" height="200px"style="margin:20px;"></a>
  <h2  style="text-align:center;color:green;">Presidential room</h2></td>
 </tr> 
</table>




<div class="footer">
  <h4 style="color:white;">&copy;lily love <i class="fa fa-heart fa-1x"  style=" color:red;"></i> <?php echo date("Y");?></h4>
</div>

</body>
</html>