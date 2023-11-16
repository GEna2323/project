<head>
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
                {if isset($photo_id)}
                    {section loop = $photos name = i}
                        {if $photo_id == $photos[i].id}
                            <div class="phone_photo">
                                <img src="img/{$photos[i].name}" alt="Photo" width="130px">
                            </div>
                        {/if}
                    {/section}
                    <div class="photos">
                        {section loop = $photos name = x}
                            {if $photo_id != $photos[x].id}
                                <div class="one_photo">
                                    <a href="catalog_info.php?id={$phone.id}&photo_id={$photos[x].id}{if isset($tmp) && $tmp == 'added'}&tmp=added{/if}"><img width="50px" src="img/{$photos[x].name}" alt="Second Photo"></a>
                                </div>
                            {/if}
                        {/section}
                        <div class="one_photo">
                            <a href="catalog_info.php?id={$phone.id}{if isset($tmp) && $tmp == 'added'}&tmp=added{/if}"><img width="50px" src="img/{$phone.main_photo}" alt="Second Photo"></a>
                        </div>
                    </div>
                    {else}
                    <div class="phone_photo">
                        <img src="img/{$phone.main_photo}" alt="Photo" width="130px">
                    </div>
                    <div class="photos">
                        {if (isset($photos) && !empty($photos))}
                            {section loop = $photos name = k}
                                <div class="one_photo">
                                    <a href="catalog_info.php?id={$phone.id}&photo_id={$photos[k].id}{if isset($tmp) && $tmp == 'added'}&tmp=added{/if}"><img width="50px" src="img/{$photos[k].name}" alt="Second Photo"></a>
                                </div>
                            {/section}
                        {/if}
                    </div>
                {/if}
            </div>
            <div class="phone_info">
                <div class="phone_text">
                    <h1 class="model">Phone: {$phone.model} {$phone.ram}/{$phone.storage}Gb {$phone.color}</h1>
                </div>
                <div class="phone__header">
                    <div class="phone_price">
                        {$phone.price} ₴
                    </div>
                    <div class="buy_button">
                    {if isset($tmp) && $tmp == 'added'}
                        <p>Вже в корзині</p>
                        {else}
                            <a href="basket.php?id={$phone.id}&mode=add&tmp=1{if isset($photo_id) && !empty($photo_id)}&photo_id={$photo_id}{/if}">
                                <button>
                                    Купити
                                </button>
                            </a>
                    {/if}
                    </div>
                </div>
            </div>
        </div>
        <div class="phone_more_info">
            <div class="phone_desc">
                <p><b>Опис Телефону: </b> {$phone.desc}</p>
            </div>
            <div class="phone_play">

            </div>
        </div>
    </div>
</div>



</body>