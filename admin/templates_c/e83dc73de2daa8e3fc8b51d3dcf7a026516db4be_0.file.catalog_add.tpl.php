<?php
/* Smarty version 4.3.2, created on 2023-08-22 14:06:05
  from 'C:\OSPanel\domains\project\admin\templates\catalog_add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64e4969dc88b18_33925912',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e83dc73de2daa8e3fc8b51d3dcf7a026516db4be' => 
    array (
      0 => 'C:\\OSPanel\\domains\\project\\admin\\templates\\catalog_add.tpl',
      1 => 1692702287,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64e4969dc88b18_33925912 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/form-css.css">

    <title>Form</title>
</head>
<body>
<form action="catalog_add.php" method="post" enctype="multipart/form-data">
    <div class="form__block">
        <div class="block__name">
            <h1 class="name__header">
                Model
            </h1>
            <div class="name__input">
                <input class="input" type="text" name="model">
            </div>
        </div>
        <div class="block__name name">
            <h1 class="name__header">
                Id Firms
            </h1>
            <div class="name__input">
                    <select name="id_firms" class="input">
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
            </div>
        </div>
        <div class="block__name">
            <h1 class="name__header">
                Color
            </h1>
            <div class="name__input">
                <input class="input" type="text" name="color">
            </div>
        </div>
        <div class="block__name name">
            <h1 class="name__header">
                Price
            </h1>
            <div class="name__input">
                <input class="input" type="text" name="price">
            </div>
        </div>
        <div class="block__name">
            <h1 class="name__header">
                Count
            </h1>
            <div class="name__input">
                <input class="input" type="text" name="count">
            </div>
        </div>
        <div class="block__name name">
            <h1 class="name__header">
                Ram
            </h1>
            <div class="name__input">
                <input class="input" type="text" name="ram">
            </div>
        </div>
        <div class="block__name">
            <h1 class="name__header">
                Storage
            </h1>
            <div class="name__input">
                <input class="input" type="text" name="storage">
            </div>
        </div>
        <div class="block__name name">
            <h1 class="name__header">
                Oc
            </h1>
            <div class="name__input">
                <input class="input" type="text" name="oc">
            </div>
        </div>
        <div class="block__name">
            <h1 class="name__header">
                Batery
            </h1>
            <div class="name__input">
                <input class="input" type="text" name="batery">
            </div>
        </div>
        <div class="block__name name">
            <h1 class="name__header">
                Discription
            </h1>
            <div class="name__input">
                <textarea name="discription" placeholder="Описание"></textarea>
            </div>
        </div>
        <div class="block__name">
            <h1 class="name__header">
                Photo
            </h1>
            <div class="name__input">
                <input class="input" type="file" name="photo[]" multiple>
            </div>
        </div>
        <div class="form__button">
            <input type="submit" name="send" value="CONFIRM" class="button">
        </div>
    </div>
</form>
</body>
</html>

<?php }
}
