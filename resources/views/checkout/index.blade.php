@extends('layouts/app')

@section('content')
    <h1>Checkout</h1>
    <br>
    <h2>User Details</h2>
	{!! Form::open(['action' => ['CheckoutController@store'], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('firstname', 'First Name')}}
            {{Form::text('firstname', $order->title, ['class' => 'form-control', 'placeholder' => ''])}}
        </div>
        <div class="form-group">
            {{Form::label('lastname', 'Last Name')}}
            {{Form::text('lastname', $order->title, ['class' => 'form-control', 'placeholder' => ''])}}
        </div>
        <div class="form-group">
            {{Form::label('email', 'Email')}}
            {{Form::text('email', $order->title, ['class' => 'form-control', 'placeholder' => ''])}}
        </div>
        <div class="form-group">
            {{Form::label('country', 'Country')}}
            {{Form::text('country', $order->title, ['class' => 'form-control', 'placeholder' => ''])}}
        </div>
        <div class="form-group">
            {{Form::label('address1', 'Address 1')}}
            {{Form::text('address1', $order->title, ['class' => 'form-control', 'placeholder' => ''])}}
        </div>
        <div class="form-group">
            {{Form::label('address2', 'Address 2')}}
            {{Form::text('address2', $order->title, ['class' => 'form-control', 'placeholder' => ''])}}
        </div>
        <div class="form-group">
            {{Form::label('city', 'City')}}
            {{Form::text('city', $order->title, ['class' => 'form-control', 'placeholder' => ''])}}
        </div>
        <div class="form-group">
            {{Form::label('postal', 'Postal')}}
            {{Form::text('postal', $order->title, ['class' => 'form-control', 'placeholder' => ''])}}
        </div>
        <div class="form-group">
            {{Form::label('region', 'Region/State')}}
            {{Form::text('region', $order->title, ['class' => 'form-control', 'placeholder' => ''])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection