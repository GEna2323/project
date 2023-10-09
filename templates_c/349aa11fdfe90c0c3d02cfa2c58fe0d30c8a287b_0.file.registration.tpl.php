<?php
/* Smarty version 4.3.2, created on 2023-10-09 11:09:19
  from 'C:\OSPanel\domains\project\templates\registration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6523b52fefcb80_24628936',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '349aa11fdfe90c0c3d02cfa2c58fe0d30c8a287b' => 
    array (
      0 => 'C:\\OSPanel\\domains\\project\\templates\\registration.tpl',
      1 => 1696838882,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6523b52fefcb80_24628936 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['content']->value)) && !empty($_smarty_tpl->tpl_vars['content']->value)) {?>
    <h1><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</h1>
    <?php } else { ?>
    <h2>Користувач успішно зареєстрований</h2>
<?php }
}
}
