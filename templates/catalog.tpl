{* Catalog *}
<head>
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
    {* Sort *}

    <div class="catalog_sort">
            <a class="catalog_sort" href="list.php?sort=desc{if isset($active_page) && !empty($active_page)}&page={$active_page}{/if}{if isset($id_firm) && !empty($id_firm)}&id_firm={$id_firm}{/if}{if isset($max_price, $min_price)}&max_price={$max_price}&min_price={$min_price}{/if}{if isset($search) && !empty($search)}&search={$search}{/if}">Дешеві</a> |
            <a class="catalog_sort" href="list.php?sort=asc{if isset($active_page) && !empty($active_page)}&page={$active_page}{/if}{if isset($id_firm) && !empty($id_firm)}&id_firm={$id_firm}{/if}{if isset($max_price, $min_price)}&max_price={$max_price}&min_price={$min_price}{/if}{if isset($search) && !empty($search)}&search={$search}{/if}">Дорогі</a>
    </div>

    {* ///////// *}
    <div class="catalog__container _container">
        {section loop = $catalog name = k}
        <div class="catalog__block block">
            <div class="catalog__body">
                <a href="catalog_info.php?id={$catalog[k].id}" class="block__img">
                    <img src="img/{$catalog[k].photo}" alt="phone">
                </a>
                <div class="block__body">
                    <h2 class="body__title">Мобільний телефон {$catalog[k].model}</h2>
                    <div class="body__price">
                        {if $catalog[k].count == 0}
                            <div class="price__number">Немає в наявності</div>
                        {else}
                        <div class="price__number">{$catalog[k].price} грн.</div>
                        <a href="basket.php?id={$catalog[k].id}&mode=add{if isset($active_page) && !empty($active_page)}&page={$active_page}{/if}{if isset($sort) && !empty($sort)}&sort={$sort}{/if}{if isset($id_firm) && !empty($id_firm)}&id_firm={$id_firm}{/if}{if isset($search) && !empty($search)}&search={$search}{/if}{if isset($min_price, $max_price)}&min_price={$min_price}&max_price={$max_price}{/if}">
                            <button class="price__button">До Кошику</button>
                        </a>
                        {/if}
                    </div>
                </div>
            </div>
        </div>
        {/section}
    </div>
</div>

{* ///////// *}

<div class="list">
    <table>
        <tr>
            {if $active_page == 1}
                <td class="unclicable"> < </td>
                {else}
                <td class="clicable"><a href="list.php?page={$active_page - 1}{if isset($sort) && !empty($sort)}&sort={$sort}{/if}{if isset($id_firm) && !empty($id_firm)}&id_firm={$id_firm}{/if}{if isset($max_price, $min_price)}&max_price={$max_price}&min_price={$min_price}{/if}{if isset($search) && !empty($search)}&search={$search}{/if}"> < </a></td>
            {/if}
            {for $i = 1; $i <= $count_page; $i++}
                {if ($i == $active_page)}
                    <td class="unclicable">{$i}</td>
                    {else}
                    <td class="clicable"><a href="list.php?page={$i}{if isset($sort) && !empty($sort)}&sort={$sort}{/if}{if isset($id_firm) && !empty($id_firm)}&id_firm={$id_firm}{/if}{if isset($max_price, $min_price)}&max_price={$max_price}&min_price={$min_price}{/if}{if isset($search) && !empty($search)}&search={$search}{/if}">{$i}</a></td>
                {/if}
            {/for}
            {if $active_page == $count_page}
                <td class="unclicable"> > </td>
                {else}
                <td class="clicable"><a href="list.php?page={$active_page + 1}{if isset($sort) && !empty($sort)}&sort={$sort}{/if}{if isset($id_firm) && !empty($id_firm)}&id_firm={$id_firm}{/if}{if isset($max_price, $min_price)}&max_price={$max_price}&min_price={$min_price}{/if}{if isset($search) && !empty($search)}&search={$search}{/if}"> > </a></td>
            {/if}
        </tr>
    </table>
</div>

