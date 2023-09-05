<?php

    require_once('header.php');

    if (isset($_SESSION['user_id'], $_SESSION['user_email'], $_SESSION['user_name'], $_SESSION['user_phone'], $_SESSION['user_role'], $_SESSION['user_photo']) && !empty($_SESSION['user_id']) && !empty($_SESSION['user_email']) && !empty($_SESSION['user_name']) && !empty($_SESSION['user_phone']) && !empty($_SESSION['user_role']) && !empty($_SESSION['user_photo'])) {

    require_once('admin_info.php');

    }

if (!isset($_POST['send'])) {

            $smarty_log = new Smarty();

            $content = $smarty_log->fetch('login.tpl');

} elseif (isset($_POST['send'], $_POST['email'], $_POST['password']) && !empty($_POST['email']) && !empty($_POST['password'])) {

            $query = "select id, email, name, phone, role, photo from user where email = '{$_POST['email']}' and password = '" . sha1($_POST['password']) . "'";
            $result = mysqli_query($dbc, $query) or die("Query Error");
            $row = mysqli_fetch_array($result);

            if (mysqli_num_rows($result) < 1) {
                $content = "Неправильно введені email або пароль";
            } else {

                if (empty($row['photo'])){
                    $row['photo'] = 'no_admin_photo.png';
                }

                setcookie('user_id', $row['id'], time() + 60 * 60 * 24 * 30 * 3);
                setcookie('user_email', $row['email'], time() + 60 * 60 * 24 * 30 * 3);
                setcookie('user_name', $row['name'], time() + 60 * 60 * 24 * 30 * 3);
                setcookie('user_phone', $row['phone'], time() + 60 * 60 * 24 * 30 * 3);
                setcookie('user_role', $row['role'], time() + 60 * 60 * 24 * 30 * 3);
                setcookie('user_photo', $row['photo'], time() + 60 * 60 * 24 * 30 * 3);

                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_email'] = $row['email'];
                $_SESSION['user_name'] = $row['name'];
                $_SESSION['user_phone'] = $row['phone'];
                $_SESSION['user_role'] = $row['role'];
                $_SESSION['user_photo'] = $row['photo'];

                $query_time = "update user set dataTime=now() where id = {$row['id']}";
                mysqli_query($dbc, $query_time) or die("Query Time Error");


                $content = "Ви успішно увійшли в аккаунт";


                header('refresh:2;url=index.php');
            }


        } else {
            $content = 'Не всі поля заповнені';
        }


        $smarty_main->assign('title', 'Вхід в адмінку');
        $smarty_main->assign('content', $content);
        mysqli_close($dbc);
        $smarty_main->display('main.tpl');


?>