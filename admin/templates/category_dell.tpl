{if (!isset($count))}
<form action="category_dell.php" method="post">
    <h3>Ви дійсно збираєтесь видалити категорію: "{$name}"</h3>
    <input type="radio" name="dell" value="Yes" checked>Yes
    <input type="radio" name="dell" value="No">No
    <input type="hidden" name="id" value="{$id}">
    <input type="submit" name="send" value="Видалити">
</form>
{else}
<h4>Видалення неможливо, так як ще є товари в даній категорії: {$count}</h4>
Пареглянути Товари: <a href="catalog_index.php?id={$id_cat}">Click</a>

{/if}