<form action="catalog_add.php" method="post" enctype="multipart/form-data">
    <h3>Фірма</h3>
    <select name="id_firms">
        <option value="0">Оберіть Фірму</option>
        {section loop = $categories name = k}
            <option value="{$categories[k].id}">{$categories[k].name}</option>
        {/section}
    </select>
    <h3>Модель</h3>
    <input type="text" name="model" placeholder="Model">
    <h3>Кількість</h3>
    <input type="number" name="count" placeholder="Кількість">
    <h3>Оперативна пам'ять</h3>
    <input type="number" name="ram" placeholder="Оперативна пам'ять в гб">
    <h3>Пам'ять</h3>
    <input type="number" name="storage" placeholder="Число гб">
    <h3>Операційна система</h3>
    <input type="text" name="oc" placeholder="Операційна система">
    <h3>Вміст батереї</h3>
    <input type="number" name="batery" placeholder="Число м/год">
    <h3>Колір</h3>
    <input type="text" name="color" placeholder="Колір">
    <h3>Ціна</h3>
    <input type="number" name="price" placeholder="Ціна">
    <h3>Опис</h3>
    <textarea name="discription" placeholder="Опис товара"></textarea>
    <h3>Додати Фото</h3>
    <input type="file" name="photo[]" multiple><br>
    <input type="submit" name="send" value="Додати">
</form>