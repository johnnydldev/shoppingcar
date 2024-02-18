{!!Form::open(['route'=>[$faq->url(),$faq->id],'method'=>$faq->method(),'class'=>'app-form']) !!}
@csrf
</div>
 {!! Form::label('question', 'Pregunta Frecuente') !!}
 {!! Form::text('question', $faq->question, ['class'=>'form-control']) !!}
</div>
<div>
    {!! Form::label('description', 'Descripción') !!}
    {!! Form::textarea('description', $faq->description, ['class'=>'form-control']) !!}
   </div>
<div>
    {!! Form::label('answer', 'answer') !!}
    {!! Form::text('answer', $faq->answer, ['class'=>'form-control']) !!}
</div>
<div class="">
 <input type="submit" value="Guardar" class="btn btn-primary">
</div>
{!! Form::close()!!}