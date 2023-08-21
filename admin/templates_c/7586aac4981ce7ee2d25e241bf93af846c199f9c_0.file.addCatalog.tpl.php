<?php
/* Smarty version 4.3.2, created on 2023-08-04 15:10:12
  from 'D:\OSPanel\domains\onlineShop\admin\templates\addCatalog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64cceaa4c8cc81_58542962',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7586aac4981ce7ee2d25e241bf93af846c199f9c' => 
    array (
      0 => 'D:\\OSPanel\\domains\\onlineShop\\admin\\templates\\addCatalog.tpl',
      1 => 1691150666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64cceaa4c8cc81_58542962 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post" action="addCatalog.php" enctype="multipart/form-data">
    <div class="catalog" style="width: 300px">
    <h4>Назва Товару</h4>
    <input type="text" name="catalog" placeholder="Назва товару"><br>
    <h4>Категорія</h4>
    <select name="category">
        <option value="0">Оберіть Категорію</option>
        <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['category']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['category_name'];?>
</option>
        <?php
}
}
?>
    </select><br>
    <h4>Висота (см.)</h4>
    <input type="number" name="height" placeholder="Висота в см."><br>
    <h4>Ширина (см.)</h4>
    <input type="number" name="wight" placeholder="Ширина в см."><br>
    <h4>Матеріал</h4>
    <input type="text" name="material" placeholder="Матеріал"><br>
    <h4>Колір</h4>
    <input type="text" name="color" placeholder="Колір"><br>
    <h4>Ціна в грн.</h4>
    <input type="number" name="price" placeholder="Ціна в грн."><br>
    <h4>Кількість в наявності</h4>
    <input type="number" name="count" placeholder="Кіл-ть в наявності"><br>
    <h4>Опис Товару</h4>
    <textarea name="description" placeholder="Опис товару"></textarea><br>
    </div>
    <div class="CEO" style="width: 300px">

    <h3>Поля для CEO-оптимізації</h3>
    <h4>Meta Title</h4>
    <textarea name="metaTitle" placeholder="Meta_Title"></textarea>
    <h4>MetaKeyWords</h4>
    <textarea name="metaKeyWords" placeholder="Meta_Key_Words"></textarea>
    <h4>MetaDiscription</h4>
    <textarea name="metaDiscription" placeholder="Meta_Description"></textarea><br>

    <h4>Виберіть 1 або більше фото</h4>
    <input type="file" name="photo[]" multiple>
    <input type="submit" name="send" value="Додати">
    </div>
</form>
<?php }
}
