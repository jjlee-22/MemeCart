@extends('layouts/app_admin')

@section('content')
	<h1>Create Product</h1>
	{!! Form::open(['action' => 'AdminProductsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('description', 'Description')}}
            {{Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Description'])}}
        </div>
        <div class="form-group">
            {{Form::label('photo', 'Upload product image')}}
            {{Form::file('photo')}}
        </div>
        <div class="form-group">
            {{Form::label('price', 'Product pricing')}}<br>
            {{Form::number('price', '0.00')}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection