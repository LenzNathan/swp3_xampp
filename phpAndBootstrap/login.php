<html lang="en">
Inserting
</html>
<?php

$name = $_REQUEST["writer"];
$pwd = $_REQUEST["pwd"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpandbootstrap";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "Insert Into user(name, password) Values('$name','$pwd')";
$result = mysqli_query($conn, $sql);

header("Location:index.php");

?>