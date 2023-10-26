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
                    <td><a href="">Dell</a></td>
                </tr>
                <tr>
                    <th>Count</th>
                    <th>Photo</th>
                    <th colspan="5">Item Name</th>
                    <th>Price</th>
                    <th>Full Price</th>
                </tr>
            {/if}

            <tr>
                <td>{$client[k].count}</td>
                <td><img width="45px" src="../img/{$client[k].photo}"></td>
                <td colspan="5">{$client[k].model}</td>
                <td>{$client[k].price}</td>
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



</body>