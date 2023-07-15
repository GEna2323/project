<!DOCTYPE html>
<html>
<head>
    <title>Slide Navbar</title>
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
<?php
if (!isset($_POST['SingUp'], $_POST['LogIn'])){
    ?>
    <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true">

        <div class="signup">
            <form method="post" action="registration.php">
                <label for="chk" aria-hidden="true">Sign up</label>
                <input type="text" name="login" placeholder="Login" required="">
                <input type="email" name="email" placeholder="Email" required="">
                <input type="password" name="password" placeholder="Password" required="">
                <input type="password" name="rePassword" placeholder="Re Password" required="">
                <button type="submit" name="SingUp" value="SingUp">Sing Up</button>
            </form>
        </div>

        <div class="login">
            <form method="post" action="profile.php">
                <label for="chk" aria-hidden="true">Login</label>
                <input type="text" name="login" placeholder="Login" required="">
                <input type="password" name="loginPassword" placeholder="Password" required="">
                <button type="submit" name="LogIn" value="LogIn">Log In</button>
            </form>
        </div>
    </div>

    <?php
}
else{
    echo "There was a problem, Please try again <a href='LogSing.php'>Click</a>";
}
?>
</body>
</html>