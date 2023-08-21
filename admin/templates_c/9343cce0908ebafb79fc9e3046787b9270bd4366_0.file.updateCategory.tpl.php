<?php
/* Smarty version 4.3.2, created on 2023-08-14 16:34:29
  from 'D:\OSPanel\domains\onlineShop\admin\templates\updateCategory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64da2d654e4af0_55886779',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9343cce0908ebafb79fc9e3046787b9270bd4366' => 
    array (
      0 => 'D:\\OSPanel\\domains\\onlineShop\\admin\\templates\\updateCategory.tpl',
      1 => 1692019879,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64da2d654e4af0_55886779 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="updateCategory.php" method="post">
    <input type="text" name="category" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <input type="submit" name="send" value="Змінити">
</form><?php }
}
