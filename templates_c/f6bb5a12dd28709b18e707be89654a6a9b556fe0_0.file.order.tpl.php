<?php
/* Smarty version 4.3.2, created on 2023-10-08 23:48:39
  from 'C:\OSPanel\domains\project\templates\order.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_652315a771a834_37454122',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6bb5a12dd28709b18e707be89654a6a9b556fe0' => 
    array (
      0 => 'C:\\OSPanel\\domains\\project\\templates\\order.tpl',
      1 => 1696798118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_652315a771a834_37454122 (Smarty_Internal_Template $_smarty_tpl) {
?><head>
    <link rel="stylesheet" type="text/css" href="../css/basket.css">
</head>
<body>
<form action="basket.php" method="post">
    <table>
        <tr>
            <th>№</th>
            <th>Photo</th>
            <th>Model</th>
            <th>Price</th>
            <th>Count</th>
            <th>Full Price</th>
            <th>Delete</th>
        </tr>
    <?php
$__section_k_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['basket']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_k_0_total = $__section_k_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_k'] = new Smarty_Variable(array());
if ($__section_k_0_total !== 0) {
for ($__section_k_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] = 0; $__section_k_0_iteration <= $__section_k_0_total; $__section_k_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']++){
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['basket']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['num'];?>
</td>
            <td><img width="60px" src="img/<?php echo $_smarty_tpl->tpl_vars['basket']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['photo'];?>
"></td>
            <td><?php echo $_smarty_tpl->tpl_vars['basket']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['model'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['basket']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['price'];?>
</td>
            <td><input type="number" name="count<?php echo $_smarty_tpl->tpl_vars['basket']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['id'];?>
" min="1" value="<?php echo $_smarty_tpl->tpl_vars['basket']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['count'];?>
"></td>
            <td><?php echo $_smarty_tpl->tpl_vars['basket']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['full_price'];?>
</td>
            <td><a href="basket.php?mode=dell&id=<?php echo $_smarty_tpl->tpl_vars['basket']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['id'];?>
">Dell</a></td>
        </tr>
    <?php
}
}
?>
        <tr>
            <th colspan="5">Total Price:</th>
            <th colspan="2"><?php echo $_smarty_tpl->tpl_vars['total_price']->value;?>
</th>
        </tr>
        <tr>
            <th colspan="5"><input type="submit" name="send" value="Apply Changes"</th>
            <th colspan="2"><a href="basket.php?mode=clear">Clear All</a></th>
        </tr>
        <tr>
            <th colspan="4">
                <?php if ((isset($_smarty_tpl->tpl_vars['ready_params']->value)) && !empty($_smarty_tpl->tpl_vars['ready_params']->value)) {?>
                    <a href="catalog.php?<?php echo $_smarty_tpl->tpl_vars['ready_params']->value;?>
">Продовжити купівлю</a>
                    <input type="hidden" name="ready_params" value="<?php echo $_smarty_tpl->tpl_vars['ready_params']->value;?>
">
                    <?php } else { ?>
                    <a href="catalog.php">Продовжити купівлю</a>
                <?php }?>
            </th>
            <th colspan="3">
                <a href="order_buy.php">Продовжити замовлення</a>
            </th>
        </tr>
    </table>
</form>
</body><?php }
}
