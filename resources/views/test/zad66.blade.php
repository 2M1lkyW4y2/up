<!DOCTYPE html>
<html>
<head>
<title>My view</title>
</head>
<body>

        @if (is_array($arr))
        сумма: {{ $arr[0] + $arr[1] }}
        @else
            количество элментов равно нулю
        @endif

</body>
</html>