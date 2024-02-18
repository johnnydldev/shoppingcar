{!!Form::open(['route'=>[$product->url(),$product->id],'method'=>$product->method(),'class'=>'app-form']) !!}
@csrf
<div>
{!! Form::label('name', 'Título del producto') !!}
{!! Form::text('name', $product->name, ['class'=>'form-control']) !!}
</div>
<div>
    {!! Form::label('slug', 'slug del producto') !!}
    {!! Form::text('slug', $product->slug, ['class'=>'form-control']) !!}
</div>
<div>
    {!! Form::label('price', 'Precio del producto') !!}
    {!! Form::number('price', $product->qty, ['class'=>'form-control']) !!}
</div>
<div>
    {!! Form::label('qty', 'cantidad del producto') !!}
    {!! Form::number('qty', $product->price, ['class'=>'form-control']) !!}
</div>
<div>
{!! Form::label('description', 'Descripción del producto') !!}
{!! Form::textarea('description', $product->description, ['class'=>'form-control']) !!}
</div>

<div class="">
<input type="submit" value="Guardar" class="btn btn-primary">
</div>
{!! Form::close()!!}