<!DOCTYPE html>
<html>
<head>
<title>My view</title>
</head>
<body>

@if ($m >= 3 and $m <= 5)
    весна

@elseif ($m >= 6 and $m <= 8)
	лето

@elseif ($m >= 9 and $m <= 11)
	осень
	
    @elseif ($m == 12)
    зима
    @elseif ($m == 1)
    зима
    @elseif ($m == 2)
    зима

@else
	не соответствует ни одному месяцу
@endif


</body>
</html>