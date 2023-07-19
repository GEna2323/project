<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
</head>
<body>
<?php
if (isset($_POST['SingUp'], $_POST['login'], $_POST['email'], $_POST['password']) && !empty($_POST['login']) && !empty($_POST['email']) && !empty($_POST['password']) && $_POST['password'] == $_POST['rePassword']){

    require_once("admin/param.php");

    $queryTest = "select id from users where login = '{$_POST['login']}'";
    $resultTest = mysqli_query($dbc, $queryTest) or die("Query Error");
    $countUser = mysqli_num_rows($resultTest);

    if ($countUser > 0){
        echo "Акаунт з таким Логіном вже створений, оберіть інше ім'я. Назад <a href='logSign.php'>Click</a>";
    }
    else{
        $query = "insert into users (login, email, password) values ('{$_POST['login']}', '{$_POST['email']}', sha1('{$_POST['password']}'))";

        mysqli_query($dbc, $query) or die ("Query Error");

        echo "Ваш аккаунт успішно створений. <a href='LogSing.php'><button>Log in</button></a>";
    }

    mysqli_close($dbc);

}
else{
    echo "Дані введено не правильно";
}
?>
</body>
</html>