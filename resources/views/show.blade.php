@extends('master')

@section('content')

<h1>{{ $product->title }}</h1>
<p>{{ $product->brand }}</p>
<p>{{ $product->price }}</p>

<p>{{ $product->description }}</p>
<img src="{{ $product->image }}" alt="{{ $product->title }}">

@endsection
