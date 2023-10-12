<?php
/* Smarty version 4.3.2, created on 2023-10-12 10:35:26
  from 'C:\OSPanel\domains\project\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6527a1be883e42_26047180',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48143d41793f33327724c94e0b6eb33d9449d875' => 
    array (
      0 => 'C:\\OSPanel\\domains\\project\\templates\\login.tpl',
      1 => 1697096094,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6527a1be883e42_26047180 (Smarty_Internal_Template $_smarty_tpl) {
?><head>
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
<?php if ((isset($_smarty_tpl->tpl_vars['tmp']->value)) && $_smarty_tpl->tpl_vars['tmp']->value == 1) {?>
    <div class="main-login">
        <input type="checkbox" id="chk" aria-hidden="true">

        <div class="signup">
            <form method="post" action="registration.php">
                <label for="chk" aria-hidden="true">Sign up</label>
                <input class="input" type="text" name="FIO" placeholder="FIO" required="">
                <input class="input" type="email" name="email" placeholder="Email" required="">
                <input class="input" type="password" name="password" placeholder="Password" required="">
                <input class="input" type="password" name="re_password" placeholder="Re Password" required="">
                <input class="button-login" type="submit" name="send" value="Sing Up">
            </form>
        </div>

        <div class="login">
            <form method="post" action="login.php">
                <label for="chk" aria-hidden="true">Login</label>
                <input class="input" type="email" name="email" placeholder="Email" required="">
                <input class="input" type="password" name="password" placeholder="Password" required="">
                <input class="button-login" type="submit" name="send" value="Log In">
            </form>
        </div>
    </div>
<?php } elseif ((isset($_smarty_tpl->tpl_vars['tmp']->value)) && $_smarty_tpl->tpl_vars['tmp']->value == 2) {?>
   <div class="access">
       <h1>Вітаю, ви успішно увійшли в аккаунт</h1>
   </div>
<?php } elseif ((isset($_smarty_tpl->tpl_vars['tmp']->value)) && $_smarty_tpl->tpl_vars['tmp']->value == 2) {?>
    <div class="access">
        <h1>Неправильно Введені Email або Password</h1>
    </div>
    <?php } else { ?>
    <h1>Error</h1>
<?php }?>
</body><?php }
}
