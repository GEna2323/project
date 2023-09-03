<form action="registration.php" method="post" enctype="multipart/form-data">
    <h3>Name</h3>
    <input type="text" name="name" placeholder="Your Name">
    <h3>Email</h3>
    <input type="email" name="email" placeholder="Example@gmail.com">
    <h3>Phone number</h3>
    <input type="text" name="phone">
    <h3>Роль</h3>
    <select name="role">
        <option value="0">Оберіть Посаду</option>
        <option value="1">Головний Адмін - 1</option>
        <option value="2">Заступник адміна - 2</option>
    </select>
    <h3>Пароль</h3>
    <input type="password" name="password">
    <h3>Повторіть пароль</h3>
    <input type="password" name="re_password">
    <br>
    <input type="file" name="photo">
    <br>
    <input type="submit" name="send" value="Зареєструвати">
</form>