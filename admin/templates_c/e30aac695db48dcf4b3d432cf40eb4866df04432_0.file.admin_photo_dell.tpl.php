<?php
/* Smarty version 4.3.2, created on 2023-09-06 00:43:24
  from 'C:\OSPanel\domains\project\admin\templates\admin_photo_dell.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64f7a0fc9f21a9_19902526',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e30aac695db48dcf4b3d432cf40eb4866df04432' => 
    array (
      0 => 'C:\\OSPanel\\domains\\project\\admin\\templates\\admin_photo_dell.tpl',
      1 => 1693949047,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64f7a0fc9f21a9_19902526 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="admin_photo_dell.php" method="post">
    <h4>Ви дійсно збираєтесь видалити фото:</h4>
    <img src="img/<?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
" width="80px">
    <input type="radio" name="dell" value="Yes" checked>Yes
    <input type="radio" name="dell" value="No">No
    <input type="submit" name="send" value="Підтвердити">
</form><?php }
}
