@extends('layouts/app')

@section('content')
	<h1>Memes</h1>
	@if(count($products) > 0)
		@foreach($products as $product)
			<div class="well">
                <h3><a href="/posts/{{$product->id}}">{{$product->name}}</a></h3>
                <h5>{{$product->price}}</h5>
				<small>Written on {{$product->created_at}}</small>
			</div>
		@endforeach
	@else
		<p>No products founds</p>
	@endif
@endsection