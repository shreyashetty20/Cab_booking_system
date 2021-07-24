<?php
session_start();
$car =$_POST['car'];    
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cab_booking";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);


$sql = "INSERT INTO car VALUES ('".$car."');";
echo $sql;
$a=mysqli_query($conn,$sql);
header("Location:code2.html");



?> 