<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Выбор статьи по ID</title>
</head>
<body>
<div class="container">
    @foreach ($articles as $article)
    	@if($article['id'] == $id)
        	<h1 style="text-align: center;">{{$article->title}} id={{$article->id}}</h1>
       		<p>{{$article->content}}</p>
        	<img>{{$article->image}}</img>
        @endif
    @endforeach
</div>
</body>
</html>