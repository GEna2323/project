<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Firm Control</title>
</head>
<body>
<?php
    require_once("../param.php");

    $query = "select id, name from Firms";

    $result = mysqli_query($dbc, $query) or die("Query Error");



    echo "<table border='2'><tr><th>№</th><th>Firma</th><th>Delete</th></tr>";

    $num = 1;
    while($row = mysqli_fetch_array($result)){

        echo "<tr><td>$num</td><td>{$row['name']}</td><td><a href='dellFirma.php?id={$row['id']}&firma={$row['name']}'>Click</a></td></tr>";
        $num++;
    }

    echo "</table>Add more - <a href='addFirma.php'>Click</a>";

    mysqli_close($dbc);

?>
</body>
</html>