{* Sort *}

<div style="padding-left:300px">
    <a href="catalog.php?sort=desc{if isset($active_page) && !empty($active_page)}&page={$active_page}{/if}{if isset($id_firm) && !empty($id_firm)}&id_firm={$id_firm}{/if}{if isset($max_price, $min_price)}&max_price={$max_price}&min_price={$min_price}{/if}{if isset($search) && !empty($search)}&search={$search}{/if}">Дешеві</a> |
    <a href="catalog.php?sort=asc{if isset($active_page) && !empty($active_page)}&page={$active_page}{/if}{if isset($id_firm) && !empty($id_firm)}&id_firm={$id_firm}{/if}{if isset($max_price, $min_price)}&max_price={$max_price}&min_price={$min_price}{/if}{if isset($search) && !empty($search)}&search={$search}{/if}">Дорогі</a>
</div>


{* ///////// *}

{* Catalog *}
<div class="main__catalog catalog">
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
                        <div class="price__number">{$catalog[k].price} грн.</div>
                        <a href="">
                            <button class="price__button">Придбати</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        {/section}
    </div>
</div>

{* ///////// *}

<div class="list" style="margin-left:700px">
    <table>
        <tr>
            {if $active_page == 1}
                <td style="background-color:#bbb8b8; padding:7px; border-radius:10px"> < </td>
                {else}
                <td style="background-color:grey; padding:7px; border-radius:10px"><a href="catalog.php?page={$active_page - 1}{if isset($sort) && !empty($sort)}&sort={$sort}{/if}{if isset($id_firm) && !empty($id_firm)}&id_firm={$id_firm}{/if}{if isset($max_price, $min_price)}&max_price={$max_price}&min_price={$min_price}{/if}{if isset($search) && !empty($search)}&search={$search}{/if}"> < </a></td>
            {/if}
            {for $i = 1; $i <= $count_page; $i++}
                {if ($i == $active_page)}
                    <td style="background-color:#bbb8b8; padding:7px; border-radius:10px">{$i}</td>
                    {else}
                    <td style="background-color:grey; padding:7px; border-radius:10px"><a href="catalog.php?page={$i}{if isset($sort) && !empty($sort)}&sort={$sort}{/if}{if isset($id_firm) && !empty($id_firm)}&id_firm={$id_firm}{/if}{if isset($max_price, $min_price)}&max_price={$max_price}&min_price={$min_price}{/if}{if isset($search) && !empty($search)}&search={$search}{/if}">{$i}</a></td>
                {/if}
            {/for}
            {if $active_page == $count_page}
                <td style="background-color:#bbb8b8; padding:7px; border-radius:10px"> > </td>
                {else}
                <td style="background-color:grey; padding:7px; border-radius:10px"><a href="catalog.php?page={$active_page + 1}{if isset($sort) && !empty($sort)}&sort={$sort}{/if}{if isset($id_firm) && !empty($id_firm)}&id_firm={$id_firm}{/if}{if isset($max_price, $min_price)}&max_price={$max_price}&min_price={$min_price}{/if}{if isset($search) && !empty($search)}&search={$search}{/if}"> > </a></td>
            {/if}
        </tr>
    </table>
</div>

