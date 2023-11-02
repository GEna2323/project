<head>
    <style>

    </style>
</head>
<body>
    <h3>Clients</h3>

        {section loop = $client name = k}
            {if ($client[k].data != $client[k].change_client_data || $client[k].id != $client[k].change_client_id)}
    <table border="2">
                <tr>
                    <th>№</th>
                    <th>FIO</th>
                    <th>E-mail</th>
                    <th>Phone</th>
                    <th>Adress</th>
                    <th>Data</th>
                    <th>Note</th>
                    <th colspan="2">Control</th>
                </tr>
                <tr>
                    <td>{$client[k].num}</td>
                    <td>{$client[k].FIO}</td>
                    <td>{$client[k].email}</td>
                    <td>{$client[k].phone}</td>
                    <td>{$client[k].adress}</td>
                    <td>{$client[k].data}</td>
                    <td>{$client[k].description}</td>
                    <td><a href="">Archiv</a></td>
                    <td><a href="order_dell.php?id={$client[k].id}&data={$client[k].data}&tmp=client">Dell</a></td>
                </tr>
                <tr>
                    <th>Photo</th>
                    <th colspan="5">Item Name</th>
                    <th>Price</th>
                    <th>Count</th>
                    <th>Full Price</th>
                </tr>
            {/if}

            <tr>
                <td><img width="45px" src="../img/{$client[k].photo}"></td>
                <td colspan="5">{$client[k].model}</td>
                <td>{$client[k].price}</td>
                <td>{$client[k].count}</td>
                <td>{$client[k].full_price}</td>
            </tr>

            {if ($client[k].row_client_cat == $client[k].count_client_cat)}
                <tr>
                    <th colspan="7">Total Price</th>
                    <th colspan="2">{$client[k].total_price}</th>
                </tr>
                </table>
            {/if}
        {/section}
    <h3>Visitors</h3>
    {section loop = $visitor name = i}
        {if $visitor[i].change_visitor_id != $visitor[i].id || $visitor[i].change_visitor_data != $visitor[i].data}
            <table border="2">
            <tr>
                <th>№</th>
                <th>FIO</th>
                <th>E-mail</th>
                <th>Phone</th>
                <th>Adress</th>
                <th>Data</th>
                <th>Note</th>
                <th colspan="2">Control</th>
            </tr>
            <tr>
                <td>{$visitor[i].num}</td>
                <td>{$visitor[i].FIO}</td>
                <td>{$visitor[i].email}</td>
                <td>{$visitor[i].phone}</td>
                <td>{$visitor[i].adress}</td>
                <td>{$visitor[i].data}</td>
                <td>{$visitor[i].desc}</td>
                <td><a href="">Archiv</a></td>
                <td><a href="order_dell.php?id={$visitor[i].id}&data={$visitor[i].data}&tmp=visitor">Dell</a></td>
            </tr>
            <tr>
                <th>Photo</th>
                <th colspan="5">Item Name</th>
                <th>Price</th>
                <th>Count</th>
                <th>Full Price</th>
            </tr>
        {/if}
        <tr>
            <td><img width="45px" src="../img/{$visitor[i].photo}"></td>
            <td colspan="5">{$visitor[i].model}</td>
            <td>{$visitor[i].price}</td>
            <td>{$visitor[i].count}</td>
            <td>{$visitor[i].full_price}</td>
        </tr>
        {if $visitor[i].count_visitor_cat == $visitor[i].row_visitor_cat}
            <tr>
                <th colspan="7">Total Price</th>
                <th colspan="2">{$visitor[i].total_price}</th>
            </tr>
            </table>
        {/if}

    {/section}


</body>