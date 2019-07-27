@extends('layouts/app_admin')

@section('content')
<a href="/admin/posts" class="btn btn-default">Go Back</a>
	<h1>{{$post->title}}</h1>
	<img style="width:30%" src="/storage/cover_images/{{$post->cover_image}}">
	<br>
	<br>
	<div>
		{!!$post->body!!}
	</div>
	<hr>
	<small>Written on {{$post->created_at}}</small>
	<hr>
	<a href="{{$post->id}}/edit" class="btn btn-default">Edit</a>

	{!!Form::open(['action' => ['AdminPostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
		{{Form::hidden('_method', 'DELETE')}}
		{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
	{!!Form::close()!!}
@endsection