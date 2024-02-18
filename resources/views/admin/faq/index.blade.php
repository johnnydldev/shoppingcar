@extends('admin.app')
@section('content')
 <div class="app-title">
 <div>
 <h1><i class="fa fa-briefcase"></i>FAQs</h1>
 <p>Gestión de FAQs</p>
 </div>
 <a href="{{ route('admin.faq.create') }}" class="btn btn-primary pull-right">Agregar FAQ</a>
 </div>

 <div class="row">
 <div class="col-md-12">
 <div class="tile">
 <div class="tile-body">
 <table class="table table-hover table-bordered" id="sampleTable">
 <thead>
<tr>
 <th> # </th>
 <th> FAQ </th>
 <th> Descripción </th>
 <th> Respuesta </th>
 <th style="width:100px; min-width:100px;" class="text-center text-danger"><i class="fa fa-bolt"> </i></th>
 </tr>
</thead>
 <tbody>
@foreach($faqs as $faq)
 <tr>
 <td>{{ $faq->id }}</td>
 <td>{{ $faq->question }}</td>
 <td>{{ $faq->description }}</td>
 <td>{{ $faq->answer }}</td>
 <td class="text-center">
 <div class="btn-group" role="group" aria-label="Second group">
 <a href="{{ route('admin.faq.edit', $faq->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
 <a href="{{ route('admin.faq.destroy', $faq->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
 </div>
 </td>
 </tr>
 @endforeach
</tbody>
 </table>
 </div>
 </div>
 </div>
 </div>
@endsection
@push('scripts')
 <script type="text/javascript" src="{{ asset('backend/js/plugins/jquery.dataTables.min.js') }}"></script>
 <script type="text/javascript" src="{{ asset('backend/js/plugins/dataTables.bootstrap.min.js') }}"></script>
 <script type="text/javascript">$('#sampleTable').DataTable();</script>
@endpush