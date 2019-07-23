@extends('layouts/app')

<!-- Style for index only -->
<link href="{{ asset('sass/index.scss') }}" rel="stylesheet">

@section('content')
<h1>{{$title}}</h1>
<p>{{$desc}}</p>
@endsection
