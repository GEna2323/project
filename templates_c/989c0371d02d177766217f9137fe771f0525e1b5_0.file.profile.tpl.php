<?php
/* Smarty version 4.3.2, created on 2023-10-12 12:12:19
  from 'C:\OSPanel\domains\project\templates\profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6527b8735956a4_45200765',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '989c0371d02d177766217f9137fe771f0525e1b5' => 
    array (
      0 => 'C:\\OSPanel\\domains\\project\\templates\\profile.tpl',
      1 => 1697101918,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6527b8735956a4_45200765 (Smarty_Internal_Template $_smarty_tpl) {
?><head>
    <link rel="stylesheet" type="text/css" href="../css/profile.css">
</head>
<body>
<?php if ((isset($_smarty_tpl->tpl_vars['tmp']->value)) && $_smarty_tpl->tpl_vars['tmp']->value == 1) {?>
    <div class="main_profile">
        <div class="profile_title">
            <b>Інформація про Вас</b>
        </div>
        <h2>FIO:</h2>
        <h3><i><?php echo $_smarty_tpl->tpl_vars['client_FIO']->value;?>
</i></h3>
        <h2>E-mail:</h2>
        <h3><i><?php echo $_smarty_tpl->tpl_vars['client_email']->value;?>
</i></h3>
        <h2>Adress:</h2>
        <h3><i><?php echo $_smarty_tpl->tpl_vars['client_adress']->value;?>
</i></h3>
        <h2>Phone:</h2>
        <h3><i><?php echo $_smarty_tpl->tpl_vars['client_phone']->value;?>
</i></h3>
        <div class="profile_buttons">
            <a href="exit.php">Вийти</a>
            <a href="profile.php?update">Змінити</a>
            <a href="list.php">До Каталогу</a>
        </div>

    </div>
    <?php } elseif ((isset($_smarty_tpl->tpl_vars['tmp']->value)) && $_smarty_tpl->tpl_vars['tmp']->value == 2) {?>
    <div class="main_profile">
        <form action="profile.php" method="post">
            <div class="profile_title">
                <b>Редагування Інформації</b>
            </div>
            <h2>FIO:</h2>
            <input class="input" type="text" name="FIO" value="<?php echo $_smarty_tpl->tpl_vars['client_FIO']->value;?>
">
            <h2>E-mail:</h2>
            <input class="input" type="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['client_email']->value;?>
">
            <h2>Adress:</h2>
            <input class="input" type="text" name="adress" value="<?php echo $_smarty_tpl->tpl_vars['client_adress']->value;?>
">
            <h2>Phone:</h2>
            <input class="input" type="text" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['client_phone']->value;?>
">
            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['client_id']->value;?>
">
            <div class="profile_buttons">
                <a href="profile.php">Відмінити</a>
                <input class="a" type="submit" name="send" value="Підтвердити">
            </div>
        </form>
    </div>
    <?php } elseif ((isset($_smarty_tpl->tpl_vars['tmp']->value)) && $_smarty_tpl->tpl_vars['tmp']->value == 3) {?>
        <div class="main_profile">
            <h1>Всі дані крім E-mail Успішно відредаговані</h1>
            <h1>Така електронна адреса вже використовується</h1>
        </div>
    <?php } elseif ((isset($_smarty_tpl->tpl_vars['tmp']->value)) && $_smarty_tpl->tpl_vars['tmp']->value == 4) {?>
    <div class="main_profile">
        <h1>Всі дані Успішно відредаговані</h1>
    </div>
<?php }?>
</body><?php }
}
