<?php
/* Smarty version 4.3.2, created on 2023-10-28 17:19:30
  from 'C:\OSPanel\domains\project\admin\templates\photo_dell.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_653d1872227f68_02198801',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d1e6c22fa5896442c628e4bfdd4352c4242fa8e' => 
    array (
      0 => 'C:\\OSPanel\\domains\\project\\admin\\templates\\photo_dell.tpl',
      1 => 1698502767,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_653d1872227f68_02198801 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="photo_dell.php" method="post">
    <h3>Ви дійсно збираєтесь видалити <?php if ($_smarty_tpl->tpl_vars['status']->value == 1) {?>ГОЛОВНЕ<?php } else { ?>ДОДАТКОВЕ<?php }?> Фото?</h3>
    <img src="../img/<?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
" width="80px">
    <input type="radio" name="dell" value="Yes" checked>Yes
    <input type="radio" name="dell" value="No">No
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <input type="hidden" name="product_id" value="<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
">
    <input type="submit" name="send" value="Видалити">
</form><?php }
}
