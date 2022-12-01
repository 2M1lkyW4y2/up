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

		<div>квадрат первого элемента: {{ $arr[0] * $arr[0] }}</div>
		<div> квадрат второго элемента: {{ $arr[1] * $arr[1] }}</div>

</body>
</html>