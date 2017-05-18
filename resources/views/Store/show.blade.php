@extends('master')

@section('content')

<h2>{{ $store->title }}</h2>
<p> Plats: {{ $store->city }}</p>


<h3> Finns i dessa butiker: </h3>


@foreach ($store->products as $product)
  <div class="container">
    <a href="/products/{{ $product->id }}"><h2>{{ $product->title }}</h2><img src="{{ $product->image }}" onerror="this.src='http://i63.tinypic.com/2yoydms.png'"></a>
 </div>
@endforeach

@endsection
