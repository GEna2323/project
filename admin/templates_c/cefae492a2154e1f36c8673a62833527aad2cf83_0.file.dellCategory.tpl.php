<?php
/* Smarty version 4.3.2, created on 2023-08-09 19:22:05
  from 'D:\OSPanel\domains\onlineShop\admin\templates\dellCategory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64d3bd2d6aa869_93922994',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cefae492a2154e1f36c8673a62833527aad2cf83' => 
    array (
      0 => 'D:\\OSPanel\\domains\\onlineShop\\admin\\templates\\dellCategory.tpl',
      1 => 1691598122,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64d3bd2d6aa869_93922994 (Smarty_Internal_Template $_smarty_tpl) {
if (((isset($_smarty_tpl->tpl_vars['id']->value)) && !empty($_smarty_tpl->tpl_vars['id']->value))) {?>
<form action="dellCategory.php" method="post">
    <input type="radio" name="dell" value="Yes" checked>Yes
    <input type="radio" name="dell" value="No">No
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <input type="submit" name="send" value="Видалити">
</form>
<?php } elseif (((isset($_smarty_tpl->tpl_vars['count']->value) && isset($_smarty_tpl->tpl_vars['id_cat']->value)) && !empty($_smarty_tpl->tpl_vars['count']->value) && !empty($_smarty_tpl->tpl_vars['id_cat']->value))) {?>
    <h4>Категорію неможливо видалити. Кількість товарів в категорії: <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</h4>
    Перейти до товарів даной категорії: <a href="indexCatalog.php?category=<?php echo $_smarty_tpl->tpl_vars['id_cat']->value;?>
">Click</a>


<?php }
}
}
