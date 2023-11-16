<?php
/* Smarty version 4.3.2, created on 2023-11-12 14:43:52
  from 'C:\OSPanel\domains\project\templates\catalog_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6550ba78c4cfd5_15449513',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '059d04165d61f9e37433f7db93c69449d965d60f' => 
    array (
      0 => 'C:\\OSPanel\\domains\\project\\templates\\catalog_info.tpl',
      1 => 1699789431,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6550ba78c4cfd5_15449513 (Smarty_Internal_Template $_smarty_tpl) {
?><head>
    <style>
        .phone_conteiner{
            display:flex;
            justify-content:center;
        }
        .phone_con{
            height:800px;
            width:800px;
            background-color:white;
        }
        .phone_header{
            display:flex;
        }
        .all_photo{
            display:flex;
            background-color: #e4e9e0;
            width:240px;
            border-radius: 0px 25px 25px 0px;
            margin: 15px 0px 15px 0px;
        }
        .phone_photo{
            margin: 10px 25px 10px 25px;
            /*border: 3px solid;*/
            width:140px;
        }
        .photos{
            display:flex;
            flex-direction:column;
            justify-content:space-around;
            width:100px;
            /*border:3px solid purple;*/
            background-color: #bbf8d5;
            align-items: center;
            border-radius: 0px 20px 20px 0px;

        }
        .one_photo{
            /*border:2px solid black;*/
        }
        .phone_info{
            display:flex;
            flex-direction:column;
            margin: 15px 0px 15px 0px;
            width:100%;
            border-radius: 20px 0px 0px 20px;
            /*border:3px solid red;*/
            background-color:white;
        }
        .phone_text{
            /*margin: 20px 0px; */
            margin: 0px 0px 5px 5px;
            padding: 20px 20px 15px 20px;
            border-radius: 20px 0px 0px 20px;
            background-color: #e4e9e0;

        }
        .phone_more_info{
            width:100%;
            height: 400px;
            border:3px solid blue;
        }
        p, b:not(:last-child){
            margin:5px;
        }
        .phone_desc{
            width:100%;
            height:100px;
            border:3px solid yellow;
        }
        .phone_play{
            width: 100%;
            height: 300px;
            border:3px solid green;
        }
        .phone_photo img{
            border-radius:15px;
        }
        .model{
            font-size:35px;
        }
        .phone_price{
            font-size:45px;
            color:black;

        }
        button{
            background-color:white;
            color:black;
            border-radius: 20px;
            font-size:20px;
            padding:15px;
        }
        p{
            background-color:white;
            color:black;
            border-radius: 20px;
            font-size:20px;
            padding:15px;
        }
        button:hover{
            background-color:grey;
            color:white;
        }
        .phone__header{
            margin-left:5px;
            height: -webkit-fill-available;
            display: flex;
            align-items: center;
            background-color: #e4e9e0;
            border-radius: 20px 0px 0px 20px;
            padding-left:20px;

        }
        .buy_button{
            margin:20px;
        }
    </style>
</head>
<body>
<div class="phone_conteiner">
    <div class="phone_con">
        <div class="phone_header">
            <div class="all_photo">
                <?php if ((isset($_smarty_tpl->tpl_vars['photo_id']->value))) {?>
                    <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['photos']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                        <?php if ($_smarty_tpl->tpl_vars['photo_id']->value == $_smarty_tpl->tpl_vars['photos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id']) {?>
                            <div class="phone_photo">
                                <img src="img/<?php echo $_smarty_tpl->tpl_vars['photos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
" alt="Photo" width="130px">
                            </div>
                        <?php }?>
                    <?php
}
}
?>
                    <div class="photos">
                        <?php
