<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dell Firma</title>
</head>
<body>
<?php
    if (isset($_GET['id'], $_GET['firma']) && !empty($_GET['id']) && !empty($_GET['firma'])){
?>
    <form action="dellFirma.php" method="post">
        <h1>Ви дійсно Бажаєте видалити Фірму <?=$_GET['firma']?> з БД?</h1>
        <input type="radio" name="dell" value="Yes">Yes
        <input type="radio" name="dell" value="No">No
        <input type="submit" name="send" value="Видалити">
        <input type="hidden" name="id" value="<?=$_GET['id']?>">
    </form>
<?php
    }
    elseif(isset($_POST['dell'], $_POST['send'], $_POST['id']) && !empty($_POST['dell']) && !empty($_POST['id']) && $_POST['dell'] == 'Yes'){

        require_once('../param.php');

        $query = "delete from Firms where id = {$_POST['id']}";
        mysqli_query($dbc, $query) or die("Query Error");

       echo "Фірма успішно видалена з категорії. Назад до списку: <a href='firmControl.php'>Click</a>";

    }
    else{
        echo "Видалення не вдалося, спробуйте ще раз: <a href='firmControl.php'>Click</a>";
    }

?>
</body>
</html>