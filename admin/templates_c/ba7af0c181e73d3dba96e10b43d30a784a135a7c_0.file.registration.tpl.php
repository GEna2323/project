<?php
/* Smarty version 4.3.2, created on 2023-08-30 14:49:04
  from 'C:\OSPanel\domains\project\admin\templates\registration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64ef2cb020ae23_58843911',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba7af0c181e73d3dba96e10b43d30a784a135a7c' => 
    array (
      0 => 'C:\\OSPanel\\domains\\project\\admin\\templates\\registration.tpl',
      1 => 1693396141,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64ef2cb020ae23_58843911 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="registration.php" method="post" enctype="multipart/form-data">
    <h3>Name</h3>
    <input type="text" name="name" placeholder="Your Name">
    <h3>Email</h3>
    <input type="email" name="email" placeholder="Example@gmail.com">
    <h3>Phone number</h3>
    <input type="text" name="phone">
    <h3>Роль</h3>
    <select name="role">
        <option value="0">Оберіть</option>
        <option value="1">Головний Адмін</option>
        <option value="2">Заступник адміна</option>
    </select>
    <h3>Пароль</h3>
    <input type="password" name="password">
    <h3>Повторіть пароль</h3>
    <input type="password" name="re_password">
    <br>
    <input type="file" name="photo">
    <br>
    <input type="submit" name="send" value="Зареєструвати">
</form><?php }
}
