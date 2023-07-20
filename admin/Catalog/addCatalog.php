<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Tovar</title>
</head>
<body>
<?php
require_once("../param.php");
    if (!isset($_POST['send'])){

?>
    <form action="addCatalog.php" method="post" enctype="multipart/form-data">
        <h2>Add Catalog</h2>
        Model - <input type="text" name="model" placeholder="Наприклад: Samsung Galaxy A24"><br>
        Price - <input type="number" name="price" placeholder="Наприклад: 10 000"><br>
        Firma - <select name="id_firma">
        <?php
        echo "<option value='0'>Оберіть Фірму</option>";
        $query = "select id, name from Firms";
        $result = mysqli_query($dbc, $query) or die("Query Error");
        while($row = mysqli_fetch_array($result)){
            echo "<option value='{$row['id']}'>{$row['name']}</option>";
        }
        ?>
        </select><br>
        Count - <input type="number" name="count" min="0"><br>
        Photo - <input type="file" name="photo"><br>
        <input type="submit" name="send" value="Додати">
    </form>
<?php
    }
    elseif(isset($_POST['model'], $_POST['price'], $_POST['id_firma'], $_POST['send'], $_POST['count']) && !empty($_POST['count']) && !empty($_POST['model']) && !empty($_POST['price']) && !empty($_POST['id_firma'])){

        if ($_FILES['photo']['error'] == 0){
            $TMPFileName = $_FILES['photo']['tmp_name'];
            $realFileName = time().$_FILES['photo']['name'];

            move_uploaded_file($TMPFileName, "../../img/catalog/$realFileName");

            $query = "insert into catalog (model, price, id_firms, count, photo) values('{$_POST['model']}','{$_POST['price']}','{$_POST['id_firma']}', '{$_POST['count']}','$realFileName')";

        }
        else{
            echo "Виникла помилка в додаавання Фото, спробуйте ще раз <a href='addCatalog.php'>Click</a>";
        }

        mysqli_query($dbc, $query) or die("Query Error2.0");

        echo "Товар Успішно доданий , Вітаю <a href='addCatalog.php'>Click</a>";

        header('refresh:2;url:addCatalog.php');


    }
mysqli_close($dbc);
?>
</body>
</html>