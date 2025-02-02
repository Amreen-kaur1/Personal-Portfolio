<?php
$servername= "localhost";
$username= "root";
$password = "";
$database = "portfolio";

$conn = mysqli_connect($servername, $username, $password, $database);

if($conn){
    // echo "Connected";
}
else{
    die("Connection failed: ".mysqli_connect_error());
}
?>