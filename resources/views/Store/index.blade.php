@extends('master')

@section('content')

<h1>Affärer</h1>
<title>Affärer</title>
@if (session('status'))
  <div class="alert alert-success" role="alert">{{ session('status') }}</div>
@endif
<p>Här är en lista på Affärer:</p>
<ul>
@foreach($stores as $store)
  <p><a href= "stores/{{ $store->id}}">{{ $store->name }}, {{ $store->city}}</a></p></br>



  </li>
@endforeach
</ul>

@endsection
