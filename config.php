<?php
$servername = "localhost:3307";
$username = "root";
$password = "meet06@";
$dbname = "mydb";

$conn = mysqli_connect($servername, $username, $password,$dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
?>
