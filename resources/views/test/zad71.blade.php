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

</body>
</html>