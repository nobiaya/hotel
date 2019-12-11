<?php require_once("../hotel/database/hoteldata.php");
$namecontact = "";
$phonecontact = "";
$emailcontact = "";
$msgconnect = "";

if(isset($_POST['submitcontact'])){
  $ncontact = $_POST['namecontact'];
  $pcontact = $_POST['phonecontact'];
  $emailcontact = $_POST['emailcontact'];
  $msgconnect = $_POST['mgscontact'];
  try{
    $query = $conn->query("INSERT INTO contact_table(name_contact,phone_number,email,write_message)
    VALUES ('$ncontact','$pcontact','$emailcontact','$msgconnect')");
    $_SESSION['msg'] = "thanks for connecting lilys hotel...";
    header('Location: contact_us.php');
    }
  catch(PDOException $e){
    $do = "sorry an error occured...";
    $_SESSION['msg'] = "sorry an error occured...";
    header('Location: contact_us.php');
  }
}

?>
    
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="hotel.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/font-awesome.min.css">

</head>
<body>

<nav class="topnav">
   <h1 class="head">Lily's Royal Hotel</h1>
  <a href="reserv.php">Reservation</a>
  <a href="rooms.php">Rooms</a>
  <a href="contact_us.php">Contact us</a>
  <a href="about us.php">About us</a>
  <a href="index.php">Home</a>
</nav>





  <img src ="images/1.jpg"  width="100%vw" height="100%vh">

<div class="formwrapper">
  <form method="POST" action="contact_us.php">
    <label class="formtext">Name</label>
    <input type="text"  placeholder="Your name.." name="namecontact">

    <label class="formtext">Phone Name</label>
    <input type="text" placeholder="Your last name.." name="phonecontact">

    <label class="formtext">Email</label>
    <input type="text"  placeholder="Your email.." name="emailcontact">

    <label class="formtext">Write Message</label>
    <textarea col="20" row="20" name="mgscontact"></textarea>
  
    <input type="submit" value="Submit" name="submitcontact"><br>
    <?php echo $pass."".$do; ?>
  </form>
</div>

<div class="footer">
  <h4 style="color:white;">&copy;lily love <i class="fa fa-heart fa-1x"  style=" color:red;"></i> <?php echo date("Y");?></h4>
</div>

   
</body>
</html>