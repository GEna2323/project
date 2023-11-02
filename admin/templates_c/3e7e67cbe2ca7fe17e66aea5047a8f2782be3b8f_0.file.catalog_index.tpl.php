<?php
/* Smarty version 4.3.2, created on 2023-10-28 13:25:08
  from 'C:\OSPanel\domains\project\admin\templates\catalog_index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_653ce18498a439_73724391',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e7e67cbe2ca7fe17e66aea5047a8f2782be3b8f' => 
    array (
      0 => 'C:\\OSPanel\\domains\\project\\admin\\templates\\catalog_index.tpl',
      1 => 1698488707,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_653ce18498a439_73724391 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="catalog_index.php" method="get">
    <select name="firms">
        <option value="0">Всі Категорії</option>
        <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['firms']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
            <?php if (((isset($_smarty_tpl->tpl_vars['newFirma']->value)) && $_smarty_tpl->tpl_vars['newFirma']->value == $_smarty_tpl->tpl_vars['firms']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_firm'])) {?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['firms']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_firm'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['firms']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['firma'];?>
</option>
                <?php } else { ?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['firms']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_firm'];?>
"><?php echo $_smarty_tpl->tpl_vars['firms']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['firma'];?>
</option>
            <?php }?>
        <?php
}
}
?>
    </select>
    <input type="submit" name="send" value="Сортувати">
</form>

<?php if (($_smarty_tpl->tpl_vars['count']->value > 0)) {?>
    <table border="2">
        <tr>
            <th>№</th>
            <th>Фото</th>
            <th>Модель</th>
            <th>Цена</th>
            <th colspan="2">Управління</th>
        </tr>
        <?php
$__section_k_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['catalog']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_k_1_total = $__section_k_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_k'] = new Smarty_Variable(array());
if ($__section_k_1_total !== 0) {
for ($__section_k_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] = 0; $__section_k_1_iteration <= $__section_k_1_total; $__section_k_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']++){
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['catalog']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['num'];?>
</td>
                <td><img src="../img/<?php echo $_smarty_tpl->tpl_vars['catalog']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['photo'];?>
" width="65px"></td>
                <td><?php echo $_smarty_tpl->tpl_vars['catalog']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['model'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['catalog']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['price'];?>
</td>
                <td><a href="catalog_update.php?id=<?php echo $_smarty_tpl->tpl_vars['catalog']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['id'];?>
">Редагування</a></td>
                <td><a href="catalog_dell.php?id=<?php echo $_smarty_tpl->tpl_vars['catalog']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['id'];?>
&model=<?php echo $_smarty_tpl->tpl_vars['catalog']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['model'];?>
">Видалення</a></td>
            </tr>
        <?php
}
}
?>

    </table>
    <?php } else { ?>
    <h3>Нажаль в даній категорії ще не має товарів</h3>
<?php }
}
}
