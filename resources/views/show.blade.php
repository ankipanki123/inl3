@extends('master')

@section('content')

<h1>{{ $product->title }}</h1>
<p>{{ $product->brand }}</p>
<p>{{ $product->price }}</p>
<form action="{{ $product->id }}" method="post" style="float:right">
   {{ method_field('DELETE') }}
   {{ csrf_field() }}
   <input type="submit" value="Delete game" class="btn btn-danger" style="float:right">
 </form>
 <form action="{{ $product->id }}/edit" method="get" style="float:right">
   <input type="submit" value="Edit game" class="btn btn-info" style="float:right">
 </form>

<p>{{ $product->description }}</p>
<img src="{{ $product->image }}" alt="{{ $product->title }}">
<h2> Reviews about this game </h2>
@foreach ($product->reviews as $review)
  <div class="container">
      <h3> {{ $review->name }} </h3>
      <h4> Score: {{ $review->grade }} </h4>
      <p> {{ $review->comment }} </p>
  </div>
@endforeach

@endsection
