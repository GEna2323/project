<table border="2">
    <tr>
        <th>№</th>
        <th>Фото</th>
        <th>Назва</th>
        <th colspan="2"></th>
    </tr>
    {section loop = $catalog name = k}
        <tr>
            <td>{$catalog[k].num}</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    {/section}
</table>