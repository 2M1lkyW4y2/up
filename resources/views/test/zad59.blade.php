<!DOCTYPE html>
<html>
<head>
<title>My view</title>
</head>
<body>
        {{ $city?? 'Default' }}
        
        {{-- Пусть из действия в представление передается переменная $city (город).
        Выведите в представлении название города из этой переменной.
        Если же город не передан - пусть по умолчанию выведется город Москва --}}
</body>
</html>
