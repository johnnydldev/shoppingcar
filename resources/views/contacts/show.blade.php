@extends('layouts.app')
 @section('content')
 <div class="container">
    <div class="row justify-content-sm-center">
        <div class="col-xs-12 col-sm-10 col-md-6">
            <div class="card">
                <header class="padding text-center">
                    <div class="padding text-center bg-primary"></div>

                </header>
                             <div class="card-body">
                             <h4 class="card-title">{{$contact->email}}</h4>
                             <h4 class="card-title">{{$contact->name}}</h4>
                             <h4 class="card-subtitle">{{$contact->lastname}}</h4>
                             </header>
                             <p class="card-text"> {{$contact->description}} </p>
                             <div class="card-actions">
                             <a href="/contacts.edit" class="btn btn-success">Regresar</a>
                             <a href="/contacts.borrar" class="btn btn-warning">Eliminar</a>
                            </div>
                </div>
            </div>
        </div>
    </div>
 </div>
 @endsection