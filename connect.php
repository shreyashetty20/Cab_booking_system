<?php
session_start();
$fname =$_POST['name'];
$Phone =$_POST['pno'];
$pickup_location =$_POST['location'];
$Drop_location =$_POST['drop'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cab_booking";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);


$sql = "INSERT INTO customer VALUES ('".$fname."','".$Phone."','".$pickup_location."','".$Drop_location."');";
echo $sql;
$a=mysqli_query($conn,$sql);
header("Location:cartype.html");



?> 