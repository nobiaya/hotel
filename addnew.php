<?php 
require_once("admindash.php");
$pass="";
$do ="";
if(isset($_POST['add_btn'])){
  $Rtype = $_POST['Rtype'];
  $Rnum = $_POST['Rnum'];
  $Rdesc = $_POST['note'];
  $Rprice = $_POST['Rprice'];
  $Rimage = $_FILES['Rimage']['name'];
  $Rimage_tmp = $_FILES['Rimage']['tmp_name'];
  $img_encode = base64_encode(file_get_contents(addslashes($_FILES['Rimage']['tmp_name'])));

    try{
        $conn->query("INSERT INTO room_table(room_type, room_number, room_image, room_description, price) VALUES ('$Rtype','$Rnum','$img_encode','$Rdesc','$Rprice')");
        $_SESSION['msg'] = "Room added successfully ok...";
        header('Location: addnew.php');
    }
    catch(PDOException $e){
        $_SESSION['msg'] = "sorry an error occured while adding room...";
        header('Location: addnew.php');
    }
}
if(isset($_POST['btn_remove'])){
    $Rid = $_POST['Rid'];
    try{
        $conn->query("DELETE FROM room_table WHERE room_id = $Rid");
        $_SESSION['msg'] = "Room removed successfully ok...";
        header('Location: addnew.php');
    }
    catch(PDOException $e){
        $_SESSION['msg'] = "orry an error occured while removing room...";
        header('Location: addnew.php');
    }
}
?>
<body>
<div class="header">
     </div>

    <h1 style="text-align:center;color:green;" >ALL ROOMS</h1>
    <div class="formwrapper">
        <form method="POST" enctype="multipart/form-data">
            <h2 style="margin-bottom:10px;text-align:center;margin-top:10px;color:green">Add New Rooms<hr></h2>
            <label class="formtext">Room Type</label>
            <select name="Rtype"style="width:100%;padding:12px;border:1px solid #ccc;border-radius:4px;resize: vertical;">
                <option value="" selected disabled> Select type</option>
                <option value="single">Single room</option>
                <option value="family">Family room</option>
                <option value="presidential">Presidential room</option>
            </select>

            <label class="formtext">Room Number</label>
            <input type="number" name="Rnum" placeholder="Your phone number.."
            style="width:100%;padding:12px;border:1px solid #ccc;border-radius:4px;resize: vertical;">

            <label class="formtext">Room Image</label>
            <input type="file" name="Rimage"
            style="width:100%;padding:12px;border:1px solid #ccc;border-radius:4px;resize: vertical;">

            <label class="formtext">Room Description</label>
            <textarea width="70%" height="50%" name="note" placeholder=" Write room description here.."></textarea>
        
            <label class="formtext">Room Price</label>
            <input type="text" name="Rprice" placeHolder="Room price...">

            <input type="submit" value="Submit" name="add_btn">
        </form>
    </div>
    <br><h1 style="text-align:center;color:green;" >LIST OF ROOMS</h1><br>
    <div style="display: block;">
  <?php 
      $query1 = $conn->query("SELECT * FROM room_table");
      while($query_run1 = $query1->fetch(PDO::FETCH_ASSOC)){?>
          <table class="img" style="vertical-align:top;">
              <div style="float:left; background: red; margin:0 20px; padding: 10px; box-shadow: 0 5px 5px gray; width:30%; height:400px;">
                  <?php echo '<center><img width="100%" height="200px" src = "data:image;base64,'.$query_run1['room_image'].'"></center>';?><br><br>
                  <center><h2><?php echo $query_run1['room_number'] ?></h2></center>
                  <center><h3><?php echo $query_run1['room_type'] ?></h3></center>
                  <center><p><?php echo $query_run1['room_description'] ?></p></center>
                  <center><p><?php echo 'Price: N'.$query_run1['price'] ?></p></center>
                  <center><form method="post" style="float:left;">
                        <input type="hidden" name="Rid" value="<?php echo $query_run1['room_id'] ?>">
                        <button type="submit" name="btn_update">update</button>
                    </form>&nbsp;&nbsp;|&nbsp;&nbsp;<form method="post" style="float:left;">
                        <input type="hidden" name="Rid" value="<?php echo $query_run1['room_id'] ?>">
                        <button type="submit" name="btn_remove">remove</button>
                    </form></center>
                    <center><p><?php echo 'Price: N'.$query_run1['price'] ?></p></center>
              </div>
          </table>
      <?php
          }
      ?>
    </div>
    
</body>
</html>