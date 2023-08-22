<table border="2">
    <tr>
        <th>№</th>
        <th>Фото</th>
        <th>Модель</th>
        <th colspan="2">Управління</th>
    </tr>
    {section loop = $catalog name = k}
        <tr>
            <td>{$catalog[k].num}</td>
            <td><img src="../img/{$catalog[k].photo}" width="80px"></td>
            <td>{$catalog[k].model}</td>
            <td><a href="catalog_udpate.php?id={$catalog[k].id}&model={$catalog[k].model}">Редагування</a></td>
            <td><a href="catalog_dell.php?id={$catalog[k].id}&model={$catalog[k].model}">Видалення</a></td>
        </tr>
    {/section}

</table>