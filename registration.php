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
    if (!isset($_POST['send'])){
?>
    <form action="registration.php" method="post">
        <h3>Registration</h3>
        <input type="text" name="firstName" placeholder="Firs Name"><br>
        <input type="text" name="surname" placeholder="Surname"><br>
        <input type="email" name="email" placeholder="Example@gmail.com">
        <input type="password" name="pass">
        <button type="submit" name="send" >Registration</button>
    </form>
<?php
    }
?>
</body>
</html>