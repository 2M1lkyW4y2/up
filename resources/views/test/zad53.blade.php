<!DOCTYPE html> 
<html> 
<head>
<title>My view</title> 
</head> 
<body> 
        <p>{{ $var1 }}</p>
        <p>{{ $var2 }}</p>
        <p>{{ $var3 }}</p> 

        <input value="{{ $var1 }}">
        <input value="{{ $var2 }}">
        <input value="{{ $var3 }}">

        {{-- Пусть в представлении даны 3 инпута. 
        Передайте из действия в представление 3 переменные, 
        значение которых запишите в атрибуты value наших инпутов. --}}
</body> 
</html>