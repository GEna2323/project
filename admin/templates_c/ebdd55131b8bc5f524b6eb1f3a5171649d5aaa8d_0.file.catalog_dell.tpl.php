<?php
/* Smarty version 4.3.2, created on 2023-08-22 15:24:13
  from 'C:\OSPanel\domains\project\admin\templates\catalog_dell.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64e4a8edeef2e1_30607779',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebdd55131b8bc5f524b6eb1f3a5171649d5aaa8d' => 
    array (
      0 => 'C:\\OSPanel\\domains\\project\\admin\\templates\\catalog_dell.tpl',
      1 => 1692707051,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64e4a8edeef2e1_30607779 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="catalog_dell.php" method="post">
    <h4>Ви дійсно хочите видалити товар: <?php echo $_smarty_tpl->tpl_vars['model']->value;?>
</h4>
    <input type="radio" name="dell" value="Yes" checked>Yes
    <input type="radio" name="dell" value="No">No
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <input type="submit" name="send" value="Видалити">
</form><?php }
}
