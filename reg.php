<?php
$servername = "192.168.4.55";
$username = "admin";
$password = "123qqq...A";
$dbname = "gamedb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("link fail: " . $conn->connect_error);
}else{echo "link mysql Ok"; echo "       ";} 

$username=$_POST['name'];
$userpassword=$_POST['password'];

$sql="insert into user (name,password) values ('$username','$userpassword')";
if($conn->query($sql)){echo "insert data ok"; }
$conn->close();

?>
