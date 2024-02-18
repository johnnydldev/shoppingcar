@extends('layouts.app')
@section('content')
<div class="container">
<div class="card padding">
<header>
<h4>Editar producto </h4>
<p>{{$product->name}} </p>
</header>
@include('products.form')
<div class="card-body">
</div>
</div>
</div>
@endsection