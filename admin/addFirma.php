<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Firma</title>
</head>
<body>
<?php
    if (!isset($_POST['send'])){
?>
    <form action="addFirma.php" method="post">
        <h3>Додайте Фірму</h3>
        <input type="text" name="firma" placeholder="Наприклад: Samsung">
        <input type="submit" name="send" value="Додати">
    </form>
<?php
    }
    elseif(isset($_POST['send'], $_POST['firma']) && !empty($_POST['firma'])){

        require_once("../param.php");

        $queryChek = "select id from Firms where name = '{$_POST['firma']}'";
        $resultChek = mysqli_query($dbc, $queryChek) or die("Query Error");
        $countChek = mysqli_num_rows($resultChek);

        if ($countChek > 0){
            echo "Дана категорія вже додана. Спробувати ще: <a href='addFirma.php'>Click</a>";
        }
        else{
            $query = "insert into Firms (name) value ('{$_POST['firma']}')";

            mysqli_query($dbc, $query) or die("Query Error");

            echo "Категорія успішно додана. Додати ще: <a href='addFirma.php'>Click</a>";
        }

        mysqli_close($dbc);

    }
    else{
        echo "Невдалося додати категорію. Спробувати ще: <a href='addFirma.php'>Click</a>";
    }
?>
</body>
</html>