<table border="2">
    <tr>
        <th>№</th>
        <th>Назва</th>
        <th colspan="2">Управління</th>
    </tr>
    {section loop = $category name = k}
        <tr>
            <td>{$category[k].num}</td>
            <td>{$category[k].name}</td>
            <td><a href="category_update.php?id={$category[k].id}&name={$category[k].name}">Редагувати</a></td>
            <td><a href="category_dell.php?id={$category[k].id}&name={$category[k].name}">Видалити</a></td>
        </tr>
    {/section}



</table>