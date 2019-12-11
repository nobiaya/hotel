<?php 
require_once("admindash.php");
$pass="";
$do ="";
if(isset($_POST['btn_remove'])){
    $Rid = $_POST['Rid'];
    try{
        $conn->query("DELETE FROM users_table WHERE users_id = $Rid");
        $_SESSION['msg'] = "Customer checked out successfully ok...";
        header('Location: checkreservation.php');
    }
    catch(PDOException $e){
        $_SESSION['msg'] = "sorry an error occured  while checking out the customer...";
        header('Location: checkreservation.php');
    }
}
?>
<body>
<div class="header">
     </div>
     <table cellspacing="20px" cellpadding="20px" style="width:98%; margin:10px auto;padding:10px;background-color:#ccc;">
    
        <caption><h1 style="text-align:center; color:green;margin:10px;padding:10px;">Check all reservation<h1></caption>
        <tr>
            <th>S/n</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Type</th>
            <th>Number</th>
            <th>Check in</th>
            <th>Check out</th>
            <th>Note</th>
            <th>Action</th>
        </tr>
        <?php 
            $query1 = $conn->query("SELECT * FROM users_table ");
            while($query_run1 = $query1->fetch(PDO::FETCH_ASSOC)){?>
            <tr>
                <td><?php echo $query_run1['users_id'] ?></td>
                <td><?php echo $query_run1['users_name'] ?></td>
                <td><?php echo $query_run1['phone_number'] ?></td>
                <td><?php echo $query_run1['email'] ?></td>
                <td><?php echo $query_run1['room_type'] ?></td>
                <td><?php echo $query_run1['room_number'] ?></td>
                <td><?php echo $query_run1['check_in'] ?></td>
                <td><?php echo $query_run1['check_out'] ?></td>
                <td><?php echo $query_run1['note'] ?></td>
                <td><form method="post">
                    <input type="hidden" name="Rid" value="<?php echo $query_run1['users_id'] ?>">
                    <input type="submit" value="remove" name="btn_remove" style="background-color:green;border:none;width:70px;height:20px;color:white;border-radius:5px;">
                </form></td>
            </tr>
        <?php
            }
        ?>

</table>
</body>
</html>