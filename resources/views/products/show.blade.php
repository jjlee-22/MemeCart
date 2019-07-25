@extends('layouts/app')

@section('content')
    <h1>{{$products->name}}</h1>
    @if(count($product_listing) > 0)
		@foreach($product_listing as $product)
			<div class="well">
                <h3>{{$product->name}}</h3>
                <h5>{{$product->price}}</h5>
			</div>
		@endforeach
	@else
		<p>No products founds</p>
	@endif
@endsection