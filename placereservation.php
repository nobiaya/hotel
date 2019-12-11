<?php require_once("../hotel/database/hoteldata.php"); 
require_once("admindash.php");
$pass="";
$do ="";
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
      $_SESSION['msg'] = "Reservation made successfully ok...";
      header('Location: placereservation.php');
    }
  catch(PDOException $e){
    $_SESSION['msg'] = "sorry an error occured while making the reservation...";
    header('Location: placereservation.php');
  }
}
?>      
<body>
<div class="header">
     </div>
     <h1 style="text-align:center;color:green;" >Place Rooms Reservation</h1>

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

    <label class="formtext">Room type</label>
    <select name="type" style="width: 100%;padding:12px;border: 1px solid #ccc;border-radius: 4px;resize: vertical;">
          <option value="" selected disabled> Select type</option>
          <option value="single">Single</option>
          <option value="family">Family</option>
          <option value="presidential">Presidential</option>
        </select>
  
        <label class="formtext">Room number</label>
    <input type="number" name="Rnum" placeholder="Room number.."
    style="width:100%;padding:12px;border:1px solid #ccc;border-radius:4px;resize: vertical;">

    <label class="formtext">Note</label>
    <textarea width="70%" height="50%" name="note"></textarea>
  
    <input type="submit" value="Submit" name="place_btn">
  </form>
</div>

</body>
</html>