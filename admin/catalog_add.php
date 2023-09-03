<?php

    require_once('header.php');

if (isset($_SESSION['user_id'], $_SESSION['user_email'], $_SESSION['user_name'], $_SESSION['user_phone'], $_SESSION['user_role'], $_SESSION['user_photo']) && !empty($_SESSION['user_id']) && !empty($_SESSION['user_email']) && !empty($_SESSION['user_name']) && !empty($_SESSION['user_phone']) && !empty($_SESSION['user_role']) && !empty($_SESSION['user_photo'])) {

    require_once('admin_info.php');

    $smarty_catalog = new Smarty();

    if (!isset($_POST['send'])){

        $query = "select id, name from Firms";
        $result = mysqli_query($dbc, $query) or die("Query Error");
        $categories = [];
        while ($row = mysqli_fetch_array($result)){

            $categories[] = ['id'=>$row['id'], 'name'=>$row['name']];

        }

        $smarty_catalog -> assign('categories', $categories);

        $content = $smarty_catalog -> fetch('catalog_add.tpl');

    }
    elseif(isset($_POST['model'], $_POST['price'], $_POST['id_firms'], $_POST['count'], $_POST['ram'], $_POST['storage'], $_POST['oc'], $_POST['batery'], $_POST['discription'], $_POST['color']) && !empty($_POST['id_firms']) && !empty($_POST['model']) && !empty($_POST['price']) && !empty($_POST['count']) && !empty($_POST['ram']) && !empty($_POST['storage']) && !empty($_POST['oc']) && !empty($_POST['batery'])){

        $query_add = "insert into catalog (id_firms, model, price, count, ram, storage, oc, batery, discription, color) values ('".Protection($dbc, $_POST['id_firms'])."', '".Protection($dbc, $_POST['model'])."', '".Protection($dbc, $_POST['price'])."', '".Protection($dbc, $_POST['count'])."', '".Protection($dbc, $_POST['ram'])."', '".Protection($dbc, $_POST['storage'])."', '".Protection($dbc, $_POST['oc'])."', '".Protection($dbc, $_POST['batery'])."', '".Protection($dbc, $_POST['discription'])."', '".Protection($dbc, $_POST['color'])."')";

        mysqli_query($dbc, $query_add) or die("Query_add Error");

        $product_id = mysqli_insert_id($dbc);

        if (isset($_FILES['photo']['error'][0], $_FILES['photo']['name'][0]) && !empty($_FILES['photo']['error'][0] == 0)){
            for($i = 0; $i < count($_FILES['photo']['name']); $i++){
                if (isset($_FILES['photo']['name'][$i]) && $_FILES['photo']['size'][$i] > 0){
                    $TmpFileName = $_FILES['photo']['tmp_name'][$i];
                    $realFileName = time().$_FILES['photo']['name'][$i];

                    move_uploaded_file($TmpFileName, "../img/$realFileName");

                    if ($i == 0){
                        $query_photo = "insert into photo (name, product_id, status) values ('$realFileName', $product_id, 1)";
                    }
                    else{
                        $query_photo = "insert into photo (name, product_id, status) values ('$realFileName', $product_id, 0)";
                    }

                    mysqli_query($dbc, $query_photo) or die("QueryPhoto Error");




                }
            }
        }





        $content = "Товар успішно додано";


    }
    else{
        $content = 'Виникла помилка з додаванням товару. Можливо ви не заповнили всі поля';
    }






    $smarty_main -> assign('title', 'Додавання товару');
    $smarty_main -> assign('content', $content);

    mysqli_close($dbc);
    $smarty_main -> display('main.tpl');

}
else{
    header("location:404/404page.html");
}

?>