<?php
/* Smarty version 4.3.2, created on 2023-09-16 15:16:51
  from 'C:\OSPanel\domains\project\admin\templates\category_add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65059cb3bfe995_33672822',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8151c2a1ce5a794d66b42295d7bfd44d1a6aa46' => 
    array (
      0 => 'C:\\OSPanel\\domains\\project\\admin\\templates\\category_add.tpl',
      1 => 1693073393,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65059cb3bfe995_33672822 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="category_add.php" method="post">
    <input type="text" name="category" placeholder="Наприклад Samsung">
    <input type="submit" name="send" value="Додати">
</form><?php }
}
