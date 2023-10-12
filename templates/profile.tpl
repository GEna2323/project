<head>
    <link rel="stylesheet" type="text/css" href="../css/profile.css">
</head>
<body>
{if isset($tmp) && $tmp == 1}
    <div class="main_profile">
        <div class="profile_title">
            <b>Інформація про Вас</b>
        </div>
        <h2>FIO:</h2>
        <h3><i>{$client_FIO}</i></h3>
        <h2>E-mail:</h2>
        <h3><i>{$client_email}</i></h3>
        <h2>Adress:</h2>
        <h3><i>{$client_adress}</i></h3>
        <h2>Phone:</h2>
        <h3><i>{$client_phone}</i></h3>
        <div class="profile_buttons">
            <a href="exit.php">Вийти</a>
            <a href="profile.php?update">Змінити</a>
            <a href="list.php">До Каталогу</a>
        </div>

    </div>
    {elseif isset($tmp) && $tmp == 2}
    <div class="main_profile">
        <form action="profile.php" method="post">
            <div class="profile_title">
                <b>Редагування Інформації</b>
            </div>
            <h2>FIO:</h2>
            <input class="input" type="text" name="FIO" value="{$client_FIO}">
            <h2>E-mail:</h2>
            <input class="input" type="email" name="email" value="{$client_email}">
            <h2>Adress:</h2>
            <input class="input" type="text" name="adress" value="{$client_adress}">
            <h2>Phone:</h2>
            <input class="input" type="text" name="phone" value="{$client_phone}">
            <input type="hidden" name="id" value="{$client_id}">
            <div class="profile_buttons">
                <a href="profile.php">Відмінити</a>
                <input class="a" type="submit" name="send" value="Підтвердити">
            </div>
        </form>
    </div>
    {elseif isset($tmp) && $tmp == 3}
        <div class="main_profile">
            <h1>Всі дані крім E-mail Успішно відредаговані</h1>
            <h1>Така електронна адреса вже використовується</h1>
        </div>
    {elseif isset($tmp) && $tmp == 4}
    <div class="main_profile">
        <h1>Всі дані Успішно відредаговані</h1>
    </div>
{/if}
</body>