@extends('layouts.app')
@section('content')
<div class="container">

<products-component></products-component>

{{--  <div class="row">
@foreach ($products as $product)
<div class="col-xs-12 col-sm-12 col-md-4">
<div class="card padding">
<header>
<h2 class="card-title">
<a href="/productos/{{$product->id}}">
{{$product->name}}
</a>
</h2>
<h4 class="card-subtitle">{{$product->slug}}</h4>
<h4 class="card-subtitle">{{$product->price}}</h4>
</header>
<p class="card-text"> {{$product->description}} </p>
</div>
</div>
@endforeach --}}
</div>  
<div class="actions text-center">
{{$products->links()}}
</div>
</div>
@endsection