<?php
$ar = $_REQUEST["ar"];
$vn = $_REQUEST["vn"];
$nn = $_REQUEST["nn"];
$em = $_REQUEST["em"];

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

$sql = "INSERT INTO newsletter (Anrede, Vorname, Nachname, Email) VALUES ('$ar','$vn','$nn','$em')";
$result = mysqli_query($conn, $sql);

header("Location:index.php");
?>
<html lang="de">
Inserting
</html>