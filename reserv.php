<?php require_once("../hotel/database/hoteldata.php"); 
if(isset($_POST['place_btn'])){
  $users_name = $_POST['users_name'];
  $phone_number = $_POST['phone_number'];
  $email = $_POST['email'];
  $type = $_POST['type'];
  $Rnum = $_POST['Rnum'];
  $check_in = $_POST['date_in'];
  $check_out = $_POST['date_out'];
  $note = $_POST['note'];

  try{
      $conn->query("INSERT INTO users_table(users_name, phone_number, email, room_type, room_number, check_in, check_out, note) VALUES ('$users_name','$phone_number','$email','$type','$Rnum','$check_in','$check_out','$note')");
      $_SESSION['msg'] = "Thanks for booking our room...";
      header('Location: reserv.php');
    }
  catch(PDOException $e){
    $_SESSION['msg'] = "sorry an error occured while booking the room...";
    header('Location: reserv.php');
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
  <a href="contact us.php">Contact us</a>
  <a href="about us.php">About us</a>
  <a href="index.php">Home</a>
</nav>

<img src ="images/1.jpg"  width="100%vw" height="100%vh">

<div class="formwrapper">
  <form method="POST">
    <h2 style="margin-bottom:10px;text-align:center;margin-top:10px;color:green">Enter reservation details<hr></h2>
    <label class="formtext">Name</label>
    <input type="text" name="users_name" placeholder="Your name..">

    <label class="formtext">Phone Number</label>
    <input type="text" name="phone_number" placeholder="Your phone number..">

    <label class="formtext">Email</label>
    <input type="email" name="email" placeholder="Your email.."
    style="width:100%;padding:12px;border:1px solid #ccc;border-radius:4px;resize: vertical;">

    <label class="formtext">Date Check In</label>
    <input type="date" name="date_in"
    style="width:100%;padding:12px;border:1px solid #ccc;border-radius:4px;resize: vertical;">

    <label class="formtext">Date Check out</label>
    <input type="date" name="date_out"
    style="width:100%;padding:12px;border:1px solid #ccc;border-radius:4px;resize: vertical;">

    <label class="formtext">Room Type</label>
    <input type="text" name="type" value="<?php if($_SESSION['type'] != ''){ echo $_SESSION['type'];}?>" placeholder="Room type.." readonly>
  
        <label class="formtext">Room number</label>
    <input type="number" name="Rnum" value="<?php if($_SESSION['choice'] != ''){ echo $_SESSION['choice'];}?>" placeholder="Room number.." readonly
    style="width:100%;padding:12px;border:1px solid #ccc;border-radius:4px;resize: vertical;">

    <label class="formtext">Note</label>
    <textarea width="70%" height="50%" name="note"></textarea>
  
    <input type="submit" value="Submit" name="place_btn">
  </form>
</div>

<div class="footer">
  <h4 style="color:white;">&copy;lily love <i class="fa fa-heart fa-1x"  style=" color:red;"></i> <?php echo date("Y");?></h4>
</div>

</body>
</html>