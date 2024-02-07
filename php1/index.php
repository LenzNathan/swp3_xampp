<!Doctype html>
<html lang="de">
<body>
<h1>
    Hallo
</h1>
<?php
// anpassen
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

$sql = "SELECT * FROM newsletter";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Email " . $row["email"] . " <br>Anrede " . $row["anrede"] . " <br>Vorname " . $row["vorname"] . " <br>Nachname " . $row["nachname"] . "<br>";
        echo('<br>');
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
<br>
Daten Hinzufügen:
<form action="insert.php" method="post">
    <label>Anrede: <br>
        <input type="text" name="ar"></label><br>
    <label>Vorname: <br>
        <input type="text" name="vn"></label><br>
    <label>Nachname: <br>
        <input type="text" name="nn"></label><br>
    <label>E-Mail: <br>
        <input type="email" name="em"></label><br>
    <button type="submit">SENDEN</button>
</form>
<form action="delete.php" method="post">
    <button type="submit">ALLE DATEN LÖSCHEN</button>
</form>
</body>
</html>