<!DOCTYPE html>
<html>
<head>
<title>My view</title>
</head>
<body>

    <ul>
        @foreach ($arr as $elem)
            @if ($elem > 0)
                <li>{{ $elem }}</li>
            @endif
        @endforeach
    </ul>

</body>
</html>