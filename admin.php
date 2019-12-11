
<?php require_once("../hotel/database/hoteldata.php");
if(isset($_POST['name_btn'])){
  $userN = $_POST['user'];
  $passW = $_POST['pass'];
  $pass= "";
  $do = "";

  $query = $conn->query("SELECT * FROM admin_table");
  $query_run = $query->fetch(PDO::FETCH_ASSOC);
  if ($query_run['userN'] == $userN && $query_run['passW'] == $passW) {
    $pass= 'welcome';
    $_SESSION['admin'] = $userN;
    $conn = null;
    header('Location: admindash.php');
  }else{
    $_SESSION['msg'] = "sorry username or password incorrect...";
    header('Location: admin.php');
  }
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
<body style="background-color:lightblue;">

<div class="header">
     <h1 class="head">Lily's Royal Hotel</h1>
     </div>


     <div class="logform">
     <h1 class="logtext">Admin Log In</h1>
     <?php echo $do; ?>
    <form method="POST">
        <label class="logtext">Username</label>
        <input type ="text"  name="user" style="border:none;">

        <label class="logtext">Password</label>
        <input type ="password" name="pass" style="border:none;"><br><br>
    
        <button type="submit" style="width:70px;height:25px;color:white;background-color:green;border:none;" name="name_btn">login</button>
    </div>
    </form>

    
</body>
</html>