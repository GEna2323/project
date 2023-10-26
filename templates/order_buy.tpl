<head>
    <link rel="stylesheet" type="text/css" href="../css/order.css">
</head>
<body>
{if isset($tmp) && $tmp == 1}
<div class="form">
    <table>
        <tr>
            <th>№</th>
            <th>Photo</th>
            <th>Model</th>
            <th>Price</th>
            <th>Count</th>
            <th>Full Price</th>
        </tr>
        {section loop $basket name = k}
            <tr>
                <td>{$basket[k].num}</td>
                <td><img width="60px" src="img/{$basket[k].photo}"></td>
                <td>{$basket[k].model}</td>
                <td>{$basket[k].price}</td>
                <td>{$basket[k].count}</td>
                <td>{$basket[k].full_price}</td>
            </tr>
        {/section}
        <tr>
            <th colspan="4">Total Price:</th>
            <th colspan="2">{$total_price}</th>
        </tr>
    </table>
</div>
<div class="visitor_buy">
    {if isset($client)}
        <h4>Ви авторезовані, змініть дані за потреби:</h4>
        <form method="post" action="order_buy.php">
            <table>
                <tr><th>Email -></th><td>{$client['email']}</td></tr>
                <tr><th>Phone Number -> </th><td><input type="text" name="number" value="{$client['phone']}"></td></tr>
                <tr><th>FIO -> </th><td><input type="text" name="FIO" value="{$client['FIO']}"></td></tr>
                <tr><th>Your Adress -> </th><td><input type="text" name="adress" value="{$client['adress']}"></td></tr>
                <tr><th>Note -> </th><td><textarea name="description"></textarea></td></tr>
                <tr><th>Order -></th><td><input type="submit" name="send" value="Click"></td></tr>
                <input type="hidden" name="user" value="client">
                <input type="hidden" name="id" value="{$client['id']}">
            </table>
        </form>
        {else}
        <h4><a href="login.php">Увійдіть</a> або оформіть як гість:</h4>
        <form method="post" action="order_buy.php">
            <table>
                <tr><th>Email -></th><td><input type="email" name="email"></td></tr>
                <tr><th>Phone Number -> </th><td><input type="text" name="number"></td></tr>
                <tr><th>FIO -> </th><td><input type="text" name="FIO"></td></tr>
                <tr><th>Your Adress -> </th><td><input type="text" name="adress"></td></tr>
                <tr><th>Note -> </th><td><textarea name="description"></textarea></td></tr>
                <tr><th>Order -></th><td><input type="submit" name="send" value="Click"></td></tr>
                <input type="hidden" name="user" value="visitor">
            </table>
        </form>
    {/if}

</div>
    {elseif (isset($tmp) && $tmp == 2)}
    <h1>Ваше замовлення успішно прийнято на опрацювання</h1>
{/if}
</body>