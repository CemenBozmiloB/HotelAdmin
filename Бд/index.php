<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script defer src="js.js"></script>
</head>
<body>
    <div method="post" class="vneshni">
        <div class="pipisok">
            <h1>Меню</h1>
            <ul class="pipisok-ul">
                <li id="pipisok-1" &action=delregistration class="pipisok-li">Номер</li>
                <li id="pipisok-2" class="pipisok-li">Комната</li>
                <li id="pipisok-3" class="pipisok-li">Регистрационная карточка</li>
            </ul>
        </div>
        <form method="post" class="pipisok-vvod pipisok-1">
        <input type="hidden" name="action" value="pipisok1">
                <h1>Номер</h1> 
                <div class="pipisok-pipiska"><input class="pipisok-input" type="text" name="floor"><p class="pipisok-p">Этаж</p></div>
                <div class="pipisok-pipiska"><input class="pipisok-input" type="text" name="typeap"><p class="pipisok-p">Тип Апартаментов</p></div>
                <div class="pipisok-pipiska"><input class="pipisok-input" type="text" name="numberrooms"><p class="pipisok-p">Количество комнат</p></div>
                <div class="pipisok-pipiska"><input class="pipisok-input" type="text" name="roomocc"><p class="pipisok-p">Занятость комнат</p></div>
                <button type="submit" class="btn_add">Добавить</button>
        </form>
        <form  method="post" class="pipisok-vvod pipisok-2">
        <input type="hidden" name="action" value="pipisok2">
                <h1>Комната</h1> 
                <div class="pipisok-pipiska"><input class="pipisok-input" type="text" name="numberseats"><p class="pipisok-p">Количество мест</p></div>
                <div class="pipisok-pipiska"><input class="pipisok-input" type="text" name="numberoccseats"><p class="pipisok-p">Количество занятых мест</p></div>
                <div class="pipisok-pipiska"><input class="pipisok-input" type="text" name="armorav"><p class="pipisok-p">Наличие брони</p></div>
                <div class="pipisok-pipiska"><input class="pipisok-input" type="text" name="phav"><p class="pipisok-p">Наличие телефона</p></div>
                <div class="pipisok-pipiska"><input class="pipisok-input" type="text" name="cost"><p class="pipisok-p">Стоимость</p></div>
                <button class="btn_add">Добавить</button>
        </form>
        <form  method="post" class="pipisok-vvod pipisok-3">
        <input type="hidden" name="action" value="pipisok3">
                <h1>Регистрационная карточка</h1> 
                <div class="pipisok-pipiska"><input class="pipisok-input" type="text" name="firstname"><p class="pipisok-p">Имя</p></div>
                <div class="pipisok-pipiska"><input class="pipisok-input" type="text" name="secondname"><p class="pipisok-p">Фамилия</p></div>
                <div class="pipisok-pipiska"><input class="pipisok-input" type="text" name="midlename"><p class="pipisok-p">Отчество</p></div>
                <div class="pipisok-pipiska"><input class="pipisok-input" type="text" name="passportseries"><p class="pipisok-p">Серия паспорта</p></div>
                <div class="pipisok-pipiska"><input class="pipisok-input" type="text" name="passportnumber"><p class="pipisok-p">Номер паспорта</p></div>
                <div class="pipisok-pipiska"><input class="pipisok-input" type="text" name="pasportregistration"><p class="pipisok-p">Регистрация в паспорте</p></div>
                <div class="pipisok-pipiska"><input class="pipisok-input" type="date" name="dateofbirth"><p class="pipisok-p">Дата рождения</p></div>
                <div class="pipisok-pipiska"><input class="pipisok-input" type="text" name="gender"><p class="pipisok-p">гендер</p></div>
                <div class="pipisok-pipiska"><input class="pipisok-input" type="text" name="telephone"><p class="pipisok-p">Телефон</p></div>
                <div class="pipisok-pipiska"><input class="pipisok-input" type="text" name="mail"><p class="pipisok-p">Почта</p></div>
                <button class="btn_add">Добавить</button>
        </form>
        <div class="include-php"><?php
    include "php.php";
    ?></div>
    </div>
</body>
</html>

