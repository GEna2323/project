<form action="catalog_dell.php" method="post">
    <h4>Ви дійсно хочите видалити товар: {$model}</h4>
    <input type="radio" name="dell" value="Yes" checked>Yes
    <input type="radio" name="dell" value="No">No
    <input type="hidden" name="id" value="{$id}">
    <input type="submit" name="send" value="Видалити">
</form>