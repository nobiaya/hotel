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

    <h1 style="position: absolute;top:50%;left:50%;transform:translate(-50%,-50%);z-index:5;width:45%;padding:40px 0;text-align:center;
    border-top-left-radius: 70px;border-bottom-right-radius:70px;background-color:rgba(0,0,0,0.3);color:#fff;font-weight:bold;border:5px inset #fff;"> WELCOME TO THE LILY'S ROYAL HOTEL WE OFFER THE BEST ACCOMDATION BOOK NOW,YOUR COMFORT IS OUR PRIORITY </h1>


<br>
     <div class="group">
    <h1 id ="room" style="text-align:center">Rooms & Suites</h1>

    <div class="gallery">
    <img src="images/img_1.jpg" alt="Cinque Terre" width="700" height="400"> 
   <a href="single.php" class="btn-check">Room details</a>
   <div class="desc" style="color:white">Single Rooms</div>
   </div>

<div class="gallery">
    <img src="images/img_2.jpg" alt="Forest" width="700" height="400">
    <a href="family room.php" class="btn-check">Room details</a>
    <div class="desc" style="color:white">Family Room</div>
</div>

<div class="gallery">
    <img src="images/img_4.jpg" alt="Northern Lights" width="700" height="400">
    <a href="presidential.php" class="btn-check">Room details</a>
    <div class="desc" style="color:white">Presidential Room</div>
</div>
   
</div>
   
<div class="footer">
  <h4 style="color:white;">&copy;lily love <i class="fa fa-heart fa-1x"  style=" color:red;"></i> <?php echo date("Y");?></h4>
</div>

  
</body>
</html>