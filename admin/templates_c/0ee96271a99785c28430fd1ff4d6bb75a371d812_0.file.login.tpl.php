<?php
/* Smarty version 4.3.2, created on 2023-09-03 23:57:42
  from 'C:\OSPanel\domains\project\admin\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64f4f34680ed61_69346663',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ee96271a99785c28430fd1ff4d6bb75a371d812' => 
    array (
      0 => 'C:\\OSPanel\\domains\\project\\admin\\templates\\login.tpl',
      1 => 1693397748,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64f4f34680ed61_69346663 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="login.php" method="post">
    <h4>E-mail</h4>
    <input type="email" name="email" placeholder="Example@gmail.com">
    <h3>Password</h3>
    <input type="password" name="password"> <br>
    <input type="submit" name="send" value="Увійти">
</form><?php }
}
