<!DOCTYPE html>
<html>
<head>
<title>My view</title>
</head>
<body>

    <ul>
        @foreach ($arr as $key => $elem)
        <li>{{ $key}} {{ $elem }}</li>
        @endforeach
    </ul>
    
</body>
</html>