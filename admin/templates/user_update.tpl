<form action="user_update.php" method="post" enctype="multipart/form-data">
    <h4>Фото профілю:</h4>
    <img src="img/{$photo}" width="80px">
    {if ($photo) != 'no_admin_photo.png'}
        <br><a href="admin_photo_dell.php?id={$id}">Видалити Фото</a>
    {/if}
    <h4>Змінити Ім'я</h4>
    <input type="text" name="name" value="{$name}">
    <h4>Змінити Номер телефону</h4>
    <input type="text" name="phone" value="{$phone}">
    <h4>Змінити E-mail</h4>
    <input type="email" name="email" value="{$email}">
    <h4>Змінити Фото</h4>
    <input type="file" name="photo">
    <br>
    <h4>Змінити пароль: <a href="pass_update.php?id={$id}">Click</a></h4>
    <input type="hidden" name="role" value="{$role}">
    <input type="hidden" name="id" value="{$id}">
    <input type="submit" name="send" value="Прийняти Зміни">
</form>