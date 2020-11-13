<?php
session_start();
$dbservername = "sql303.epizy.com";
$dbusername = "epiz_27044883";
$dbpassword = "E0LEDVLYRm";
$dbname="epiz_27044883_LMS";
// Create connection
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
// Check connection
if (!$conn) {
    echo "Connected unsuccessfully";
    die("Connection failed: " . mysqli_connect_error());
}
?>