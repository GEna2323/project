<?php
/* Smarty version 4.3.2, created on 2023-09-08 21:26:15
  from 'C:\OSPanel\domains\project\admin\templates\pass_update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64fb6747ca8eb9_89867793',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3fa58f2eed6f564498cfd3feb13bfb65489b0be' => 
    array (
      0 => 'C:\\OSPanel\\domains\\project\\admin\\templates\\pass_update.tpl',
      1 => 1694196361,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64fb6747ca8eb9_89867793 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="pass_update.php" method="post">
    <h4>Введіть старий пароль</h4>
    <input type="password" name="pass">
    <h4>Введіть старий пароль</h4>
    <input type="password" name="new_pass">
    <h4>Введіть старий пароль</h4>
    <input type="password" name="re_new_pass">
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <input type="submit" name="send" value="Змінити">
</form><?php }
}
