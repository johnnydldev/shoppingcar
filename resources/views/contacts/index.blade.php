@extends('layouts.app')

@section('content')

<header>
</header>

<div class="container">
<div class="row">
@foreach ($contacts as $contact)
<div class="col-xs-12 col-sm-12 col-md-4">
<div class="card padding">

<h4 class="card-title"> 
<a href="/contacto/{{$contact->id}}">
{{$contact->email}}
</a>
</h4>
<h5 class="card-subtitle">
{{$contact->name}}
</h5>
<h5 class="card-subtitle">
{{$contact->lastname}}
</h5>

<p class="card-text"> 
{{$contact->description}} 
</p>
</div>
</div> 
@endforeach
</div>
<div class="actions text-center">

{{$contacts->links()}}
</div>
</div>
 @endsection