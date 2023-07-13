<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Каталог</title>
</head>
<body>
<?php
require_once("admin/param.php");

$query = "select id, name from Firms";

$result = mysqli_query($dbc, $query) or die ("Query Error");



$num = 1;
echo "<ul>";
while ($row = mysqli_fetch_array($result)){

    echo "<li>$num {$row['name']}</li>";
    $num++;

}

echo "</ul>";

mysqli_close($dbc);
?>
</body>
</html>