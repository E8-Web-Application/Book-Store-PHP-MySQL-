<?php 
$servername = "localhost";
$username = "cheat2001";
$password = "cheat@@&&2001";
$dbname = "testdb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>