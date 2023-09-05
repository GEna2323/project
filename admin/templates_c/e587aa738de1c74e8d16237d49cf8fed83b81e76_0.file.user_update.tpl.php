<?php
/* Smarty version 4.3.2, created on 2023-09-06 00:33:48
  from 'C:\OSPanel\domains\project\admin\templates\user_update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64f79ebc2187f2_53434811',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e587aa738de1c74e8d16237d49cf8fed83b81e76' => 
    array (
      0 => 'C:\\OSPanel\\domains\\project\\admin\\templates\\user_update.tpl',
      1 => 1693948657,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64f79ebc2187f2_53434811 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="user_update.php" method="post" enctype="multipart/form-data">
    <h4>Фото профілю:</h4>
    <img src="img/<?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
" width="80px">
    <?php if (($_smarty_tpl->tpl_vars['photo']->value) != 'no_admin_photo.png') {?>
        <br><a href="admin_photo_dell.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">Видалити Фото</a>
    <?php }?>
    <h4>Змінити Ім'я</h4>
    <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
    <h4>Змінити Номер телефону</h4>
    <input type="text" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
">
    <h4>Змінити E-mail</h4>
    <input type="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
">
    <h4>Змінити Фото</h4>
    <input type="file" name="photo">
    <br>
    <h4>Змінити пароль: <a href="pass_update.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">Click</a></h4>
    <input type="hidden" name="role" value="<?php echo $_smarty_tpl->tpl_vars['role']->value;?>
">
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <input type="submit" name="send" value="Прийняти Зміни">
</form><?php }
}
