<form action="admin_photo_dell.php" method="post">
    <h4>Ви дійсно збираєтесь видалити фото:</h4>
    <img src="img/{$photo}" width="80px">
    <input type="radio" name="dell" value="Yes" checked>Yes
    <input type="radio" name="dell" value="No">No
    <input type="submit" name="send" value="Підтвердити">
</form>