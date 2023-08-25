<?php
/* Smarty version 4.3.2, created on 2023-08-25 18:33:54
  from 'C:\OSPanel\domains\project\admin\templates\catalog_update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64e8c9e2442d86_20374199',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c18a6fbfdb626b8411a368ad31fbf7dc15d77207' => 
    array (
      0 => 'C:\\OSPanel\\domains\\project\\admin\\templates\\catalog_update.tpl',
      1 => 1692977608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64e8c9e2442d86_20374199 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/form-css.css">

    <title>Form</title>
</head>
<body>
<form action="catalog_update.php" method="post" enctype="multipart/form-data">
    <div class="form__block">
        <div class="block__name">
            <h1 class="name__header">
                Model
            </h1>
            <div class="name__input">
                <input class="input" type="text" name="model" value="<?php echo $_smarty_tpl->tpl_vars['model']->value;?>
">
            </div>
        </div>
        <div class="block__name name">
            <h1 class="name__header">
                Id Firms
            </h1>
            <div class="name__input">
                <select name="id_firms" class="input">
                    <?php
$__section_k_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['firms']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_k_0_total = $__section_k_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_k'] = new Smarty_Variable(array());
if ($__section_k_0_total !== 0) {
for ($__section_k_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] = 0; $__section_k_0_iteration <= $__section_k_0_total; $__section_k_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']++){
?>
                        <?php if (($_smarty_tpl->tpl_vars['id_firms']->value == $_smarty_tpl->tpl_vars['firms']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['id_firma'])) {?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['firms']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['id_firma'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['firms']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['firma'];?>
</option>
                            <?php } else { ?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['firms']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['id_firma'];?>
"><?php echo $_smarty_tpl->tpl_vars['firms']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['firma'];?>
</option>
                        <?php }?>
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
                <input class="input" type="text" name="color" value="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
">
            </div>
        </div>
        <div class="block__name name">
            <h1 class="name__header">
                Price
            </h1>
            <div class="name__input">
                <input class="input" type="text" name="price" value="<?php echo $_smarty_tpl->tpl_vars['price']->value;?>
">
            </div>
        </div>
        <div class="block__name">
            <h1 class="name__header">
                Count
            </h1>
            <div class="name__input">
                <input class="input" type="text" name="count" value="<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
">
            </div>
        </div>
        <div class="block__name name">
            <h1 class="name__header">
                Ram
            </h1>
            <div class="name__input">
                <input class="input" type="text" name="ram" value="<?php echo $_smarty_tpl->tpl_vars['ram']->value;?>
">
            </div>
        </div>
        <div class="block__name">
            <h1 class="name__header">
                Storage
            </h1>
            <div class="name__input">
                <input class="input" type="text" name="storage" value="<?php echo $_smarty_tpl->tpl_vars['storage']->value;?>
">
            </div>
        </div>
        <div class="block__name name">
            <h1 class="name__header">
                Oc
            </h1>
            <div class="name__input">
                <input class="input" type="text" name="oc" value="<?php echo $_smarty_tpl->tpl_vars['oc']->value;?>
">
            </div>
        </div>
        <div class="block__name">
            <h1 class="name__header">
                Batery
            </h1>
            <div class="name__input">
                <input class="input" type="text" name="batery" value="<?php echo $_smarty_tpl->tpl_vars['batery']->value;?>
">
            </div>
        </div>
        <div class="block__name name">
            <h1 class="name__header">
                Discription
            </h1>
            <div class="name__input">
                <textarea name="discription" placeholder="Описание"><?php echo $_smarty_tpl->tpl_vars['discription']->value;?>
</textarea>
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
        <div class="photo">
            <h3>Фото:</h3>
            <?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['photo']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                <?php if (($_smarty_tpl->tpl_vars['photo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['status'] == 1)) {?>
                    <img src="../img/<?php echo $_smarty_tpl->tpl_vars['photo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['photo'];?>
" width="50px"> - <input  type="radio" name="main_photo" value="<?php echo $_smarty_tpl->tpl_vars['photo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
" checked> - <b>Головне Фото</b>
                    <input type="hidden" name="old_photo" value="<?php echo $_smarty_tpl->tpl_vars['photo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">
                    <br>
                <?php } else { ?>
                    <img src="../img/<?php echo $_smarty_tpl->tpl_vars['photo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['photo'];?>
" width="50px"> - <input type="radio" name="main_photo" value="<?php echo $_smarty_tpl->tpl_vars['photo']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
"> - Обрати головним
                    <br>
                <?php }?>
            <?php
}
}
?>

        </div>
        <div class="form__button">
            <input type="submit" name="send" value="CONFIRM" class="button">
        </div>
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    </div>
</form>


</body>
</html><?php }
}
