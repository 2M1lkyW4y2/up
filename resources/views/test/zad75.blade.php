<!DOCTYPE html>
<html>
<head>
<title>My view</title>
</head>
<body>

    <ul>
        @foreach ($arr as $key => $elem)
        <li>{{ $key + 1}} {{ $elem }}</li>
        @endforeach
    </ul>
    
</body>
</html>