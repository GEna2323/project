<!DOCTYPE html>
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
                <input class="input" type="text" name="model" value="{$model}">
            </div>
        </div>
        <div class="block__name name">
            <h1 class="name__header">
                Id Firms
            </h1>
            <div class="name__input">
                <select name="id_firms" class="input">
                    {section loop = $firms name = k}
                        {if ($id_firms == $firms[k].id_firma)}
                            <option value="{$firms[k].id_firma}" selected>{$firms[k].firma}</option>
                            {else}
                            <option value="{$firms[k].id_firma}">{$firms[k].firma}</option>
                        {/if}
                    {/section}
                </select>
            </div>
        </div>
        <div class="block__name">
            <h1 class="name__header">
                Color
            </h1>
            <div class="name__input">
                <input class="input" type="text" name="color" value="{$color}">
            </div>
        </div>
        <div class="block__name name">
            <h1 class="name__header">
                Price
            </h1>
            <div class="name__input">
                <input class="input" type="text" name="price" value="{$price}">
            </div>
        </div>
        <div class="block__name">
            <h1 class="name__header">
                Count
            </h1>
            <div class="name__input">
                <input class="input" type="text" name="count" value="{$count}">
            </div>
        </div>
        <div class="block__name name">
            <h1 class="name__header">
                Ram
            </h1>
            <div class="name__input">
                <input class="input" type="text" name="ram" value="{$ram}">
            </div>
        </div>
        <div class="block__name">
            <h1 class="name__header">
                Storage
            </h1>
            <div class="name__input">
                <input class="input" type="text" name="storage" value="{$storage}">
            </div>
        </div>
        <div class="block__name name">
            <h1 class="name__header">
                Oc
            </h1>
            <div class="name__input">
                <input class="input" type="text" name="oc" value="{$oc}">
            </div>
        </div>
        <div class="block__name">
            <h1 class="name__header">
                Batery
            </h1>
            <div class="name__input">
                <input class="input" type="text" name="batery" value="{$batery}">
            </div>
        </div>
        <div class="block__name name">
            <h1 class="name__header">
                Discription
            </h1>
            <div class="name__input">
                <textarea name="discription" placeholder="Описание">{$discription}</textarea>
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
            {section loop = $photo name = i}
                {if ($photo[i].status == 1)}
                    <img src="../img/{$photo[i].photo}" width="50px"> - <input  type="radio" name="main_photo" value="{$photo[i].id}" checked> - <b>Головне Фото</b>
                    <input type="hidden" name="old_photo" value="{$photo[i].id}">
                    <br>
                {else}
                    <img src="../img/{$photo[i].photo}" width="50px"> - <input type="radio" name="main_photo" value="{$photo[i].id}"> - Обрати головним
                    <br>
                {/if}
            {/section}

        </div>
        <div class="form__button">
            <input type="submit" name="send" value="CONFIRM" class="button">
        </div>
        <input type="hidden" name="id" value="{$id}">
    </div>
</form>


</body>
</html>