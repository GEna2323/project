<?php
/* Smarty version 4.3.2, created on 2023-08-14 17:45:05
  from 'D:\OSPanel\domains\onlineShop\admin\templates\updateCatalog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64da3df19f4228_28476198',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d70ce0ef9281cbb43e68cc09dfd22bad29eea12' => 
    array (
      0 => 'D:\\OSPanel\\domains\\onlineShop\\admin\\templates\\updateCatalog.tpl',
      1 => 1692024303,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64da3df19f4228_28476198 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="updateCatalog.php" method="post" enctype="multipart/form-data">
    <h5>Ім'я</h5>
    <input type="text" name="catalog" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
    <h5>Висота</h5>
    <input type="text" name="height" value="<?php echo $_smarty_tpl->tpl_vars['height']->value;?>
">
    <h5>Ширина</h5>
    <input type="text" name="wight" value="<?php echo $_smarty_tpl->tpl_vars['wight']->value;?>
">
    <h5>Матеріал</h5>
    <input type="text" name="material" value="<?php echo $_smarty_tpl->tpl_vars['material']->value;?>
">
    <h5>Колір</h5>
    <input type="text" name="color" value="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
">
    <h5>Ціна</h5>
    <input type="number" name="price" value="<?php echo $_smarty_tpl->tpl_vars['price']->value;?>
">
    <h5>Кількість</h5>
    <input type="number" name="colvo" value="<?php echo $_smarty_tpl->tpl_vars['colvo']->value;?>
">
    <h5>Повний опис</h5>
    <textarea name="fulldescription"><?php echo $_smarty_tpl->tpl_vars['fulldescription']->value;?>
</textarea>
    <h5>Категорія</h5>
    <select name="category">
        <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['category']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
            <?php if (($_smarty_tpl->tpl_vars['category']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'] == $_smarty_tpl->tpl_vars['id_cat']->value)) {?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['category']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</option>
                <?php } else { ?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</option>
            <?php }?>
        <?php
}
}
?>
    </select>
    <h4>Мета Заголовок</h4>
    <textarea name="metaTitle"><?php echo $_smarty_tpl->tpl_vars['metaTitle']->value;?>
</textarea>
    <h4>Мета ключові слова</h4>
    <textarea name="metaKeyWords"><?php echo $_smarty_tpl->tpl_vars['metaKeyWords']->value;?>
</textarea>
    <h4>Мета опис</h4>
    <textarea name="metaDiscription"><?php echo $_smarty_tpl->tpl_vars['metaDiscription']->value;?>
</textarea><br>
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <input type="file" name="photo[]" multiple>
    <input type="submit" name="send" value="Змінити">
</form><?php }
}
