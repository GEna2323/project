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

    if (isset($_POST['LogIn'], $_POST['login'], $_POST['loginPassword']) && !empty($_POST['login']) && !empty($_POST['loginPassword'])){

        require_once("admin/param.php");

        $query = "select login, email from users where login = '{$_POST['login']}' and password = sha1('{$_POST['loginPassword']}')";
        $result = mysqli_query($dbc, $query) or die("Query Error");
        $test = mysqli_num_rows($result);

        if ($test > 0){
        $row = mysqli_fetch_array($result);


?>
        <div class="main">
            <div class="text">
                <p>Login - <?=$row['login']?></p>
                <p>E-mail - <?=$row['email']?></p>
                <p>Back - <a href="index.html">Click</a></p>
            </div>
        </div>
<?php
        }
        else{
            echo "<div class='text'>Неправильно введені Логін, або пароль</div>";
        }
        mysqli_close($dbc);
    }
    else{
        echo "<div class='text'>Сталася помилка. <a href='logSign.php'>Back</a></div>";
    }

?>
</body>
</html>