<?php



    require_once('header.php');

    if (isset($_SESSION['user_id'], $_SESSION['user_email'], $_SESSION['user_name'], $_SESSION['user_phone'], $_SESSION['user_role'], $_SESSION['user_photo']) && !empty($_SESSION['user_id']) && !empty($_SESSION['user_email']) && !empty($_SESSION['user_name']) && !empty($_SESSION['user_phone']) && !empty($_SESSION['user_role']) && !empty($_SESSION['user_photo'])) {

        require_once('admin_info.php');

       $smarty_order = new Smarty();

        /* Clients */

        $query_client = "select idClient, FIO, email, adress, phone, countCat, orderData, description, model, price, name from client inner join relationOrder on client.id = relationOrder.idClient inner join catalog on relationOrder.idCat = catalog.id inner join photo on catalog.id = photo.product_id where relationOrder.status = 1 and photo.status = 1 order by FIO asc, orderData asc;";
        $result_client = mysqli_query($dbc, $query_client) or die("Query Error");

        $row_client_cat = 0;
        $change_client_id = 0;
        $change_client_data = 0;
        $client = [];
        $num = 0;
        while($row_client = mysqli_fetch_array($result_client)){
            if ($change_client_id != $row_client['idClient'] || $change_client_data != $row_client['orderData']){
                $query_count = "select relationOrder.id from relationOrder inner join client on relationOrder.idClient = client.id where relationOrder.idClient = {$row_client['idClient']} and relationOrder.orderData = '{$row_client['orderData']}'";
                $result_count = mysqli_query($dbc, $query_count) or die("Query Count Error");
                $count_client_cat = mysqli_num_rows($result_count);

                $total_price = 0;
                $row_client_cat = 0;
                $num++;
            }
            $row_client_cat++;
            $fullPrice = $row_client['countCat'] * $row_client['price'];
            $total_price += $fullPrice;
            $client[] = ['total_price'=>$total_price,'change_client_id'=>$change_client_id,'change_client_data'=>$change_client_data,'full_price'=>$fullPrice,'id'=>$row_client['idClient'],'row_client_cat'=>$row_client_cat,'count_client_cat'=>$count_client_cat,'num'=>$num,'FIO'=>$row_client['FIO'],'email'=>$row_client['email'],'adress'=>$row_client['adress'],'phone'=>$row_client['phone'],'count'=>$row_client['countCat'],'data'=>$row_client['orderData'],'description'=>$row_client['description'],'model'=>$row_client['model'],'price'=>$row_client['price'],'photo'=>$row_client['name']];

            $change_client_id = $row_client['idClient'];
            $change_client_data = $row_client['orderData'];

        }

        /* Assign */

        $smarty_order -> assign('client', $client);

        $content = $smarty_order -> fetch('order_status.tpl');

        $smarty_main -> assign('title', "Замовлення");
        $smarty_main -> assign('content', $content);
        mysqli_close($dbc);
        $smarty_main -> display('main.tpl');

    }
    else{
        header("location:404/404page.html");
    }