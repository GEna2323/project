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

$query = "select id, foto, model, countclothers from clothes";

$result = mysqli_query($dbc, $query) or die ("Query Error");

echo "<table border='1'><tr><th>№</th><th>Фото</th><th>Модель</th><th>Кількість</th><th>Детальніше</th></tr>";

$num = 1;
while ($row = mysqli_fetch_array($result)){
    if (empty($row['foto'])){
        $row['foto'] = 'noPhoto.png';
    }
    echo "<tr><td>$num</td><td><img width='150px' src='imagines/{$row['foto']}'></td><td>{$row['model']}</td><td>{$row['countclothers']}</td><td><a href='info.php?id={$row['id']}'>Детальніше</a></td>";
    $num++;
}
echo "</table>";

mysqli_close($dbc);
?>
</body>
</html>