$__section_x_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['photos']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_x_1_total = $__section_x_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_x'] = new Smarty_Variable(array());
if ($__section_x_1_total !== 0) {
for ($__section_x_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] = 0; $__section_x_1_iteration <= $__section_x_1_total; $__section_x_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']++){
?>
                            <?php if ($_smarty_tpl->tpl_vars['photo_id']->value != $_smarty_tpl->tpl_vars['photos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['id']) {?>
                                <div class="one_photo">
                                    <a href="catalog_info.php?id=<?php echo $_smarty_tpl->tpl_vars['phone']->value['id'];?>
&photo_id=<?php echo $_smarty_tpl->tpl_vars['photos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['id'];
if ((isset($_smarty_tpl->tpl_vars['tmp']->value)) && $_smarty_tpl->tpl_vars['tmp']->value == 'added') {?>&tmp=added<?php }?>"><img width="50px" src="img/<?php echo $_smarty_tpl->tpl_vars['photos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['name'];?>
" alt="Second Photo"></a>
                                </div>
                            <?php }?>
                        <?php
}
}
?>
                        <div class="one_photo">
                            <a href="catalog_info.php?id=<?php echo $_smarty_tpl->tpl_vars['phone']->value['id'];
if ((isset($_smarty_tpl->tpl_vars['tmp']->value)) && $_smarty_tpl->tpl_vars['tmp']->value == 'added') {?>&tmp=added<?php }?>"><img width="50px" src="img/<?php echo $_smarty_tpl->tpl_vars['phone']->value['main_photo'];?>
" alt="Second Photo"></a>
                        </div>
                    </div>
                    <?php } else { ?>
                    <div class="phone_photo">
                        <img src="img/<?php echo $_smarty_tpl->tpl_vars['phone']->value['main_photo'];?>
" alt="Photo" width="130px">
                    </div>
                    <div class="photos">
                        <?php if (((isset($_smarty_tpl->tpl_vars['photos']->value)) && !empty($_smarty_tpl->tpl_vars['photos']->value))) {?>
                            <?php
$__section_k_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['photos']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_k_2_total = $__section_k_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_k'] = new Smarty_Variable(array());
if ($__section_k_2_total !== 0) {
for ($__section_k_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] = 0; $__section_k_2_iteration <= $__section_k_2_total; $__section_k_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']++){
?>
                                <div class="one_photo">
                                    <a href="catalog_info.php?id=<?php echo $_smarty_tpl->tpl_vars['phone']->value['id'];?>
&photo_id=<?php echo $_smarty_tpl->tpl_vars['photos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['id'];
if ((isset($_smarty_tpl->tpl_vars['tmp']->value)) && $_smarty_tpl->tpl_vars['tmp']->value == 'added') {?>&tmp=added<?php }?>"><img width="50px" src="img/<?php echo $_smarty_tpl->tpl_vars['photos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['name'];?>
" alt="Second Photo"></a>
                                </div>
                            <?php
}
}
?>
                        <?php }?>
                    </div>
                <?php }?>
            </div>
            <div class="phone_info">
                <div class="phone_text">
                    <h1 class="model">Phone: <?php echo $_smarty_tpl->tpl_vars['phone']->value['model'];?>
 <?php echo $_smarty_tpl->tpl_vars['phone']->value['ram'];?>
/<?php echo $_smarty_tpl->tpl_vars['phone']->value['storage'];?>
Gb <?php echo $_smarty_tpl->tpl_vars['phone']->value['color'];?>
</h1>
                </div>
                <div class="phone__header">
                    <div class="phone_price">
                        <?php echo $_smarty_tpl->tpl_vars['phone']->value['price'];?>
 ₴
                    </div>
                    <div class="buy_button">
                    <?php if ((isset($_smarty_tpl->tpl_vars['tmp']->value)) && $_smarty_tpl->tpl_vars['tmp']->value == 'added') {?>
                        <p>Вже в корзині</p>
                        <?php } else { ?>
                            <a href="basket.php?id=<?php echo $_smarty_tpl->tpl_vars['phone']->value['id'];?>
&mode=add&tmp=1<?php if ((isset($_smarty_tpl->tpl_vars['photo_id']->value)) && !empty($_smarty_tpl->tpl_vars['photo_id']->value)) {?>&photo_id=<?php echo $_smarty_tpl->tpl_vars['photo_id']->value;
}?>">
                                <button>
                                    Купити
                                </button>
                            </a>
                    <?php }?>
                    </div>
                </div>
            </div>
        </div>
        <div class="phone_more_info">
            <div class="phone_desc">
                <p><b>Опис Телефону: </b> <?php echo $_smarty_tpl->tpl_vars['phone']->value['desc'];?>
</p>
            </div>
            <div class="phone_play">

            </div>
        </div>
    </div>
</div>



</body><?php }
}
