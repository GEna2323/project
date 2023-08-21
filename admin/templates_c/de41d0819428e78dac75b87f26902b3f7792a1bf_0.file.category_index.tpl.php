<?php
/* Smarty version 4.3.2, created on 2023-08-19 19:20:08
  from 'C:\OSPanel\domains\project\admin\templates\category_index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64e0ebb8c7a235_12159732',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de41d0819428e78dac75b87f26902b3f7792a1bf' => 
    array (
      0 => 'C:\\OSPanel\\domains\\project\\admin\\templates\\category_index.tpl',
      1 => 1692462002,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64e0ebb8c7a235_12159732 (Smarty_Internal_Template $_smarty_tpl) {
?><table border="2">
    <tr>
        <th>№</th>
        <th>Назва</th>
        <th colspan="2">Управління</th>
    </tr>
    <?php
$__section_k_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['category']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_k_0_total = $__section_k_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_k'] = new Smarty_Variable(array());
if ($__section_k_0_total !== 0) {
for ($__section_k_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] = 0; $__section_k_0_iteration <= $__section_k_0_total; $__section_k_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']++){
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['category']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['num'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['category']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['name'];?>
</td>
            <td><a href="category_update.php?id=<?php echo $_smarty_tpl->tpl_vars['category']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['id'];?>
&name=<?php echo $_smarty_tpl->tpl_vars['category']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['name'];?>
">Редагувати</a></td>
            <td><a href="category_dell.php?id=<?php echo $_smarty_tpl->tpl_vars['category']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['id'];?>
&name=<?php echo $_smarty_tpl->tpl_vars['category']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['name'];?>
">Видалити</a></td>
        </tr>
    <?php
}
}
?>



</table><?php }
}
