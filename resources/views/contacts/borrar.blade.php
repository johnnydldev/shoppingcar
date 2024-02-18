{!!Form::open(['method'=>'DELETE','route'=>['contacto.destroy',$contacts->id]]) !!}
<input type="submit" value="Eliminar Comentario" class="btn btn-danger">
{!! Form::close() !!}