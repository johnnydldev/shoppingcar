{!!Form::open(['route'=>[$contacts->url(),$contacts->id],'method'=>$contacts->method(),'class'=>'app-form']) !!}
@csrf
<div>
{!! Form::label('email', 'Email:') !!}
{!! Form::text('email', $contacts->email, ['class'=>'form-control']) !!}
</div>
<div>
{!! Form::label('name', 'Nombre:') !!}
{!! Form::text('name', $contacts->name, ['class'=>'form-control']) !!}
</div>
<div>
{!! Form::label('lastname', 'Apellidos:') !!}
{!! Form::text('lastname', $contacts->lastname, ['class'=>'form-control']) !!}
</div>
<div>
{!! Form::label('description', 'Descripción o Comentario') !!}
{!! Form::textarea('description', $contacts->description, ['class'=>'form-control']) !!}
</div>
<div class="">
<input type="submit" value="Enviar" class="btn btn-primary">
</div>
{!! Form::close()!!}