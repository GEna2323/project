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

        /* Visitors */

        $query_visitor = "select idVisitor ,FIO, email, adress, phone, countCat, orderData, description, model, price, name from visitor inner join visitorRelationOrder on visitor.id = visitorRelationOrder.idVisitor inner join catalog on visitorRelationOrder.idCat = catalog.id inner join photo on catalog.id = photo.product_id where photo.status = 1 and visitorRelationOrder.status = 1 order by orderData asc, FIO asc";
        $result_visitor = mysqli_query($dbc, $query_visitor) or die("Query Visitor Error");

        $total_price = 0;
        $count_visitor_cat = 0;
        $change_visitor_id = 0;
        $change_visitor_data = 0;
        $visitor = [];
        $num = 0;
        while($row_visitor = mysqli_fetch_array($result_visitor)){

            if ($change_visitor_id != $row_visitor['idVisitor'] || $change_visitor_data != $row_visitor['orderData']){
                $query_check = "select id from visitorRelationOrder where idVisitor = {$row_visitor['idVisitor']} and orderData = '{$row_visitor['orderData']}'";
                $result_check = mysqli_query($dbc, $query_check) or die("Query Check Error");
                $row_visitor_cat = mysqli_num_rows($result_check);

                $total_price = 0;
                $count_visitor_cat = 0;
                $num++;
            }

            $full_price = $row_visitor['price'] * $row_visitor['countCat'];
            $total_price += $full_price;
            $count_visitor_cat++;

            $visitor[] = ['total_price'=>$total_price,'full_price'=>$full_price,'num'=>$num,'row_visitor_cat'=>$row_visitor_cat,'count_visitor_cat'=>$count_visitor_cat,'change_visitor_id'=>$change_visitor_id,'change_visitor_data'=>$change_visitor_data,'data'=>$row_visitor['orderData'],'id'=>$row_visitor['idVisitor'],'FIO'=>$row_visitor['FIO'],'email'=>$row_visitor['email'],'adress'=>$row_visitor['adress'],'phone'=>$row_visitor['phone'],'count'=>$row_visitor['countCat'],'desc'=>$row_visitor['description'],'model'=>$row_visitor['model'],'price'=>$row_visitor['price'],'photo'=>$row_visitor['name']];

            $change_visitor_data = $row_visitor['orderData'];
            $change_visitor_id = $row_visitor['idVisitor'];

        }



        /* Assign */

        $smarty_order -> assign('client', $client);
        $smarty_order -> assign('visitor', $visitor);

        $content = $smarty_order -> fetch('order_status.tpl');

        $smarty_main -> assign('title', "Замовлення");
        $smarty_main -> assign('content', $content);
        mysqli_close($dbc);
        $smarty_main -> display('main.tpl');

    }
    else{
        header("location:404/404page.html");
    }