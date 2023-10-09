<head>
    <link rel="stylesheet" type="text/css" href="../css/basket.css">
</head>
<body>
<form action="basket.php" method="post">
    <table>
        <tr>
            <th>№</th>
            <th>Photo</th>
            <th>Model</th>
            <th>Price</th>
            <th>Count</th>
            <th>Full Price</th>
            <th>Delete</th>
        </tr>
    {section loop $basket name = k}
        <tr>
            <td>{$basket[k].num}</td>
            <td><img width="60px" src="img/{$basket[k].photo}"></td>
            <td>{$basket[k].model}</td>
            <td>{$basket[k].price}</td>
            <td><input type="number" name="count{$basket[k].id}" min="1" value="{$basket[k].count}"></td>
            <td>{$basket[k].full_price}</td>
            <td><a href="basket.php?mode=dell&id={$basket[k].id}">Dell</a></td>
        </tr>
    {/section}
        <tr>
            <th colspan="5">Total Price:</th>
            <th colspan="2">{$total_price}</th>
        </tr>
        <tr>
            <th colspan="5"><input type="submit" name="send" value="Apply Changes"</th>
            <th colspan="2"><a href="basket.php?mode=clear">Clear All</a></th>
        </tr>
        <tr>
            <th colspan="4">
                {if isset($ready_params) && !empty($ready_params)}
                    <a href="catalog.php?{$ready_params}">Продовжити купівлю</a>
                    <input type="hidden" name="ready_params" value="{$ready_params}">
                    {else}
                    <a href="catalog.php">Продовжити купівлю</a>
                {/if}
            </th>
            <th colspan="3">
                <a href="order_buy.php">Продовжити замовлення</a>
            </th>
        </tr>
    </table>
</form>
</body>