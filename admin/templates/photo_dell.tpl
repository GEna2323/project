<form action="photo_dell.php" method="post">
    <h3>Ви дійсно збираєтесь видалити {if $status == 1}ГОЛОВНЕ{else}ДОДАТКОВЕ{/if} Фото?</h3>
    <img src="../img/{$photo}" width="80px">
    <input type="radio" name="dell" value="Yes" checked>Yes
    <input type="radio" name="dell" value="No">No
    <input type="hidden" name="id" value="{$id}">
    <input type="hidden" name="product_id" value="{$product_id}">
    <input type="submit" name="send" value="Видалити">
</form>