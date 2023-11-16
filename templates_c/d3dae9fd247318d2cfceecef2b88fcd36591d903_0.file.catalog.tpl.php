<?php
/* Smarty version 4.3.2, created on 2023-11-09 12:37:55
  from 'C:\OSPanel\domains\project\templates\catalog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_654ca873d19ae8_49342910',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3dae9fd247318d2cfceecef2b88fcd36591d903' => 
    array (
      0 => 'C:\\OSPanel\\domains\\project\\templates\\catalog.tpl',
      1 => 1699377404,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_654ca873d19ae8_49342910 (Smarty_Internal_Template $_smarty_tpl) {
?><head>
    <style>
        a{
            color:black;
        }
        .list{
            margin-left:700px
        }
        .unclicable{
            background-color:#bbb8b8; padding:7px; border-radius:10px
        }
        .clicable{
            background-color:grey; padding:7px; border-radius:10px
        }
    </style>
</head>

<div class="main__catalog catalog">
    
    <div class="catalog_sort">
            <a class="catalog_sort" href="list.php?sort=desc<?php if ((isset($_smarty_tpl->tpl_vars['active_page']->value)) && !empty($_smarty_tpl->tpl_vars['active_page']->value)) {?>&page=<?php echo $_smarty_tpl->tpl_vars['active_page']->value;
}
if ((isset($_smarty_tpl->tpl_vars['id_firm']->value)) && !empty($_smarty_tpl->tpl_vars['id_firm']->value)) {?>&id_firm=<?php echo $_smarty_tpl->tpl_vars['id_firm']->value;
}
if ((isset($_smarty_tpl->tpl_vars['max_price']->value) && isset($_smarty_tpl->tpl_vars['min_price']->value))) {?>&max_price=<?php echo $_smarty_tpl->tpl_vars['max_price']->value;?>
&min_price=<?php echo $_smarty_tpl->tpl_vars['min_price']->value;
}
if ((isset($_smarty_tpl->tpl_vars['search']->value)) && !empty($_smarty_tpl->tpl_vars['search']->value)) {?>&search=<?php echo $_smarty_tpl->tpl_vars['search']->value;
}?>">Дешеві</a> |
            <a class="catalog_sort" href="list.php?sort=asc<?php if ((isset($_smarty_tpl->tpl_vars['active_page']->value)) && !empty($_smarty_tpl->tpl_vars['active_page']->value)) {?>&page=<?php echo $_smarty_tpl->tpl_vars['active_page']->value;
}
if ((isset($_smarty_tpl->tpl_vars['id_firm']->value)) && !empty($_smarty_tpl->tpl_vars['id_firm']->value)) {?>&id_firm=<?php echo $_smarty_tpl->tpl_vars['id_firm']->value;
}
if ((isset($_smarty_tpl->tpl_vars['max_price']->value) && isset($_smarty_tpl->tpl_vars['min_price']->value))) {?>&max_price=<?php echo $_smarty_tpl->tpl_vars['max_price']->value;?>
&min_price=<?php echo $_smarty_tpl->tpl_vars['min_price']->value;
}
if ((isset($_smarty_tpl->tpl_vars['search']->value)) && !empty($_smarty_tpl->tpl_vars['search']->value)) {?>&search=<?php echo $_smarty_tpl->tpl_vars['search']->value;
}?>">Дорогі</a>
    </div>

        <div class="catalog__container _container">
        <?php
$__section_k_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['catalog']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_k_0_total = $__section_k_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_k'] = new Smarty_Variable(array());
if ($__section_k_0_total !== 0) {
for ($__section_k_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] = 0; $__section_k_0_iteration <= $__section_k_0_total; $__section_k_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']++){
?>
        <div class="catalog__block block">
            <div class="catalog__body">
                <a href="catalog_info.php?id=<?php echo $_smarty_tpl->tpl_vars['catalog']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['id'];?>
" class="block__img">
                    <img src="img/<?php echo $_smarty_tpl->tpl_vars['catalog']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['photo'];?>
" alt="phone">
                </a>
                <div class="block__body">
                    <h2 class="body__title">Мобільний телефон <?php echo $_smarty_tpl->tpl_vars['catalog']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['model'];?>
</h2>
                    <div class="body__price">
                        <?php if ($_smarty_tpl->tpl_vars['catalog']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['count'] == 0) {?>
                            <div class="price__number">Немає в наявності</div>
                        <?php } else { ?>
                        <div class="price__number"><?php echo $_smarty_tpl->tpl_vars['catalog']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['price'];?>
 грн.</div>
                        <a href="basket.php?id=<?php echo $_smarty_tpl->tpl_vars['catalog']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['id'];?>
&mode=add<?php if ((isset($_smarty_tpl->tpl_vars['active_page']->value)) && !empty($_smarty_tpl->tpl_vars['active_page']->value)) {?>&page=<?php echo $_smarty_tpl->tpl_vars['active_page']->value;
}
if ((isset($_smarty_tpl->tpl_vars['sort']->value)) && !empty($_smarty_tpl->tpl_vars['sort']->value)) {?>&sort=<?php echo $_smarty_tpl->tpl_vars['sort']->value;
}
if ((isset($_smarty_tpl->tpl_vars['id_firm']->value)) && !empty($_smarty_tpl->tpl_vars['id_firm']->value)) {?>&id_firm=<?php echo $_smarty_tpl->tpl_vars['id_firm']->value;
}
if ((isset($_smarty_tpl->tpl_vars['search']->value)) && !empty($_smarty_tpl->tpl_vars['search']->value)) {?>&search=<?php echo $_smarty_tpl->tpl_vars['search']->value;
}
if ((isset($_smarty_tpl->tpl_vars['min_price']->value) && isset($_smarty_tpl->tpl_vars['max_price']->value))) {?>&min_price=<?php echo $_smarty_tpl->tpl_vars['min_price']->value;?>
&max_price=<?php echo $_smarty_tpl->tpl_vars['max_price']->value;
}?>">
                            <button class="price__button">До Кошику</button>
                        </a>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
        <?php
}
}
?>
    </div>
</div>


<div class="list">
    <table>
        <tr>
            <?php if ($_smarty_tpl->tpl_vars['active_page']->value == 1) {?>
                <td class="unclicable"> < </td>
                <?php } else { ?>
                <td class="clicable"><a href="list.php?page=<?php echo $_smarty_tpl->tpl_vars['active_page']->value-1;
if ((isset($_smarty_tpl->tpl_vars['sort']->value)) && !empty($_smarty_tpl->tpl_vars['sort']->value)) {?>&sort=<?php echo $_smarty_tpl->tpl_vars['sort']->value;
}
if ((isset($_smarty_tpl->tpl_vars['id_firm']->value)) && !empty($_smarty_tpl->tpl_vars['id_firm']->value)) {?>&id_firm=<?php echo $_smarty_tpl->tpl_vars['id_firm']->value;
}
if ((isset($_smarty_tpl->tpl_vars['max_price']->value) && isset($_smarty_tpl->tpl_vars['min_price']->value))) {?>&max_price=<?php echo $_smarty_tpl->tpl_vars['max_price']->value;?>
&min_price=<?php echo $_smarty_tpl->tpl_vars['min_price']->value;
}
if ((isset($_smarty_tpl->tpl_vars['search']->value)) && !empty($_smarty_tpl->tpl_vars['search']->value)) {?>&search=<?php echo $_smarty_tpl->tpl_vars['search']->value;
}?>"> < </a></td>
            <?php }?>
            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);
$_smarty_tpl->tpl_vars['i']->value = 1;
if ($_smarty_tpl->tpl_vars['i']->value <= $_smarty_tpl->tpl_vars['count_page']->value) {
for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value <= $_smarty_tpl->tpl_vars['count_page']->value; $_smarty_tpl->tpl_vars['i']->value++) {
?>
                <?php if (($_smarty_tpl->tpl_vars['i']->value == $_smarty_tpl->tpl_vars['active_page']->value)) {?>
                    <td class="unclicable"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
                    <?php } else { ?>
                    <td class="clicable"><a href="list.php?page=<?php echo $_smarty_tpl->tpl_vars['i']->value;
if ((isset($_smarty_tpl->tpl_vars['sort']->value)) && !empty($_smarty_tpl->tpl_vars['sort']->value)) {?>&sort=<?php echo $_smarty_tpl->tpl_vars['sort']->value;
}
if ((isset($_smarty_tpl->tpl_vars['id_firm']->value)) && !empty($_smarty_tpl->tpl_vars['id_firm']->value)) {?>&id_firm=<?php echo $_smarty_tpl->tpl_vars['id_firm']->value;
}
if ((isset($_smarty_tpl->tpl_vars['max_price']->value) && isset($_smarty_tpl->tpl_vars['min_price']->value))) {?>&max_price=<?php echo $_smarty_tpl->tpl_vars['max_price']->value;?>
&min_price=<?php echo $_smarty_tpl->tpl_vars['min_price']->value;
}
if ((isset($_smarty_tpl->tpl_vars['search']->value)) && !empty($_smarty_tpl->tpl_vars['search']->value)) {?>&search=<?php echo $_smarty_tpl->tpl_vars['search']->value;
}?>"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></td>
                <?php }?>
            <?php }
}
?>
            <?php if ($_smarty_tpl->tpl_vars['active_page']->value == $_smarty_tpl->tpl_vars['count_page']->value) {?>
                <td class="unclicable"> > </td>
                <?php } else { ?>
                <td class="clicable"><a href="list.php?page=<?php echo $_smarty_tpl->tpl_vars['active_page']->value+1;
if ((isset($_smarty_tpl->tpl_vars['sort']->value)) && !empty($_smarty_tpl->tpl_vars['sort']->value)) {?>&sort=<?php echo $_smarty_tpl->tpl_vars['sort']->value;
}
if ((isset($_smarty_tpl->tpl_vars['id_firm']->value)) && !empty($_smarty_tpl->tpl_vars['id_firm']->value)) {?>&id_firm=<?php echo $_smarty_tpl->tpl_vars['id_firm']->value;
}
if ((isset($_smarty_tpl->tpl_vars['max_price']->value) && isset($_smarty_tpl->tpl_vars['min_price']->value))) {?>&max_price=<?php echo $_smarty_tpl->tpl_vars['max_price']->value;?>
&min_price=<?php echo $_smarty_tpl->tpl_vars['min_price']->value;
}
if ((isset($_smarty_tpl->tpl_vars['search']->value)) && !empty($_smarty_tpl->tpl_vars['search']->value)) {?>&search=<?php echo $_smarty_tpl->tpl_vars['search']->value;
}?>"> > </a></td>
            <?php }?>
        </tr>
    </table>
</div>

<?php }
}
