<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php-Teil</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-info-subtle">
<h1 class="bg-info p-3 rounded-pill text-center w-50 m-auto mt-3 mb-3">PHP - Teil</h1>
<?php
$verzeichnis = scandir("./");
for ($i = 4; $i < count($verzeichnis) - 2; $i++) {
    echo "<div class='bg-info p3 rounded-pill text-center w-25 m-auto mt-3 mb-3'>
             <a class='text-white' href='$verzeichnis[$i]/index.php'>$verzeichnis[$i]</a>
         </div>";
}
?>
</body>
</html>