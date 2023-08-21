<?php
/* Smarty version 4.3.2, created on 2023-08-02 17:03:53
  from 'D:\OSPanel\domains\onlineShop\admin\templates\addCategory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64ca6249d5c6c2_26010240',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bfd4ec99113d99ed2996f5bf6b667d5d175b2cd' => 
    array (
      0 => 'D:\\OSPanel\\domains\\onlineShop\\admin\\templates\\addCategory.tpl',
      1 => 1690985032,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64ca6249d5c6c2_26010240 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="addCategory.php" method="post">
    <input type="text" name="category" placeholder="Назва Категорії">
    <input type="submit" name="send" value="Додати">
</form>
<?php }
}
