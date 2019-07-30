@extends('layouts/app')

@section('content')
	<a href="/products" class="btn btn-default">Go Back</a>
    <h1>{{$products->name}}</h1>
    @if(count($product_listing) > 0)
		@foreach($product_listing as $product)
			<div class="well">
                <h3>{{$product->name}}</h3>
				<h5>{{$product->price}}</h5>
				{!! Form::open(['action' => ['CartController@addToCart', $product->id, $product->name, 1, $product->price], 'method' => 'POST']) !!}
					{{ Form::submit('Add To Cart', ['class' => 'btn btn-primary']) }}
				{!! Form::close() !!}
			</div>
		@endforeach
	@else
		<p>No products founds</p>
	@endif
@endsection