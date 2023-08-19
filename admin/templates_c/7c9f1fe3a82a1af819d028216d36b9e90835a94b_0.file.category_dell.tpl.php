<?php
/* Smarty version 4.3.2, created on 2023-08-19 17:23:09
  from 'C:\OSPanel\domains\project\admin\templates\category_dell.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64e0d04dda1b50_64661532',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c9f1fe3a82a1af819d028216d36b9e90835a94b' => 
    array (
      0 => 'C:\\OSPanel\\domains\\project\\admin\\templates\\category_dell.tpl',
      1 => 1692454985,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64e0d04dda1b50_64661532 (Smarty_Internal_Template $_smarty_tpl) {
if ((!(isset($_smarty_tpl->tpl_vars['count']->value)))) {?>
<form action="category_dell.php" method="post">
    <h3>Ви дійсно збираєтесь видалити категорію: "<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"</h3>
    <input type="radio" name="dell" value="Yes" checked>Yes
    <input type="radio" name="dell" value="No">No
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <input type="submit" name="send" value="Видалити">
</form>
<?php } else { ?>
<h4>Видалення неможливо, так як ще є товари в даній категорії: <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</h4>
Пареглянути Товари: <a href="catalog_index.php?id=<?php echo $_smarty_tpl->tpl_vars['id_cat']->value;?>
">Click</a>

<?php }
}
}
