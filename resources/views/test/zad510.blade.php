<!DOCTYPE html>
<html>
<head>
<title>My view</title>
</head>
<body>
        {{ $location["country"]?? 'Default' }}
        {{ $city?? 'Default' }}
        <!-- Пусть из действия в представление передается массив
         $location (местоположение) с ключами country (страна),
         city (город). Выведите каждый элемент этого массива в отдельном абзаце.
         Сделайте так, чтобы, если не задана страна, то по умолчанию вывелась
         Россия, а если не задан город, то по умолчанию вывелась Москва. -->
</body>
</html>
