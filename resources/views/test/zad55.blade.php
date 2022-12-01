<!DOCTYPE html> 
<html> 
<head> 
        <link rel="stylesheet" href="/public/style.css">
<title>My view</title> 
</head> 
<body> 
        <p>{{ $text }}</p>
        <p>{{ $href }}</p>
        <a href="{{ $href }}">{{$text}}</a>
        
        {{-- Передаёт эти переменные в представление и формирует с их помощью HTML ссылку --}}
</body> 
</html>