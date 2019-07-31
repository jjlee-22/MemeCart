@extends('layouts/app')

@section('content')
	<a href="/products" class="btn btn-default">Go Back</a>
	<h1>{{$products->category}}</h1>
	<div class="row">
    @if(count($product_listing) > 0)
		@foreach($product_listing as $product)
			<div class="col-md-4">
				<img style="width:100%" class="img-rounded" src="/storage/photos/{{$product->photo}}">
				<h5>${{$product->price}}</h5>
				{!! Form::open(['action' => ['CartController@addToCart', $product->id, $product->name, 1, $product->price], 'method' => 'POST']) !!}
					{{ Form::submit('Add To Cart', ['class' => 'btn btn-primary']) }}
				{!! Form::close() !!}
			</div>
		@endforeach
	</div>
	@else
		<p>No products founds</p>
	@endif
@endsection