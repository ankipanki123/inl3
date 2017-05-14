@extends('master')

@section('content')


<h1>Lägg till en ny produkt</h1>

<form action="/products" method="post">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Skriv titel på prdukten här...">
  </div>
  <div class="form-group">
    <label for="brand">Märke</label>
    <input type="text" class="form-control" id="brand" name="brand" placeholder="Skriv märke här...">
  </div>
  <div class="form-group">
    <label for="image">Länk till bild</label>
    <input type="text" class="form-control" id="image" name="image" placeholder="Skriv titel här...">
  </div>
  <div class="form-group">
    <label for="description">Info om produkten</label>
    <input type="text" class="form-control" id="description" name="description" placeholder="skriv info om produkten här...">
  </div>
  <div class="form-group">
    <label for="price">Pris</label>
    <input type="text" class="form-control" id="price" name="price" placeholder="skriv priset här...">
  </div>
  <input type="submit" value="Spara Produkt" class="btn btn-success">
</form>
