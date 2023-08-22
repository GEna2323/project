{*<form action="catalog_add.php" method="post" enctype="multipart/form-data">*}
{*    <h3>Фірма</h3>*}
{*    <select name="id_firms">*}
{*        <option value="0">Оберіть Фірму</option>*}
{*        {section loop = $categories name = k}*}
{*            <option value="{$categories[k].id}">{$categories[k].name}</option>*}
{*        {/section}*}
{*    </select>*}
{*    <h3>Модель</h3>*}
{*    <input type="text" name="model" placeholder="Model">*}
{*    <h3>Кількість</h3>*}
{*    <input type="number" name="count" placeholder="Кількість">*}
{*    <h3>Оперативна пам'ять</h3>*}
{*    <input type="number" name="ram" placeholder="Оперативна пам'ять в гб">*}
{*    <h3>Пам'ять</h3>*}
{*    <input type="number" name="storage" placeholder="Число гб">*}
{*    <h3>Операційна система</h3>*}
{*    <input type="text" name="oc" placeholder="Операційна система">*}
{*    <h3>Вміст батереї</h3>*}
{*    <input type="number" name="batery" placeholder="Число м/год">*}
{*    <h3>Колір</h3>*}
{*    <input type="text" name="color" placeholder="Колір">*}
{*    <h3>Ціна</h3>*}
{*    <input type="number" name="price" placeholder="Ціна">*}
{*    <h3>Опис</h3>*}
{*    <textarea name="discription" placeholder="Опис товара"></textarea>*}
{*    <h3>Додати Фото</h3>*}
{*    <input type="file" name="photo[]" multiple><br>*}
{*    <input type="submit" name="send" value="Додати">*}
{*</form>*}
<!DOCTYPE html>
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
                        {section loop = $categories name = k}
                            <option value="{$categories[k].id}">{$categories[k].name}</option>
                        {/section}
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

