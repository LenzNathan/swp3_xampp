<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpandbootstrap";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "Delete from chatEntry";
$result = mysqli_query($conn, $sql);
$sql1 = "Delete from user";
$result = mysqli_query($conn, $sql1);

header("Location:index.php");
?>
