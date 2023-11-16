<?php
/* Smarty version 4.3.2, created on 2023-11-02 14:07:05
  from 'C:\OSPanel\domains\project\admin\templates\order_dell.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_654382d96ab5a4_48467908',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3dfd89b4881cd685352d3f52c95a4b74343ab684' => 
    array (
      0 => 'C:\\OSPanel\\domains\\project\\admin\\templates\\order_dell.tpl',
      1 => 1698922719,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_654382d96ab5a4_48467908 (Smarty_Internal_Template $_smarty_tpl) {
?><head>

</head>
<body>
    <form action="order_dell.php" method="post">
        <h4>Ви дійсно збираєтеся видалити замовлення <?php if ($_smarty_tpl->tpl_vars['tmp']->value == 'client') {?>Клієнта<?php } else { ?>Відвідувача<?php }?> "<?php echo $_smarty_tpl->tpl_vars['FIO']->value;?>
", з датою створення "<?php echo $_smarty_tpl->tpl_vars['orderData']->value;?>
"</h4>
        <input type="radio" name="dell" value="Yes" checked> Yes
        <input type="radio" name="dell" value="No"> No
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
        <input type="hidden" name="data" value="<?php echo $_smarty_tpl->tpl_vars['orderData']->value;?>
">
        <input type="hidden" name="tmp" value="<?php echo $_smarty_tpl->tpl_vars['tmp']->value;?>
">
        <input type="submit" name="send" value="Підтвердити">
    </form>
</body><?php }
}
