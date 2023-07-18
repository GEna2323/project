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
    <title>Document</title>
</head>
<body>
<?php
    if (isset($_SESSION['user_login'], $_SESSION['user_email'], $_SESSION['user_id']) && !empty($_SESSION['user_email']) && !empty($_SESSION['user_email']) && !empty($_SESSION['user_id'])){

        $_SESSION = array();

        session_destroy();

        echo "Ви успішно вийшли з Особистого кабінету";

        header('refresh:4;url=index.php');

    }
    else{
        echo "Error";
        header('refresh:2;url=index.php');
    }

?>
</body>
</html>