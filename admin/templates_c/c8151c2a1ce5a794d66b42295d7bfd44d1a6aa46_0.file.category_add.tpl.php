<?php
/* Smarty version 4.3.2, created on 2023-08-19 12:54:38
  from 'C:\OSPanel\domains\project\admin\templates\category_add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64e0915ea57ea8_81326844',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8151c2a1ce5a794d66b42295d7bfd44d1a6aa46' => 
    array (
      0 => 'C:\\OSPanel\\domains\\project\\admin\\templates\\category_add.tpl',
      1 => 1692438876,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64e0915ea57ea8_81326844 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="category_add.php" method="post">
    <input type="text" name="category" placeholder="Наприклад Samsung">
    <input type="submit" name="send" value="Додати">
</form><?php }
}
