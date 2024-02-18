@extends('layouts.app')
@section('content')
<div class="container">
<div class="row justify-content-sm-center">
<div class="col-xs-12 col-sm-10 col-md-6">
<div class="card">
<header class="padding text-center">
<div class="padding text-center bg-primary"></div>
<img src={{asset('images/product.jfif')}} width="200"
height="180" class="mx-auto d-block">
</header>
<div class="card-body">
<h2 class="card-title">{{$product->name}}</h2>
<h4 class="card-subtitle">{{$product->price}}</h4>
</header>
<p class="card-text"> {{$product->description}} </p>
<div class="card-actions">
<a href="#" class="btn btn-success">Agregar al carrito</a>
<a href="/productos" class="btn btnwarning">Volver al catálogo</a>
{{--Este include debe ser colocado únicamente para realizar pruebas--}}
@include('products.delete')
</div>
</div>
</div>
</div>
</div>
</div>
@endsection