<head>
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="main-login">
        <input type="checkbox" id="chk" aria-hidden="true">

        <div class="signup">
            <form method="post" action="registration.php">
                <label for="chk" aria-hidden="true">Sign up</label>
                <input class="input" type="text" name="FIO" placeholder="FIO" required="">
                <input class="input" type="email" name="email" placeholder="Email" required="">
                <input class="input" type="password" name="password" placeholder="Password" required="">
                <input class="input" type="password" name="re_password" placeholder="Re Password" required="">
                <input class="button-login" type="submit" name="send" value="Sing Up">
            </form>
        </div>

        <div class="login">
            <form method="post" action="login.php">
                <label for="chk" aria-hidden="true">Login</label>
                <input class="input" type="email" name="email" placeholder="Email" required="">
                <input class="input" type="password" name="password" placeholder="Password" required="">
                <input class="button-login" type="submit" name="send" value="Log In">
            </form>
        </div>
    </div>
</body>