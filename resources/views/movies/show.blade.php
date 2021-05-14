<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Lista di tutti i film</title>
</head>
<body>
	<a href="{{route('movies.index')}}">Torna all'home page</a>
	<h1>{{$movie->title}}</h1>
	<h2>{{$movie->year}}</h2>
	<p>{{$movie->plot}}</p>

</body>
</html>