@extends('layout')

@section('content')
<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Пагинация</title>
</head>
<body> -->
	
<div class="container">
    @foreach($articles as $article)
        <h1 style="text-align: center;">{{$article->title}}</h1>
        <p>{{$article->content}}</p>
        <span>{{$article->image}}</span>
    @endforeach
</div>

 {{ $articles->links() }}
	
<!-- </body>
</html> -->

	Hello World!
@endsection