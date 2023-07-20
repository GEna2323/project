<?php
    session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
     <link rel="stylesheet" type="text/css" href="css/profile.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
<?php
require_once("admin/param.php");
    if (isset($_POST['LogIn'], $_POST['login'], $_POST['loginPassword']) && !empty($_POST['login']) && !empty($_POST['loginPassword'])){



        $query = "select id, login, email from users where login = '{$_POST['login']}' and password = sha1('{$_POST['loginPassword']}')";
        $result = mysqli_query($dbc, $query) or die("Query Error");
        $test = mysqli_num_rows($result);

        if ($test > 0){
        $row = mysqli_fetch_array($result);

        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_login'] = $row['login'];
        $_SESSION['user_email'] = $row['email'];


?>
        <div class="main">
            <div class="text">
                <p>Login - <?=$row['login']?></p>
                <p>E-mail - <?=$row['email']?></p>
                <p>Back - <a href="index.php">Click</a></p>
                <p>DB Control - <a href="admin/dataBaseControl.php">Click</a></p>
                <p>Sign Out - <a href="exit.php">Click</a></p>
            </div>
        </div>
<?php
        }
        else{
            echo "<div class='text'>Неправильно введені Логін, або пароль</div>";
        }

    }
    elseif(isset($_SESSION['user_login'], $_SESSION['user_email'], $_SESSION['user_id']) && !empty($_SESSION['user_email']) && !empty($_SESSION['user_email']) && !empty($_SESSION['user_id'])){

    ?>
    <div class="main">
        <div class="text">
            <p>Login - <?=$_SESSION['user_login']?></p>
            <p>E-mail - <?=$_SESSION['user_email']?></p>
            <p>Back - <a href="index.php">Click</a></p>
            <p>Add Catalog - <a href="admin/Catalog/addCatalog.php">Click</a></p>
            <p>Sign Out - <a href="exit.php">Click</a></p>
        </div>
    </div>
    <?php


    }
    else{
        echo "<div class='text'>Сталася помилка. <a href='logSign.php'>Back</a></div>";
    }
mysqli_close($dbc);
?>
</body>
</html>