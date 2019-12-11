<?php require_once("../hotel/database/hoteldata.php");
    $pass="";
    $do ="";
    if(isset($_POST['book_btn'])){
      $_SESSION['choice'] = $_POST['Rnum'];
      $_SESSION['type'] = 'presidential';
      header('Location: reserv.php');
    }
    if(isset($_POST['add_btn'])){
      $Rtype = $_POST['Rtype'];
      $Rnum = $_POST['Rnum'];
      $Rdesc = $_POST['note'];
      $Rimage = $_FILES['Rimage']['name'];
      $Rimage_tmp = $_FILES['Rimage']['tmp_name'];
      $img_encode = base64_encode(file_get_contents(addslashes($_FILES['Rimage']['tmp_name'])));
    
        try{
            $conn->query("INSERT INTO room_table(room_type, room_number, room_image, room_description) VALUES ('$Rtype','$Rnum','$img_encode','$Rdesc')");
        }
        catch(PDOException $e){
            $do = "sorry an error occured...";
            echo $e->getMessage();
        }
    }
?>
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

  <h1 style="text-align:center;color:green;" >PRESIDENTIAL ROOM</h1><br>
<div style="display: block;">
  <?php 
      $query1 = $conn->query("SELECT * FROM room_table WHERE room_type = 'presidential'");
      while($query_run1 = $query1->fetch(PDO::FETCH_ASSOC)){?>
          <table class="img" style="vertical-align:top;">
              <div style="float:left; background: rgb(180, 180, 180); margin:0 20px; padding: 10px; box-shadow: 0 5px 5px gray; width:30%; height:400px;">
                  <?php echo '<center><img width="100%" height="200px" src = "data:image;base64,'.$query_run1['room_image'].'"></center>';?><br><br>
                  <center><h2><?php echo $query_run1['room_number'] ?></h2></center>
                  <center><h3><?php echo $query_run1['room_type'] ?></h3></center>
                  <center><p><?php echo $query_run1['room_description'] ?></p></center>
                  <center><p><?php echo 'Price: N'.$query_run1['price'] ?></p></center>
                  <center><form method="post" style="float:left;">
                      <input type="hidden" name="Rnum" value="<?php echo $query_run1['room_number'] ?>">
                      <button type="submit" name="book_btn"  style="color:white;background-color:green;width:70px;height:30px;border:none;">Book Now</button>
                  </form></center>
              </div>
          </table>
      <?php
          }
      ?>
    </div>

<br>

      
<div class="footer">
  <h4 style="color:white;">&copy;lily love <i class="fa fa-heart fa-1x"  style=" color:red;"></i> <?php echo date("Y");?></h4>
</div>

</body>
</html>