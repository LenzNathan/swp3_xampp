<!Doctype html>
<html lang="en">
<head>
    <title>Global Chat</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-info-subtle">
Inserting...
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
if (str_contains($name, " ")) {
    echo "<b><u><i><h1 class='bg-danger rounded-pill text-center w-50 m-auto mt-3'> !!!NO SPACE ALLOWED!!!</h1></b></u></i>";
    echo "<div class='d-flex justify-content-center'>
            <form action='index.php' method='post' class='mt-2'>
                <button class='rounded-pill' type='submit'>Oh_my_god,_i_will_have_to_use_underscore!</button>
            </form>
          </div>";
} else {
    $sql = "Insert Into user(name, password) Values('$name','$pwd')";
    $result = mysqli_query($conn, $sql);

    header("Location:index.php");
}
?>