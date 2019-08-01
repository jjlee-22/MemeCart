@extends('layouts/app')

@section('content')
    <h1>Shop Memes</h1>
    <h3>Categories</h3>
    <div class="row">
    @if(count($products) > 0)
		@foreach($products as $product)
			<div class="col-md-4">
                <div class="thumbnail">
                    <a href="/products/{{$product->id}}"><img style="width:100%" src="/storage/photos/{{$product->photo}}"></a>
                    <div class="caption" style="text-align:center">
                        <h3><a href="/products/{{$product->id}}">{{$product->category}}</a></h3>
                    </div>
                </div>
			</div>
        @endforeach
    </div>
	@else
		<p>No products founds</p>
	@endif
@endsection