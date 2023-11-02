<form action="catalog_index.php" method="get">
    <select name="firms">
        <option value="0">Всі Категорії</option>
        {section loop = $firms name = i}
            {if ( isset($newFirma) && $newFirma == $firms[i].id_firm)}
                <option value="{$firms[i].id_firm}" selected>{$firms[i].firma}</option>
                {else}
                <option value="{$firms[i].id_firm}">{$firms[i].firma}</option>
            {/if}
        {/section}
    </select>
    <input type="submit" name="send" value="Сортувати">
</form>

{if ($count > 0)}
    <table border="2">
        <tr>
            <th>№</th>
            <th>Фото</th>
            <th>Модель</th>
            <th>Цена</th>
            <th colspan="2">Управління</th>
        </tr>
        {section loop = $catalog name = k}
            <tr>
                <td>{$catalog[k].num}</td>
                <td><img src="../img/{$catalog[k].photo}" width="65px"></td>
                <td>{$catalog[k].model}</td>
                <td>{$catalog[k].price}</td>
                <td><a href="catalog_update.php?id={$catalog[k].id}">Редагування</a></td>
                <td><a href="catalog_dell.php?id={$catalog[k].id}&model={$catalog[k].model}">Видалення</a></td>
            </tr>
        {/section}

    </table>
    {else}
    <h3>Нажаль в даній категорії ще не має товарів</h3>
{/if}