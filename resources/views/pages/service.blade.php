@extends('layouts/app')

@section('content')
	<h1>{{$title}}</h1>
	@if(count($desc) > 0)
		<ul>
			@foreach($desc as $list)
				<li class="list-group-item">{{$list}}</li>
			@endforeach
		</ul>
	@endif
@endsection
