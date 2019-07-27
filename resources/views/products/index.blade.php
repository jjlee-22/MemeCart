@extends('layouts/app')

@section('content')
    <h1>Shop Memes</h1>
    @if(count($products) > 0)
		@foreach($products as $product)
			<div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="width:25%" src="/storage/photos/{{$product->photo}}">
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <h3><a href="/products/{{$product->id}}">{{$product->name}}</a></h3>
                    </div>
                </div>
			</div>
		@endforeach
	@else
		<p>No products founds</p>
	@endif
@endsection