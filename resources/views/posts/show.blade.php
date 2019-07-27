@extends('layouts/app')

@section('content')
<a href="/posts" class="btn btn-default">Go Back</a>
	<h1>{{$post->title}}</h1>
	<img style="width:50%;" src="/storage/cover_images/{{$post->cover_image}}">
	<br>
	<br>
	<div>
		{!!$post->body!!}
	</div>
	<hr>
	<small>Written on {{$post->created_at}}</small>
	<hr>
@endsection