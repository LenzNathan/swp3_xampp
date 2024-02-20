<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpandbootstrap";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "Truncate chatEntry";
$result = mysqli_query($conn, $sql);
$sql1 = "Truncate user";
$result = mysqli_query($conn, $sql1);

header("Location:index.php");
?>
