<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$pass= "";
$do = "";

function loggedin(){
    if (isset($_SESSION['admin']) && !empty($_SESSION['admin'])){
        return true;
    }else{
        return false;
    }
}

try {
    $conn = new PDO("mysql:host=$servername;dbname=hotel_m", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    };
?>
