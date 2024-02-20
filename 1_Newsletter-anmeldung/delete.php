<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "swp_web1";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "Truncate newsletter";
$result = mysqli_query($conn, $sql);

header("Location:index.php");
?>
