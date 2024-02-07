<html lang="en">
Trying to insert data
</html>
<?php
$writer = $_REQUEST["writer"];
$message = $_REQUEST["message"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpandbootstrap";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "Insert Into chatEntry(writer, message) Values('$writer','$message')";
$result = mysqli_query($conn, $sql);

header("Location:index.php");

?>