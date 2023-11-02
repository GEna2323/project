<?php
/* Smarty version 4.3.2, created on 2023-11-02 13:26:54
  from 'C:\OSPanel\domains\project\admin\templates\order_status.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6543796e84ee48_56963453',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54150aa6dc588a2f43babd837435f15617c690f2' => 
    array (
      0 => 'C:\\OSPanel\\domains\\project\\admin\\templates\\order_status.tpl',
      1 => 1698920787,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6543796e84ee48_56963453 (Smarty_Internal_Template $_smarty_tpl) {
?><head>
    <style>

    </style>
</head>
<body>
    <h3>Clients</h3>

        <?php
$__section_k_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['client']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_k_0_total = $__section_k_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_k'] = new Smarty_Variable(array());
if ($__section_k_0_total !== 0) {
for ($__section_k_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] = 0; $__section_k_0_iteration <= $__section_k_0_total; $__section_k_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']++){
?>
            <?php if (($_smarty_tpl->tpl_vars['client']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['data'] != $_smarty_tpl->tpl_vars['client']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['change_client_data'] || $_smarty_tpl->tpl_vars['client']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['id'] != $_smarty_tpl->tpl_vars['client']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['change_client_id'])) {?>
    <table border="2">
                <tr>
                    <th>№</th>
                    <th>FIO</th>
                    <th>E-mail</th>
                    <th>Phone</th>
                    <th>Adress</th>
                    <th>Data</th>
                    <th>Note</th>
                    <th colspan="2">Control</th>
                </tr>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['client']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['num'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['client']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['FIO'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['client']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['email'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['client']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['phone'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['client']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['adress'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['client']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['data'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['client']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['description'];?>
</td>
                    <td><a href="">Archiv</a></td>
                    <td><a href="order_dell.php?id=<?php echo $_smarty_tpl->tpl_vars['client']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['id'];?>
&data=<?php echo $_smarty_tpl->tpl_vars['client']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['data'];?>
&tmp=client">Dell</a></td>
                </tr>
                <tr>
                    <th>Photo</th>
                    <th colspan="5">Item Name</th>
                    <th>Price</th>
                    <th>Count</th>
                    <th>Full Price</th>
                </tr>
            <?php }?>

            <tr>
                <td><img width="45px" src="../img/<?php echo $_smarty_tpl->tpl_vars['client']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['photo'];?>
"></td>
                <td colspan="5"><?php echo $_smarty_tpl->tpl_vars['client']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['model'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['client']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['price'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['client']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['count'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['client']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['full_price'];?>
</td>
            </tr>

            <?php if (($_smarty_tpl->tpl_vars['client']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['row_client_cat'] == $_smarty_tpl->tpl_vars['client']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['count_client_cat'])) {?>
                <tr>
                    <th colspan="7">Total Price</th>
                    <th colspan="2"><?php echo $_smarty_tpl->tpl_vars['client']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['total_price'];?>
</th>
                </tr>
                </table>
            <?php }?>
        <?php
}
}
?>
    <h3>Visitors</h3>
    <?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['visitor']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
        <?php if ($_smarty_tpl->tpl_vars['visitor']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['change_visitor_id'] != $_smarty_tpl->tpl_vars['visitor']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'] || $_smarty_tpl->tpl_vars['visitor']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['change_visitor_data'] != $_smarty_tpl->tpl_vars['visitor']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['data']) {?>
            <table border="2">
            <tr>
                <th>№</th>
                <th>FIO</th>
                <th>E-mail</th>
                <th>Phone</th>
                <th>Adress</th>
                <th>Data</th>
                <th>Note</th>
                <th colspan="2">Control</th>
            </tr>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['visitor']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['num'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['visitor']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['FIO'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['visitor']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['email'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['visitor']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['phone'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['visitor']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['adress'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['visitor']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['data'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['visitor']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['desc'];?>
</td>
                <td><a href="">Archiv</a></td>
                <td><a href="order_dell.php?id=<?php echo $_smarty_tpl->tpl_vars['visitor']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
&data=<?php echo $_smarty_tpl->tpl_vars['visitor']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['data'];?>
&tmp=visitor">Dell</a></td>
            </tr>
            <tr>
                <th>Photo</th>
                <th colspan="5">Item Name</th>
                <th>Price</th>
                <th>Count</th>
                <th>Full Price</th>
            </tr>
        <?php }?>
        <tr>
            <td><img width="45px" src="../img/<?php echo $_smarty_tpl->tpl_vars['visitor']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['photo'];?>
"></td>
            <td colspan="5"><?php echo $_smarty_tpl->tpl_vars['visitor']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['model'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['visitor']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['visitor']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['count'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['visitor']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['full_price'];?>
</td>
        </tr>
        <?php if ($_smarty_tpl->tpl_vars['visitor']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['count_visitor_cat'] == $_smarty_tpl->tpl_vars['visitor']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['row_visitor_cat']) {?>
            <tr>
                <th colspan="7">Total Price</th>
                <th colspan="2"><?php echo $_smarty_tpl->tpl_vars['visitor']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['total_price'];?>
</th>
            </tr>
            </table>
        <?php }?>

    <?php
}
}
?>


</body><?php }
}
