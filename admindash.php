<?php require_once("../hotel/database/hoteldata.php");
$do = "";
if(!loggedin()){ 
    header('Location: admin.php');
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="hotel.css">
    <title>Document</title>
</head>
<body>
<?php echo $pass; ?>
<div class="header" style="padding: 0 3%;">
     <h1 class="head" style="float: left;">Lily's Royal Hotel</h1>
</div>

  <div class = "topnavdash"  style="clear:both;">
    <h1>ADMIN DASHBOARD</h1>
    <h3><a href="logout.php" style="float: right;color:red;text-decoration:none;">Logout</a></h3>
  </div>

  <div class="grid-container">
  <div class="grid-item"><a href="addnew.php">Rooms</a></div>
  <div class="grid-item"><a href="checkreservation.php">Resevations</a></div>
  <div class="grid-item"><a href="placereservation.php">Place reservation</a></div>  
</div>

  
</body>
</html>