<form action="pass_update.php" method="post">
    <h4>Введіть старий пароль</h4>
    <input type="password" name="pass">
    <h4>Введіть старий пароль</h4>
    <input type="password" name="new_pass">
    <h4>Введіть старий пароль</h4>
    <input type="password" name="re_new_pass">
    <input type="hidden" name="id" value="{$id}">
    <input type="submit" name="send" value="Змінити">
</form>