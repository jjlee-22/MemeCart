@extends('layouts/app')

@section('content')
    <h1>Checkout</h1>
    <br>
    <h2>User Details</h2>
    {!! Form::open(['action' => ['CheckoutController@store'], 'method' => 'POST']) !!}
    <div class="row">
        <div class="form-group col-md-3">
            {{Form::label('firstname', 'First Name')}}
            {{Form::text('firstname', '', ['class' => 'form-control', 'placeholder' => ''])}}
        </div>
        <div class="form-group col-md-3">
            {{Form::label('lastname', 'Last Name')}}
            {{Form::text('lastname', '', ['class' => 'form-control', 'placeholder' => ''])}}
        </div>
        <div class="form-group col-lg-3">
            {{Form::label('email', 'Email')}}
            {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => ''])}}
        </div>
        <div class="form-group col-lg-3">
            {{Form::label('country', 'Country')}}
            {{Form::text('country', '', ['class' => 'form-control', 'placeholder' => ''])}}
        </div>
        <div class="form-group col-md-3">
            {{Form::label('address1', 'Address 1')}}
            {{Form::text('address1', '', ['class' => 'form-control', 'placeholder' => ''])}}
        </div>
        <div class="form-group col-md-3">
            {{Form::label('address2', 'Address 2')}}
            {{Form::text('address2', '', ['class' => 'form-control', 'placeholder' => ''])}}
        </div>
        <div class="form-group col-md-3">
            {{Form::label('city', 'City')}}
            {{Form::text('city', '', ['class' => 'form-control', 'placeholder' => ''])}}
        </div>
        <div class="form-group col-md-3">
            {{Form::label('postal', 'Postal')}}
            {{Form::text('postal', '', ['class' => 'form-control', 'placeholder' => ''])}}
        </div>
        <div class="form-group col-md-3">
            {{Form::label('region', 'Region/State')}}
            {{Form::text('region', '', ['class' => 'form-control', 'placeholder' => ''])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Continue', ['class'=>'btn btn-primary'])}}
    </div>
    {!! Form::close() !!}
    <br>
@endsection