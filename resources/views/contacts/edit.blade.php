@extends('layouts.app') 
@section('content')
<div class="container">
     <div class="card padding">
<header> 
    <h4>Editar comentario </h4>
<p>{{$contact->name}} </p>

</header> 
@include('contacts.form')

        <div class="card-body">
        
        </div>
    </div>
</div> 
@endsection