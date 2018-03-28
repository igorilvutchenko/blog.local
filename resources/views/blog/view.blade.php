@extends('layout')

@section('content')

<div class="container">


        	<h1 style="text-align: center;">{{$article->title}} id={{$article->id}}</h1>
       		<p>{{$article->content}}</p>
        	<img>{{$article->image}}</img>



	Hello World!
@endsection