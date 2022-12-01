<!DOCTYPE html>
<html>
<head>
<title>My view</title>
</head>
<body>

    <ul>
	    @foreach ($arr as $elem)
		    <li>{{ $elem }}</li>
	    @endforeach
    </ul>

		<div>квадратный корень первого элемента:  {{ $arr[0]=sqrt(16) }}</div>
		<div>квадратный корень второго элемента: {{ $arr[1]=sqrt(36) }}</div>
        
</body>
</html>