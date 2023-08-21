<?php
/* Smarty version 4.3.2, created on 2023-08-19 19:20:11
  from 'C:\OSPanel\domains\project\admin\templates\category_update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64e0ebbbc2c150_20045039',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42e4f8321c810df37008280fee071b51a228831f' => 
    array (
      0 => 'C:\\OSPanel\\domains\\project\\admin\\templates\\category_update.tpl',
      1 => 1692462002,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64e0ebbbc2c150_20045039 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="category_update.php" method="post">
    <h3>Відредагуйте Категорію</h3>
    <input type="text" name="category" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <input type="submit" name="send" value="Відредагувати">
</form><?php }
}
