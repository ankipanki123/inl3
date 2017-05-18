
@extends('master')

@section('content')

<h1>Edit {{$product->title}}</h1>

<form action="/products/{{ $product->id }}" method="post">
  {{ method_field('PUT') }}
  {{ csrf_field() }}
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" value="{{ $product->title }}" placeholder="Add the title here...">
  </div>
  <div class="form-group">
    <label for="brand">brand</label>
    <input type="text" class="form-control" id="brand" name="brand" value="{{ $product->brand }}" placeholder="Add the developer here...">
  </div>
  <div class="form-group">
    <label for="image">Länk till bild</label>
    <input type="text" class="form-control" id="image" name="image" value="{{ $product->image }}" placeholder="Add the image here...">
  </div>

  <div class="form-group">
    <label for="description">Description</label>
    <input type="text" class="form-control" id="description" name="description" value="{{ $product->description }}" placeholder="Add the description here...">
  </div>
  <div class="form-group">
    <label for="price">Price</label>
    <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}" placeholder="Add the price here...">
  </div>
  <input type="submit" value="Save changes" class="btn btn-success">
</form>


@endsection
