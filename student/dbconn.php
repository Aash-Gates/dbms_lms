<?php
session_start();
$dbservername = "sql109.epizy.com";
$dbusername = "epiz_27190123";
$dbpassword = "7AyNw7IMQwoc";
// Create connection
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword);
// Check connection
if (!$conn) {
    echo "Connected unsuccessfully";
    die("Connection failed: " . mysqli_connect_error());
}
?>
