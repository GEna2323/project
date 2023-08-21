<?php
/* Smarty version 4.3.2, created on 2023-08-09 19:36:56
  from 'D:\OSPanel\domains\onlineShop\admin\templates\dellCatalog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64d3c0a82e67e5_34439261',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01bca27a16e227122807936a75618307c8daf278' => 
    array (
      0 => 'D:\\OSPanel\\domains\\onlineShop\\admin\\templates\\dellCatalog.tpl',
      1 => 1691598916,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64d3c0a82e67e5_34439261 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form action="dellCatalog.php" method="post">
    <input type="radio" name="dell" value="Yes" checked>Yes
    <input type="radio" name="dell" value="No">No
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <input type="submit" name="send" value="Видалити">
</form><?php }
}
