<?php
/* Smarty version 4.3.2, created on 2023-10-25 14:01:05
  from 'C:\OSPanel\domains\project\templates\order_buy.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6538f5716e1d31_85028186',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd21b05d7e725e65849baae2e7968f32843421102' => 
    array (
      0 => 'C:\\OSPanel\\domains\\project\\templates\\order_buy.tpl',
      1 => 1698228385,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6538f5716e1d31_85028186 (Smarty_Internal_Template $_smarty_tpl) {
?><head>
    <link rel="stylesheet" type="text/css" href="../css/order.css">
</head>
<body>
<?php if ((isset($_smarty_tpl->tpl_vars['tmp']->value)) && $_smarty_tpl->tpl_vars['tmp']->value == 1) {?>
<div class="form">
    <table>
        <tr>
            <th>№</th>
            <th>Photo</th>
            <th>Model</th>
            <th>Price</th>
            <th>Count</th>
            <th>Full Price</th>
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
                <td><?php echo $_smarty_tpl->tpl_vars['basket']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['count'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['basket']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['full_price'];?>
</td>
            </tr>
        <?php
}
}
?>
        <tr>
            <th colspan="4">Total Price:</th>
            <th colspan="2"><?php echo $_smarty_tpl->tpl_vars['total_price']->value;?>
</th>
        </tr>
    </table>
</div>
<div class="visitor_buy">
    <?php if ((isset($_smarty_tpl->tpl_vars['client']->value))) {?>
        <h4>Ви авторезовані, змініть дані за потреби:</h4>
        <form method="post" action="order_buy.php">
            <table>
                <tr><th>Email -></th><td><?php echo $_smarty_tpl->tpl_vars['client']->value['email'];?>
</td></tr>
                <tr><th>Phone Number -> </th><td><input type="text" name="number" value="<?php echo $_smarty_tpl->tpl_vars['client']->value['phone'];?>
"></td></tr>
                <tr><th>FIO -> </th><td><input type="text" name="FIO" value="<?php echo $_smarty_tpl->tpl_vars['client']->value['FIO'];?>
"></td></tr>
                <tr><th>Your Adress -> </th><td><input type="text" name="adress" value="<?php echo $_smarty_tpl->tpl_vars['client']->value['adress'];?>
"></td></tr>
                <tr><th>Note -> </th><td><textarea name="description"></textarea></td></tr>
                <tr><th>Order -></th><td><input type="submit" name="send" value="Click"></td></tr>
                <input type="hidden" name="user" value="client">
                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['client']->value['id'];?>
">
            </table>
        </form>
        <?php } else { ?>
        <h4><a href="login.php">Увійдіть</a> або оформіть як гість:</h4>
        <form method="post" action="order_buy.php">
            <table>
                <tr><th>Email -></th><td><input type="email" name="email"></td></tr>
                <tr><th>Phone Number -> </th><td><input type="text" name="number"></td></tr>
                <tr><th>FIO -> </th><td><input type="text" name="FIO"></td></tr>
                <tr><th>Your Adress -> </th><td><input type="text" name="adress"></td></tr>
                <tr><th>Note -> </th><td><textarea name="description"></textarea></td></tr>
                <tr><th>Order -></th><td><input type="submit" name="send" value="Click"></td></tr>
                <input type="hidden" name="user" value="visitor">
            </table>
        </form>
    <?php }?>

</div>
    <?php } elseif (((isset($_smarty_tpl->tpl_vars['tmp']->value)) && $_smarty_tpl->tpl_vars['tmp']->value == 2)) {?>
    <h1>Ваше замовлення успішно прийнято на опрацювання</h1>
<?php }?>
</body><?php }
}
