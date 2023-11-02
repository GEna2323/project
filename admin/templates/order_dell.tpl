<head>

</head>
<body>
    <form action="order_dell.php" method="post">
        <h4>Ви дійсно збираєтеся видалити замовлення {if $tmp == 'client'}Клієнта{else}Відвідувача{/if} "{$FIO}", з датою створення "{$orderData}"</h4>
        <input type="radio" name="dell" value="Yes" checked> Yes
        <input type="radio" name="dell" value="No"> No
        <input type="hidden" name="id" value="{$id}">
        <input type="hidden" name="data" value="{$orderData}">
        <input type="hidden" name="tmp" value="{$tmp}">
        <input type="submit" name="send" value="Підтвердити">
    </form>
</body>