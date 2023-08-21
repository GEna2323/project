<?php
/* Smarty version 4.3.2, created on 2023-08-20 16:52:22
  from 'C:\OSPanel\domains\project\admin\templates\catalog_add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64e21a96b714e3_12059366',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e83dc73de2daa8e3fc8b51d3dcf7a026516db4be' => 
    array (
      0 => 'C:\\OSPanel\\domains\\project\\admin\\templates\\catalog_add.tpl',
      1 => 1692539538,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64e21a96b714e3_12059366 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="catalog_add.php" method="post" enctype="multipart/form-data">
    <h3>Фірма</h3>
    <select name="id_firms">
        <option value="0">Оберіть Фірму</option>
        <?php
$__section_k_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['categories']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_k_0_total = $__section_k_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_k'] = new Smarty_Variable(array());
if ($__section_k_0_total !== 0) {
for ($__section_k_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] = 0; $__section_k_0_iteration <= $__section_k_0_total; $__section_k_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']++){
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['categories']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['categories']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['name'];?>
</option>
        <?php
}
}
?>
    </select>
    <h3>Модель</h3>
    <input type="text" name="model" placeholder="Model">
    <h3>Кількість</h3>
    <input type="number" name="count" placeholder="Кількість">
    <h3>Оперативна пам'ять</h3>
    <input type="number" name="ram" placeholder="Оперативна пам'ять в гб">
    <h3>Пам'ять</h3>
    <input type="number" name="storage" placeholder="Число гб">
    <h3>Операційна система</h3>
    <input type="text" name="oc" placeholder="Операційна система">
    <h3>Вміст батереї</h3>
    <input type="number" name="batery" placeholder="Число м/год">
    <h3>Колір</h3>
    <input type="text" name="color" placeholder="Колір">
    <h3>Ціна</h3>
    <input type="number" name="price" placeholder="Ціна">
    <h3>Опис</h3>
    <textarea name="discription" placeholder="Опис товара"></textarea>
    <input type="submit" name="send" value="Додати">
</form><?php }
}
