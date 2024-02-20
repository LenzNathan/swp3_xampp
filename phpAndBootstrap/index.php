<!Doctype html>
<html lang="en">
<head>
    <title>Global Chat</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-info-subtle">
<?php
// anpassen
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpandbootstrap";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM chatEntry order by sendtime DESC limit 200";
$result = mysqli_query($conn, $sql);
?>
<h1 class="bg-info p-3 rounded-pill text-center w-50 m-auto mt-3 mb-3">
    Welcome to the global Chat!!
</h1>
<div class="d-flex justify-content-center bg-white">

    <div class="flex-column p-3 border border-3 border-dark w-50 rounded-5">
        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "Written by: " . $row["writer"] . " <br>Sent at: " . $row["sendtime"] . " <br>Content: <b>" . $row["message"];
                echo('</b><br> <br>');
            }
        } else {
            echo "0 results";
        }
        ?>
    </div>

    <div class="flex-column ms-3 w-25 p-3 border border-3 border-dark rounded-5">
        <form action="login.php" method="post" class="border border-3 border-dark p-3 rounded-5 mb-3">
            <label>If
                <input type="text" name="writer">
                has no account, please</label><br>
            <button class="rounded-pill mt-2" type="submit">create an account</button>
            <label>.</label>
        </form>
        <form action="newChatEntry.php" method="post" class="border border-3 border-dark p-3 rounded-5 mb-3">
            <label>I'm known as
                <select name="writer" id="Usernames">
                    <?php
                    $sql = "SELECT name FROM user";
                    $writers = mysqli_query($conn, $sql);
                    while ($Wrow = mysqli_fetch_assoc($writers)) {
                        echo "<option value=" . $Wrow["name"] . ">" . $Wrow["name"] . "</option>";
                    }
                    ?>
                </select>
            </label><br>
            <label>Message:
                <input type="text" name="message"></label><br>
            <button class="rounded-pill mt-2" type="submit">SENDEN</button>
        </form>
        <form action="delAll.php" method="post">
            <button class="rounded-pill" type="submit">Delete all Data</button>
        </form>
    </div>
</div>
</body>
</html>
